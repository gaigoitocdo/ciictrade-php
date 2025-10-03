<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"/www/wwwroot/isetradingstar.com/application/index/view/user/index.html";i:1747627429;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0030)/tabs/my -->
<html lang="en" mode="md" class="plt-iphone plt-ios plt-mobile plt-mobileweb md hydrated">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<style data-styles="">
			ion-select-popover,
			ion-select,
			ion-select-option,
			ion-menu-button,
			ion-menu,
			ion-menu-toggle,
			ion-action-sheet,
			ion-fab-button,
			ion-fab,
			ion-fab-list,
			ion-refresher-content,
			ion-refresher,
			ion-alert,
			ion-back-button,
			ion-loading,
			ion-toast,
			ion-card,
			ion-card-content,
			ion-card-header,
			ion-card-subtitle,
			ion-card-title,
			ion-item-option,
			ion-item-options,
			ion-item-sliding,
			ion-infinite-scroll-content,
			ion-infinite-scroll,
			ion-reorder,
			ion-reorder-group,
			ion-segment-button,
			ion-segment,
			ion-tab-button,
			ion-tab-bar,
			ion-chip,
			ion-modal,
			ion-popover,
			ion-searchbar,
			ion-app,
			ion-buttons,
			ion-content,
			ion-footer,
			ion-header,
			ion-router-outlet,
			ion-title,
			ion-toolbar,
			ion-route,
			ion-route-redirect,
			ion-router,
			ion-router-link,
			ion-avatar,
			ion-badge,
			ion-thumbnail,
			ion-col,
			ion-grid,
			ion-row,
			ion-nav,
			ion-nav-link,
			ion-slide,
			ion-slides,
			ion-tab,
			ion-checkbox,
			ion-img,
			ion-input,
			ion-progress-bar,
			ion-range,
			ion-split-pane,
			ion-text,
			ion-textarea,
			ion-toggle,
			ion-virtual-scroll,
			ion-picker,
			ion-datetime,
			ion-picker-column,
			ion-radio,
			ion-radio-group,
			ion-spinner,
			ion-backdrop,
			ion-ripple-effect,
			ion-button,
			ion-icon,
			ion-item-divider,
			ion-item-group,
			ion-note,
			ion-skeleton-text,
			ion-item,
			ion-label,
			ion-list,
			ion-list-header {
				visibility: hidden
			}

			.hydrated {
				visibility: inherit
			}
		</style>
		<title><?php echo lang('wd'); ?></title>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="color-scheme" content="light dark">
		<meta name="viewport"
			content="viewport-fit=cover,width=device-width,height=device-height,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="msapplication-tap-highlight" content="no">
		<style>
			html.plt-mobile ion-app {
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none
			}

			html.plt-mobile ion-app [contenteditable] {
				-webkit-user-select: text;
				-moz-user-select: text;
				-ms-user-select: text;
				user-select: text
			}

			ion-app.force-statusbar-padding {
				--ion-safe-area-top: 20px
			}
		</style>
		<style>
			.item.sc-ion-label-md-h,
			.item .sc-ion-label-md-h {
				--color: initial;
				display: block;
				color: var(--color);
				font-family: var(--ion-font-family, inherit);
				font-size: inherit;
				text-overflow: ellipsis;
				white-space: nowrap;
				overflow: hidden;
				-webkit-box-sizing: border-box;
				box-sizing: border-box
			}

			.ion-color.sc-ion-label-md-h {
				color: var(--ion-color-base)
			}

			.ion-text-wrap.sc-ion-label-md-h,
			[text-wrap].sc-ion-label-md-h {
				white-space: normal
			}

			.item-interactive-disabled.sc-ion-label-md-h:not(.item-multiple-inputs),
			.item-interactive-disabled:not(.item-multiple-inputs) .sc-ion-label-md-h {
				cursor: default;
				opacity: 0.3;
				pointer-events: none
			}

			.item-input.sc-ion-label-md-h,
			.item-input .sc-ion-label-md-h {
				-ms-flex: initial;
				flex: initial;
				max-width: 200px;
				pointer-events: none
			}

			.item-textarea.sc-ion-label-md-h,
			.item-textarea .sc-ion-label-md-h {
				-ms-flex-item-align: baseline;
				align-self: baseline
			}

			.label-fixed.sc-ion-label-md-h {
				-ms-flex: 0 0 100px;
				flex: 0 0 100px;
				width: 100px;
				min-width: 100px;
				max-width: 200px
			}

			.label-stacked.sc-ion-label-md-h,
			.label-floating.sc-ion-label-md-h {
				margin-bottom: 0;
				-ms-flex-item-align: stretch;
				align-self: stretch;
				width: auto;
				max-width: 100%
			}

			.label-no-animate.label-floating.sc-ion-label-md-h {
				-webkit-transition: none;
				transition: none
			}

			.sc-ion-label-md-s h1,
			.sc-ion-label-md-s h2,
			.sc-ion-label-md-s h3,
			.sc-ion-label-md-s h4,
			.sc-ion-label-md-s h5,
			.sc-ion-label-md-s h6 {
				text-overflow: inherit;
				overflow: inherit
			}

			.ion-text-wrap.sc-ion-label-md-h,
			[text-wrap].sc-ion-label-md-h {
				line-height: 1.5
			}

			.label-stacked.sc-ion-label-md-h {
				-webkit-transform-origin: left top;
				transform-origin: left top;
				-webkit-transform: translateY(50%) scale(0.75);
				transform: translateY(50%) scale(0.75);
				-webkit-transition: color 150ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: color 150ms cubic-bezier(0.4, 0, 0.2, 1)
			}

			[dir=rtl].sc-ion-label-md-h -no-combinator.label-stacked.sc-ion-label-md-h,
			[dir=rtl] .sc-ion-label-md-h -no-combinator.label-stacked.sc-ion-label-md-h,
			[dir=rtl].label-stacked.sc-ion-label-md-h,
			[dir=rtl] .label-stacked.sc-ion-label-md-h {
				-webkit-transform-origin: right top;
				transform-origin: right top
			}

			.label-floating.sc-ion-label-md-h {
				-webkit-transform: translateY(96%);
				transform: translateY(96%);
				-webkit-transform-origin: left top;
				transform-origin: left top;
				-webkit-transition: color 150ms cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform 150ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: color 150ms cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform 150ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: color 150ms cubic-bezier(0.4, 0, 0.2, 1), transform 150ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: color 150ms cubic-bezier(0.4, 0, 0.2, 1), transform 150ms cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform 150ms cubic-bezier(0.4, 0, 0.2, 1)
			}

			[dir=rtl].sc-ion-label-md-h -no-combinator.label-floating.sc-ion-label-md-h,
			[dir=rtl] .sc-ion-label-md-h -no-combinator.label-floating.sc-ion-label-md-h,
			[dir=rtl].label-floating.sc-ion-label-md-h,
			[dir=rtl] .label-floating.sc-ion-label-md-h {
				-webkit-transform-origin: right top;
				transform-origin: right top
			}

			.label-stacked.sc-ion-label-md-h,
			.label-floating.sc-ion-label-md-h {
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 0
			}

			.item-has-focus.label-floating.sc-ion-label-md-h,
			.item-has-focus .label-floating.sc-ion-label-md-h,
			.item-has-placeholder.label-floating.sc-ion-label-md-h,
			.item-has-placeholder .label-floating.sc-ion-label-md-h,
			.item-has-value.label-floating.sc-ion-label-md-h,
			.item-has-value .label-floating.sc-ion-label-md-h {
				-webkit-transform: translateY(50%) scale(0.75);
				transform: translateY(50%) scale(0.75)
			}

			.item-has-focus.label-stacked.sc-ion-label-md-h:not(.ion-color),
			.item-has-focus .label-stacked.sc-ion-label-md-h:not(.ion-color),
			.item-has-focus.label-floating.sc-ion-label-md-h:not(.ion-color),
			.item-has-focus .label-floating.sc-ion-label-md-h:not(.ion-color) {
				color: var(--ion-color-primary, #3880ff)
			}

			.item-has-focus.ion-color.label-stacked.sc-ion-label-md-h:not(.ion-color),
			.item-has-focus.ion-color .label-stacked.sc-ion-label-md-h:not(.ion-color),
			.item-has-focus.ion-color.label-floating.sc-ion-label-md-h:not(.ion-color),
			.item-has-focus.ion-color .label-floating.sc-ion-label-md-h:not(.ion-color) {
				color: var(--ion-color-contrast)
			}

			.sc-ion-label-md-s h1 {
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 2px;
				font-size: 24px;
				font-weight: normal
			}

			.sc-ion-label-md-s h2 {
				margin-left: 0;
				margin-right: 0;
				margin-top: 2px;
				margin-bottom: 2px;
				font-size: 16px;
				font-weight: normal
			}

			.sc-ion-label-md-s h3,
			.sc-ion-label-md-s h4,
			.sc-ion-label-md-s h5,
			.sc-ion-label-md-s h6 {
				margin-left: 0;
				margin-right: 0;
				margin-top: 2px;
				margin-bottom: 2px;
				font-size: 14px;
				font-weight: normal;
				line-height: normal
			}

			.sc-ion-label-md-s p {
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 2px;
				font-size: 14px;
				line-height: 20px;
				text-overflow: inherit;
				overflow: inherit
			}

			.sc-ion-label-md-s>p {
				color: var(--ion-color-step-600, #666666)
			}

			.sc-ion-label-md-h.ion-color.sc-ion-label-md-s>p,
			.ion-color .sc-ion-label-md-h.sc-ion-label-md-s>p {
				color: inherit
			}
		</style>
		<style>
			.swiper-container {
				margin: 0 auto;
				position: relative;
				overflow: hidden;
				list-style: none;
				padding: 0;
				z-index: 1
			}

			.swiper-container-no-flexbox .swiper-slide {
				float: left
			}

			.swiper-container-vertical {
				height: 100%
			}

			.swiper-container-vertical>.swiper-wrapper {
				-webkit-box-orient: vertical;
				-webkit-box-direction: normal;
				-webkit-flex-direction: column;
				-ms-flex-direction: column;
				flex-direction: column
			}

			.swiper-wrapper {
				position: relative;
				width: 100%;
				height: 100%;
				z-index: 1;
				display: -webkit-box;
				display: -webkit-flex;
				display: -ms-flexbox;
				display: flex;
				-webkit-transition-property: -webkit-transform;
				transition-property: -webkit-transform;
				-o-transition-property: transform;
				transition-property: transform;
				transition-property: transform, -webkit-transform;
				-webkit-box-sizing: content-box;
				box-sizing: content-box
			}

			.swiper-container-android .swiper-slide,
			.swiper-wrapper {
				-webkit-transform: translate3d(0px, 0, 0);
				transform: translate3d(0px, 0, 0)
			}

			.swiper-container-multirow>.swiper-wrapper {
				-webkit-flex-wrap: wrap;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap
			}

			.swiper-container-free-mode>.swiper-wrapper {
				-webkit-transition-timing-function: ease-out;
				-o-transition-timing-function: ease-out;
				transition-timing-function: ease-out;
				margin: 0 auto
			}

			.swiper-slide {
				-webkit-flex-shrink: 0;
				-ms-flex-negative: 0;
				flex-shrink: 0;
				width: 100%;
				height: 100%;
				position: relative;
				-webkit-transition-property: -webkit-transform;
				transition-property: -webkit-transform;
				-o-transition-property: transform;
				transition-property: transform;
				transition-property: transform, -webkit-transform
			}

			.swiper-invisible-blank-slide {
				visibility: hidden
			}

			.swiper-container-autoheight,
			.swiper-container-autoheight .swiper-slide {
				height: auto
			}

			.swiper-container-autoheight .swiper-wrapper {
				-webkit-box-align: start;
				-webkit-align-items: flex-start;
				-ms-flex-align: start;
				align-items: flex-start;
				-webkit-transition-property: height, -webkit-transform;
				transition-property: height, -webkit-transform;
				-o-transition-property: transform, height;
				transition-property: transform, height;
				transition-property: transform, height, -webkit-transform
			}

			.swiper-container-3d {
				-webkit-perspective: 1200px;
				perspective: 1200px
			}

			.swiper-container-3d .swiper-wrapper,
			.swiper-container-3d .swiper-slide,
			.swiper-container-3d .swiper-slide-shadow-left,
			.swiper-container-3d .swiper-slide-shadow-right,
			.swiper-container-3d .swiper-slide-shadow-top,
			.swiper-container-3d .swiper-slide-shadow-bottom,
			.swiper-container-3d .swiper-cube-shadow {
				-webkit-transform-style: preserve-3d;
				transform-style: preserve-3d
			}

			.swiper-container-3d .swiper-slide-shadow-left,
			.swiper-container-3d .swiper-slide-shadow-right,
			.swiper-container-3d .swiper-slide-shadow-top,
			.swiper-container-3d .swiper-slide-shadow-bottom {
				position: absolute;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				pointer-events: none;
				z-index: 10
			}

			.swiper-container-3d .swiper-slide-shadow-left {
				background-image: -webkit-gradient(linear, right top, left top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
				background-image: -webkit-linear-gradient(right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
				background-image: -o-linear-gradient(right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
				background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0))
			}

			.swiper-container-3d .swiper-slide-shadow-right {
				background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
				background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
				background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
				background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0))
			}

			.swiper-container-3d .swiper-slide-shadow-top {
				background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
				background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
				background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
				background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0))
			}

			.swiper-container-3d .swiper-slide-shadow-bottom {
				background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0)));
				background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
				background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
				background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0))
			}

			.swiper-container-wp8-horizontal,
			.swiper-container-wp8-horizontal>.swiper-wrapper {
				-ms-touch-action: pan-y;
				touch-action: pan-y
			}

			.swiper-container-wp8-vertical,
			.swiper-container-wp8-vertical>.swiper-wrapper {
				-ms-touch-action: pan-x;
				touch-action: pan-x
			}

			.swiper-button-prev,
			.swiper-button-next {
				position: absolute;
				top: 50%;
				width: 27px;
				height: 44px;
				margin-top: -22px;
				z-index: 10;
				cursor: pointer;
				background-size: 27px 44px;
				background-position: center;
				background-repeat: no-repeat
			}

			.swiper-button-prev.swiper-button-disabled,
			.swiper-button-next.swiper-button-disabled {
				opacity: 0.35;
				cursor: auto;
				pointer-events: none
			}

			.swiper-button-prev,
			.swiper-container-rtl .swiper-button-next {
				background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
				left: 10px;
				right: auto
			}

			.swiper-button-next,
			.swiper-container-rtl .swiper-button-prev {
				background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
				right: 10px;
				left: auto
			}

			.swiper-button-prev.swiper-button-white,
			.swiper-container-rtl .swiper-button-next.swiper-button-white {
				background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")
			}

			.swiper-button-next.swiper-button-white,
			.swiper-container-rtl .swiper-button-prev.swiper-button-white {
				background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")
			}

			.swiper-button-prev.swiper-button-black,
			.swiper-container-rtl .swiper-button-next.swiper-button-black {
				background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")
			}

			.swiper-button-next.swiper-button-black,
			.swiper-container-rtl .swiper-button-prev.swiper-button-black {
				background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")
			}

			.swiper-button-lock {
				display: none
			}

			.swiper-pagination {
				position: absolute;
				text-align: center;
				-webkit-transition: 300ms opacity;
				-o-transition: 300ms opacity;
				transition: 300ms opacity;
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
				z-index: 10
			}

			.swiper-pagination.swiper-pagination-hidden {
				opacity: 0
			}

			.swiper-pagination-fraction,
			.swiper-pagination-custom,
			.swiper-container-horizontal>.swiper-pagination-bullets {
				bottom: 10px;
				left: 0;
				width: 100%
			}

			.swiper-pagination-bullets-dynamic {
				overflow: hidden;
				font-size: 0
			}

			.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
				-webkit-transform: scale(0.33);
				-ms-transform: scale(0.33);
				transform: scale(0.33);
				position: relative
			}

			.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active {
				-webkit-transform: scale(1);
				-ms-transform: scale(1);
				transform: scale(1)
			}

			.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
				-webkit-transform: scale(1);
				-ms-transform: scale(1);
				transform: scale(1)
			}

			.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
				-webkit-transform: scale(0.66);
				-ms-transform: scale(0.66);
				transform: scale(0.66)
			}

			.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
				-webkit-transform: scale(0.33);
				-ms-transform: scale(0.33);
				transform: scale(0.33)
			}

			.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
				-webkit-transform: scale(0.66);
				-ms-transform: scale(0.66);
				transform: scale(0.66)
			}

			.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
				-webkit-transform: scale(0.33);
				-ms-transform: scale(0.33);
				transform: scale(0.33)
			}

			.swiper-pagination-bullet {
				width: 8px;
				height: 8px;
				display: inline-block;
				border-radius: 100%;
				background: #000;
				opacity: 0.2
			}

			button.swiper-pagination-bullet {
				border: none;
				margin: 0;
				padding: 0;
				-webkit-box-shadow: none;
				box-shadow: none;
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none
			}

			.swiper-pagination-clickable .swiper-pagination-bullet {
				cursor: pointer
			}

			.swiper-pagination-bullet-active {
				opacity: 1;
				background: #007aff
			}

			.swiper-container-vertical>.swiper-pagination-bullets {
				right: 10px;
				top: 50%;
				-webkit-transform: translate3d(0px, -50%, 0);
				transform: translate3d(0px, -50%, 0)
			}

			.swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
				margin: 6px 0;
				display: block
			}

			.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
				top: 50%;
				-webkit-transform: translateY(-50%);
				-ms-transform: translateY(-50%);
				transform: translateY(-50%);
				width: 8px
			}

			.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
				display: inline-block;
				-webkit-transition: 200ms top, 200ms -webkit-transform;
				transition: 200ms top, 200ms -webkit-transform;
				-o-transition: 200ms transform, 200ms top;
				transition: 200ms transform, 200ms top;
				transition: 200ms transform, 200ms top, 200ms -webkit-transform
			}

			.swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
				margin: 0 4px
			}

			.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
				left: 50%;
				-webkit-transform: translateX(-50%);
				-ms-transform: translateX(-50%);
				transform: translateX(-50%);
				white-space: nowrap
			}

			.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
				-webkit-transition: 200ms left, 200ms -webkit-transform;
				transition: 200ms left, 200ms -webkit-transform;
				-o-transition: 200ms transform, 200ms left;
				transition: 200ms transform, 200ms left;
				transition: 200ms transform, 200ms left, 200ms -webkit-transform
			}

			.swiper-container-horizontal.swiper-container-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
				-webkit-transition: 200ms right, 200ms -webkit-transform;
				transition: 200ms right, 200ms -webkit-transform;
				-o-transition: 200ms transform, 200ms right;
				transition: 200ms transform, 200ms right;
				transition: 200ms transform, 200ms right, 200ms -webkit-transform
			}

			.swiper-pagination-progressbar {
				background: rgba(0, 0, 0, 0.25);
				position: absolute
			}

			.swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
				background: #007aff;
				position: absolute;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				-webkit-transform: scale(0);
				-ms-transform: scale(0);
				transform: scale(0);
				-webkit-transform-origin: left top;
				-ms-transform-origin: left top;
				transform-origin: left top
			}

			.swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
				-webkit-transform-origin: right top;
				-ms-transform-origin: right top;
				transform-origin: right top
			}

			.swiper-container-horizontal>.swiper-pagination-progressbar,
			.swiper-container-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
				width: 100%;
				height: 4px;
				left: 0;
				top: 0
			}

			.swiper-container-vertical>.swiper-pagination-progressbar,
			.swiper-container-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
				width: 4px;
				height: 100%;
				left: 0;
				top: 0
			}

			.swiper-pagination-white .swiper-pagination-bullet-active {
				background: #ffffff
			}

			.swiper-pagination-progressbar.swiper-pagination-white {
				background: rgba(255, 255, 255, 0.25)
			}

			.swiper-pagination-progressbar.swiper-pagination-white .swiper-pagination-progressbar-fill {
				background: #ffffff
			}

			.swiper-pagination-black .swiper-pagination-bullet-active {
				background: #000000
			}

			.swiper-pagination-progressbar.swiper-pagination-black {
				background: rgba(0, 0, 0, 0.25)
			}

			.swiper-pagination-progressbar.swiper-pagination-black .swiper-pagination-progressbar-fill {
				background: #000000
			}

			.swiper-pagination-lock {
				display: none
			}

			.swiper-scrollbar {
				border-radius: 10px;
				position: relative;
				-ms-touch-action: none;
				background: rgba(0, 0, 0, 0.1)
			}

			.swiper-container-horizontal>.swiper-scrollbar {
				position: absolute;
				left: 1%;
				bottom: 3px;
				z-index: 50;
				height: 5px;
				width: 98%
			}

			.swiper-container-vertical>.swiper-scrollbar {
				position: absolute;
				right: 3px;
				top: 1%;
				z-index: 50;
				width: 5px;
				height: 98%
			}

			.swiper-scrollbar-drag {
				height: 100%;
				width: 100%;
				position: relative;
				background: rgba(0, 0, 0, 0.5);
				border-radius: 10px;
				left: 0;
				top: 0
			}

			.swiper-scrollbar-cursor-drag {
				cursor: move
			}

			.swiper-scrollbar-lock {
				display: none
			}

			.swiper-zoom-container {
				width: 100%;
				height: 100%;
				display: -webkit-box;
				display: -webkit-flex;
				display: -ms-flexbox;
				display: flex;
				-webkit-box-pack: center;
				-webkit-justify-content: center;
				-ms-flex-pack: center;
				justify-content: center;
				-webkit-box-align: center;
				-webkit-align-items: center;
				-ms-flex-align: center;
				align-items: center;
				text-align: center
			}

			.swiper-zoom-container>img,
			.swiper-zoom-container>svg,
			.swiper-zoom-container>canvas {
				max-width: 100%;
				max-height: 100%;
				-o-object-fit: contain;
				object-fit: contain
			}

			.swiper-slide-zoomed {
				cursor: move
			}

			.swiper-lazy-preloader {
				width: 42px;
				height: 42px;
				position: absolute;
				left: 50%;
				top: 50%;
				margin-left: -21px;
				margin-top: -21px;
				z-index: 10;
				-webkit-transform-origin: 50%;
				-ms-transform-origin: 50%;
				transform-origin: 50%;
				-webkit-animation: swiper-preloader-spin 1s steps(12, end) infinite;
				animation: swiper-preloader-spin 1s steps(12, end) infinite
			}

			.swiper-lazy-preloader:after {
				display: block;
				content: "";
				width: 100%;
				height: 100%;
				background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
				background-position: 50%;
				background-size: 100%;
				background-repeat: no-repeat
			}

			.swiper-lazy-preloader-white:after {
				background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E")
			}

			@-webkit-keyframes swiper-preloader-spin {
				100% {
					-webkit-transform: rotate(360deg);
					transform: rotate(360deg)
				}
			}

			@keyframes swiper-preloader-spin {
				100% {
					-webkit-transform: rotate(360deg);
					transform: rotate(360deg)
				}
			}

			.swiper-container .swiper-notification {
				position: absolute;
				left: 0;
				top: 0;
				pointer-events: none;
				opacity: 0;
				z-index: -1000
			}

			.swiper-container-fade.swiper-container-free-mode .swiper-slide {
				-webkit-transition-timing-function: ease-out;
				-o-transition-timing-function: ease-out;
				transition-timing-function: ease-out
			}

			.swiper-container-fade .swiper-slide {
				pointer-events: none;
				-webkit-transition-property: opacity;
				-o-transition-property: opacity;
				transition-property: opacity
			}

			.swiper-container-fade .swiper-slide .swiper-slide {
				pointer-events: none
			}

			.swiper-container-fade .swiper-slide-active,
			.swiper-container-fade .swiper-slide-active .swiper-slide-active {
				pointer-events: auto
			}

			.swiper-container-cube {
				overflow: visible
			}

			.swiper-container-cube .swiper-slide {
				pointer-events: none;
				-webkit-backface-visibility: hidden;
				backface-visibility: hidden;
				z-index: 1;
				visibility: hidden;
				-webkit-transform-origin: 0 0;
				-ms-transform-origin: 0 0;
				transform-origin: 0 0;
				width: 100%;
				height: 100%
			}

			.swiper-container-cube .swiper-slide .swiper-slide {
				pointer-events: none
			}

			.swiper-container-cube.swiper-container-rtl .swiper-slide {
				-webkit-transform-origin: 100% 0;
				-ms-transform-origin: 100% 0;
				transform-origin: 100% 0
			}

			.swiper-container-cube .swiper-slide-active,
			.swiper-container-cube .swiper-slide-active .swiper-slide-active {
				pointer-events: auto
			}

			.swiper-container-cube .swiper-slide-active,
			.swiper-container-cube .swiper-slide-next,
			.swiper-container-cube .swiper-slide-prev,
			.swiper-container-cube .swiper-slide-next+.swiper-slide {
				pointer-events: auto;
				visibility: visible
			}

			.swiper-container-cube .swiper-slide-shadow-top,
			.swiper-container-cube .swiper-slide-shadow-bottom,
			.swiper-container-cube .swiper-slide-shadow-left,
			.swiper-container-cube .swiper-slide-shadow-right {
				z-index: 0;
				-webkit-backface-visibility: hidden;
				backface-visibility: hidden
			}

			.swiper-container-cube .swiper-cube-shadow {
				position: absolute;
				left: 0;
				bottom: 0px;
				width: 100%;
				height: 100%;
				background: #000;
				opacity: 0.6;
				-webkit-filter: blur(50px);
				filter: blur(50px);
				z-index: 0
			}

			.swiper-container-flip {
				overflow: visible
			}

			.swiper-container-flip .swiper-slide {
				pointer-events: none;
				-webkit-backface-visibility: hidden;
				backface-visibility: hidden;
				z-index: 1
			}

			.swiper-container-flip .swiper-slide .swiper-slide {
				pointer-events: none
			}

			.swiper-container-flip .swiper-slide-active,
			.swiper-container-flip .swiper-slide-active .swiper-slide-active {
				pointer-events: auto
			}

			.swiper-container-flip .swiper-slide-shadow-top,
			.swiper-container-flip .swiper-slide-shadow-bottom,
			.swiper-container-flip .swiper-slide-shadow-left,
			.swiper-container-flip .swiper-slide-shadow-right {
				z-index: 0;
				-webkit-backface-visibility: hidden;
				backface-visibility: hidden
			}

			.swiper-container-coverflow .swiper-wrapper {
				-ms-perspective: 1200px
			}

			ion-slides {
				display: block;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none
			}

			.swiper-pagination-bullet {
				background: var(--bullet-background)
			}

			.swiper-pagination-bullet-active {
				background: var(--bullet-background-active)
			}

			.swiper-pagination-progressbar {
				background: var(--progress-bar-background)
			}

			.swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
				background: var(--progress-bar-background-active)
			}

			.swiper-scrollbar {
				background: var(--scroll-bar-background)
			}

			.swiper-scrollbar-drag {
				background: var(--scroll-bar-background-active)
			}

			.slides-md {
				--bullet-background: var(--ion-color-step-200, #cccccc);
				--bullet-background-active: var(--ion-color-primary, #3880ff);
				--progress-bar-background: rgba(var(--ion-text-color-rgb, 0, 0, 0), 0.25);
				--progress-bar-background-active: var(--ion-color-primary-shade, #3171e0);
				--scroll-bar-background: rgba(var(--ion-text-color-rgb, 0, 0, 0), 0.1);
				--scroll-bar-background-active: rgba(var(--ion-text-color-rgb, 0, 0, 0), 0.5)
			}
		</style>
		<style>
			ion-slide {
				display: block;
				width: 100%;
				height: 100%
			}

			.slide-zoom {
				display: block;
				width: 100%;
				text-align: center
			}

			.swiper-slide {
				display: -ms-flexbox;
				display: flex;
				position: relative;
				-ms-flex-negative: 0;
				flex-shrink: 0;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: center;
				justify-content: center;
				width: 100%;
				height: 100%;
				font-size: 18px;
				text-align: center;
				-webkit-box-sizing: border-box;
				box-sizing: border-box
			}

			.swiper-slide img {
				width: auto;
				max-width: 100%;
				height: auto;
				max-height: 100%
			}
			.hydrated {
    visibility: inherit;
    float: left;
    width: 100%;
}
		</style>
		<style>
			ion-list {
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 0;
				padding-left: 0;
				padding-right: 0;
				padding-top: 0;
				padding-bottom: 0;
				display: block;
				contain: content;
				list-style-type: none
			}

			ion-list.list-inset {
				-webkit-transform: translateZ(0);
				transform: translateZ(0);
				overflow: hidden
			}

			.list-md {
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 0;
				padding-left: 0;
				padding-right: 0;
				padding-top: 8px;
				padding-bottom: 8px;
				background: var(--ion-item-background, var(--ion-background-color, #fff))
			}

			.list-md>.input:last-child::after {
				left: 0
			}

			[dir=rtl] .list-md>.input:last-child::after,
			:host-context([dir=rtl]) .list-md>.input:last-child::after {
				left: unset;
				right: unset;
				right: 0
			}

			.list-md.list-inset {
				margin-left: 16px;
				margin-right: 16px;
				margin-top: 16px;
				margin-bottom: 16px;
				border-radius: 2px
			}

			@supports ((-webkit-margin-start: 0) or (margin-inline-start: 0)) or (-webkit-margin-start: 0) {
				.list-md.list-inset {
					margin-left: unset;
					margin-right: unset;
					-webkit-margin-start: 16px;
					margin-inline-start: 16px;
					-webkit-margin-end: 16px;
					margin-inline-end: 16px
				}
			}

			.list-md.list-inset ion-item:first-child {
				--border-radius: 2px 2px 0 0;
				--border-width: 0 0 1px 0
			}

			.list-md.list-inset ion-item:last-child {
				--border-radius: 0 0 2px, 2px;
				--border-width: 0
			}

			.list-md.list-inset .item-interactive {
				--padding-start: 0;
				--padding-end: 0
			}

			.list-md.list-inset+ion-list.list-inset {
				margin-top: 0
			}

			.list-md-lines-none .item {
				--border-width: 0;
				--inner-border-width: 0
			}

			.list-md-lines-full .item,
			.list-md .item-lines-full {
				--border-width: 0 0 1px 0
			}

			.list-md-lines-full .item {
				--inner-border-width: 0
			}

			.list-md-lines-inset .item,
			.list-md .item-lines-inset {
				--inner-border-width: 0 0 1px 0
			}

			.list-md .item-lines-inset {
				--border-width: 0
			}

			.list-md .item-lines-full {
				--inner-border-width: 0
			}

			.list-md .item-lines-none {
				--border-width: 0;
				--inner-border-width: 0
			}

			ion-card .list-md {
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 0
			}
		</style>
		<style>
			ion-header {
				display: block;
				position: relative;
				-ms-flex-order: -1;
				order: -1;
				width: 100%;
				z-index: 10
			}

			ion-header ion-toolbar:first-of-type {
				padding-top: var(--ion-safe-area-top, 0)
			}

			.header-md::after {
				left: 0;
				bottom: -5px;
				background-position: left 0 top -2px;
				position: absolute;
				width: 100%;
				height: 5px;
				background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAHBAMAAADzDtBxAAAAD1BMVEUAAAAAAAAAAAAAAAAAAABPDueNAAAABXRSTlMUCS0gBIh/TXEAAAAaSURBVAjXYxCEAgY4UIICBmMogMsgFLtAAQCNSwXZKOdPxgAAAABJRU5ErkJggg==);
				background-repeat: repeat-x;
				content: ""
			}

			[dir=rtl] .header-md::after,
			:host-context([dir=rtl]) .header-md::after {
				left: unset;
				right: unset;
				right: 0
			}

			[dir=rtl] .header-md::after,
			:host-context([dir=rtl]) .header-md::after {
				background-position: right 0 top -2px
			}

			.header-collapse-condense {
				display: none
			}

			.header-md.ion-no-border::after {
				display: none
			}
		</style>
		<style>
			.sc-ion-buttons-md-h {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-align: center;
				align-items: center;
				-webkit-transform: translateZ(0);
				transform: translateZ(0);
				z-index: 99
			}

			.sc-ion-buttons-md-s ion-button {
				--padding-top: 0;
				--padding-bottom: 0;
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 0
			}

			.sc-ion-buttons-md-s ion-button {
				--padding-top: 0;
				--padding-bottom: 0;
				--padding-start: 8px;
				--padding-end: 8px;
				--box-shadow: none;
				margin-left: 2px;
				margin-right: 2px;
				height: 32px;
				font-size: 14px;
				font-weight: 500
			}

			@supports ((-webkit-margin-start: 0) or (margin-inline-start: 0)) or (-webkit-margin-start: 0) {
				.sc-ion-buttons-md-s ion-button {
					margin-left: unset;
					margin-right: unset;
					-webkit-margin-start: 2px;
					margin-inline-start: 2px;
					-webkit-margin-end: 2px;
					margin-inline-end: 2px
				}
			}

			.sc-ion-buttons-md-s ion-button:not(.button-round) {
				--border-radius: 2px
			}

			.sc-ion-buttons-md-h.ion-color.sc-ion-buttons-md-s .button,
			.ion-color .sc-ion-buttons-md-h.sc-ion-buttons-md-s .button {
				--color: initial;
				--color-focused: var(--ion-color-contrast);
				--color-hover: var(--ion-color-contrast);
				--background-activated: transparent;
				--background-focused: var(--ion-color-contrast);
				--background-hover: var(--ion-color-contrast)
			}

			.sc-ion-buttons-md-h.ion-color.sc-ion-buttons-md-s .button-solid,
			.ion-color .sc-ion-buttons-md-h.sc-ion-buttons-md-s .button-solid {
				--background: var(--ion-color-contrast);
				--background-activated: transparent;
				--background-focused: var(--ion-color-shade);
				--background-hover: var(--ion-color-base);
				--color: var(--ion-color-base);
				--color-focused: var(--ion-color-base);
				--color-hover: var(--ion-color-base)
			}

			.sc-ion-buttons-md-h.ion-color.sc-ion-buttons-md-s .button-outline,
			.ion-color .sc-ion-buttons-md-h.sc-ion-buttons-md-s .button-outline {
				--border-color: var(--ion-color-contrast)
			}

			.sc-ion-buttons-md-s .button-has-icon-only.button-clear {
				--padding-top: 12px;
				--padding-end: 12px;
				--padding-bottom: 12px;
				--padding-start: 12px;
				--border-radius: 50%;
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 0;
				width: 48px;
				height: 48px
			}

			.sc-ion-buttons-md-s .button {
				--background-hover: currentColor
			}

			.sc-ion-buttons-md-s .button-solid {
				--color: var(--ion-toolbar-background, var(--ion-background-color, #fff));
				--background: var(--ion-toolbar-color, var(--ion-text-color, #424242));
				--background-activated: transparent;
				--background-focused: currentColor
			}

			.sc-ion-buttons-md-s .button-outline {
				--color: initial;
				--background: transparent;
				--background-activated: transparent;
				--background-focused: currentColor;
				--background-hover: currentColor;
				--border-color: currentColor
			}

			.sc-ion-buttons-md-s .button-clear {
				--color: initial;
				--background: transparent;
				--background-activated: transparent;
				--background-focused: currentColor;
				--background-hover: currentColor
			}

			.sc-ion-buttons-md-s ion-icon[slot=start] {
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 0;
				margin-right: 0.3em;
				font-size: 1.4em
			}

			@supports ((-webkit-margin-start: 0) or (margin-inline-start: 0)) or (-webkit-margin-start: 0) {
				.sc-ion-buttons-md-s ion-icon[slot=start] {
					margin-right: unset;
					-webkit-margin-end: 0.3em;
					margin-inline-end: 0.3em
				}
			}

			.sc-ion-buttons-md-s ion-icon[slot=end] {
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 0;
				margin-left: 0.4em;
				font-size: 1.4em
			}

			@supports ((-webkit-margin-start: 0) or (margin-inline-start: 0)) or (-webkit-margin-start: 0) {
				.sc-ion-buttons-md-s ion-icon[slot=end] {
					margin-left: unset;
					-webkit-margin-start: 0.4em;
					margin-inline-start: 0.4em
				}
			}

			.sc-ion-buttons-md-s ion-icon[slot=icon-only] {
				padding-left: 0;
				padding-right: 0;
				padding-top: 0;
				padding-bottom: 0;
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 0;
				font-size: 1.8em
			}
		</style>
		<style>
			.sc-ion-input-md-h {
				--placeholder-color: initial;
				--placeholder-font-style: initial;
				--placeholder-font-weight: initial;
				--placeholder-opacity: .5;
				--padding-top: 0;
				--padding-end: 0;
				--padding-bottom: 0;
				--padding-start: 0;
				--background: transparent;
				--color: initial;
				display: -ms-flexbox;
				display: flex;
				position: relative;
				-ms-flex: 1;
				flex: 1;
				-ms-flex-align: center;
				align-items: center;
				width: 100%;
				padding: 0 !important;
				background: var(--background);
				color: var(--color);
				font-family: var(--ion-font-family, inherit);
				z-index: 2
			}

			ion-item.sc-ion-input-md-h:not(.item-label),
			ion-item:not(.item-label) .sc-ion-input-md-h {
				--padding-start: 0
			}

			.ion-color.sc-ion-input-md-h {
				color: var(--ion-color-base)
			}

			.native-input.sc-ion-input-md {
				border-radius: var(--border-radius);
				padding-left: var(--padding-start);
				padding-right: var(--padding-end);
				padding-top: var(--padding-top);
				padding-bottom: var(--padding-bottom);
				font-family: inherit;
				font-size: inherit;
				font-style: inherit;
				font-weight: inherit;
				letter-spacing: inherit;
				text-decoration: inherit;
				text-indent: inherit;
				text-overflow: inherit;
				text-transform: inherit;
				text-align: inherit;
				white-space: inherit;
				color: inherit;
				display: inline-block;
				-ms-flex: 1;
				flex: 1;
				width: 100%;
				max-width: 100%;
				max-height: 100%;
				border: 0;
				outline: none;
				background: transparent;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none
			}

			@supports ((-webkit-margin-start: 0) or (margin-inline-start: 0)) or (-webkit-margin-start: 0) {
				.native-input.sc-ion-input-md {
					padding-left: unset;
					padding-right: unset;
					-webkit-padding-start: var(--padding-start);
					padding-inline-start: var(--padding-start);
					-webkit-padding-end: var(--padding-end);
					padding-inline-end: var(--padding-end)
				}
			}

			.native-input.sc-ion-input-md::-webkit-input-placeholder {
				color: var(--placeholder-color);
				font-family: inherit;
				font-style: var(--placeholder-font-style);
				font-weight: var(--placeholder-font-weight);
				opacity: var(--placeholder-opacity)
			}

			.native-input.sc-ion-input-md::-moz-placeholder {
				color: var(--placeholder-color);
				font-family: inherit;
				font-style: var(--placeholder-font-style);
				font-weight: var(--placeholder-font-weight);
				opacity: var(--placeholder-opacity)
			}

			.native-input.sc-ion-input-md:-ms-input-placeholder {
				color: var(--placeholder-color);
				font-family: inherit;
				font-style: var(--placeholder-font-style);
				font-weight: var(--placeholder-font-weight);
				opacity: var(--placeholder-opacity)
			}

			.native-input.sc-ion-input-md::-ms-input-placeholder {
				color: var(--placeholder-color);
				font-family: inherit;
				font-style: var(--placeholder-font-style);
				font-weight: var(--placeholder-font-weight);
				opacity: var(--placeholder-opacity)
			}

			.native-input.sc-ion-input-md::placeholder {
				color: var(--placeholder-color);
				font-family: inherit;
				font-style: var(--placeholder-font-style);
				font-weight: var(--placeholder-font-weight);
				opacity: var(--placeholder-opacity)
			}

			.native-input.sc-ion-input-md:-webkit-autofill {
				background-color: transparent
			}

			.native-input.sc-ion-input-md:invalid {
				-webkit-box-shadow: none;
				box-shadow: none
			}

			.native-input.sc-ion-input-md::-ms-clear {
				display: none
			}

			.native-input[disabled].sc-ion-input-md {
				opacity: 0.4
			}

			.cloned-input.sc-ion-input-md {
				left: 0;
				top: 0;
				position: absolute;
				pointer-events: none
			}

			[dir=rtl].sc-ion-input-md .cloned-input.sc-ion-input-md,
			[dir=rtl].sc-ion-input-md-h .cloned-input.sc-ion-input-md,
			[dir=rtl] .sc-ion-input-md-h .cloned-input.sc-ion-input-md {
				left: unset;
				right: unset;
				right: 0
			}

			.input-clear-icon.sc-ion-input-md {
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 0;
				padding-left: 0;
				padding-right: 0;
				padding-top: 0;
				padding-bottom: 0;
				background-position: center;
				border: 0;
				outline: none;
				background-color: transparent;
				background-repeat: no-repeat;
				visibility: hidden;
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none
			}

			.input-clear-icon.sc-ion-input-md:focus {
				opacity: 0.5
			}

			.has-value.sc-ion-input-md-h .input-clear-icon.sc-ion-input-md {
				visibility: visible
			}

			.has-focus.sc-ion-input-md-h {
				pointer-events: none
			}

			.has-focus.sc-ion-input-md-h input.sc-ion-input-md,
			.has-focus.sc-ion-input-md-h a.sc-ion-input-md,
			.has-focus.sc-ion-input-md-h button.sc-ion-input-md {
				pointer-events: auto
			}

			.sc-ion-input-md-h {
				--padding-top: 10px;
				--padding-end: 0;
				--padding-bottom: 10px;
				--padding-start: 8px;
				font-size: inherit
			}

			.item-label-stacked.sc-ion-input-md-h,
			.item-label-stacked .sc-ion-input-md-h,
			.item-label-floating.sc-ion-input-md-h,
			.item-label-floating .sc-ion-input-md-h {
				--padding-top: 8px;
				--padding-bottom: 8px;
				--padding-start: 0
			}

			.input-clear-icon.sc-ion-input-md {
				background-image: url("data:image/svg+xml;charset=utf-8,<svg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20512%20512'><polygon%20fill='var(--ion-color-step-600,%20%23666666)'%20points='405,136.798%20375.202,107%20256,226.202%20136.798,107%20107,136.798%20226.202,256%20107,375.202%20136.798,405%20256,285.798%20375.202,405%20405,375.202%20285.798,256'/></svg>");
				width: 30px;
				height: 30px;
				background-size: 22px
			}
		</style>
		<link href="/static/index/user/text-security-disc.css" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" type="image/png" href="/favicon.ico">
		<style>
			* {
				margin: 0;
				padding: 0;
				outline: none;
				text-decoration: none;
			}

			[v-cloak] {
				display: inline-block !important
			}

			.loading {
				position: absolute;
				left: 50%;
				top: 50%;
				margin-left: -50px;
				margin-top: -50px;
				width: 100px;
				height: 100px;
			}

			html {
				background: #141414;
			}

			input[type=number] {
				appearance: textfield !important;
			}

			.input-password input {
				font-family: text-security-disc !important;
				-webkit-text-security: disc !important;
			}

			.input-password input::placeholder {
				font-family: var(--ion-font-family) !important;
				-webkit-text-security: none !important;
			}
			       .col-th-line .col-left {
    display: inline-block;
    width: 80%;
    height: 100%;
    border-bottom: 1px solid #ffdea1;
    font-size: 12px;
    color: white;
}
.col-th-max {
    color:#000;
}
		</style>
		
		<link href="/static/index/user/chunk-02c995b5.dfd515b6.js" rel="prefetch">

		<link href="/static/index/user/chunk-25d83ca8.81b08d8c.js" rel="prefetch">

		<link href="/static/index/user/chunk-2d0a463b.8d43012a.js" rel="prefetch">
		<link href="/static/index/user/chunk-2d0b33e3.64be60e2.js" rel="prefetch">
		<link href="/static/index/user/chunk-2d0b62ff.f98ff668.js" rel="prefetch">
		<link href="/static/index/user/chunk-2d0bd1c8.af3dd47d.js" rel="prefetch">

		<link href="/static/index/user/chunk-2d0c1ca1.a8741f4e.js" rel="prefetch">

		<link href="/static/index/user/chunk-2d0da04a.219ce0c4.js" rel="prefetch">

		<link href="/static/index/user/chunk-2d209619.2be46e60.js" rel="prefetch">

		<link href="/static/index/user/chunk-2d218068.a3d18fba.js" rel="prefetch">

		<link href="/static/index/user/chunk-2d2376e6.a351546d.js" rel="prefetch">

		<link href="/static/index/user/chunk-34f7327c.52a3b5f9.js" rel="prefetch">
		<link href="/static/index/user/chunk-37f2300e.b167a138.js" rel="prefetch">

		
		<link href="/static/index/user/chunk-462c869e.f0e09ed2.js" rel="prefetch">

		

		<link href="/static/index/user/chunk-59d4c87c.ab94b52e.js" rel="prefetch">
		<link href="/static/index/user/chunk-5a8ac886.8430e3d7.js" rel="prefetch">

		<link href="/static/index/user/chunk-69eb8776.ffed9f83.js" rel="prefetch">

		

		<link href="/static/index/user/chunk-8bb7f81e.6794ad2b.js" rel="prefetch">

		

		<link href="/static/index/user/app.9280c1c6.css" rel="preload" as="style">
		<link href="/static/index/user/chunk-vendors.4f44ff3e.css" rel="preload" as="style">
		<link href="/static/index/user/app.f8729b16.js" rel="preload" as="script">
		<link href="/static/index/user/chunk-vendors.6283f2b7.js" rel="preload" as="script">
		<link href="/static/index/user/chunk-vendors.4f44ff3e.css" rel="stylesheet">
		<link href="/static/index/user/app.9280c1c6.css" rel="stylesheet">
		<script charset="utf-8" src="/static/index/user/chunk-34f7327c.52a3b5f9.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-25d83ca8.81b08d8c.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-462c869e.f0e09ed2.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-8bb7f81e.6794ad2b.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-02c995b5.dfd515b6.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d209619.2be46e60.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-5a8ac886.8430e3d7.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d218068.a3d18fba.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d0a463b.8d43012a.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d0b62ff.f98ff668.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d0c1ca1.a8741f4e.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d0bd1c8.af3dd47d.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d2376e6.a351546d.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d0b33e3.64be60e2.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d0da04a.219ce0c4.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-59d4c87c.ab94b52e.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-69eb8776.ffed9f83.js"></script>
		<script charset="utf-8" src="/static/index/user/chunk-37f2300e.b167a138.js"></script>
		<style>body {font-family:Arial;width:100%;max-width: 1600px;margin: 0 auto;position:relative}.box #nav[data-v-12171d70]{width:100%!important;max-width: 1600px!important}.box[data-v-28ad7794]{max-width: 1600px!important;transform: translateX(-50%);left:50%!important}*{max-width:100%}*::-webkit-scrollbar{display:none}ion-avatar.hydrated img{max-width:80px}</style>
	</head>
	<body id="body">
		<div id="app" data-v-app="">
			<ion-app class="md ion-page hydrated">
				<ion-router-outlet id="ion-router-outlet" class="hydrated">
					<div class="ion-page ion-page-hidden" id="tabs-ion-page" style="z-index: 100;" aria-hidden="true">
						<ion-tabs id="tabs-ion-tabs"
							style="display: flex; position: absolute; inset: 0px; flex-direction: column; width: 100%; height: 100%; contain: size layout style; z-index: 0;">
							<div class="tabs-inner"
								style="position: relative; flex: 1 1 0%; contain: size layout style;">
								<ion-router-outlet tabs="true" class="hydrated">
									<div class="ion-page ion-page-hidden" data-v-42757218="" aria-hidden="true"
										style="z-index: 100;">
										<ion-content class="md hydrated" data-v-42757218=""
											style="--offset-top:0px; --offset-bottom:57px;">
											<div class="q-header" data-v-42757218="">
												<div data-v-42757218="">
													<div class="col-th-max" data-v-42757218=""
														style="margin: 10px; width: 95%;">
														<ion-slides
															class="md slides-md swiper-container hydrated swiper-container-initialized swiper-container-vertical swiper-container-ios"
															data-v-42757218="">
															<!---->
															<div class="swiper-wrapper"
																style="transform: translate3d(0px, 0px, 0px);">
																<ion-slide
																	class="md swiper-slide swiper-zoom-container hydrated swiper-slide-active"
																	data-v-42757218="" style="height: 40px;">
																	<p data-v-42757218="">
																		<ion-icon data-v-42757218="" role="img"
																			class="md hydrated"
																			style="display: inline-block; margin-right: 5px; transform: translateY(2px);">
																		</ion-icon>Platform business information
																	</p>
																	<p data-v-42757218=""
																		style="width: 50px; float: right;">
																		<ion-icon data-v-42757218="" role="img"
																			class="md hydrated"></ion-icon>
																	</p>
																</ion-slide>
															</div>
														</ion-slides>
													</div>
												</div>
												<div class="q-buttons" data-v-42757218="" style="display:flex;color:#fff">
													<div class="col" data-v-42757218="">
														<div data-v-19622b17="" data-v-42757218="">
															<div class="col-th" data-v-19622b17=""
																style="display: none;">
																<div class="icon" data-v-19622b17=""><img
																		src="/static/index/user/withdraw.87fec756.svg" alt=""
																		data-v-19622b17=""></div>
																<div class="nav-box" data-v-19622b17="">提现</div>
															</div>
															<div class="min-box" data-v-19622b17="">
																<div class="icon" data-v-19622b17=""><img
																		src="/static/index/user/withdraw.87fec756.svg" alt=""
																		data-v-19622b17=""></div>
																<div class="min-nav-box" data-v-19622b17="">提现</div>
															</div>
															<div data-v-19622b17="" style="display: none;"></div>
														</div>
													</div>
													<div class="col" data-v-42757218="">
														<div data-v-4d5fa6e4="" data-v-42757218="">
															<div class="col-th" data-v-4d5fa6e4=""
																style="display: none;">
																<div class="icon" data-v-4d5fa6e4=""><img
																		src="/static/index/user/recharge.45008929.svg" alt=""
																		data-v-4d5fa6e4=""></div>
																<div class="nav-box" data-v-4d5fa6e4="">充值</div>
															</div>
															<div class="min-box" data-v-4d5fa6e4="">
																<div class="icon" data-v-4d5fa6e4=""><img
																		src="/static/index/user/recharge.45008929.svg" alt=""
																		data-v-4d5fa6e4=""></div>
																<div class="min-nav-box" data-v-4d5fa6e4="">充值</div>
															</div>
															<div data-v-4d5fa6e4="" style="display: none;"></div>
														</div>
													</div>
													<div data-v-42757218=""
														style="flex: 1 1 0%; text-align: right; padding-right: 15px;">
														<div class="no-box" data-v-42757218="">
															<div class="qut">
																<div
																	style="font-size: 12px; color: rgb(228, 227, 227); vertical-align: middle;">
																	<span><img src="/static/index/user/cny.350cf10d.svg" alt=""
																			style="width: 30px; margin-bottom: -10px;"></span><span
																		style="line-height: 10px;"> 中文(简体)</span><span
																		style="font-size: 10px; line-height: 12px; display: none;">
																		<ion-icon role="img" class="md hydrated">
																		</ion-icon>
																	</span></div>
															</div>
															<div style="display: none;"></div>
														</div>
													</div>
												</div>
												<!---->
											</div>
											<div class="products" data-v-42757218="">
												<div data-v-42757218="">
													<ion-segment class="md segment-scrollable hydrated"
														data-v-42757218=""
														style="background: linear-gradient(to right, rgb(49, 49, 49), rgb(41, 41, 41));">
														<ion-segment-button
															class="md in-segment segment-button-has-label segment-button-has-label-only segment-button-layout-icon-top ion-activatable ion-activatable-instant ion-focusable hydrated segment-button-checked"
															data-v-42757218="">
															<ion-label
																class="sc-ion-label-md-h sc-ion-label-md-s md hydrated"
																data-v-42757218="">外汇</ion-label>
														</ion-segment-button>
														<ion-segment-button
															class="md in-segment segment-button-has-label segment-button-has-label-only segment-button-layout-icon-top ion-activatable ion-activatable-instant ion-focusable hydrated segment-button-after-checked"
															data-v-42757218="">
															<ion-label
																class="sc-ion-label-md-h sc-ion-label-md-s md hydrated"
																data-v-42757218="">区块链</ion-label>
														</ion-segment-button>
														<ion-segment-button
															class="md in-segment segment-button-has-label segment-button-has-label-only segment-button-layout-icon-top ion-activatable ion-activatable-instant ion-focusable hydrated"
															data-v-42757218="">
															<ion-label
																class="sc-ion-label-md-h sc-ion-label-md-s md hydrated"
																data-v-42757218="">贵金属</ion-label>
														</ion-segment-button>
														<ion-segment-button
															class="md in-segment segment-button-has-label segment-button-has-label-only segment-button-layout-icon-top ion-activatable ion-activatable-instant ion-focusable hydrated"
															data-v-42757218="" style="display: none;">
															<ion-label
																class="sc-ion-label-md-h sc-ion-label-md-s md hydrated"
																data-v-42757218="">股票</ion-label>
														</ion-segment-button>
													</ion-segment>
												</div>
												<div class="product" data-v-42757218="">
													<ion-list
														class="md list-md list-lines-none list-md-lines-none hydrated"
														data-v-42757218="" style="background: rgba(0, 0, 0, 0);">
														<ion-item
															class="item md item-lines-none in-list ion-focusable hydrated"
															data-v-42757218="">
															<div class="finish-box" data-v-69fe8110=""
																data-v-42757218="">
																<ion-row class="md hydrated" data-v-69fe8110="">
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%);">
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/eur.ad8fc272.svg"
																				data-v-69fe8110=""></p>
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/usd.69055229.svg"
																				data-v-69fe8110=""></p>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%);">
																		<div class="name" data-v-69fe8110="">欧元/美元</div>
																		<div class="label" data-v-69fe8110="">EUR/USD
																		</div>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%);">
																		<div data-v-69fe8110="">
																			<div class="label" data-v-69fe8110=""
																				style="text-align: right;">Price</div>
																			<div class="price bg-g" data-v-69fe8110=""
																				style="text-align: right;">0.99616</div>
																		</div>
																	</ion-col>
																</ion-row>
															</div>
														</ion-item>
														<ion-item
															class="item md item-lines-none in-list ion-focusable hydrated"
															data-v-42757218="">
															<div class="finish-box" data-v-69fe8110=""
																data-v-42757218="">
																<ion-row class="md hydrated" data-v-69fe8110="">
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%);">
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/eur.ad8fc272.svg"
																				data-v-69fe8110=""></p>
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/gbp.5bb25e78.svg"
																				data-v-69fe8110=""></p>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%);">
																		<div class="name" data-v-69fe8110="">欧元/英镑</div>
																		<div class="label" data-v-69fe8110="">EUR/GBP
																		</div>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%);">
																		<div data-v-69fe8110="">
																			<div class="label" data-v-69fe8110=""
																				style="text-align: right;">Price</div>
																			<div class="price bg-g" data-v-69fe8110=""
																				style="text-align: right;">0.85799</div>
																		</div>
																	</ion-col>
																</ion-row>
															</div>
														</ion-item>
														<ion-item
															class="item md item-lines-none in-list ion-focusable hydrated"
															data-v-42757218="">
															<div class="finish-box" data-v-69fe8110=""
																data-v-42757218="">
																<ion-row class="md hydrated" data-v-69fe8110="">
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%);">
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/aud.149012c1.svg"
																				data-v-69fe8110=""></p>
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/usd.69055229.svg"
																				data-v-69fe8110=""></p>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%);">
																		<div class="name" data-v-69fe8110="">澳元/美元</div>
																		<div class="label" data-v-69fe8110="">AUD/USD
																		</div>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%);">
																		<div data-v-69fe8110="">
																			<div class="label" data-v-69fe8110=""
																				style="text-align: right;">Price</div>
																			<div class="price bg-r" data-v-69fe8110=""
																				style="text-align: right;">0.64122</div>
																		</div>
																	</ion-col>
																</ion-row>
															</div>
														</ion-item>
														<ion-item
															class="item md item-lines-none in-list ion-focusable hydrated"
															data-v-42757218="">
															<div class="finish-box" data-v-69fe8110=""
																data-v-42757218="">
																<ion-row class="md hydrated" data-v-69fe8110="">
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%);">
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/usd.69055229.svg"
																				data-v-69fe8110=""></p>
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/cny.350cf10d.svg"
																				data-v-69fe8110=""></p>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%);">
																		<div class="name" data-v-69fe8110="">美元/人民币
																		</div>
																		<div class="label" data-v-69fe8110="">USD/CNY
																		</div>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%);">
																		<div data-v-69fe8110="">
																			<div class="label" data-v-69fe8110=""
																				style="text-align: right;">Price</div>
																			<div class="price bg-r" data-v-69fe8110=""
																				style="text-align: right;">7.221</div>
																		</div>
																	</ion-col>
																</ion-row>
															</div>
														</ion-item>
														<ion-item
															class="item md item-lines-none in-list ion-focusable hydrated"
															data-v-42757218="">
															<div class="finish-box" data-v-69fe8110=""
																data-v-42757218="">
																<ion-row class="md hydrated" data-v-69fe8110="">
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%);">
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/usd.69055229.svg"
																				data-v-69fe8110=""></p>
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/cad.73e67089.svg"
																				data-v-69fe8110=""></p>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%);">
																		<div class="name" data-v-69fe8110="">美元/加元</div>
																		<div class="label" data-v-69fe8110="">USD/CAD
																		</div>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%);">
																		<div data-v-69fe8110="">
																			<div class="label" data-v-69fe8110=""
																				style="text-align: right;">Price</div>
																			<div class="price bg-r" data-v-69fe8110=""
																				style="text-align: right;">1.36017</div>
																		</div>
																	</ion-col>
																</ion-row>
															</div>
														</ion-item>
														<ion-item
															class="item md item-lines-none in-list ion-focusable hydrated"
															data-v-42757218="">
															<div class="finish-box" data-v-69fe8110=""
																data-v-42757218="">
																<ion-row class="md hydrated" data-v-69fe8110="">
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%);">
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/usd.69055229.svg"
																				data-v-69fe8110=""></p>
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/jpy.a5328b8a.svg"
																				data-v-69fe8110=""></p>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%);">
																		<div class="name" data-v-69fe8110="">美元/日元</div>
																		<div class="label" data-v-69fe8110="">USD/JPY
																		</div>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%);">
																		<div data-v-69fe8110="">
																			<div class="label" data-v-69fe8110=""
																				style="text-align: right;">Price</div>
																			<div class="price bg-g" data-v-69fe8110=""
																				style="text-align: right;">147.387</div>
																		</div>
																	</ion-col>
																</ion-row>
															</div>
														</ion-item>
														<ion-item
															class="item md item-lines-none in-list ion-focusable hydrated"
															data-v-42757218="">
															<div class="finish-box" data-v-69fe8110=""
																data-v-42757218="">
																<ion-row class="md hydrated" data-v-69fe8110="">
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%);">
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/usd.69055229.svg"
																				data-v-69fe8110=""></p>
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/chf.f8f20a50.svg"
																				data-v-69fe8110=""></p>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%);">
																		<div class="name" data-v-69fe8110="">美元/法郎</div>
																		<div class="label" data-v-69fe8110="">USD/CHF
																		</div>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%);">
																		<div data-v-69fe8110="">
																			<div class="label" data-v-69fe8110=""
																				style="text-align: right;">Price</div>
																			<div class="price bg-g" data-v-69fe8110=""
																				style="text-align: right;">0.99069</div>
																		</div>
																	</ion-col>
																</ion-row>
															</div>
														</ion-item>
														<ion-item
															class="item md item-lines-none in-list ion-focusable hydrated"
															data-v-42757218="">
															<div class="finish-box" data-v-69fe8110=""
																data-v-42757218="">
																<ion-row class="md hydrated" data-v-69fe8110="">
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%);">
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/gbp.5bb25e78.svg"
																				data-v-69fe8110=""></p>
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/cad.73e67089.svg"
																				data-v-69fe8110=""></p>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%);">
																		<div class="name" data-v-69fe8110="">英镑/加元</div>
																		<div class="label" data-v-69fe8110="">GBP/CAD
																		</div>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%);">
																		<div data-v-69fe8110="">
																			<div class="label" data-v-69fe8110=""
																				style="text-align: right;">Price</div>
																			<div class="price bg-g" data-v-69fe8110=""
																				style="text-align: right;">1.57925</div>
																		</div>
																	</ion-col>
																</ion-row>
															</div>
														</ion-item>
														<ion-item
															class="item md item-lines-none in-list ion-focusable hydrated"
															data-v-42757218="">
															<div class="finish-box" data-v-69fe8110=""
																data-v-42757218="">
																<ion-row class="md hydrated" data-v-69fe8110="">
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%);">
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/gbp.5bb25e78.svg"
																				data-v-69fe8110=""></p>
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/jpy.a5328b8a.svg"
																				data-v-69fe8110=""></p>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%);">
																		<div class="name" data-v-69fe8110="">英镑/日元</div>
																		<div class="label" data-v-69fe8110="">GBP/JPY
																		</div>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%);">
																		<div data-v-69fe8110="">
																			<div class="label" data-v-69fe8110=""
																				style="text-align: right;">Price</div>
																			<div class="price bg-g" data-v-69fe8110=""
																				style="text-align: right;">171.2182
																			</div>
																		</div>
																	</ion-col>
																</ion-row>
															</div>
														</ion-item>
														<ion-item
															class="item md item-lines-none in-list ion-focusable hydrated"
															data-v-42757218="">
															<div class="finish-box" data-v-69fe8110=""
																data-v-42757218="">
																<ion-row class="md hydrated" data-v-69fe8110="">
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%);">
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/gbp.5bb25e78.svg"
																				data-v-69fe8110=""></p>
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/aud.149012c1.svg"
																				data-v-69fe8110=""></p>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%);">
																		<div class="name" data-v-69fe8110="">英镑/澳元</div>
																		<div class="label" data-v-69fe8110="">GBP/AUD
																		</div>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%);">
																		<div data-v-69fe8110="">
																			<div class="label" data-v-69fe8110=""
																				style="text-align: right;">Price</div>
																			<div class="price bg-g" data-v-69fe8110=""
																				style="text-align: right;">1.81099</div>
																		</div>
																	</ion-col>
																</ion-row>
															</div>
														</ion-item>
														<ion-item
															class="item md item-lines-none in-list ion-focusable hydrated"
															data-v-42757218="">
															<div class="finish-box" data-v-69fe8110=""
																data-v-42757218="">
																<ion-row class="md hydrated" data-v-69fe8110="">
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%);">
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/gbp.5bb25e78.svg"
																				data-v-69fe8110=""></p>
																		<p data-v-69fe8110=""
																			style="margin: 3px auto; height: 15px;"><img
																				class="product-icon"
																				src="/static/index/user/usd.69055229.svg"
																				data-v-69fe8110=""></p>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(4 / var(--ion-grid-columns, 12)) * 100%);">
																		<div class="name" data-v-69fe8110="">英镑/美元</div>
																		<div class="label" data-v-69fe8110="">GBP/USD
																		</div>
																	</ion-col>
																	<ion-col class="md hydrated" data-v-69fe8110=""
																		style="flex: 0 0 calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%);">
																		<div data-v-69fe8110="">
																			<div class="label" data-v-69fe8110=""
																				style="text-align: right;">Price</div>
																			<div class="price bg-r" data-v-69fe8110=""
																				style="text-align: right;">1.16104</div>
																		</div>
																	</ion-col>
																</ion-row>
															</div>
														</ion-item>
													</ion-list>
												</div>
											</div>
										</ion-content>
									</div>
									<div class="ion-page" style="z-index: 101;">
										<ion-content class="md hydrated"
											style=" --offset-top:0px; --offset-bottom:57px;">
											<div class="animation5"></div>
											<div class="animation6"></div>
											<div class="animation7"></div>
											<div class="header">
												<div class="header-box">
													<div class="my-h-top">
														<ion-row class="md hydrated">
															<ion-col class="md hydrated"
																style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
																<div class="t-left">
																	<ion-avatar class="md hydrated"
																		style="margin: auto;"><img
																			src="/static/index/user/avatar.e203b0b7.png">
																	</ion-avatar>
																</div>
															</ion-col>
															<ion-col class="md hydrated"
																style="flex: 0 0 calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%);">
																<div class="t-center">
																	<p class="name">Eason123</p>
																	<p>余额：$0<span
																			style="font-size: 10px; line-height: 12px;"></span>
																	</p>
																</div>
															</ion-col>
															<ion-col class="md hydrated"
																style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
																<div class="t-right">
																	<div class="out-button">退出</div>
																</div>
															</ion-col>
														</ion-row>
													</div>
													<div class="my-h-bottom">
														<ion-row class="md hydrated" style="display: flex;background: rgb(255 255 255 / 26%);">
															<ion-col class="md hydrated">
																<div class="b-left">
																	<div class="qut">
																		<div class="no-box">
																			<div class="qut">
																				<div
																					style="font-size: 12px; color: rgb(228, 227, 227); vertical-align: middle;">
																					<span style="display: none;"><img
																							src="/static/index/user/cny.350cf10d.svg"
																							alt=""
																							style="width: 30px; margin-bottom: -10px;"></span><span
																						style="line-height: 10px;">
																						中文(简体)</span><span
																						style="font-size: 10px; line-height: 12px;">
																						<ion-icon role="img"
																							class="md hydrated">
																						    <svg style="width: 15px;" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><title>Caret Forward</title><path d="M190.06 414l163.12-139.78a24 24 0 000-36.44L190.06 98c-15.57-13.34-39.62-2.28-39.62 18.22v279.6c0 20.5 24.05 31.56 39.62 18.18z"></path></svg>
																						</ion-icon>
																					</span></div>
																			</div>
																			<div style="display: none;"></div>
																		</div>
																	</div>
																</div>
															</ion-col>
															<ion-col class="md hydrated">
																<div class="b-right">
																	<div class="to"><span
																			style="line-height: 10px;">查看近日交易</span><span
																			style="font-size: 10px; line-height: 12px;">
																			<ion-icon role="img" class="md hydrated">
																			</ion-icon>
																		</span></div>
																</div>
															</ion-col>
														</ion-row>
													</div>
												</div>
											</div>
											<div class="nav" style="display:flex;">
												<ion-row class="md hydrated">
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th-max">
															<ion-slides
																class="md slides-md swiper-container hydrated swiper-container-initialized swiper-container-vertical swiper-container-ios">
																<!---->
																<div class="swiper-wrapper"
																	style="transform: translate3d(0px, 0px, 0px);">
																	<ion-slide
																		class="md swiper-slide swiper-zoom-container hydrated swiper-slide-active"
																		style="height: 40px;">
																		<p>
																			<ion-icon role="img" class="md hydrated"
																				style="display: inline-block; margin-right: 5px; transform: translateY(2px);">
																			</ion-icon>Platform business information
																		</p>
																		<p style="width: 50px; float: right;">
																			<ion-icon role="img" class="md hydrated">
																			</ion-icon>
																		</p>
																	</ion-slide>
																</div>
															</ion-slides>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div onclick="show_cz()" data-v-4d5fa6e4="">
															<div class="col-th" data-v-4d5fa6e4="">
																<div class="icon" data-v-4d5fa6e4=""><img
																		src="/static/index/user/recharge.45008929.svg" alt=""
																		data-v-4d5fa6e4=""></div>
																<div class="nav-box" data-v-4d5fa6e4=""><?php echo lang('yhrj'); ?></div>
															</div>
															<div class="min-box" data-v-4d5fa6e4=""
																style="display: none;">
																<div class="icon" data-v-4d5fa6e4=""><img
																		src="/static/index/user/recharge.45008929.svg" alt=""
																		data-v-4d5fa6e4=""></div>
																<div class="min-nav-box" data-v-4d5fa6e4=""><?php echo lang('yhrj'); ?></div>
															</div>
															<div data-v-4d5fa6e4="" style="display: none;"></div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div data-v-19622b17="">
															<div class="col-th" data-v-19622b17="">
																<div class="icon" data-v-19622b17=""><img
																		src="/static/index/user/withdraw.87fec756.svg" alt=""
																		data-v-19622b17=""></div>
																<div class="nav-box" data-v-19622b17="">提现</div>
															</div>
															<div class="min-box" data-v-19622b17=""
																style="display: none;">
																<div class="icon" data-v-19622b17=""><img
																		src="/static/index/user/withdraw.87fec756.svg" alt=""
																		data-v-19622b17=""></div>
																<div class="min-nav-box" data-v-19622b17="">提现</div>
															</div>
															<div data-v-19622b17="" style="display: none;"></div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/rechargelist.46d09a30.svg" alt="">
															</div>
															<div class="nav-box">充值记录</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/withdrawlist.d526c20d.svg" alt="">
															</div>
															<div class="nav-box">提现记录</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img src="/static/index/user/assets.4eda1e5b.svg"
																	alt=""></div>
															<div class="nav-box">个人资产</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img src="/static/index/user/key.59ef0d05.svg"
																	alt=""></div>
															<div class="nav-box">修改密码</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/bankcard.b9fc04a2.svg" alt="">
															</div>
															<div class="nav-box">收款方式</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img src="/static/index/user/intro.cc1d81ac.svg"
																	alt=""></div>
															<div class="nav-box"> 平台概况</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="display: none; flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th-line">
															<div class="col-left">
																<ion-icon role="img" class="md hydrated"
																	style="display: inline-block; margin-right: 10px; transform: translateY(2px);">
																</ion-icon>实名认证
															</div>
															<div class="col-right">
																<ion-icon role="img" class="md hydrated"></ion-icon>
															</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th-line">
															<div class="col-left">
																<ion-icon role="img" class="md hydrated"
																	style="display: inline-block; margin-right: 10px; transform: translateY(2px);">
																</ion-icon>提现密码
															</div>
															<div class="col-right">
																<ion-icon role="img" class="md hydrated"></ion-icon>
															</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th-line">
															<div class="col-left">
																<ion-icon role="img" class="md hydrated"
																	style="display: inline-block; margin-right: 10px; transform: translateY(2px);">
																</ion-icon>资金流水
															</div>
															<div class="col-right">
																<ion-icon role="img" class="md hydrated"></ion-icon>
															</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th-line">
															<div class="col-left">
																<ion-icon role="img" class="md hydrated"
																	style="display: inline-block; margin-right: 10px; transform: translateY(2px);">
																</ion-icon>平台公告
															</div>
															<div class="col-right">
																<ion-icon role="img" class="md hydrated"></ion-icon>
															</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th-line">
															<div class="col-left">
																<ion-icon role="img" class="md hydrated"
																	style="display: inline-block; margin-right: 10px; transform: translateY(2px);">
																</ion-icon>版本：1.57.128
															</div>
															<div class="col-right">
																<ion-icon role="img" class="md hydrated"></ion-icon>
															</div>
														</div>
													</ion-col>
												</ion-row>
											</div>
										</ion-content>
										<div style="display: none;"></div>
									</div>
								</ion-router-outlet>
							</div>
							<ion-tab-bar slot="bottom" role="tablist" class="md hydrated" style="display: flex;text-align: center;color: #9e9e9e;font-size: 12px;">
								<ion-tab-button _gettabstate="()=&gt;t" role="tab" tabindex="0" id="tab-button-quote"
									class="md tab-layout-icon-top ion-activatable ion-selectable ion-focusable hydrated"
									style="background: rgb(20, 20, 20);">
									<div style="width: 100%; height: 100%;"><img class="tab-icon"
											src="/static/index/user/quote.07b48f2d.svg" alt="">
										<p style="margin: 0px;">行情</p>
									</div>
								</ion-tab-button>
								<ion-tab-button _gettabstate="()=&gt;t" role="tab" tabindex="0" id="tab-button-order"
									class="md tab-layout-icon-top ion-activatable ion-selectable ion-focusable hydrated"
									style="background: rgb(20, 20, 20);">
									<div style="width: 100%; height: 100%;"><img class="tab-icon"
											src="/static/index/user/invest.208a53a3.svg" alt="">
										<p style="margin: 0px;">投资</p>
									</div>
								</ion-tab-button>
								<ion-tab-button _gettabstate="()=&gt;t" role="tab" tabindex="0" id="tab-button-service"
									class="md tab-layout-icon-top ion-activatable ion-selectable ion-focusable hydrated"
									style="background: rgb(20, 20, 20);">
									<div style="width: 100%; height: 100%;">
										<!----><img class="tab-icon" src="/static/index/user/service.3520e54a.svg" alt="">
										<p style="margin: 0px; white-space: nowrap;">客服</p>
									</div>
								</ion-tab-button>
								<ion-tab-button _gettabstate="()=&gt;t" role="tab" tabindex="0" id="tab-button-my"
									class="md tab-layout-icon-top ion-activatable ion-selectable ion-focusable hydrated tab-selected"
									style="background: rgb(20, 20, 20);" aria-selected="true">
									<div style="width: 100%; height: 100%;"><img class="tab-icon"
											src="/static/index/user/my.a77566df.svg" alt="">
										<p style="margin: 0px;">我的</p>
									</div>
								</ion-tab-button>
							</ion-tab-bar>
						</ion-tabs>
						<div style="display: none;"></div>
					</div>
					<div class="ion-page" id="tabs-ion-page" style="z-index: 99;">
						<ion-tabs id="tabs-ion-tabs"
							style="display: flex; position: absolute; inset: 0px; flex-direction: column; width: 100%; height: 100%; contain: size layout style; z-index: 0;">
							<div class="tabs-inner"
								style="position: relative; flex: 1 1 0%; contain: size layout style;">
								<ion-router-outlet tabs="true" class="hydrated">
									<div class="ion-page">
										<ion-content class="md hydrated"
											style="--offset-top:0px; --offset-bottom:57px;">
											<div class="animation5"></div>
											<div class="animation6"></div>
											<div class="animation7"></div>
											<div class="header" style="overflow:inherit">
												<div class="header-box">
													<div class="my-h-top">
														<ion-row class="md hydrated">
															<ion-col class="md hydrated"
																style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
																<div class="t-left">
																	<ion-avatar class="md hydrated"
																		style="margin: auto;"><img
																			src="/static/index/user/avatar.e203b0b7.png">
																	</ion-avatar>
																</div>
															</ion-col>
															<ion-col class="md hydrated"
																style="flex: 0 0 calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%);">
																<div class="t-center">
																	<p class="name"> <?php echo lang('yhm'); ?>：<?php echo !empty($userinfo['username'])?$userinfo['nickname']:$userinfo['username']; ?></p>
																	<p><?php echo lang('ye'); ?><?php echo lang('dw'); ?><?php echo $userinfo['usermoney']; ?> <span
																			style="font-size: 10px; line-height: 12px;"></span>
																	</p>
																</div>
															</ion-col>
															<ion-col class="md hydrated"
																style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
															    <a href="javascript:;" onClick="app_exit()">
																<div class="t-right">
																	<div class="out-button"><?php echo lang('tc'); ?></div>
																</div>
																</a>
															</ion-col>
														</ion-row>
													</div>
													<div class="my-h-bottom">
														<ion-row class="md hydrated" style="display:flex;background: rgb(255 255 255 / 26%);">
															<ion-col class="md hydrated">
																<div class="b-left">
																	<div class="qut" >
																		<div class="no-box">
																			<div class="qut" style="">
																				<div style="font-size: 12px; color: rgb(228, 227, 227); vertical-align: middle;display: flex;align-items: center;">
																					<span style="display: none;"><img
																							src="/static/index/user/cny.350cf10d.svg"
																							alt=""
																							style="width: 30px; margin-bottom: -10px;"></span>
																							<span id="langtarger" style="line-height: 10px;">
																						  <?php echo lang('yuyan'); ?></span><span
																						style="font-size: 10px; line-height: 12px;">
																						<ion-icon role="img"
																							class="md hydrated">
																						    <svg style="width: 15px;fill:currentColor;" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><title>Caret Forward</title><path d="M190.06 414l163.12-139.78a24 24 0 000-36.44L190.06 98c-15.57-13.34-39.62-2.28-39.62 18.22v279.6c0 20.5 24.05 31.56 39.62 18.18z"></path></svg>
																						</ion-icon>
																					</span></div>
																					
                                                                                   
																			</div>
																			<div style="display: none;"></div>
																		</div>
																	</div>
																</div>
															</ion-col>
															<ion-col class="md hydrated">
																<div class="b-right">
																    <a href="<?php echo url('/index/order/hold'); ?>">
																	<div class="to" style="display: flex;align-items: center;justify-content: end;"><span
																			style="line-height: 10px;color:#fff"><?php echo lang('ckjqjy'); ?></span><span
																			style="font-size: 10px; line-height: 12px;">
																			<ion-icon role="img" class="md hydrated">
																			    <svg style="width: 15px;fill: #fff;" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><title>Caret Forward</title><path d="M190.06 414l163.12-139.78a24 24 0 000-36.44L190.06 98c-15.57-13.34-39.62-2.28-39.62 18.22v279.6c0 20.5 24.05 31.56 39.62 18.18z"></path></svg>
																			</ion-icon>
																		</span></div>
																		</a>
																</div>
															</ion-col>
														</ion-row>
													</div>
												</div>
											</div>
										
											<div class="nav">
												<ion-row class="md hydrated">
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th-max">
															<ion-slides
																class="md slides-md swiper-container hydrated swiper-container-initialized swiper-container-vertical swiper-container-ios">
																<!---->
																<div class="swiper-wrapper"
																	style="transform: translate3d(0px, 0px, 0px);">
																    <a style="color:black" href="<?php echo url('/index/user/noticedetils'); ?>">
																	<ion-slide
																		class="md swiper-slide swiper-zoom-container hydrated swiper-slide-active"
																		style="height: 40px;">
																	    
																		<p>
																			<ion-icon role="img" class="md hydrated" style="display: inline-block; margin-right: 5px; transform: translateY(2px);">
																			    <!--<div class="icon-inner">-->
																			    <!--    <svg style="width:15px" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512">-->
																			    <!--        <title>Receipt</title>-->
																			    <!--        <path stroke-linejoin="round" d="M160 336V48l32 16 32-16 31.94 16 32.37-16L320 64l31.79-16 31.93 16L416 48l32.01 16L480 48v224" class="ionicon-fill-none ionicon-stroke-width"></path>-->
																			    <!--        <path d="M480 272v112a80 80 0 01-80 80h0a80 80 0 01-80-80v-48H48a15.86 15.86 0 00-16 16c0 64 6.74 112 80 112h288" stroke-linejoin="round" class="ionicon-fill-none ionicon-stroke-width"></path>-->
																			    <!--        <path stroke-linecap="round" stroke-linejoin="round" d="M224 144h192M288 224h128" class="ionicon-fill-none ionicon-stroke-width"></path>-->
																			    <!--        </svg>-->
																			    <!--        </div>-->
																			</ion-icon>
																			Platform business information
																		</p>
																		
																		<p style="width: 50px; float: right;">
																			<ion-icon role="img" class="md hydrated">
																			    <svg style="width: 15px;" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><title>Caret Forward</title><path d="M190.06 414l163.12-139.78a24 24 0 000-36.44L190.06 98c-15.57-13.34-39.62-2.28-39.62 18.22v279.6c0 20.5 24.05 31.56 39.62 18.18z"></path></svg>
																			</ion-icon>
																		</p>
																	</ion-slide></a>
																</div>
															</ion-slides>
														</div>
													</ion-col>
													<div style="color:#fff">
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div data-v-4d5fa6e4="">
															<div class="col-th" data-v-4d5fa6e4="" onclick="show_cz()">
																<div class="icon" data-v-4d5fa6e4=""><img
																		src="/static/index/user/recharge.45008929.svg" alt=""
																		data-v-4d5fa6e4=""></div>
																<div class="nav-box" data-v-4d5fa6e4=""><?php echo lang('chongzhi'); ?></div>
															</div>
															<div class="min-box" data-v-4d5fa6e4=""
																style="display: none;">
																<div class="icon" data-v-4d5fa6e4=""><img
																		src="/static/index/user/recharge.45008929.svg" alt=""
																		data-v-4d5fa6e4=""></div>
																<div class="min-nav-box" data-v-4d5fa6e4=""><?php echo lang('chongzhi'); ?></div>
															</div>
															<div data-v-4d5fa6e4="" style="display: none;"></div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div data-v-19622b17="">
															<div class="col-th" data-v-19622b17="" onclick="show_tx()">
																<div class="icon" data-v-19622b17=""><img
																		src="/static/index/user/withdraw.87fec756.svg" alt=""
																		data-v-19622b17=""></div>
																<div class="nav-box" data-v-19622b17=""><?php echo lang('tx'); ?></div>
															</div>
															<div class="min-box" data-v-19622b17=""
																style="display: none;">
																<div class="icon" data-v-19622b17=""><img
																		src="/static/index/user/withdraw.87fec756.svg" alt=""
																		data-v-19622b17=""></div>
																<div class="min-nav-box" data-v-19622b17=""><?php echo lang('tx'); ?></div>
															</div>
															<div data-v-19622b17="" style="display: none;"></div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
														    <a href="/index/user/cashlist2.html">
															<div class="icon"><img
																	src="/static/index/user/rechargelist.46d09a30.svg" alt="">
															</div>
															<div style="color:#fff" class="nav-box"><?php echo lang('chongzhijl'); ?></div>
															</a>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
														    <a href="/index/user/cashlist.html">
															<div class="icon"><img
																	src="/static/index/user/withdrawlist.d526c20d.svg" alt="">
															</div>
															<div style="color:#fff" class="nav-box"><?php echo lang('tixianjl'); ?></div>
															</a>
														</div>
													</ion-col>
													</div>
													<div style="color:#fff">
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
													    <a href="<?php echo url('asset'); ?>">
														<div class="col-th">
															<div class="icon"><img src="/static/index/user/assets.4eda1e5b.svg"
																	alt=""></div>
															<div style="color:#fff" class="nav-box"><?php echo lang('gerenzichan'); ?></div>
														</div>
														</a>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
													    <a href="<?php echo url('cpassword'); ?>">
														<div class="col-th">
															<div class="icon"><img src="/static/index/user/key.59ef0d05.svg"
																	alt=""></div>
															<div style="color:#fff" class="nav-box"><?php echo lang('xiugaimima'); ?></div>
														</div>
														</a>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<a href="<?php echo url('paymode'); ?>">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/bankcard.b9fc04a2.svg" alt="">
															</div>
															<div style="color:#fff" class="nav-box"><?php echo lang('shoukuanfs'); ?></div>
														</div>
														</a>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<a href="<?php echo url('company'); ?>">
														<div class="col-th">
															<div class="icon"><img src="/static/index/user/intro.cc1d81ac.svg"
																	alt=""></div>
															<div style="color:#fff" class="nav-box"><?php echo lang('pingtaigk'); ?></div>
														</div>
														</a>
													</ion-col>
													</div>
												
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
													    <a href="<?php echo url('cpaypassword'); ?>">
														<div class="col-th-line">
															<div class="col-left">
																<ion-icon role="img" class="md hydrated"
																	style="display: inline-block; margin-right: 10px; transform: translateY(2px);width: auto;">
																    <svg xmlns="http://www.w3.org/2000/svg" style="width:15px;fill: white;" class="ionicon s-ion-icon" viewBox="0 0 512 512"><title>Key</title><path d="M218.1 167.17c0 13 0 25.6 4.1 37.4-43.1 50.6-156.9 184.3-167.5 194.5a20.17 20.17 0 00-6.7 15c0 8.5 5.2 16.7 9.6 21.3 6.6 6.9 34.8 33 40 28 15.4-15 18.5-19 24.8-25.2 9.5-9.3-1-28.3 2.3-36s6.8-9.2 12.5-10.4 15.8 2.9 23.7 3c8.3.1 12.8-3.4 19-9.2 5-4.6 8.6-8.9 8.7-15.6.2-9-12.8-20.9-3.1-30.4s23.7 6.2 34 5 22.8-15.5 24.1-21.6-11.7-21.8-9.7-30.7c.7-3 6.8-10 11.4-11s25 6.9 29.6 5.9c5.6-1.2 12.1-7.1 17.4-10.4 15.5 6.7 29.6 9.4 47.7 9.4 68.5 0 124-53.4 124-119.2S408.5 48 340 48s-121.9 53.37-121.9 119.17zM400 144a32 32 0 11-32-32 32 32 0 0132 32z"></path></svg>
																</ion-icon><?php echo lang('xgtxmm'); ?>
															</div>
															<div class="col-right">
																<ion-icon role="img" class="md hydrated">
																    <svg style="width: 15px;" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><title>Caret Forward</title><path d="M190.06 414l163.12-139.78a24 24 0 000-36.44L190.06 98c-15.57-13.34-39.62-2.28-39.62 18.22v279.6c0 20.5 24.05 31.56 39.62 18.18z"></path></svg>
																</ion-icon>
															</div>
														</div>
														</a>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th-line" onClick="respass()">
															<div class="col-left">
																<ion-icon role="img" class="md hydrated"
																	style="display: inline-block; margin-right: 10px; transform: translateY(2px);width: auto;">
																    <svg xmlns="http://www.w3.org/2000/svg" style="width:15px;fill: white;" class="ionicon s-ion-icon" viewBox="0 0 512 512"><title>Receipt</title><path stroke-linejoin="round" d="M160 336V48l32 16 32-16 31.94 16 32.37-16L320 64l31.79-16 31.93 16L416 48l32.01 16L480 48v224" class="ionicon-fill-none ionicon-stroke-width"></path><path d="M480 272v112a80 80 0 01-80 80h0a80 80 0 01-80-80v-48H48a15.86 15.86 0 00-16 16c0 64 6.74 112 80 112h288" stroke-linejoin="round" class="ionicon-fill-none ionicon-stroke-width"></path><path stroke-linecap="round" stroke-linejoin="round" d="M224 144h192M288 224h128" class="ionicon-fill-none ionicon-stroke-width"></path></svg>
																</ion-icon><?php echo lang('jyls'); ?>
															</div>
															<div class="col-right">
																<ion-icon role="img" class="md hydrated">
																    <svg style="width: 15px;" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><title>Caret Forward</title><path d="M190.06 414l163.12-139.78a24 24 0 000-36.44L190.06 98c-15.57-13.34-39.62-2.28-39.62 18.22v279.6c0 20.5 24.05 31.56 39.62 18.18z"></path></svg>
																</ion-icon>
															</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
													    <a href="javascript:;" onClick="repaypass()">
														<div class="col-th-line">
															<div class="col-left">
																<ion-icon role="img" class="md hydrated"
																	style="display: inline-block; margin-right: 10px; transform: translateY(2px);width: auto;">
																    <svg xmlns="http://www.w3.org/2000/svg" style="width:15px;fill: white;" class="ionicon s-ion-icon" viewBox="0 0 512 512"><title>Documents</title><path d="M298.39 248a4 4 0 002.86-6.8l-78.4-79.72a4 4 0 00-6.85 2.81V236a12 12 0 0012 12z"></path><path d="M197 267a43.67 43.67 0 01-13-31v-92h-72a64.19 64.19 0 00-64 64v224a64 64 0 0064 64h144a64 64 0 0064-64V280h-92a43.61 43.61 0 01-31-13zM372 120h70.39a4 4 0 002.86-6.8l-78.4-79.72a4 4 0 00-6.85 2.81V108a12 12 0 0012 12z"></path><path d="M372 152a44.34 44.34 0 01-44-44V16H220a60.07 60.07 0 00-60 60v36h42.12A40.81 40.81 0 01231 124.14l109.16 111a41.11 41.11 0 0111.83 29V400h53.05c32.51 0 58.95-26.92 58.95-60V152z"></path></svg>
																</ion-icon><?php echo lang('pingtaigg'); ?>
															</div>
															<div class="col-right">
																<ion-icon role="img" class="md hydrated">
																    <svg style="width: 15px;" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><title>Caret Forward</title><path d="M190.06 414l163.12-139.78a24 24 0 000-36.44L190.06 98c-15.57-13.34-39.62-2.28-39.62 18.22v279.6c0 20.5 24.05 31.56 39.62 18.18z"></path></svg>
																</ion-icon>
															</div>
														</div>
														</a>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th-line" onclick="show_user_modal('modal-plarule')">
															<div class="col-left">
																<ion-icon role="img" class="md hydrated"
																	style="display: inline-block; margin-right: 10px; transform: translateY(2px);width: auto;">
																    <svg xmlns="http://www.w3.org/2000/svg" style="width:15px;fill: white;" class="ionicon s-ion-icon" viewBox="0 0 512 512"><title>Disc</title><path d="M256 176a80 80 0 1080 80 80.09 80.09 0 00-80-80zm0 112a32 32 0 1132-32 32 32 0 01-32 32z"></path><path d="M414.39 97.61A224 224 0 1097.61 414.39 224 224 0 10414.39 97.61zM256 368a112 112 0 11112-112 112.12 112.12 0 01-112 112z"></path></svg>
																</ion-icon><?php echo lang('banben'); ?>：1.57.128
															</div>
															<div class="col-right">
																<ion-icon role="img" class="md hydrated">
																    <svg style="width: 15px;" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><title>Caret Forward</title><path d="M190.06 414l163.12-139.78a24 24 0 000-36.44L190.06 98c-15.57-13.34-39.62-2.28-39.62 18.22v279.6c0 20.5 24.05 31.56 39.62 18.18z"></path></svg>
																</ion-icon>
															</div>
														</div>
													</ion-col>
													<?php if($userinfo['otype']==101): ?>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
													    <a href="/index/user/useragent.html">
														<div class="col-th-line">
															<div class="col-left">
																<ion-icon role="img" class="md hydrated"
																	style="display: inline-block; margin-right: 10px; transform: translateY(2px);">
																</ion-icon><?php echo lang('ckxx'); ?>
															</div>
															<div class="col-right">
																<ion-icon role="img" class="md hydrated">
																    <svg style="width: 15px;" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><title>Caret Forward</title><path d="M190.06 414l163.12-139.78a24 24 0 000-36.44L190.06 98c-15.57-13.34-39.62-2.28-39.62 18.22v279.6c0 20.5 24.05 31.56 39.62 18.18z"></path></svg>
																</ion-icon>
															</div>
														</div>
														</a>
													</ion-col>
													 <?php endif; ?>
												</ion-row>
											</div>
										</ion-content>
										<div style="display: none;"></div>
									</div>
								</ion-router-outlet>
							</div>
							<style type="text/css">
        .on[data-v-28ad7794] {
            color: #eed176;
        }

        .in[data-v-28ad7794] {
            color: #90a2b0;
        }

        .box[data-v-28ad7794] {
            position: fixed;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            left: 0;
            font-size: 12px;
            bottom: 0;
            width: 100%;
            height: 50px;
            background: #fff;
            z-index: 100;
        }

        .box .li[data-v-28ad7794] {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            height: 100%;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .box .li img[data-v-28ad7794] {
            width: 20px;
            height: 20px;
        }

        .box .li span[data-v-28ad7794] {
            margin: 0;
            padding: 0;
            border: 0;
            vertical-align: baseline;
            font: inherit;
            font-size: 100%;
            height: 20px;
            line-height: 20px;
        }

        a {
            text-decoration: none;
        }
    </style>
							<div data-v-28ad7794="" data-v-0c912c96="" class="box" id="oukes">
            <div data-v-28ad7794="" style="flex: 1 1 0%; background-color: rgb(20,20,20)">
                <a data-v-28ad7794="" href="<?php echo Url('/index/index/index/token/'.$token); ?>" class="li">
                    <img data-v-28ad7794="" src="/tu/quote.svg" alt="">
                    <span data-v-28ad7794="" class="in"><?php echo lang('sy'); ?></span>
                </a>
            </div>
            <div data-v-28ad7794="" style="flex: 1 1 0%; background-color: rgb(20,20,20)">
                <a data-v-28ad7794="" href="<?php echo Url('/index/order/hold/token/'.$token); ?>" class="li">
                    <img data-v-28ad7794="" src="/tu/invest.svg" alt="">
                    <span data-v-28ad7794="" class="in"><?php echo lang('lc'); ?></span>
                </a>
            </div>

            <div data-v-28ad7794="" style="flex: 1 1 0%; background-color: rgb(20,20,20)">
                <!--<a data-v-28ad7794="" href="<?php echo url('/ddd/kf'); ?>" class="li">-->
                <a data-v-28ad7794="" data-href="<?php echo url('/index/index/kefu?id=9'); ?>" href="<?php echo Url('/index/chat/index/token/'.$token); ?>" class="li">
                    <img data-v-28ad7794="" src="/tu/service.svg" alt="">
                    <span data-v-28ad7794="" class="in"><?php echo lang('kf'); ?></span>
                    <div class="unread-count" id="unread-count">0</div>
                    <style>.unread-count{position:absolute;background:red;color:#fff;border-radius:100%;width:15px;height:15px;display:flex;align-items:center;justify-content:center;font-size:11px;margin-right:-30px;margin-top:-30px}</style>
                </a>
            </div>
            <div data-v-28ad7794="" style="flex: 1 1 0%; background-color: rgb(20,20,20)">
                <a data-v-28ad7794="" href="<?php echo Url('/index/user/index/token/'.$token); ?>" class="li">
                    <img data-v-28ad7794="" src="/tu/my.svg" alt="">
                    <span data-v-28ad7794="" class="on"><?php echo lang('wd'); ?></span>
                </a>
            </div>
        </div>
						</ion-tabs>
						<div style="display: none;"></div>
						<div role="dialog" class="modal-wrapper  dialog ion-overlay-wrapper sc-ion-modal-md" style="height:100%;z-index:9999;display: none;">
                        	<div class="ion-page">
                        		<div class="modal-box" data-v-4d5fa6e4="" style="margin:auto;">
                        			<div class="modal-header" data-v-4d5fa6e4="">
                        				<h5 data-v-4d5fa6e4=""><?php echo lang('chongzhi'); ?></h5>
                        			</div>
                        			<div data-v-4d5fa6e4="">
                        			  <!--  <div class="rechargeInput" data-v-4d5fa6e4="" style="margin: 15px 0px;">
                        			       <select name='type' class='sc-ion-input-md-h sc-ion-input-md-s md hydrated' style="color: #ccc;background: #000;">
                                        <?php if(is_array($rs_payment) || $rs_payment instanceof \think\Collection || $rs_payment instanceof \think\Paginator): $i = 0; $__LIST__ = $rs_payment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                        <option value='<?php echo $item['id']; ?>'><?php echo $item['pay_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                        				
                        				</div>-->
                        			    
                        				<div class="rechargeInput" data-v-4d5fa6e4="" style="margin: 15px 0px;">
                        					<ion-input modelvalue="" class="sc-ion-input-md-h sc-ion-input-md-s md hydrated" data-v-4d5fa6e4="" style="background:#0e0e0e;  margin-bottom: 10px;">
                        						<input id="mymoney"   class="native-input sc-ion-input-md" aria-labelledby="ion-input-3-lbl"
                        							autocapitalize="off" autocomplete="off" autocorrect="off" maxlength="16" name="WIDtotal_fee"
                        							placeholder="<?php echo lang('czje'); ?>" required="" spellcheck="false" type="number"><button
                        							aria-label="reset" type="button" class="input-clear-icon sc-ion-input-md"></button>
                        					</ion-input>
                        				</div>
                        				<ion-button onclick="go_step21()"
                        					class="ion-color ion-color-primary md button button-block button-solid ion-activatable ion-focusable hydrated"
                        					data-v-4d5fa6e4="" expand="block" style="margin-bottom: 15px;    margin-top: 10px;"><?php echo lang('qchongzhi'); ?></ion-button>
                        				<ion-button onclick="qx()"
                        					class="ion-color ion-color-dark md button button-block button-solid ion-activatable ion-focusable hydrated"
                        					data-v-4d5fa6e4="" expand="block" style="margin-top: 10px; margin-bottom: 15px;    background: #222428; text-align: center;  padding: 6px;"><?php echo lang('quxiao'); ?></ion-button>
                        			</div>
                        		</div>
                        	</div>
                        </div>
                        
                        <div role="dialog" class="modal-wrapper dialog_tx ion-overlay-wrapper sc-ion-modal-md" style="height:100%;z-index:9999;display:none">
	<div class="ion-page">
		<div class="withdraw-box modal-box" data-v-19622b17="" style="margin:auto;background:#141414">
			<ion-card class="md hydrated" data-v-19622b17="">
				<div class="modal-header" data-v-19622b17="">
					<h5 data-v-19622b17=""><?php echo lang('tx'); ?></h5>
				</div>
				<ion-card-content class="md card-content-md hydrated" data-v-19622b17="">
					<div data-v-19622b17="">
						<ion-item class="item-interactive item-input item md ion-focusable hydrated item-label"
							data-v-19622b17="" style="line-height: 49px;
    border-bottom: 1px solid #ffe2ad;">
							<ion-label class="sc-ion-label-md-h sc-ion-label-md-s md hydrated" data-v-19622b17=""
								id="ion-input-11-lbl" style="width:30%"><?php echo lang('txje'); ?></ion-label>
							<ion-input modelvalue=""  class="sc-ion-input-md-h sc-ion-input-md-s md hydrated"  style="width:70%"
								onpaste="return false" data-v-19622b17=""><input class="native-input" style="background:#141414;border:1px solid #141414"
									aria-labelledby="ion-input-11-lbl" autocapitalize="off" autocomplete="off" id="moneys"
									autocorrect="off" name="ion-input-11" placeholder=""  spellcheck="false"
									type="number" id='price'></ion-input>
						</ion-item>
						<ion-item class="item-interactive item-input item md ion-focusable hydrated item-label" style="line-height: 49px;
    border-bottom: 1px solid #ffe2ad;"
							data-v-19622b17="">
							<ion-label class="sc-ion-label-md-h sc-ion-label-md-s md hydrated" data-v-19622b17=""
								id="ion-input-12-lbl" style="width:30%"><?php echo lang('txmm'); ?></ion-label>
							<ion-input modelvalue=""
								class="input-password sc-ion-input-md-h sc-ion-input-md-s md hydrated" style="width:70%"
								onpaste="return false" data-v-19622b17=""><input class="native-input " style="background:#141414;border:1px solid #141414"
									aria-labelledby="ion-input-12-lbl" autocapitalize="off" autocomplete="off" id="zpaypassword"
									autocorrect="off" name="ion-input-12"  id="paypwd" placeholder="" spellcheck="false" type="text">
							</ion-input>
						</ion-item>
						<?php if(($user['bank'])||($user['usdtaddress'])): if(($user['usdtaddress'])): ?>
						<ion-button class="md button button-block button-solid ion-activatable ion-focusable hydrated bd"
							data-v-19622b17="" expand="block" style="margin-top: 10px;margin-bottom: 15px;   " onclick="bk3()" ><?php echo lang('tixianjiami'); ?></ion-button>
							<?php endif; if(($user['bank'])): ?>
						<ion-button class="md button button-block button-solid ion-activatable ion-focusable hydrated bd"
							data-v-19622b17="" expand="block" style="margin-top: 10px;margin-bottom: 15px;   " onclick="bk2()" ><?php echo lang('tixianyinhang'); ?></ion-button>
							<?php endif; else: ?>
							<ion-button class="md button button-block button-solid ion-activatable ion-focusable hydrated bd"
							data-v-19622b17="" expand="block" style="margin-top: 10px;margin-bottom: 15px;   " onclick="bk()" ><?php echo lang('xzbdfs'); ?></ion-button>
							<?php endif; ?>
						<ion-button onclick="qx1()"
							class="ion-color ion-color-dark md button button-block button-solid ion-activatable ion-focusable hydrated"
							data-v-19622b17="" expand="block" style="margin-top: 10px; margin-bottom: 15px;    background: #222428; text-align: center;  padding: 6px;"><?php echo lang('quxiao'); ?></ion-button>
					</div>
				</ion-card-content>
			</ion-card>
		</div>
	</div>
</div>


					</div>
				</ion-router-outlet>
			</ion-app>
			
		</div>
		<style>
		    .xzmb:active{
		        background: #444;
		    }
		</style>
		<div class="langselectx" style="height:100%;width:100%;position: fixed;top: 0;left:0;background: rgb(158 158 158 / 31%);display:none">
		    
		</div>
		<div class="langselect">
		    
		
		<ul class="langselect" style="display: none;border: 1px solid #424242;padding: 5px;background: #141414;position: fixed;top: 10px;left: 50%;  transform:translateX(-50%);width: 80%;color: white;max-width:450px;z-index:99999999999">
            <!--                                                                        <li style="list-style: none;padding: 16px;" data-val="zh-cn"><?php echo lang('cn'); ?></li>-->
            <!--                                                                        <li style="list-style: none;padding: 16px;" data-val="zh-en"><?php echo lang('en'); ?></li>-->
            <!--                                                                        <li style="list-style: none;padding: 16px;" data-val="zh-yl"><?php echo lang('yl'); ?></li>-->
            <!--                                                                        <li style="list-style: none;padding: 16px;" data-val="zh-ry"><?php echo lang('ry'); ?></li>-->
            <!--<li style="list-style: none;padding: 16px;" data-val="zh-ty"><?php echo lang('ty'); ?></li>-->
            
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%"><?php echo lang('en'); ?></span><input type="radio" name="yuyan" value="zh-en"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%"><?php echo lang('yl'); ?></span><input type="radio" name="yuyan" value="zh-yl"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%"><?php echo lang('ry'); ?></span><input type="radio" name="yuyan" value="zh-ry"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%"><?php echo lang('ty'); ?></span><input type="radio" name="yuyan" value="zh-ty"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%"><?php echo lang('cn'); ?></span><input type="radio" name="yuyan" value="zh-cn"></label></li>
            <!--<li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%">Français</span><input type="radio" name="yuyan" value="zh-en"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%">Português</span><input type="radio" name="yuyan" value="zh-en"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%">Italiano</span><input type="radio" name="yuyan" value="zh-en"></label></li>
            
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%">Deutsch</span><input type="radio" name="yuyan" value="zh-en"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%">Indonesia</span><input type="radio" name="yuyan" value="zh-en"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%">한국어</span><input type="radio" name="yuyan" value="zh-en"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%">españa</span><input type="radio" name="yuyan" value="zh-en"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%"><?php echo lang('cn'); ?></span><input type="radio" name="yuyan" value="zh-cn"></label></li>-->
                                                                                     <li id="langselect5" style="list-style: none;padding:0 16px;margin-top: 20px;"><button style="padding: 10px;width: 100%;background: #ebcc7f;border-radius: 5px;" type="submit"><?php echo lang('qiehuan'); ?></button></li>
                                                                                     <li id="quxiao" style="list-style: none;padding: 16px;"><button style="padding: 10px;width: 100%;background: #222428;border-radius: 5px;color: white;" type="submit"><?php echo lang('quxiao'); ?></button></li>
                                                                                    </ul>
                                                                                    </div>
	</body>
	 <script src="/static/index/js/jquery-1.9.1.min.js"></script>
	<script src="/static/index/js/lk/order.js"></script>
	<script>
	$('#quxiao').click(function () {
        $('.langselect').stop().slideUp();
        $('.langselectx').hide();
    })
    $('#langtarger').click(function (e) {
        e.stopPropagation()
        $('.langselect').stop().slideDown();
        $('.langselectx').show();
    })
    $('#langselect5').click(function () {
        //var data = {'lang': $(this).attr('data-val')};
        var data = $("input[name='yuyan']:checked").val();
        //alert(data);
        var formurl = "<?php echo Url('login/langSetting'); ?>"
        var data = data
        $.post(formurl, {'lang':data}, function (data) {
            if (data.type == 1) {
                // layer.msg(data.data, {icon: 1,time: 1000},function(){
                // });
                //alert(data.msg)
                window.location.reload()
            } else {
                //alert(data.msg)
                // layer.msg(data.data, { icon: 2 });
            }
        });
    })
											</script>
<style>
    .ion-color-primary,.bd{
          background: #edd075;
    text-align: center;
    padding: 6px;
    color: #141414;

}
</style>
    <!-- 弹框插件 -->
    <script src="/static/layer/layer.js"></script>
    <!-- 公共函数 -->
    <script src="/static/public/js/function.js"></script>
    <script src="/static/public/js/base64.js"></script>
    <script type="text/javascript">
        var Base64 = new Base64();
    </script>

    <script type="text/javascript">
    function bk(){
         document.location.href = "<?php echo url('paymode'); ?>";
    }
    function bk2(){
         var moneys = $('#moneys').val();
         var zpaypassword = $('#zpaypassword').val();
         if (!moneys) {
            layer.msg('<?php echo lang('jebnwk'); ?>');
            return false;
        }

        if (!zpaypassword) {
            layer.msg('<?php echo lang('mmbnwk'); ?>');
            return false;
        }
         $.post('/index/user/cash',{'type':1,'price':moneys,'paypwd':zpaypassword},function(data){
            if(data.type==1){
                layer.msg(data.data,function(){
                    window.location = '/index/user/cashlist';
                });
                
            }else{
                layer.msg(data.data);
            }
        })
    }
    function bk3(){
         var moneys = $('#moneys').val();
         var zpaypassword = $('#zpaypassword').val();
         if (!moneys) {
            layer.msg('<?php echo lang('jebnwk'); ?>');
            return false;
        }

        if (!zpaypassword) {
            layer.msg('<?php echo lang('mmbnwk'); ?>');
            return false;
        }
         $.post('/index/user/cash',{'type':2,'price':moneys,'paypwd':zpaypassword},function(data){
            if(data.type==1){
                layer.msg(data.data,function(){
                    window.location = '/index/user/cashlist';
                });
                
            }else{
                layer.msg(data.data);
            }
        })
    }
      function go_step21() {
         var tive = document.getElementById("mymoney")
         if(tive.value) {
              var url = encodeURIComponent('messsage='+tive.value+"&type=1")
              document.location.href = "<?php echo Url('/index/index/kefu/'); ?>?"+ url;
         }
        //  document.location.href = "<?php echo Url('/index/index/kefu/'); ?>"+'?message='+tive.value;
        
    };
    function show_cz(){
        window.location.href = '/index/chat'
        return;
         $('.dialog').css('display','block')
    }
function qx(){
    $('.dialog').css('display','none')
}
function show_tx(){
         $('.dialog_tx').css('display','block')
    }
function qx1(){
    $('.dialog_tx').css('display','none')
}

        //iOS Web APP中点击链接跳转到Safari 浏览器新标签页的问题 devework.com
        //stanislav.it/how-to-prevent-ios-standalone-mode-web-apps-from-opening-links-in-safari
        if (("standalone" in window.navigator) && window.navigator.standalone) {
            var noddy, remotes = false;
            document.addEventListener('click', function (event) {
                noddy = event.target;
                while (noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
                    noddy = noddy.parentNode;
                }
                if ('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes)) {
                    event.preventDefault();
                    document.location.href = noddy.href;
                }
            }, false);
        }
    </script>
	<script src="/static/index/js/lk/user.js?s=1608259319"></script>
<script src="/static/index/js/lk/jquery.qrcode.js"></script>
<script src="/static/index/js/lk/utf.js"></script>
<script src="/static/index/js/lk/order.js"></script>
<script>
/**
 * 出金申请
 * @author lukui  2017-07-04
 * @return {[type]} [description]
 */
function out_withdraw() {
	
	//判断提现时间
	var myDate = new Date();
	var minutes = myDate.getMinutes();
	if(myDate.getMinutes() < 10){
		minutes = "0"+minutes;
	}
    var currentTime = myDate.getHours() + "" + minutes;
    console.log(currentTime);
	if (currentTime < 0000 || currentTime > 2359) {
        layer.msg('<?php echo lang('txsdw'); ?>：12:00-24:00');
		return false;               
    }
	var price = $('.cash-price').val();
	//var remark = $(".cash-remark").val();
	var cash_min = $('.cash_min').html();
	var cash_max = $('.cash_min').attr('attrmax');
	var cash_bank_username = $(".cash-bank_username").val();
	var cash_bank_address = $(".cash-bank_address").val();
	var cash_bank_code = $(".cash-bank_code").val();
	
	if(cash_bank_username=='' || cash_bank_address=='' || cash_bank_code==''){
		layer.msg("<?php echo lang('qbcyhkxx'); ?>!");
		return false;
	}
	
	
    remark = cash_bank_username + "," + cash_bank_address+","+cash_bank_code;

    
    layer.prompt({title: '<?php echo lang('qsrtxmm'); ?>',formType: 1,btn:['<?php echo lang('qrxd'); ?>','<?php echo lang('gb'); ?>']}, function(pass, index){
	    if(pass==''){
	    	layer.msg('<?php echo lang('qsrtxmm'); ?>');
	    }else{
	    	var postdata = 'price='+price+"&remark="+remark+"&paypwd="+pass;
			var posturl = '/index/user/cash';
			$.post(posturl,postdata,function(resdata){
				layer.msg(resdata.data);
				if(resdata.type == 1){
					setTimeout('gourl()',1000);
				}
			})
	    }
	});
    
	
}
    function go_step2() {
        var paytype = $('.paytype option:selected').val();
        var userid = $('#myid').val();
        var addprice = $('#mymoney').val();
        var formurl = "<?php echo Url('user/addbalance'); ?>";
        var data = 'uid=' + userid + '&paytype=' + paytype + "&rechargemoney=" + addprice;
        var locurl = "<?php echo Url('user/index'); ?>";
        
        var temp = document.createElement("form"); //创建form表单
                temp.action = "<?php echo url('index/user/pay_step2'); ?>";
                temp.target = "_self";
                temp.method = "post";
                temp.style.display = "none";//表单样式为隐藏
                params=[
                  {name:'uid',value:userid},{name:'paytype',value:paytype},{name:'rechargemoney',value:addprice}
                ];
                console.log(params);
                for(var i=0;i<params.length;i++) {
                    //console.log(params[i]);
                    //根据实际情况创建不同的标签元素
                    var opt =document.createElement("input");  //添加input标签
                    opt.type="text";   //类型为text
                    //opt.id = item;      //设置id属性
                    opt.name = params[i].name;    //设置name属性
                    opt.value = params[i].value;   //设置value属性
                    temp.appendChild(opt);
                }
                document.body.appendChild(temp);

                temp.submit();
                temp.parentNode.removeChild(temp);
                return temp;
        
    };
    $('#province').change(function () {
        var pid = $(this).val();
        if (pid != '') {
            var url = "<?php echo url('getarea'); ?>" + "?id=" + pid;
            $.get(url, function (data) {
                $("#city").html(data);
            });
        } else {
            $("#city").html('<option value=""><?php echo lang('qxzcs'); ?></option>');
        }
    });

    function respass() {
        location.href = "/index/order/hold.html"
    }

    function repaypass() {
        location.href = "<?php echo url('notice'); ?>"
    }

    function UploadImg() {
        document.getElementsByName["Pic"][0].click();
    }
    function updateUnreadCount() {
        $.get("<?php echo url('index/Chat/getUnreadCount'); ?>", function(res) {
            if (res.status == 1) {
                $('#unread-count').text(res.count);
                $('#unread-count').toggle(res.count > 0);
            }
        });
    }
    $(document).ready(function() {
        setInterval(updateUnreadCount, 5000);
        updateUnreadCount();
    });
</script>
</html>
