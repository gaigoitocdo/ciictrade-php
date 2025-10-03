(function (win, $) {
    'use strict';

    if (!$) {
        return;
    }

    var productCache = [];
    var groupedByCid = {};
    var cidOrder = [];
    var containers = ['#show-list-div', '#show-list-div-for-chengjiaoe', '#show-heng-div'];
    var defaultIcon = '/tu/default.svg';
    var hasInitialFetch = false;

    function safeDecodePayload(payload) {
        if (!payload) {
            return null;
        }

        if (typeof payload !== 'string') {
            return payload;
        }

        var trimmed = payload.trim();
        if (!trimmed) {
            return null;
        }

        try {
            return JSON.parse(trimmed);
        } catch (err) {
            try {
                if (typeof Base64 !== 'undefined' && Base64 && typeof Base64.decode === 'function') {
                    return JSON.parse(Base64.decode(trimmed));
                }
            } catch (e) {
                console.error('Failed to decode Base64 payload', e);
            }

            try {
                if (typeof atob === 'function') {
                    return JSON.parse(atob(trimmed));
                }
            } catch (error) {
                console.error('Failed to decode payload via atob', error);
            }
        }

        return null;
    }

    function escapeHtml(text) {
        if (text === null || text === undefined) {
            return '';
        }

        return String(text)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#39;');
    }

    function formatNumber(value) {
        var num = parseFloat(value);
        if (!isFinite(num)) {
            return '--';
        }

        return num.toFixed(2);
    }

    function resolveIcon(item) {
        var candidates = [item.icon, item.image, item.img, item.logo, item.pic, item.picurl, item.image_url];
        for (var i = 0; i < candidates.length; i += 1) {
            var candidate = candidates[i];
            if (candidate && typeof candidate === 'string') {
                var trimmed = candidate.trim();
                if (trimmed && !/^javascript:/i.test(trimmed)) {
                    return trimmed;
                }
            }
        }
        return defaultIcon;
    }

    function buildRow(item) {
        var change = parseFloat(item.DiffRate);
        if (!isFinite(change)) {
            change = 0;
        }
        var changeText = (change > 0 ? '+' : '') + change.toFixed(2) + '%';
        var isUp = Number(item.isup) === 1;
        var isDown = Number(item.isup) === 0;
        var changeClass = isUp ? 'p3' : (isDown ? 'p4' : 'p2');
        var changeBg = isUp ? '#59bb5f' : (isDown ? '#ea4d3d' : '#90a2b0');

        var html = '';
        html += '<div class="Li" onclick="goToPage(' + encodeURIComponent(item.pid) + ')">';
        html += '  <div class="left">';
        html += '    <img src="' + escapeHtml(resolveIcon(item)) + '" alt="">';
        html += '    <div>';
        html += '      <p class="p1">' + escapeHtml(item.ptitle) + '</p>';
        var code = item.procode || item.symbol || '';
        html += '      <p class="p2">' + escapeHtml(code) + '</p>';
        html += '    </div>';
        html += '  </div>';
        html += '  <div class="center">';
        html += '    <p class="' + changeClass + '">' + formatNumber(item.Price) + '</p>';
        html += '    <p class="p2">' + escapeHtml(item.UpdateTime || '') + '</p>';
        html += '  </div>';
        html += '  <div class="right">';
        html += '    <div class="zf2" style="background:' + changeBg + ';">' + changeText + '</div>';
        html += '  </div>';
        html += '</div>';
        return html;
    }

    function groupProducts(data) {
        groupedByCid = {};
        cidOrder = [];

        data.forEach(function (item) {
            var cid = item.cid;
            if (cid === undefined || cid === null) {
                cid = 'unknown';
            }
            if (!groupedByCid[cid]) {
                groupedByCid[cid] = [];
                cidOrder.push(cid);
            }
            groupedByCid[cid].push(item);
        });

        cidOrder.sort(function (a, b) {
            var na = parseFloat(a);
            var nb = parseFloat(b);
            if (isFinite(na) && isFinite(nb)) {
                return na - nb;
            }
            return String(a).localeCompare(String(b));
        });
    }

    function refreshNavSummaries() {
        var navItems = $('#nav .Li');
        navItems.each(function (index, element) {
            var $element = $(element);
            var cid = cidOrder[index];
            $element.attr('data-cid', cid || '');

            var summary = '';
            if (cid && groupedByCid[cid] && groupedByCid[cid].length) {
                var first = groupedByCid[cid][0];
                var change = parseFloat(first.DiffRate);
                if (isFinite(change)) {
                    summary = (change > 0 ? '+' : '') + change.toFixed(2) + '%';
                }
            }
            $element.find('p').eq(1).text(summary);
        });
    }

    function renderByIndex(index) {
        var container = containers[index];
        if (!container) {
            return;
        }
        var cid = cidOrder[index];
        if (!cid || !groupedByCid[cid]) {
            $(container).empty();
            return;
        }
        getonedata(cid, container);
    }

    function normaliseData(raw) {
        if (!raw) {
            return [];
        }

        if (Array.isArray(raw)) {
            return raw;
        }

        if ($.isPlainObject(raw)) {
            var result = [];
            $.each(raw, function (key, value) {
                if (value) {
                    result.push(value);
                }
            });
            return result;
        }

        return [];
    }

    function renderAll() {
        groupProducts(productCache);
        refreshNavSummaries();
        for (var i = 0; i < containers.length; i += 1) {
            renderByIndex(i);
        }
    }

    function ajaxpro() {
        hasInitialFetch = true;
        var url = '/index/index/ajaxindexpro.html';
        $.get(url, function (response) {
            var parsed = safeDecodePayload(response);
            var data = normaliseData(parsed);
            if (!data.length) {
                console.warn('ajaxpro: empty product list');
                return;
            }
            productCache = data;
            renderAll();
        }).fail(function (xhr, status, error) {
            console.error('ajaxpro request failed', status, error);
        });
    }

    function getonedata(cid, container) {
        if (!cid || !groupedByCid[cid]) {
            if (container) {
                $(container).empty();
            }
            return;
        }

        var list = groupedByCid[cid];
        var html = '';
        for (var i = 0; i < list.length; i += 1) {
            html += buildRow(list[i]);
        }

        if (container) {
            $(container).html(html);
        }

        return html;
    }

    win.ajaxpro = ajaxpro;
    win.getonedata = getonedata;

    $(function () {
        if (!hasInitialFetch) {
            ajaxpro();
        }
        setInterval(ajaxpro, 60000);

        $('#nav .Li').on('click', function () {
            var index = $('#nav .Li').index(this);
            renderByIndex(index);
        });
    });
}(window, window.jQuery));
