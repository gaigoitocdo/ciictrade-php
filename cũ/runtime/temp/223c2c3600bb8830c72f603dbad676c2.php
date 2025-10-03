<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"/www/wwwroot/isetradingstar.com/application/index/view/user/cryptocurrency.html";i:1694961976;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0037)/cryptocurrency -->
<html lang="en" mode="md" class="plt-desktop md hydrated">
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
		<title></title>
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
			ion-footer {
				display: block;
				position: relative;
				-ms-flex-order: 1;
				order: 1;
				width: 100%;
				z-index: 10
			}

			ion-footer ion-toolbar:last-of-type {
				padding-bottom: var(--ion-safe-area-bottom, 0)
			}

			.footer-md::before {
				left: 0;
				top: -2px;
				bottom: auto;
				background-position: left 0 top 0;
				position: absolute;
				width: 100%;
				height: 2px;
				background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAHBAMAAADzDtBxAAAAD1BMVEUAAAAAAAAAAAAAAAAAAABPDueNAAAABXRSTlMUCS0gBIh/TXEAAAAaSURBVAjXYxCEAgY4UIICBmMogMsgFLtAAQCNSwXZKOdPxgAAAABJRU5ErkJggg==");
				background-repeat: repeat-x;
				content: ""
			}

			[dir=rtl] .footer-md::before,
			:host-context([dir=rtl]) .footer-md::before {
				left: unset;
				right: unset;
				right: 0
			}

			[dir=rtl] .footer-md::before,
			:host-context([dir=rtl]) .footer-md::before {
				background-position: right 0 top 0
			}

			.footer-md.ion-no-border::before {
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
		<style>
			.sc-ion-modal-md-h {
				--width: 100%;
				--min-width: auto;
				--max-width: auto;
				--height: 100%;
				--min-height: auto;
				--max-height: auto;
				--overflow: hidden;
				--border-radius: 0;
				--border-width: 0;
				--border-style: none;
				--border-color: transparent;
				--background: var(--ion-background-color, #fff);
				--box-shadow: none;
				--backdrop-opacity: 0;
				left: 0;
				right: 0;
				top: 0;
				bottom: 0;
				display: -ms-flexbox;
				display: flex;
				position: absolute;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: center;
				justify-content: center;
				outline: none;
				contain: strict
			}

			.overlay-hidden.sc-ion-modal-md-h {
				display: none
			}

			.modal-wrapper.sc-ion-modal-md,
			.modal-shadow.sc-ion-modal-md {
				border-radius: var(--border-radius);
				width: var(--width);
				min-width: var(--min-width);
				max-width: var(--max-width);
				height: var(--height);
				min-height: var(--min-height);
				max-height: var(--max-height);
				border-width: var(--border-width);
				border-style: var(--border-style);
				border-color: var(--border-color);
				background: var(--background);
				-webkit-box-shadow: var(--box-shadow);
				box-shadow: var(--box-shadow);
				overflow: var(--overflow);
				z-index: 10
			}

			.modal-shadow.sc-ion-modal-md {
				position: absolute;
				background: transparent
			}

			@media only screen and (min-width: 768px) and (min-height: 600px) {
				.sc-ion-modal-md-h {
					--width: 600px;
					--height: 500px;
					--ion-safe-area-top: 0px;
					--ion-safe-area-bottom: 0px;
					--ion-safe-area-right: 0px;
					--ion-safe-area-left: 0px
				}
			}

			@media only screen and (min-width: 768px) and (min-height: 768px) {
				.sc-ion-modal-md-h {
					--width: 600px;
					--height: 600px
				}
			}

			.sc-ion-modal-md-h:first-of-type {
				--backdrop-opacity: var(--ion-backdrop-opacity, 0.32)
			}

			@media only screen and (min-width: 768px) and (min-height: 600px) {
				.sc-ion-modal-md-h {
					--border-radius: 2px
				}

				.sc-ion-modal-md-h:first-of-type {
					--box-shadow: 0 28px 48px rgba(0, 0, 0, 0.4)
				}
			}

			.modal-wrapper.sc-ion-modal-md {
				-webkit-transform: translate3d(0, 40px, 0);
				transform: translate3d(0, 40px, 0);
				opacity: 0.01
			}
		</style>
		<style>
			ion-card-content {
				display: block;
				position: relative
			}

			.card-content-md {
				padding-left: 16px;
				padding-right: 16px;
				padding-top: 13px;
				padding-bottom: 13px;
				font-size: 14px;
				line-height: 1.5
			}

			@supports ((-webkit-margin-start: 0) or (margin-inline-start: 0)) or (-webkit-margin-start: 0) {
				.card-content-md {
					padding-left: unset;
					padding-right: unset;
					-webkit-padding-start: 16px;
					padding-inline-start: 16px;
					-webkit-padding-end: 16px;
					padding-inline-end: 16px
				}
			}

			.card-content-md h1 {
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 2px;
				font-size: 24px;
				font-weight: normal
			}

			.card-content-md h2 {
				margin-left: 0;
				margin-right: 0;
				margin-top: 2px;
				margin-bottom: 2px;
				font-size: 16px;
				font-weight: normal
			}

			.card-content-md h3,
			.card-content-md h4,
			.card-content-md h5,
			.card-content-md h6 {
				margin-left: 0;
				margin-right: 0;
				margin-top: 2px;
				margin-bottom: 2px;
				font-size: 14px;
				font-weight: normal
			}

			.card-content-md p {
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 2px;
				font-size: 14px;
				font-weight: normal;
				line-height: 1.5
			}

			ion-card-header+.card-content-md {
				padding-top: 0
			}
		</style>
		<style>
			.sc-ion-alert-md-h {
				--min-width: 250px;
				--width: auto;
				--min-height: auto;
				--height: auto;
				--max-height: 90%;
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				left: 0;
				right: 0;
				top: 0;
				bottom: 0;
				display: -ms-flexbox;
				display: flex;
				position: absolute;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: center;
				justify-content: center;
				outline: none;
				font-family: var(--ion-font-family, inherit);
				contain: strict;
				-ms-touch-action: none;
				touch-action: none;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				z-index: 1001
			}

			.overlay-hidden.sc-ion-alert-md-h {
				display: none
			}

			.alert-top.sc-ion-alert-md-h {
				padding-top: 50px;
				-ms-flex-align: start;
				align-items: flex-start
			}

			.alert-wrapper.sc-ion-alert-md {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: column;
				flex-direction: column;
				width: var(--width);
				min-width: var(--min-width);
				max-width: var(--max-width);
				height: var(--height);
				min-height: var(--min-height);
				max-height: var(--max-height);
				background: var(--background);
				contain: content;
				opacity: 0;
				z-index: 10
			}

			.alert-title.sc-ion-alert-md {
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 0;
				padding-left: 0;
				padding-right: 0;
				padding-top: 0;
				padding-bottom: 0
			}

			.alert-sub-title.sc-ion-alert-md {
				margin-left: 0;
				margin-right: 0;
				margin-top: 5px;
				margin-bottom: 0;
				padding-left: 0;
				padding-right: 0;
				padding-top: 0;
				padding-bottom: 0;
				font-weight: normal
			}

			.alert-message.sc-ion-alert-md {
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				-webkit-overflow-scrolling: touch;
				overflow-y: auto;
				overscroll-behavior-y: contain
			}

			.alert-checkbox-group.sc-ion-alert-md::-webkit-scrollbar,
			.alert-radio-group.sc-ion-alert-md::-webkit-scrollbar,
			.alert-message.sc-ion-alert-md::-webkit-scrollbar {
				display: none
			}

			.alert-input.sc-ion-alert-md {
				padding-left: 0;
				padding-right: 0;
				padding-top: 10px;
				padding-bottom: 10px;
				width: 100%;
				border: 0;
				background: inherit;
				font: inherit;
				-webkit-box-sizing: border-box;
				box-sizing: border-box
			}

			.alert-button-group.sc-ion-alert-md {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-direction: row;
				flex-direction: row;
				width: 100%
			}

			.alert-button-group-vertical.sc-ion-alert-md {
				-ms-flex-direction: column;
				flex-direction: column;
				-ms-flex-wrap: nowrap;
				flex-wrap: nowrap
			}

			.alert-button.sc-ion-alert-md {
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 0;
				display: block;
				border: 0;
				font-size: 14px;
				line-height: 20px;
				z-index: 0
			}

			.alert-button.ion-focused.sc-ion-alert-md,
			.alert-tappable.ion-focused.sc-ion-alert-md {
				background: var(--ion-color-step-100, #e6e6e6)
			}

			.alert-button-inner.sc-ion-alert-md {
				display: -ms-flexbox;
				display: flex;
				-ms-flex-flow: row nowrap;
				flex-flow: row nowrap;
				-ms-flex-negative: 0;
				flex-shrink: 0;
				-ms-flex-align: center;
				align-items: center;
				-ms-flex-pack: center;
				justify-content: center;
				width: 100%;
				height: 100%
			}

			.alert-input-disabled.sc-ion-alert-md,
			.alert-checkbox-button-disabled.sc-ion-alert-md .alert-button-inner.sc-ion-alert-md,
			.alert-radio-button-disabled.sc-ion-alert-md .alert-button-inner.sc-ion-alert-md {
				cursor: default;
				opacity: 0.5;
				pointer-events: none
			}

			.alert-tappable.sc-ion-alert-md {
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 0;
				padding-left: 0;
				padding-right: 0;
				padding-top: 0;
				padding-bottom: 0;
				display: -ms-flexbox;
				display: flex;
				width: 100%;
				border: 0;
				background: transparent;
				font-size: inherit;
				line-height: initial;
				text-align: start;
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none;
				contain: strict
			}

			.alert-button.sc-ion-alert-md,
			.alert-checkbox.sc-ion-alert-md,
			.alert-input.sc-ion-alert-md,
			.alert-radio.sc-ion-alert-md {
				outline: none
			}

			.alert-radio-icon.sc-ion-alert-md,
			.alert-checkbox-icon.sc-ion-alert-md,
			.alert-checkbox-inner.sc-ion-alert-md {
				-webkit-box-sizing: border-box;
				box-sizing: border-box
			}

			textarea.alert-input.sc-ion-alert-md {
				min-height: 37px;
				resize: none
			}

			.sc-ion-alert-md-h {
				--background: var(--ion-overlay-background-color, var(--ion-background-color, #fff));
				--max-width: 280px;
				--backdrop-opacity: var(--ion-backdrop-opacity, 0.32);
				font-size: 14px
			}

			.alert-wrapper.sc-ion-alert-md {
				border-radius: 4px;
				-webkit-box-shadow: 0 11px 15px -7px rgba(0, 0, 0, 0.2), 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12);
				box-shadow: 0 11px 15px -7px rgba(0, 0, 0, 0.2), 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12)
			}

			.alert-head.sc-ion-alert-md {
				padding-left: 23px;
				padding-right: 23px;
				padding-top: 20px;
				padding-bottom: 15px;
				text-align: start
			}

			@supports ((-webkit-margin-start: 0) or (margin-inline-start: 0)) or (-webkit-margin-start: 0) {
				.alert-head.sc-ion-alert-md {
					padding-left: unset;
					padding-right: unset;
					-webkit-padding-start: 23px;
					padding-inline-start: 23px;
					-webkit-padding-end: 23px;
					padding-inline-end: 23px
				}
			}

			.alert-title.sc-ion-alert-md {
				color: var(--ion-text-color, #000);
				font-size: 20px;
				font-weight: 500
			}

			.alert-sub-title.sc-ion-alert-md {
				color: var(--ion-text-color, #000);
				font-size: 16px
			}

			.alert-message.sc-ion-alert-md,
			.alert-input-group.sc-ion-alert-md {
				padding-left: 24px;
				padding-right: 24px;
				padding-top: 20px;
				padding-bottom: 20px;
				color: var(--ion-color-step-550, #737373)
			}

			@supports ((-webkit-margin-start: 0) or (margin-inline-start: 0)) or (-webkit-margin-start: 0) {

				.alert-message.sc-ion-alert-md,
				.alert-input-group.sc-ion-alert-md {
					padding-left: unset;
					padding-right: unset;
					-webkit-padding-start: 24px;
					padding-inline-start: 24px;
					-webkit-padding-end: 24px;
					padding-inline-end: 24px
				}
			}

			.alert-message.sc-ion-alert-md {
				max-height: 240px;
				font-size: 16px
			}

			.alert-message.sc-ion-alert-md:empty {
				padding-left: 0;
				padding-right: 0;
				padding-top: 0;
				padding-bottom: 0
			}

			.alert-head.sc-ion-alert-md+.alert-message.sc-ion-alert-md {
				padding-top: 0
			}

			.alert-input.sc-ion-alert-md {
				margin-left: 0;
				margin-right: 0;
				margin-top: 5px;
				margin-bottom: 5px;
				border-bottom: 1px solid var(--ion-color-step-150, #d9d9d9);
				color: var(--ion-text-color, #000)
			}

			.alert-input.sc-ion-alert-md::-webkit-input-placeholder {
				color: var(--ion-placeholder-color, var(--ion-color-step-400, #999999));
				font-family: inherit;
				font-weight: inherit
			}

			.alert-input.sc-ion-alert-md::-moz-placeholder {
				color: var(--ion-placeholder-color, var(--ion-color-step-400, #999999));
				font-family: inherit;
				font-weight: inherit
			}

			.alert-input.sc-ion-alert-md:-ms-input-placeholder {
				color: var(--ion-placeholder-color, var(--ion-color-step-400, #999999));
				font-family: inherit;
				font-weight: inherit
			}

			.alert-input.sc-ion-alert-md::-ms-input-placeholder {
				color: var(--ion-placeholder-color, var(--ion-color-step-400, #999999));
				font-family: inherit;
				font-weight: inherit
			}

			.alert-input.sc-ion-alert-md::placeholder {
				color: var(--ion-placeholder-color, var(--ion-color-step-400, #999999));
				font-family: inherit;
				font-weight: inherit
			}

			.alert-input.sc-ion-alert-md::-ms-clear {
				display: none
			}

			.alert-input.sc-ion-alert-md:focus {
				margin-bottom: 4px;
				border-bottom: 2px solid var(--ion-color-primary, #3880ff)
			}

			.alert-radio-group.sc-ion-alert-md,
			.alert-checkbox-group.sc-ion-alert-md {
				position: relative;
				max-height: 240px;
				border-top: 1px solid var(--ion-color-step-150, #d9d9d9);
				border-bottom: 1px solid var(--ion-color-step-150, #d9d9d9);
				overflow: auto
			}

			.alert-tappable.sc-ion-alert-md {
				position: relative;
				height: 48px;
				overflow: hidden
			}

			.alert-radio-label.sc-ion-alert-md {
				padding-left: 52px;
				padding-right: 26px;
				padding-top: 13px;
				padding-bottom: 13px;
				-ms-flex: 1;
				flex: 1;
				color: var(--ion-color-step-850, #262626);
				font-size: 16px;
				text-overflow: ellipsis;
				white-space: nowrap;
				overflow: hidden
			}

			@supports ((-webkit-margin-start: 0) or (margin-inline-start: 0)) or (-webkit-margin-start: 0) {
				.alert-radio-label.sc-ion-alert-md {
					padding-left: unset;
					padding-right: unset;
					-webkit-padding-start: 52px;
					padding-inline-start: 52px;
					-webkit-padding-end: 26px;
					padding-inline-end: 26px
				}
			}

			.alert-radio-icon.sc-ion-alert-md {
				left: 26px;
				top: 0;
				border-radius: 50%;
				display: block;
				position: relative;
				width: 20px;
				height: 20px;
				border-width: 2px;
				border-style: solid;
				border-color: var(--ion-color-step-550, #737373)
			}

			[dir=rtl].sc-ion-alert-md .alert-radio-icon.sc-ion-alert-md,
			[dir=rtl].sc-ion-alert-md-h .alert-radio-icon.sc-ion-alert-md,
			[dir=rtl] .sc-ion-alert-md-h .alert-radio-icon.sc-ion-alert-md {
				left: unset;
				right: unset;
				right: 26px
			}

			.alert-radio-inner.sc-ion-alert-md {
				left: 3px;
				top: 3px;
				border-radius: 50%;
				position: absolute;
				width: 10px;
				height: 10px;
				-webkit-transform: scale3d(0, 0, 0);
				transform: scale3d(0, 0, 0);
				-webkit-transition: -webkit-transform 280ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: -webkit-transform 280ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: transform 280ms cubic-bezier(0.4, 0, 0.2, 1);
				transition: transform 280ms cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform 280ms cubic-bezier(0.4, 0, 0.2, 1);
				background-color: var(--ion-color-primary, #3880ff)
			}

			[dir=rtl].sc-ion-alert-md .alert-radio-inner.sc-ion-alert-md,
			[dir=rtl].sc-ion-alert-md-h .alert-radio-inner.sc-ion-alert-md,
			[dir=rtl] .sc-ion-alert-md-h .alert-radio-inner.sc-ion-alert-md {
				left: unset;
				right: unset;
				right: 3px
			}

			[aria-checked=true].sc-ion-alert-md .alert-radio-label.sc-ion-alert-md {
				color: var(--ion-color-step-850, #262626)
			}

			[aria-checked=true].sc-ion-alert-md .alert-radio-icon.sc-ion-alert-md {
				border-color: var(--ion-color-primary, #3880ff)
			}

			[aria-checked=true].sc-ion-alert-md .alert-radio-inner.sc-ion-alert-md {
				-webkit-transform: scale3d(1, 1, 1);
				transform: scale3d(1, 1, 1)
			}

			.alert-checkbox-label.sc-ion-alert-md {
				padding-left: 53px;
				padding-right: 26px;
				padding-top: 13px;
				padding-bottom: 13px;
				-ms-flex: 1;
				flex: 1;
				color: var(--ion-color-step-850, #262626);
				font-size: 16px;
				text-overflow: ellipsis;
				white-space: nowrap;
				overflow: hidden
			}

			@supports ((-webkit-margin-start: 0) or (margin-inline-start: 0)) or (-webkit-margin-start: 0) {
				.alert-checkbox-label.sc-ion-alert-md {
					padding-left: unset;
					padding-right: unset;
					-webkit-padding-start: 53px;
					padding-inline-start: 53px;
					-webkit-padding-end: 26px;
					padding-inline-end: 26px
				}
			}

			.alert-checkbox-icon.sc-ion-alert-md {
				left: 26px;
				top: 0;
				border-radius: 2px;
				position: relative;
				width: 16px;
				height: 16px;
				border-width: 2px;
				border-style: solid;
				border-color: var(--ion-color-step-550, #737373);
				contain: strict
			}

			[dir=rtl].sc-ion-alert-md .alert-checkbox-icon.sc-ion-alert-md,
			[dir=rtl].sc-ion-alert-md-h .alert-checkbox-icon.sc-ion-alert-md,
			[dir=rtl] .sc-ion-alert-md-h .alert-checkbox-icon.sc-ion-alert-md {
				left: unset;
				right: unset;
				right: 26px
			}

			[aria-checked=true].sc-ion-alert-md .alert-checkbox-icon.sc-ion-alert-md {
				border-color: var(--ion-color-primary, #3880ff);
				background-color: var(--ion-color-primary, #3880ff)
			}

			[aria-checked=true].sc-ion-alert-md .alert-checkbox-inner.sc-ion-alert-md {
				left: 3px;
				top: 0;
				position: absolute;
				width: 6px;
				height: 10px;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg);
				border-width: 2px;
				border-top-width: 0;
				border-left-width: 0;
				border-style: solid;
				border-color: var(--ion-color-primary-contrast, #fff)
			}

			[dir=rtl].sc-ion-alert-md [aria-checked=true].sc-ion-alert-md .alert-checkbox-inner.sc-ion-alert-md,
			[dir=rtl].sc-ion-alert-md-h [aria-checked=true].sc-ion-alert-md .alert-checkbox-inner.sc-ion-alert-md,
			[dir=rtl] .sc-ion-alert-md-h [aria-checked=true].sc-ion-alert-md .alert-checkbox-inner.sc-ion-alert-md {
				left: unset;
				right: unset;
				right: 3px
			}

			.alert-button-group.sc-ion-alert-md {
				padding-left: 8px;
				padding-right: 8px;
				padding-top: 8px;
				padding-bottom: 8px;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				-ms-flex-wrap: wrap-reverse;
				flex-wrap: wrap-reverse;
				-ms-flex-pack: end;
				justify-content: flex-end
			}

			@supports ((-webkit-margin-start: 0) or (margin-inline-start: 0)) or (-webkit-margin-start: 0) {
				.alert-button-group.sc-ion-alert-md {
					padding-left: unset;
					padding-right: unset;
					-webkit-padding-start: 8px;
					padding-inline-start: 8px;
					-webkit-padding-end: 8px;
					padding-inline-end: 8px
				}
			}

			.alert-button.sc-ion-alert-md {
				border-radius: 2px;
				margin-left: 0;
				margin-right: 8px;
				margin-top: 0;
				margin-bottom: 0;
				padding-left: 10px;
				padding-right: 10px;
				padding-top: 10px;
				padding-bottom: 10px;
				position: relative;
				background-color: transparent;
				color: var(--ion-color-primary, #3880ff);
				font-weight: 500;
				text-align: end;
				text-transform: uppercase;
				overflow: hidden
			}

			@supports ((-webkit-margin-start: 0) or (margin-inline-start: 0)) or (-webkit-margin-start: 0) {
				.alert-button.sc-ion-alert-md {
					margin-left: unset;
					margin-right: unset;
					-webkit-margin-start: 0;
					margin-inline-start: 0;
					-webkit-margin-end: 8px;
					margin-inline-end: 8px
				}
			}

			@supports ((-webkit-margin-start: 0) or (margin-inline-start: 0)) or (-webkit-margin-start: 0) {
				.alert-button.sc-ion-alert-md {
					padding-left: unset;
					padding-right: unset;
					-webkit-padding-start: 10px;
					padding-inline-start: 10px;
					-webkit-padding-end: 10px;
					padding-inline-end: 10px
				}
			}

			.alert-button-inner.sc-ion-alert-md {
				-ms-flex-pack: end;
				justify-content: flex-end
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
		</style>
		<link href="/static/index/user/chunk-008cd3d6.7d4efbaa.js.下载" rel="prefetch">
		<link href="/static/index/user/chunk-02c995b5.dfd515b6.js.下载" rel="prefetch">

		<link href="/static/index/user/chunk-25d83ca8.81b08d8c.js.下载" rel="prefetch">

		<link href="/static/index/user/chunk-2d0a463b.8d43012a.js.下载" rel="prefetch">
		<link href="/static/index/user/chunk-2d0b33e3.64be60e2.js.下载" rel="prefetch">
		<link href="/static/index/user/chunk-2d0b62ff.f98ff668.js.下载" rel="prefetch">

		<link href="/static/index/user/chunk-2d0c073f.51dd8b12.js.下载" rel="prefetch">
		<link href="/static/index/user/chunk-2d0c1ca1.a8741f4e.js.下载" rel="prefetch">

		<link href="/static/index/user/chunk-2d0da04a.219ce0c4.js.下载" rel="prefetch">

		<link href="/static/index/user/chunk-2d209619.2be46e60.js.下载" rel="prefetch">

		<link href="/static/index/user/chunk-2d218068.a3d18fba.js.下载" rel="prefetch">

		<link href="/static/index/user/chunk-2d2376e6.a351546d.js.下载" rel="prefetch">

		<link href="/static/index/user/chunk-34f7327c.52a3b5f9.js.下载" rel="prefetch">
		<link href="/static/index/user/chunk-37f2300e.b167a138.js.下载" rel="prefetch">

		<link href="/static/index/user/chunk-41c0f7a4.ea1e2d66.js.下载" rel="prefetch">
		<link href="/static/index/user/chunk-462c869e.f0e09ed2.js.下载" rel="prefetch">

		<link href="/static/index/user/chunk-541ea42d.0d2b1e35.js.下载" rel="prefetch">

		<link href="/static/index/user/chunk-59d4c87c.ab94b52e.js.下载" rel="prefetch">
		<link href="/static/index/user/chunk-5a8ac886.8430e3d7.js.下载" rel="prefetch">

		<link href="/static/index/user/chunk-69eb8776.ffed9f83.js.下载" rel="prefetch">

		<link href="/static/index/user/chunk-79f1dac7.06662d1e.js.下载" rel="prefetch">

		<link href="/static/index/user/chunk-8bb7f81e.6794ad2b.js.下载" rel="prefetch">

		<link href="/static/index/user/chunk-f858ef4e.ffd7a8c3.js.下载" rel="prefetch">

		<link href="/static/index/user/app.9280c1c6.css" rel="preload" as="style">
		<link href="/static/index/user/chunk-vendors.4f44ff3e.css" rel="preload" as="style">
		<link href="/static/index/user/app.f8729b16.js.下载" rel="preload" as="script">
		<link href="/static/index/user/chunk-vendors.6283f2b7.js.下载" rel="preload" as="script">
		<link href="/static/index/user/chunk-vendors.4f44ff3e.css" rel="stylesheet">
		<link href="/static/index/user/app.9280c1c6.css" rel="stylesheet">
		<script charset="utf-8" src="/static/index/user/chunk-34f7327c.52a3b5f9.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-25d83ca8.81b08d8c.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-462c869e.f0e09ed2.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-8bb7f81e.6794ad2b.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-02c995b5.dfd515b6.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d209619.2be46e60.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d218068.a3d18fba.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d0c1ca1.a8741f4e.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d2376e6.a351546d.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d0b33e3.64be60e2.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-5a8ac886.8430e3d7.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d0a463b.8d43012a.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d0b62ff.f98ff668.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d0da04a.219ce0c4.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-59d4c87c.ab94b52e.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-69eb8776.ffed9f83.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-37f2300e.b167a138.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-f858ef4e.ffd7a8c3.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-2d0c073f.51dd8b12.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-541ea42d.0d2b1e35.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-79f1dac7.06662d1e.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-41c0f7a4.ea1e2d66.js.下载"></script>
		<script charset="utf-8" src="/static/index/user/chunk-008cd3d6.7d4efbaa.js.下载"></script>
		<style>body {font-family:Arial;width:100%;max-width: 1600px;margin: 0 auto;position:relative}.box #nav[data-v-12171d70]{width:100%!important;max-width: 1600px!important}.box[data-v-28ad7794]{max-width: 1600px!important;transform: translateX(-50%);left:50%!important}*{max-width:100%}*::-webkit-scrollbar{display:none}</style>
	</head>
	<body id="body" class="">
		<div id="app" data-v-app="" style="color: #fff;">
			<ion-app class="md ion-page hydrated">
				<ion-router-outlet id="ion-router-outlet" class="hydrated">
					<div class="ion-page ion-page-hidden" id="tabs-ion-page" style="z-index: 100;" aria-hidden="true">
						<ion-tabs id="tabs-ion-tabs"
							style="display: flex; position: absolute; inset: 0px; flex-direction: column; width: 100%; height: 100%; contain: size layout style; z-index: 0;">
							<div class="tabs-inner"
								style="position: relative; flex: 1 1 0%; contain: size layout style;">
								<ion-router-outlet tabs="true" class="hydrated">
									<div class="ion-page ion-page-hidden" data-v-42757218="" style="z-index: 100;"
										aria-hidden="true">
										<ion-content class="md hydrated" data-v-42757218=""
											style="--offset-top:0px; --offset-bottom:57px;">
											<div class="q-header" data-v-42757218="">
												<div data-v-42757218="">
													<div class="col-th-max" data-v-42757218=""
														style="margin: 10px; width: 95%;">
														<ion-slides
															class="md slides-md swiper-container hydrated swiper-container-initialized swiper-container-vertical"
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
												<div class="q-buttons" data-v-42757218="">
													<div class="col" data-v-42757218="">
														<div data-v-19622b17="" data-v-42757218="">
															<div class="col-th" data-v-19622b17=""
																style="display: none;">
																<div class="icon" data-v-19622b17=""><img
																		src="/static/index/user/withdraw.87fec756.svg"
																		alt="" data-v-19622b17=""></div>
																<div class="nav-box" data-v-19622b17="">提现</div>
															</div>
															<div class="min-box" data-v-19622b17="">
																<div class="icon" data-v-19622b17=""><img
																		src="/static/index/user/withdraw.87fec756.svg"
																		alt="" data-v-19622b17=""></div>
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
																		src="/static/index/user/recharge.45008929.svg"
																		alt="" data-v-4d5fa6e4=""></div>
																<div class="nav-box" data-v-4d5fa6e4="">充值</div>
															</div>
															<div class="min-box" data-v-4d5fa6e4="">
																<div class="icon" data-v-4d5fa6e4=""><img
																		src="/static/index/user/recharge.45008929.svg"
																		alt="" data-v-4d5fa6e4=""></div>
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
																	<span><img
																			src="/static/index/user/cny.350cf10d.svg"
																			alt=""
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
															class="md in-segment segment-button-has-label segment-button-has-label-only segment-button-checked segment-button-layout-icon-top ion-activatable ion-activatable-instant ion-focusable hydrated"
															data-v-42757218="">
															<ion-label
																class="sc-ion-label-md-h sc-ion-label-md-s md hydrated"
																data-v-42757218="">外汇</ion-label>
														</ion-segment-button>
														<ion-segment-button
															class="md in-segment segment-button-has-label segment-button-has-label-only segment-button-layout-icon-top ion-activatable ion-activatable-instant ion-focusable hydrated"
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
																			<div class="price bg-r" data-v-69fe8110=""
																				style="text-align: right;">0.99476</div>
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
																				style="text-align: right;">0.85751</div>
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
																			<div class="price bg-g" data-v-69fe8110=""
																				style="text-align: right;">0.64116</div>
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
																			<div class="price bg-g" data-v-69fe8110=""
																				style="text-align: right;">7.2688</div>
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
																			<div class="price bg-g" data-v-69fe8110=""
																				style="text-align: right;">1.3617</div>
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
																				style="text-align: right;">147.795</div>
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
																				style="text-align: right;">0.99631</div>
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
																				style="text-align: right;">1.57909</div>
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
																				style="text-align: right;">171.46636
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
																				style="text-align: right;">1.80658</div>
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
																				style="text-align: right;">1.15972</div>
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
											style="background: rgb(0, 0, 0); --offset-top:0px; --offset-bottom:57px;">
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
														<ion-row class="md hydrated">
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
											<div class="nav">
												<ion-row class="md hydrated">
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th-max">
															<ion-slides
																class="md slides-md swiper-container hydrated swiper-container-initialized swiper-container-vertical">
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
														<div data-v-4d5fa6e4="">
															<div class="col-th" data-v-4d5fa6e4="">
																<div class="icon" data-v-4d5fa6e4=""><img
																		src="/static/index/user/recharge.45008929.svg"
																		alt="" data-v-4d5fa6e4=""></div>
																<div class="nav-box" data-v-4d5fa6e4="">充值</div>
															</div>
															<div class="min-box" data-v-4d5fa6e4=""
																style="display: none;">
																<div class="icon" data-v-4d5fa6e4=""><img
																		src="/static/index/user/recharge.45008929.svg"
																		alt="" data-v-4d5fa6e4=""></div>
																<div class="min-nav-box" data-v-4d5fa6e4="">充值</div>
															</div>
															<div data-v-4d5fa6e4="" style="display: none;"></div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div data-v-19622b17="">
															<div class="col-th" data-v-19622b17="">
																<div class="icon" data-v-19622b17=""><img
																		src="/static/index/user/withdraw.87fec756.svg"
																		alt="" data-v-19622b17=""></div>
																<div class="nav-box" data-v-19622b17="">提现</div>
															</div>
															<div class="min-box" data-v-19622b17=""
																style="display: none;">
																<div class="icon" data-v-19622b17=""><img
																		src="/static/index/user/withdraw.87fec756.svg"
																		alt="" data-v-19622b17=""></div>
																<div class="min-nav-box" data-v-19622b17="">提现</div>
															</div>
															<div data-v-19622b17="" style="display: none;"></div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/rechargelist.46d09a30.svg"
																	alt=""></div>
															<div class="nav-box">充值记录</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/withdrawlist.d526c20d.svg"
																	alt=""></div>
															<div class="nav-box">提现记录</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/assets.4eda1e5b.svg"
																	alt=""></div>
															<div class="nav-box">个人资产</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/key.59ef0d05.svg"
																	alt=""></div>
															<div class="nav-box">修改密码</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/bankcard.b9fc04a2.svg"
																	alt=""></div>
															<div class="nav-box">收款方式</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/intro.cc1d81ac.svg"
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
									<div class="ion-page ion-page-hidden" data-v-db0b1d88="" style="z-index: 100;"
										aria-hidden="true">
										<ion-content class="md hydrated" data-v-db0b1d88=""
											style="--offset-top:0px; --offset-bottom:57px;">
											<div class="list-box" data-v-db0b1d88="">
												<div class="o-header" data-v-db0b1d88="">
													<div class="header-box" data-v-db0b1d88="">
														<ion-row class="md hydrated" data-v-db0b1d88="">
															<ion-col class="md hydrated" data-v-db0b1d88=""
																style="flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
																<div class="label" data-v-db0b1d88="">用户名</div>
																<div class="name" data-v-db0b1d88="">Eason123</div>
															</ion-col>
														</ion-row>
														<ion-row class="md hydrated" data-v-db0b1d88="">
															<ion-col class="md hydrated" data-v-db0b1d88=""
																style="flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
																<div class="label" data-v-db0b1d88="">今日总盈亏</div>
																<div class="money-box bg-r" data-v-db0b1d88=""><span
																		class="money bg-g"
																		data-v-db0b1d88="">0</span><span
																		data-v-db0b1d88=""
																		style="padding-left: 15px; font-size: 12px;">同比昨日
																		<ion-icon data-v-db0b1d88="" role="img"
																			class="md hydrated"></ion-icon>$ 0</span>
																</div>
															</ion-col>
														</ion-row>
														<ion-row class="md hydrated" data-v-db0b1d88="">
															<ion-col class="md hydrated" data-v-db0b1d88=""
																style="flex: 0 0 calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%);">
																<div class="label" data-v-db0b1d88="">今日总支出</div>
																<div class="money-box bg-r" data-v-db0b1d88=""><span
																		class="money-min"
																		data-v-db0b1d88="">0</span><span
																		data-v-db0b1d88=""
																		style="padding-left: 15px; font-size: 12px;">
																		<ion-icon data-v-db0b1d88="" role="img"
																			class="md hydrated"></ion-icon> 0
																	</span></div>
															</ion-col>
															<ion-col class="md hydrated" data-v-db0b1d88=""
																style="flex: 0 0 calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(6 / var(--ion-grid-columns, 12)) * 100%);">
																<div class="label" data-v-db0b1d88="">今日总收入</div>
																<div class="money-box bg-r" data-v-db0b1d88=""><span
																		class="money-min"
																		data-v-db0b1d88="">0</span><span
																		data-v-db0b1d88=""
																		style="padding-left: 15px; font-size: 12px;">
																		<ion-icon data-v-db0b1d88="" role="img"
																			class="md hydrated"></ion-icon> 0
																	</span></div>
															</ion-col>
														</ion-row>
													</div>
												</div>
												<div class="order-box" data-v-db0b1d88="">
													<ion-segment class="md segment-scrollable hydrated"
														data-v-db0b1d88="">
														<ion-segment-button
															class="md in-segment segment-button-has-label segment-button-has-label-only segment-button-checked segment-button-layout-icon-top ion-activatable ion-activatable-instant ion-focusable hydrated"
															data-v-db0b1d88="">
															<ion-label
																class="sc-ion-label-md-h sc-ion-label-md-s md hydrated"
																data-v-db0b1d88="">持仓</ion-label>
														</ion-segment-button>
														<ion-segment-button
															class="md in-segment segment-button-has-label segment-button-has-label-only segment-button-layout-icon-top ion-activatable ion-activatable-instant ion-focusable hydrated segment-button-after-checked"
															data-v-db0b1d88="">
															<ion-label
																class="sc-ion-label-md-h sc-ion-label-md-s md hydrated"
																data-v-db0b1d88="">平仓</ion-label>
														</ion-segment-button>
													</ion-segment>
													<div class="scroll-box" data-v-db0b1d88="">
														<div class="yo-scroll down" data-v-40245696=""
															data-v-db0b1d88="" style="display: none;">
															<section class="inner" data-v-40245696=""
																style="transform: translate3d(0px, 0px, 0px);">
																<header class="pull-refresh" data-v-40245696=""><span
																		class="down-tip" data-v-40245696=""><i
																			class="icon-bottom"
																			data-v-40245696=""></i><span
																			data-v-40245696="">Pull to
																			refresh</span></span><span class="up-tip"
																		data-v-40245696=""><i class="icon-top"
																			data-v-40245696=""></i><span
																			data-v-40245696="">Release to
																			refresh</span></span><span
																		class="refresh-tip" data-v-40245696="">
																		Updating... </span></header>
																<div class="finish" data-v-db0b1d88=""
																	data-v-40245696-s="" style="padding-top: 10px;">
																	<div class="no-box" data-v-123fe521=""
																		data-v-db0b1d88="" data-v-40245696-s=""><img
																			src="/static/index/user/nodata.19d775ca.png"
																			alt="" data-v-123fe521="">
																		<p data-v-123fe521="">暂无数据</p>
																	</div>
																</div>
																<footer id="loading" class="load-more"
																	data-v-40245696="" style="display: none;"><span
																		data-v-40245696="">No more data</span></footer>
																<div data-v-40245696=""></div>
															</section>
														</div>
														<div class="pending" data-v-db0b1d88=""
															style="padding-top: 10px;">
															<div class="no-box" data-v-123fe521="" data-v-db0b1d88="">
																<img src="/static/index/user/nodata.19d775ca.png"
																	alt="" data-v-123fe521="">
																<p data-v-123fe521="">暂无数据</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</ion-content>
									</div>
									<div class="ion-page ion-page-hidden"
										style="overflow: hidden; padding: 0px; margin: 0px; z-index: 100;"
										aria-hidden="true">
										<ion-header class="md header-md header-collapse-none hydrated" role="banner">
											<!---->
											<ion-toolbar class="toolbar-title-default md in-toolbar hydrated">
												<ion-title class="md title-default hydrated"
													style="padding-left: 20px;">在线客服</ion-title>
											</ion-toolbar>
										</ion-header>
										<ion-content class="md hydrated"
											style="--offset-top:56px; --offset-bottom:105px;">
											<div class="chats">
												<div class="messages">
													<!---->
													<div>
														<div class="message-date"><span
																class="time-box">2022-10-31</span></div>
														<div class="message-item" style="cursor: default;">
															<div class="name">customer service</div>
															<div class="text-message"><span class="text">Hello, I wish
																	you a happy financial management. Customer service
																	may be busy, please wait patiently for a
																	reply.</span><span style="float: right;"><span
																		class="datetime">11:09</span>
																	<!---->
																</span></div>
															<div class="avatar avatar-l">
																<ion-avatar class="md hydrated"
																	style="width: 40px; height: 40px;"><img
																		src="/static/index/user/service.3d08301d.png">
																</ion-avatar>
															</div>
														</div>
														<div style="display: none;"></div>
														<div style="display: none;"></div>
													</div>
													<div>
														<!---->
														<div class="message-item" style="cursor: default;">
															<div class="name">customer service</div>
															<div class="text-message"><span class="text">Hello, I wish
																	you a happy financial management. Customer service
																	may be busy, please wait patiently for a
																	reply.</span><span style="float: right;"><span
																		class="datetime">11:09</span>
																	<!---->
																</span></div>
															<div class="avatar avatar-l">
																<ion-avatar class="md hydrated"
																	style="width: 40px; height: 40px;"><img
																		src="/static/index/user/service.3d08301d.png">
																</ion-avatar>
															</div>
														</div>
														<div style="display: none;"></div>
														<div style="display: none;"></div>
													</div>
												</div>
											</div>
										</ion-content>
										<ion-footer class="md footer-md hydrated" role="contentinfo">
											<!---->
											<div class="send-message" data-v-b27e5320=""><textarea class="send-text"
													rows="1" data-v-b27e5320=""></textarea>
												<ion-icon class="send-icon md hydrated" data-v-b27e5320="" role="img">
												</ion-icon>
												<div data-v-b27e5320=""
													style="position: relative; margin: 3px 5px 0px;">
													<ion-icon class="send-icon md hydrated" data-v-b27e5320=""
														role="img"></ion-icon><input type="file" accept="image/*"
														class="image-upload" name="upload" data-v-b27e5320="">
												</div>
												<ion-button
													class="md button button-block button-solid button-disabled ion-activatable ion-focusable hydrated"
													data-v-b27e5320="" aria-disabled="true" disabled="" expand="block">
													发送</ion-button>
											</div>
											<!---->
										</ion-footer>
									</div>
								</ion-router-outlet>
							</div>
							<ion-tab-bar slot="bottom" role="tablist" class="md hydrated">
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
										<!----><img class="tab-icon" src="/static/index/user/service.3520e54a.svg"
											alt="">
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
					<div class="ion-page ion-page-hidden" id="tabs-ion-page" style="z-index: 100;" aria-hidden="true">
						<ion-tabs id="tabs-ion-tabs"
							style="display: flex; position: absolute; inset: 0px; flex-direction: column; width: 100%; height: 100%; contain: size layout style; z-index: 0;">
							<div class="tabs-inner"
								style="position: relative; flex: 1 1 0%; contain: size layout style;">
								<ion-router-outlet tabs="true" class="hydrated">
									<div class="ion-page">
										<ion-content class="md hydrated"
											style="background: rgb(0, 0, 0); --offset-top:0px; --offset-bottom:57px;">
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
														<ion-row class="md hydrated">
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
											<div class="nav">
												<ion-row class="md hydrated">
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(12 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th-max">
															<ion-slides
																class="md slides-md swiper-container hydrated swiper-container-initialized swiper-container-vertical">
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
														<div data-v-4d5fa6e4="">
															<div class="col-th" data-v-4d5fa6e4="">
																<div class="icon" data-v-4d5fa6e4=""><img
																		src="/static/index/user/recharge.45008929.svg"
																		alt="" data-v-4d5fa6e4=""></div>
																<div class="nav-box" data-v-4d5fa6e4="">充值</div>
															</div>
															<div class="min-box" data-v-4d5fa6e4=""
																style="display: none;">
																<div class="icon" data-v-4d5fa6e4=""><img
																		src="/static/index/user/recharge.45008929.svg"
																		alt="" data-v-4d5fa6e4=""></div>
																<div class="min-nav-box" data-v-4d5fa6e4="">充值</div>
															</div>
															<div data-v-4d5fa6e4="" style="display: none;"></div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div data-v-19622b17="">
															<div class="col-th" data-v-19622b17="">
																<div class="icon" data-v-19622b17=""><img
																		src="/static/index/user/withdraw.87fec756.svg"
																		alt="" data-v-19622b17=""></div>
																<div class="nav-box" data-v-19622b17="">提现</div>
															</div>
															<div class="min-box" data-v-19622b17=""
																style="display: none;">
																<div class="icon" data-v-19622b17=""><img
																		src="/static/index/user/withdraw.87fec756.svg"
																		alt="" data-v-19622b17=""></div>
																<div class="min-nav-box" data-v-19622b17="">提现</div>
															</div>
															<div data-v-19622b17="" style="display: none;"></div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/rechargelist.46d09a30.svg"
																	alt=""></div>
															<div class="nav-box">充值记录</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/withdrawlist.d526c20d.svg"
																	alt=""></div>
															<div class="nav-box">提现记录</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/assets.4eda1e5b.svg"
																	alt=""></div>
															<div class="nav-box">个人资产</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/key.59ef0d05.svg"
																	alt=""></div>
															<div class="nav-box">修改密码</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/bankcard.b9fc04a2.svg"
																	alt=""></div>
															<div class="nav-box">收款方式</div>
														</div>
													</ion-col>
													<ion-col class="md hydrated"
														style="flex: 0 0 calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(3 / var(--ion-grid-columns, 12)) * 100%);">
														<div class="col-th">
															<div class="icon"><img
																	src="/static/index/user/intro.cc1d81ac.svg"
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
							<ion-tab-bar slot="bottom" role="tablist" class="md hydrated">
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
										<!----><img class="tab-icon" src="/static/index/user/service.3520e54a.svg"
											alt="">
										<p style="margin: 0px; white-space: nowrap;">客服</p>
									</div>
								</ion-tab-button>
								<ion-tab-button _gettabstate="()=&gt;t" role="tab" tabindex="0" aria-selected="true"
									id="tab-button-my"
									class="md tab-selected tab-layout-icon-top ion-activatable ion-selectable ion-focusable hydrated"
									style="background: rgb(20, 20, 20);">
									<div style="width: 100%; height: 100%;"><img class="tab-icon"
											src="/static/index/user/my.a77566df.svg" alt="">
										<p style="margin: 0px;">我的</p>
									</div>
								</ion-tab-button>
							</ion-tab-bar>
						</ion-tabs>
						<div style="display: none;"></div>
					</div>
					<div class="ion-page can-go-back ion-page-hidden" style="z-index: 100;" aria-hidden="true">
						<ion-header class="md header-md header-collapse-none hydrated" role="banner">
							<!---->
							<ion-toolbar class="toolbar-title-default md in-toolbar hydrated">
								<ion-buttons
									class="buttons-first-slot sc-ion-buttons-md-h sc-ion-buttons-md-s md hydrated"
									slot="start">
									<ion-back-button default-href="/tabs/my"
										class="md button back-button-has-icon-only in-toolbar ion-activatable ion-focusable show-back-button hydrated">
									</ion-back-button>
								</ion-buttons>
								<ion-title class="md title-default hydrated">收款方式</ion-title>
							</ion-toolbar>
						</ion-header>
						<ion-content class="md hydrated" style="--offset-top:56px; --offset-bottom:0px;">
							<div class="notice-box">
								<ion-list class="md list-md list-lines-none list-md-lines-none hydrated">
									<ion-item class="item md item-lines-none in-list ion-focusable hydrated">
										<div class="notice-list-box">
											<ion-row class="md hydrated">
												<ion-col class="md hydrated"
													style="flex: 0 0 calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%);">
													<p class="list-img"><img
															src="/static/index/user/bankcard.b9fc04a2.svg" alt="">
													</p>
												</ion-col>
												<ion-col class="md hydrated"
													style="flex: 0 0 calc(calc(7.5 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(7.5 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(7.5 / var(--ion-grid-columns, 12)) * 100%);">
													<p class="list-text">银行卡</p>
												</ion-col>
												<ion-col class="md hydrated"
													style="flex: 0 0 calc(calc(1 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(1 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(1 / var(--ion-grid-columns, 12)) * 100%);">
													<div class="list-icon">
														<ion-icon role="img" class="md hydrated"></ion-icon>
													</div>
												</ion-col>
											</ion-row>
										</div>
									</ion-item>
									<ion-item class="item md item-lines-none in-list ion-focusable hydrated">
										<div class="notice-list-box">
											<ion-row class="md hydrated">
												<ion-col class="md hydrated"
													style="flex: 0 0 calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(2 / var(--ion-grid-columns, 12)) * 100%);">
													<p class="list-img"><img
															src="/static/index/user/btc.f126b01e.svg" alt=""></p>
												</ion-col>
												<ion-col class="md hydrated"
													style="flex: 0 0 calc(calc(7.5 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(7.5 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(7.5 / var(--ion-grid-columns, 12)) * 100%);">
													<p class="list-text"><?php echo lang('jmhb'); ?></p>
												</ion-col>
												<ion-col class="md hydrated"
													style="flex: 0 0 calc(calc(1 / var(--ion-grid-columns, 12)) * 100%); width: calc(calc(1 / var(--ion-grid-columns, 12)) * 100%); max-width: calc(calc(1 / var(--ion-grid-columns, 12)) * 100%);">
													<div class="list-icon">
														<ion-icon role="img" class="md hydrated"></ion-icon>
													</div>
												</ion-col>
											</ion-row>
										</div>
									</ion-item>
								</ion-list>
							</div>
						</ion-content>
					</div>
					<div class="" style="z-index: 101;">
						<ion-header class="md header-md header-collapse-none hydrated" data-v-8aae1df6="" role="banner">
							<!---->
							<ion-toolbar class="toolbar-title-default md in-toolbar hydrated" data-v-8aae1df6="" style="display: flex;align-items: center;padding: 10px 20px;">
								<ion-buttons onclick="javascript:history.back(-1)" style="margin-right: 6px;"
									class="buttons-first-slot sc-ion-buttons-md-h sc-ion-buttons-md-s md hydrated"
									slot="start" data-v-8aae1df6="">
									<ion-back-button default-href="/tabs/my" data-v-8aae1df6=""
										class="md button back-button-has-icon-only in-toolbar ion-activatable ion-focusable show-back-button hydrated">
									    <img style="width:28px" src="/static/index/user/fhjt.png">
									</ion-back-button>
								</ion-buttons>
								<ion-title class="md title-default hydrated" data-v-8aae1df6=""><?php echo lang('jmhbdz'); ?></ion-title>
							</ion-toolbar>
						</ion-header>
						<ion-content class="md hydrated" style="--offset-top:56px; --offset-bottom:0px;">
							<div style="width: 100%; height: 100%; overflow: hidden;">
								<div class="wheader">
									<div class="add-car"  <?php if(!(empty($user['usdt']) || (($user['usdt'] instanceof \think\Collection || $user['usdt'] instanceof \think\Paginator ) && $user['usdt']->isEmpty()))): ?> style="display:none" <?php endif; ?>>
										<ion-card class="md hydrated">
											<ion-card-content class="md card-content-md hydrated">
												<div>
												
														<ion-item
														class="item-interactive item-input item md ion-focusable hydrated item-label" style="display: flex;align-items: center;border-bottom: 1px solid #484848;margin-top: 18px;">
														<ion-label
															class="sc-ion-label-md-h sc-ion-label-md-s md hydrated"
															id="ion-input-120-lbl"><?php echo lang('jmhb'); ?></ion-label>
														<ion-input modelvalue=""
															class="sc-ion-input-md-h sc-ion-input-md-s md hydrated">
															<input class="native-input sc-ion-input-md"
																aria-labelledby="ion-input-120-lbl" autocapitalize="off"
																autocomplete="off" autocorrect="off" id='usdt'
																name="ion-input-120" placeholder="" spellcheck="false"
																type="text"></ion-input>
													</ion-item>
													<ion-item
														class="item-interactive item-input item md ion-focusable hydrated item-label" style="display: flex;align-items: center;border-bottom: 1px solid #484848;margin-top: 18px;">
														<ion-label
															class="sc-ion-label-md-h sc-ion-label-md-s md hydrated"
															id="ion-input-120-lbl"><?php echo lang('qbdz'); ?></ion-label>
														<ion-input modelvalue=""
															class="sc-ion-input-md-h sc-ion-input-md-s md hydrated">
															<input class="native-input sc-ion-input-md"
																aria-labelledby="ion-input-120-lbl" autocapitalize="off"
																autocomplete="off" autocorrect="off" id='usdtaddress'
																name="ion-input-120" placeholder="" spellcheck="false"
																type="text"></ion-input>
													</ion-item>
													<button
														class="ion-color ion-color-dark md button button-block button-solid ion-activatable ion-focusable hydrated"
														expand="block" style="margin-top: 40px;width: 100%;padding: 11px;color: white;background: #222428;border-radius: 5px;" onclick='submit()'><?php echo lang('baocun'); ?></button>
												</div>
											</ion-card-content>
										</ion-card>
									</div>
									<div <?php if(empty($user['usdt']) || (($user['usdt'] instanceof \think\Collection || $user['usdt'] instanceof \think\Paginator ) && $user['usdt']->isEmpty())): ?> style="display:none" <?php endif; ?>>
										<div class="btc-card">
											<div class="bank-box">
												<div class="left"><?php echo $user['usdt']; ?></div>
												<div class="b-right">
													<div class="yinlian"><img
															src="/static/index/user/tbbtc.5f806c52.svg" alt=""
															style="width: 50px;"></div>
												</div>
											</div>
											<div class="bank-box">
												<div class="left" style="width: 100%;">
													<p class="label"><?php echo lang('qbdz'); ?></p>
													<p class="text"><?php echo $user['usdtaddress']; ?></p>
												</div>
											</div>
										</div>
										<ion-button
											class="ion-color ion-color-dark md button button-block button-solid ion-activatable ion-focusable hydrated"
											expand="block" style="margin-top: 40px; display: none;">修改加密货币地址
										</ion-button>
									</div>
								</div>
							</div>
						</ion-content>
					</div>
				</ion-router-outlet>
			</ion-app>
		</div>
					<script src="__ROOT__/static/index//jquery-3.3.1.min.js"></script>
					<script src="/static/layer/layer.js"></script>
		<script>
		    function submit(){
		          var usdt=$('#usdt').val()||"";
                var usdtaddress=$('#usdtaddress').val()||"";
                if(usdt==''){
                    layer.msg('<?php echo lang('hbdzbnwk'); ?>');
                    return;
                }
                if(usdtaddress==''){
                    layer.msg('<?php echo lang('qbdzbnwk'); ?>');
                    return;
                }
                  $.post("<?php echo url('bangding'); ?>",{usdt:usdt,usdtaddress:usdtaddress},function(data){
                    if(data.status==1){
                        location.reload();
                    }else{
                        layer.msg(data.msg)
                    }
            })
		    }
		</script>
	</body>
</html>
