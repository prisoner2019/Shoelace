<?php
/*
* Shoelace Alpha v3.2
* Copyright 2017 John Petroviak
*/

// TODO IE Ranges
// TODO HTML5 Color Input
// TODO HTML5 Meter Element


// Variables

// Options
$themeDark = get_sub_field('');
$flex = get_sub_field('');

// Colors
$backgroundColorDefault = get_sub_field('');
$colorDefault = get_sub_field('');
$colorDefaultLight = get_sub_field('');
$colorDefaultLighter = get_sub_field('');
$colorDefaultLightest = get_sub_field('');

$colorPrimary = get_sub_field('');
$colorSecondary = get_sub_field('');
$colorSuccess = get_sub_field('');
$colorInformation = get_sub_field('');
$colorWarning = get_sub_field('');
$colorDanger = get_sub_field('');

$colorLightAmount = get_sub_field('');
$colorDarkAmount = get_sub_field('');
$colorDarkerAmount = get_sub_field('');

$colors: (
  primary: (
    base: $color-primary,
    light: rgba($color-primary, $color-light-amount),
    dark: darken($color-primary, $color-dark-amount),
    darker: darken($color-primary, $color-darker-amount)
  ),
  secondary: (
    base: $color-secondary,
    light: rgba($color-secondary, $color-light-amount),
    dark: darken($color-secondary, $color-dark-amount),
    darker: darken($color-secondary, $color-darker-amount)
  ),
  success: (
    base: $color-success,
    light: rgba($color-success, $color-light-amount),
    dark: darken($color-success, $color-dark-amount),
    darker: darken($color-success, $color-darker-amount)
  ),
  information: (
    base: $color-information,
    light: rgba($color-information, $color-light-amount),
    dark: darken($color-information, $color-dark-amount),
    darker: darken($color-information, $color-darker-amount)
  ),
  warning: (
    base: $color-warning,
    light: rgba($color-warning, $color-light-amount),
    dark: darken($color-warning, $color-dark-amount),
    darker: darken($color-warning, $color-darker-amount)
  ),
  danger: (
    base: $color-danger,
    light: rgba($color-danger, $color-light-amount),
    dark: darken($color-danger, $color-dark-amount),
    darker: darken($color-danger, $color-darker-amount)
  )
);

// Global
$bodyBackgroundColor = get_sub_field('');
$bodyColor = get_sub_field('');
$linkColor = get_sub_field('');
$linkHoverColor = get_sub_field('');
$selectionBackgroundColor = get_sub_field('');
$selectionColor = get_sub_field('');

// Components
$border = get_sub_field('');
$borderColor = get_sub_field('');
$borderRadius = get_sub_field('');
$borderRadiusLarge = get_sub_field('');
$borderRadiusSmall = get_sub_field('');
$borderStyle = get_sub_field('');
$borderWidth = get_sub_field('');
$borderWidthLarge = get_sub_field('');
$borderWidthSmall = get_sub_field('');
$spacing = get_sub_field('');
$spacingExtraLarge = get_sub_field('');
$spacingLarge = get_sub_field('');
$spacingSmall = get_sub_field('');
$spacingExtraSmall = get_sub_field('');
$transition = get_sub_field('');
$transitionSpeed = get_sub_field('');
$transitionSpeedSlow = get_sub_field('');
$transitionSpeedFast = get_sub_field('');
$transitionProperty = get_sub_field('');

// Typography
$fontFamily = get_sub_field('');
$fontFamilyHeading = get_sub_field('');
$fontSize = get_sub_field('');
$fontSizeLarge = get_sub_field('');
$fontSizeSmall = get_sub_field('');
$fontSizeH1 = get_sub_field('');
$fontSizeH2 = get_sub_field('');
$fontSizeH3 = get_sub_field('');
$fontSizeH4 = get_sub_field('');
$fontSizeH5 = get_sub_field('');
$fontSizeH6 = get_sub_field('');
$lineHeight = get_sub_field('');
$lineHeightHeading = get_sub_field('');

// Breakpoints
$breakpoints: (
	extra-small: 0,
	small: 544px,
	medium: 768px,
	large: 992px,
	extra-large: 1400px
);

// Grid System
$containerSpacing = get_sub_field('');
$gridCount: 12;
$gridSpacing = get_sub_field('');

// Tables
$tableBackgroundColor = get_sub_field('');
$tableBackgroundColorHover = get_sub_field('');
$tableBackgroundColorOdd = get_sub_field('');
$tableBackgroundColorEven = get_sub_field('');
$tableHeaderColor = get_sub_field('');
$tableBorder = get_sub_field('');
$tableBorderColor = get_sub_field('');
$tableBorderStyle = get_sub_field('');
$tableBorderWidth = get_sub_field('');
$tableFontSize = get_sub_field('');
$tableFontSizeLarge = get_sub_field('');
$tableFontSizeSmall = get_sub_field('');
$tableSpacing = get_sub_field('');
$tableSpacingHorizontal = get_sub_field('');
$tableSpacingHorizontalLarge = get_sub_field('');
$tableSpacingHorizontalSmall = get_sub_field('');
$tableSpacingVertical = get_sub_field('');
$tableSpacingVerticalLarge = get_sub_field('');
$tableSpacingVerticalSmall = get_sub_field('');
$tableTransition = get_sub_field('');
$tableTransitionSpeed = get_sub_field('');
$tableTransitionProperty = get_sub_field('');

// Forms
$formBackgroundColor = get_sub_field('');
$formBorder = get_sub_field('');
$formBorderColor = get_sub_field('');
$formBorderStyle = get_sub_field('');
$formBorderWidth = get_sub_field('');
$formBorderWidthLarge = get_sub_field('');
$formBorderWidthSmall = get_sub_field('');
$formBorderRadius = get_sub_field('');
$formBorderRadiusLarge = get_sub_field('');
$formBorderRadiusSmall = get_sub_field('');
$formCheckedColor = get_sub_field('');
$formColor = get_sub_field('');
$formDisabledBackgroundColor = get_sub_field('');
$formDisabledBorderColor = get_sub_field('');
$formDisabledColor = get_sub_field('');
$formErrorBackgroundColor = get_sub_field('');
$formErrorBorderColor = get_sub_field('');
$formErrorColor = get_sub_field('');
$formFocus = get_sub_field('');
$formFocusBackgroundColor = get_sub_field('');
$formFocusBorderColor = get_sub_field('');
$formFocusColor = get_sub_field('');
$formFontSize = get_sub_field('');
$formFontSizeLarge = get_sub_field('');
$formFontSizeSmall = get_sub_field('');
$formHelperColor = get_sub_field('');
$formHelperErrorColor = get_sub_field('');
$formHover = get_sub_field('');
$formHoverBackgroundColor = get_sub_field('');
$formHoverBorderColor = get_sub_field('');
$formHoverColor = get_sub_field('');
$formLabelColor = get_sub_field('');
$formLabelRequiredColor = get_sub_field('');
$formPlaceholderColor = get_sub_field('');
$formSpacing = get_sub_field('');
$formSpacingHorizontal = get_sub_field('');
$formSpacingHorizontalLarge = get_sub_field('');
$formSpacingHorizontalSmall = get_sub_field('');
$formSpacingVertical = get_sub_field('');
$formSpacingVerticalLarge = get_sub_field('');
$formSpacingVerticalSmall = get_sub_field('');
$formTransition = get_sub_field('');
$formTransitionSpeed = get_sub_field('');
$formTransitionProperty = get_sub_field('');

$rangeSize = get_sub_field('');
$rangeSizeLarge = get_sub_field('');
$rangeSizeSmall = get_sub_field('');

$radioSize = get_sub_field('');
$radioSizeLarge = get_sub_field('');
$radioSizeSmall = get_sub_field('');

$checkboxSize = get_sub_field('');
$checkboxSizeLarge = get_sub_field('');
$checkboxSizeSmall = get_sub_field('');

// Alerts
$alertBorder = get_sub_field('');
$alertBorderStyle = get_sub_field('');
$alertBorderWidth = get_sub_field('');
$alertBorderRadius = get_sub_field('');
$alertSpacing = get_sub_field('');

// Progress
$progressBackgroundColor = get_sub_field('');
$progressBorder = get_sub_field('');
$progressBorderColor = get_sub_field('');
$progressBorderStyle = get_sub_field('');
$progressBorderWidth = get_sub_field('');
$progressBorderWidthLarge = get_sub_field('');
$progressBorderWidthSmall = get_sub_field('');
$progressBorderRadius = get_sub_field('');
$progressBorderRadiusLarge = get_sub_field('');
$progressBorderRadiusSmall = get_sub_field('');
$progressColor = get_sub_field('');
$progressSize = get_sub_field('');
$progressSizeLarge = get_sub_field('');
$progressSizeSmall = get_sub_field('');

// Modals
$modalBackdropBackgroundColor = get_sub_field('');
$modalBackdropBackgroundOpacity = get_sub_field('');
$modalBackgroundColor = get_sub_field('');
$modalBorder = get_sub_field('');
$modalBorderColor = get_sub_field('');
$modalBorderStyle = get_sub_field('');
$modalBorderWidth = get_sub_field('');
$modalBorderRadius = get_sub_field('');
$modalSpacing = get_sub_field('');

// Accordions
$accordionBackgroundColor = get_sub_field('');
$accordionBackgroundColorHover = get_sub_field('');
$accordionBackgroundColorOdd = get_sub_field('');
$accordionBackgroundColorEven = get_sub_field('');
$accordionBorder = get_sub_field('');
$accordionBorderColor = get_sub_field('');
$accordionBorderStyle = get_sub_field('');
$accordionBorderWidth = get_sub_field('');
$accordionSpacing = get_sub_field('');
$accordionSpacingHorizontal = get_sub_field('');
$accordionSpacingVertical = get_sub_field('');
$accordionTransition = get_sub_field('');
$accordionTransitionSpeed: = get_sub_field('');
$accordionTransitionProperty = get_sub_field('');

// Calendar
$calendarWeekendColor = get_sub_field('');

// Slideshow
$slideshowHeight = get_sub_field('');
$slideshowCaptionColor = get_sub_field('');
$slideshowCaptionTextShadow = get_sub_field('');
?>

<style>
	html {
	  box-sizing: border-box;
	  font-size: 10px;
	  -webkit-tap-highlight-color: transparent;
	  -webkit-text-size-adjust: 100%;
	      -ms-text-size-adjust: 100%;
	          text-size-adjust: 100%;
          }

	*, *:before, *:after {
	  box-sizing: inherit;
  }

	body {
	  background-color: <?=$bodyBackgroundColor?>;
	  color: <?=$bodyColor?>;
	  font-family: <?=$fontFamily?>;
	  font-size: <?=$fontSize?>;
	  line-height: <?=$lineHeight?>;
	  margin: 0;
  }

	[tabindex="-1"]:focus {
	  outline: none !important;
  }

	article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
	  display: block;
  }

	audio, canvas, video {
	  display: inline-block;
	  vertical-align: baseline;
  }

	audio:not([controls]) {
	  display: none;
	  height: 0;
  }

	::-moz-selection {
	  color: <?=$selectionColor?>;
	  background-color: <?=$selectionBackgroundColor?>;
	  text-shadow: none;
  }

	::selection {
	  color: <?=$selectionColor?>;
	  background-color: <?=$selectionBackgroundColor?>;
	  text-shadow: none;
  }

	a {
	  background-color: transparent;
	  color: <?=$linkColor?>;
	  text-decoration: none;
	  -ms-touch-action: manipulation;
	      touch-action: manipulation;
	  <?php
	  if ($transition) {
  		?>
	    -webkit-transition: color <?=$transitionSpeed?> <?=$transitionProperty?>;
	    	  transition: color <?=$transitionSpeed?> <?=$transitionProperty?>;
	  	<?php
 		}
	  ?>
	}

  a:active, a:hover {
    color: <?=$linkHoverColor?>;
    outline: 0;
	}

	area {
	  -ms-touch-action: manipulation;
	      touch-action: manipulation;
      }

	h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
	  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
	  line-height: 1.2;
	  margin-bottom: 10px;
	  margin-top: 0;
  }

	h1, .h1 {
	  font-size: 35px;
  }

	h2, .h2 {
	  font-size: 28px;
  }

	h3, .h3 {
	  font-size: 23.8px;
  }

	h4, .h4 {
	  font-size: 17.5px;
  }

	h5, .h5 {
	  font-size: 14px;
  }

	h6, .h6 {
	  font-size: 11.9px;
  }

	p {
	  margin-bottom: 10px;
	  margin-top: 0;
  }

	hr {
	  border-bottom: 1px solid #CECED2;
	  border-top: none;
	  box-sizing: content-box;
	  height: 0;
	  margin-bottom: 20px;
	  margin-top: 20px;
  }

	abbr[title] {
	  border-bottom: 1px solid #CECED2;
  }

	b, strong {
	  font-weight: bold;
  }

	dfn {
	  font-style: italic;
  }

	mark {
	  background-color: rgba(255, 204, 0, 0.25);
	  color: #000000;
  }

	small {
	  font-size: 80%;
  }

	sub, sup {
	  font-size: 75%;
	  line-height: 0;
	  position: relative;
	  vertical-align: baseline;
  }

	sup {
	  top: -0.5em;
  }

	sub {
	  bottom: -0.25em;
  }

	ul, ol, dl {
	  margin: 0 0 20px;
  }

  ul.list-unstyled, ul.list-inline, ol.list-unstyled, ol.list-inline, dl.list-unstyled, dl.list-inline {
    list-style: none;
    padding-left: 0;
  }

	ul.list-inline, ol.list-inline, dl.list-inline {
	  display: -webkit-box;
	  display: -ms-flexbox;
	  display: flex;
	  -webkit-box-orient: horizontal;
	  -webkit-box-direction: normal;
	      -ms-flex-direction: row;
	          flex-direction: row;
	  -ms-flex-wrap: wrap;
	      flex-wrap: wrap;
	  margin-left: -5px;
	  margin-right: -5px;
	}
    
  ul.list-inline li, ol.list-inline li, dl.list-inline li {
    padding-left: 5px;
    padding-right: 5px;
  }

	ol ol, ul ul, ol ul, ul ol {
	  margin-bottom: 0;
  }

	pre {
	  margin: 0 0 20px;
	  overflow: auto;
  }

	code, kbd, pre, samp {
	  font-family: monospace, monospace;
	  font-size: 1em;
  }

	blockquote {
	  margin: 0 0 20px;
  }
	  blockquote.blockquote cite {
	    color: #8E8E93;
    }

	svg:not(:root) {
	  overflow: hidden;
  }

	figure {
	  margin: 0 0 20px;
  }

	img {
	  border: 0; }
	  img.responsive {
	    display: block;
	    height: auto;
	    max-width: 100%; }
	  img.contain {
	    -o-object-fit: none;
	       object-fit: none;
	    width: 100%; }
	    img.contain.bottom {
	      -o-object-position: 50%  100%;
	         object-position: 50%  100%; }
	    img.contain.bottom-left {
	      -o-object-position: 0  100%;
	         object-position: 0  100%; }
	    img.contain.bottom-right {
	      -o-object-position: 100% 100%;
	         object-position: 100% 100%; }
	    img.contain.left {
	      -o-object-position: 0%  50%;
	         object-position: 0%  50%; }
	    img.contain.right {
	      -o-object-position: 100%  50%;
	         object-position: 100%  50%; }
	    img.contain.top {
	      -o-object-position: 50%  0%;
	         object-position: 50%  0%; }
	    img.contain.top-left {
	      -o-object-position: 0  0;
	         object-position: 0  0; }
	    img.contain.top-right {
	      -o-object-position: 100%  0;
	         object-position: 100%  0; }
	  img.cover {
	    -o-object-fit: cover;
	       object-fit: cover;
	    width: 100%; }
	    img.cover.bottom {
	      -o-object-position: 50%  100%;
	         object-position: 50%  100%; }
	    img.cover.top {
	      -o-object-position: 50%  0%;
	         object-position: 50%  0%; }

	.container {
	  margin-left: auto;
	  margin-right: auto;
	  padding-left: 20px;
	  padding-right: 20px;
	  width: 100%; }
	  .container.extra-small {
	    max-width: 0; }
	  .container.small {
	    max-width: 544px; }
	  .container.medium {
	    max-width: 768px; }
	  .container.large {
	    max-width: 992px; }
	  .container.extra-large {
	    max-width: 1400px; }

	.grid {
	  display: -webkit-box;
	  display: -ms-flexbox;
	  display: flex;
	  -ms-flex-wrap: wrap;
	      flex-wrap: wrap;
	  margin-left: -10px;
	  margin-right: -10px; }
	  .grid.extra-small-top {
	    -webkit-box-align: start;
	        -ms-flex-align: start;
	            align-items: flex-start; }
	  .grid.extra-small-middle {
	    -webkit-box-align: middle;
	        -ms-flex-align: middle;
	            align-items: middle; }
	  .grid.extra-small-bottom {
	    -webkit-box-align: end;
	        -ms-flex-align: end;
	            align-items: flex-end; }
	  .grid.extra-small-left {
	    -webkit-box-pack: start;
	        -ms-flex-pack: start;
	            justify-content: flex-start; }
	  .grid.extra-small-center {
	    -webkit-box-pack: center;
	        -ms-flex-pack: center;
	            justify-content: center; }
	  .grid.extra-small-right {
	    -webkit-box-pack: end;
	        -ms-flex-pack: end;
	            justify-content: flex-end; }
	  .grid.extra-small-around {
	    -ms-flex-pack: distribute;
	        justify-content: space-around; }
	  .grid.extra-small-between {
	    -webkit-box-pack: justify;
	        -ms-flex-pack: justify;
	            justify-content: space-between; }
	  @media (min-width: 544px) {
	    .grid.small-top {
	      -webkit-box-align: start;
	          -ms-flex-align: start;
	              align-items: flex-start; }
	    .grid.small-middle {
	      -webkit-box-align: middle;
	          -ms-flex-align: middle;
	              align-items: middle; }
	    .grid.small-bottom {
	      -webkit-box-align: end;
	          -ms-flex-align: end;
	              align-items: flex-end; }
	    .grid.small-left {
	      -webkit-box-pack: start;
	          -ms-flex-pack: start;
	              justify-content: flex-start; }
	    .grid.small-center {
	      -webkit-box-pack: center;
	          -ms-flex-pack: center;
	              justify-content: center; }
	    .grid.small-right {
	      -webkit-box-pack: end;
	          -ms-flex-pack: end;
	              justify-content: flex-end; }
	    .grid.small-around {
	      -ms-flex-pack: distribute;
	          justify-content: space-around; }
	    .grid.small-between {
	      -webkit-box-pack: justify;
	          -ms-flex-pack: justify;
	              justify-content: space-between; } }
	  @media (min-width: 768px) {
	    .grid.medium-top {
	      -webkit-box-align: start;
	          -ms-flex-align: start;
	              align-items: flex-start; }
	    .grid.medium-middle {
	      -webkit-box-align: middle;
	          -ms-flex-align: middle;
	              align-items: middle; }
	    .grid.medium-bottom {
	      -webkit-box-align: end;
	          -ms-flex-align: end;
	              align-items: flex-end; }
	    .grid.medium-left {
	      -webkit-box-pack: start;
	          -ms-flex-pack: start;
	              justify-content: flex-start; }
	    .grid.medium-center {
	      -webkit-box-pack: center;
	          -ms-flex-pack: center;
	              justify-content: center; }
	    .grid.medium-right {
	      -webkit-box-pack: end;
	          -ms-flex-pack: end;
	              justify-content: flex-end; }
	    .grid.medium-around {
	      -ms-flex-pack: distribute;
	          justify-content: space-around; }
	    .grid.medium-between {
	      -webkit-box-pack: justify;
	          -ms-flex-pack: justify;
	              justify-content: space-between; } }
	  @media (min-width: 992px) {
	    .grid.large-top {
	      -webkit-box-align: start;
	          -ms-flex-align: start;
	              align-items: flex-start; }
	    .grid.large-middle {
	      -webkit-box-align: middle;
	          -ms-flex-align: middle;
	              align-items: middle; }
	    .grid.large-bottom {
	      -webkit-box-align: end;
	          -ms-flex-align: end;
	              align-items: flex-end; }
	    .grid.large-left {
	      -webkit-box-pack: start;
	          -ms-flex-pack: start;
	              justify-content: flex-start; }
	    .grid.large-center {
	      -webkit-box-pack: center;
	          -ms-flex-pack: center;
	              justify-content: center; }
	    .grid.large-right {
	      -webkit-box-pack: end;
	          -ms-flex-pack: end;
	              justify-content: flex-end; }
	    .grid.large-around {
	      -ms-flex-pack: distribute;
	          justify-content: space-around; }
	    .grid.large-between {
	      -webkit-box-pack: justify;
	          -ms-flex-pack: justify;
	              justify-content: space-between; } }
	  @media (min-width: 1400px) {
	    .grid.extra-large-top {
	      -webkit-box-align: start;
	          -ms-flex-align: start;
	              align-items: flex-start; }
	    .grid.extra-large-middle {
	      -webkit-box-align: middle;
	          -ms-flex-align: middle;
	              align-items: middle; }
	    .grid.extra-large-bottom {
	      -webkit-box-align: end;
	          -ms-flex-align: end;
	              align-items: flex-end; }
	    .grid.extra-large-left {
	      -webkit-box-pack: start;
	          -ms-flex-pack: start;
	              justify-content: flex-start; }
	    .grid.extra-large-center {
	      -webkit-box-pack: center;
	          -ms-flex-pack: center;
	              justify-content: center; }
	    .grid.extra-large-right {
	      -webkit-box-pack: end;
	          -ms-flex-pack: end;
	              justify-content: flex-end; }
	    .grid.extra-large-around {
	      -ms-flex-pack: distribute;
	          justify-content: space-around; }
	    .grid.extra-large-between {
	      -webkit-box-pack: justify;
	          -ms-flex-pack: justify;
	              justify-content: space-between; } }
	  .grid .tile {
	    padding-left: 10px;
	    padding-right: 10px;
	    position: relative;
	    width: 100%; }
	    .grid .tile.extra-small-1 {
	      -webkit-box-flex: 0;
	          -ms-flex: 0 0 8.3333333333%;
	              flex: 0 0 8.3333333333%;
	      max-width: 8.3333333333%; }
	    .grid .tile.extra-small-2 {
	      -webkit-box-flex: 0;
	          -ms-flex: 0 0 16.6666666667%;
	              flex: 0 0 16.6666666667%;
	      max-width: 16.6666666667%; }
	    .grid .tile.extra-small-3 {
	      -webkit-box-flex: 0;
	          -ms-flex: 0 0 25%;
	              flex: 0 0 25%;
	      max-width: 25%; }
	    .grid .tile.extra-small-4 {
	      -webkit-box-flex: 0;
	          -ms-flex: 0 0 33.3333333333%;
	              flex: 0 0 33.3333333333%;
	      max-width: 33.3333333333%; }
	    .grid .tile.extra-small-5 {
	      -webkit-box-flex: 0;
	          -ms-flex: 0 0 41.6666666667%;
	              flex: 0 0 41.6666666667%;
	      max-width: 41.6666666667%; }
	    .grid .tile.extra-small-6 {
	      -webkit-box-flex: 0;
	          -ms-flex: 0 0 50%;
	              flex: 0 0 50%;
	      max-width: 50%; }
	    .grid .tile.extra-small-7 {
	      -webkit-box-flex: 0;
	          -ms-flex: 0 0 58.3333333333%;
	              flex: 0 0 58.3333333333%;
	      max-width: 58.3333333333%; }
	    .grid .tile.extra-small-8 {
	      -webkit-box-flex: 0;
	          -ms-flex: 0 0 66.6666666667%;
	              flex: 0 0 66.6666666667%;
	      max-width: 66.6666666667%; }
	    .grid .tile.extra-small-9 {
	      -webkit-box-flex: 0;
	          -ms-flex: 0 0 75%;
	              flex: 0 0 75%;
	      max-width: 75%; }
	    .grid .tile.extra-small-10 {
	      -webkit-box-flex: 0;
	          -ms-flex: 0 0 83.3333333333%;
	              flex: 0 0 83.3333333333%;
	      max-width: 83.3333333333%; }
	    .grid .tile.extra-small-11 {
	      -webkit-box-flex: 0;
	          -ms-flex: 0 0 91.6666666667%;
	              flex: 0 0 91.6666666667%;
	      max-width: 91.6666666667%; }
	    .grid .tile.extra-small-12 {
	      -webkit-box-flex: 0;
	          -ms-flex: 0 0 100%;
	              flex: 0 0 100%;
	      max-width: 100%; }
	    .grid .tile.extra-small-left-0 {
	      right: auto; }
	    .grid .tile.extra-small-left-1 {
	      right: 8.3333333333%; }
	    .grid .tile.extra-small-left-2 {
	      right: 16.6666666667%; }
	    .grid .tile.extra-small-left-3 {
	      right: 25%; }
	    .grid .tile.extra-small-left-4 {
	      right: 33.3333333333%; }
	    .grid .tile.extra-small-left-5 {
	      right: 41.6666666667%; }
	    .grid .tile.extra-small-left-6 {
	      right: 50%; }
	    .grid .tile.extra-small-left-7 {
	      right: 58.3333333333%; }
	    .grid .tile.extra-small-left-8 {
	      right: 66.6666666667%; }
	    .grid .tile.extra-small-left-9 {
	      right: 75%; }
	    .grid .tile.extra-small-left-10 {
	      right: 83.3333333333%; }
	    .grid .tile.extra-small-left-11 {
	      right: 91.6666666667%; }
	    .grid .tile.extra-small-left-12 {
	      right: 100%; }
	    .grid .tile.extra-small-right-0 {
	      left: auto; }
	    .grid .tile.extra-small-right-1 {
	      left: 8.3333333333%; }
	    .grid .tile.extra-small-right-2 {
	      left: 16.6666666667%; }
	    .grid .tile.extra-small-right-3 {
	      left: 25%; }
	    .grid .tile.extra-small-right-4 {
	      left: 33.3333333333%; }
	    .grid .tile.extra-small-right-5 {
	      left: 41.6666666667%; }
	    .grid .tile.extra-small-right-6 {
	      left: 50%; }
	    .grid .tile.extra-small-right-7 {
	      left: 58.3333333333%; }
	    .grid .tile.extra-small-right-8 {
	      left: 66.6666666667%; }
	    .grid .tile.extra-small-right-9 {
	      left: 75%; }
	    .grid .tile.extra-small-right-10 {
	      left: 83.3333333333%; }
	    .grid .tile.extra-small-right-11 {
	      left: 91.6666666667%; }
	    .grid .tile.extra-small-right-12 {
	      left: 100%; }
	    @media (min-width: 544px) {
	      .grid .tile.small-1 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 8.3333333333%;
	                flex: 0 0 8.3333333333%;
	        max-width: 8.3333333333%; }
	      .grid .tile.small-2 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 16.6666666667%;
	                flex: 0 0 16.6666666667%;
	        max-width: 16.6666666667%; }
	      .grid .tile.small-3 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 25%;
	                flex: 0 0 25%;
	        max-width: 25%; }
	      .grid .tile.small-4 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 33.3333333333%;
	                flex: 0 0 33.3333333333%;
	        max-width: 33.3333333333%; }
	      .grid .tile.small-5 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 41.6666666667%;
	                flex: 0 0 41.6666666667%;
	        max-width: 41.6666666667%; }
	      .grid .tile.small-6 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 50%;
	                flex: 0 0 50%;
	        max-width: 50%; }
	      .grid .tile.small-7 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 58.3333333333%;
	                flex: 0 0 58.3333333333%;
	        max-width: 58.3333333333%; }
	      .grid .tile.small-8 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 66.6666666667%;
	                flex: 0 0 66.6666666667%;
	        max-width: 66.6666666667%; }
	      .grid .tile.small-9 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 75%;
	                flex: 0 0 75%;
	        max-width: 75%; }
	      .grid .tile.small-10 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 83.3333333333%;
	                flex: 0 0 83.3333333333%;
	        max-width: 83.3333333333%; }
	      .grid .tile.small-11 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 91.6666666667%;
	                flex: 0 0 91.6666666667%;
	        max-width: 91.6666666667%; }
	      .grid .tile.small-12 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 100%;
	                flex: 0 0 100%;
	        max-width: 100%; }
	      .grid .tile.small-left-0 {
	        right: auto; }
	      .grid .tile.small-left-1 {
	        right: 8.3333333333%; }
	      .grid .tile.small-left-2 {
	        right: 16.6666666667%; }
	      .grid .tile.small-left-3 {
	        right: 25%; }
	      .grid .tile.small-left-4 {
	        right: 33.3333333333%; }
	      .grid .tile.small-left-5 {
	        right: 41.6666666667%; }
	      .grid .tile.small-left-6 {
	        right: 50%; }
	      .grid .tile.small-left-7 {
	        right: 58.3333333333%; }
	      .grid .tile.small-left-8 {
	        right: 66.6666666667%; }
	      .grid .tile.small-left-9 {
	        right: 75%; }
	      .grid .tile.small-left-10 {
	        right: 83.3333333333%; }
	      .grid .tile.small-left-11 {
	        right: 91.6666666667%; }
	      .grid .tile.small-left-12 {
	        right: 100%; }
	      .grid .tile.small-right-0 {
	        left: auto; }
	      .grid .tile.small-right-1 {
	        left: 8.3333333333%; }
	      .grid .tile.small-right-2 {
	        left: 16.6666666667%; }
	      .grid .tile.small-right-3 {
	        left: 25%; }
	      .grid .tile.small-right-4 {
	        left: 33.3333333333%; }
	      .grid .tile.small-right-5 {
	        left: 41.6666666667%; }
	      .grid .tile.small-right-6 {
	        left: 50%; }
	      .grid .tile.small-right-7 {
	        left: 58.3333333333%; }
	      .grid .tile.small-right-8 {
	        left: 66.6666666667%; }
	      .grid .tile.small-right-9 {
	        left: 75%; }
	      .grid .tile.small-right-10 {
	        left: 83.3333333333%; }
	      .grid .tile.small-right-11 {
	        left: 91.6666666667%; }
	      .grid .tile.small-right-12 {
	        left: 100%; } }
	    @media (min-width: 768px) {
	      .grid .tile.medium-1 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 8.3333333333%;
	                flex: 0 0 8.3333333333%;
	        max-width: 8.3333333333%; }
	      .grid .tile.medium-2 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 16.6666666667%;
	                flex: 0 0 16.6666666667%;
	        max-width: 16.6666666667%; }
	      .grid .tile.medium-3 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 25%;
	                flex: 0 0 25%;
	        max-width: 25%; }
	      .grid .tile.medium-4 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 33.3333333333%;
	                flex: 0 0 33.3333333333%;
	        max-width: 33.3333333333%; }
	      .grid .tile.medium-5 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 41.6666666667%;
	                flex: 0 0 41.6666666667%;
	        max-width: 41.6666666667%; }
	      .grid .tile.medium-6 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 50%;
	                flex: 0 0 50%;
	        max-width: 50%; }
	      .grid .tile.medium-7 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 58.3333333333%;
	                flex: 0 0 58.3333333333%;
	        max-width: 58.3333333333%; }
	      .grid .tile.medium-8 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 66.6666666667%;
	                flex: 0 0 66.6666666667%;
	        max-width: 66.6666666667%; }
	      .grid .tile.medium-9 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 75%;
	                flex: 0 0 75%;
	        max-width: 75%; }
	      .grid .tile.medium-10 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 83.3333333333%;
	                flex: 0 0 83.3333333333%;
	        max-width: 83.3333333333%; }
	      .grid .tile.medium-11 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 91.6666666667%;
	                flex: 0 0 91.6666666667%;
	        max-width: 91.6666666667%; }
	      .grid .tile.medium-12 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 100%;
	                flex: 0 0 100%;
	        max-width: 100%; }
	      .grid .tile.medium-left-0 {
	        right: auto; }
	      .grid .tile.medium-left-1 {
	        right: 8.3333333333%; }
	      .grid .tile.medium-left-2 {
	        right: 16.6666666667%; }
	      .grid .tile.medium-left-3 {
	        right: 25%; }
	      .grid .tile.medium-left-4 {
	        right: 33.3333333333%; }
	      .grid .tile.medium-left-5 {
	        right: 41.6666666667%; }
	      .grid .tile.medium-left-6 {
	        right: 50%; }
	      .grid .tile.medium-left-7 {
	        right: 58.3333333333%; }
	      .grid .tile.medium-left-8 {
	        right: 66.6666666667%; }
	      .grid .tile.medium-left-9 {
	        right: 75%; }
	      .grid .tile.medium-left-10 {
	        right: 83.3333333333%; }
	      .grid .tile.medium-left-11 {
	        right: 91.6666666667%; }
	      .grid .tile.medium-left-12 {
	        right: 100%; }
	      .grid .tile.medium-right-0 {
	        left: auto; }
	      .grid .tile.medium-right-1 {
	        left: 8.3333333333%; }
	      .grid .tile.medium-right-2 {
	        left: 16.6666666667%; }
	      .grid .tile.medium-right-3 {
	        left: 25%; }
	      .grid .tile.medium-right-4 {
	        left: 33.3333333333%; }
	      .grid .tile.medium-right-5 {
	        left: 41.6666666667%; }
	      .grid .tile.medium-right-6 {
	        left: 50%; }
	      .grid .tile.medium-right-7 {
	        left: 58.3333333333%; }
	      .grid .tile.medium-right-8 {
	        left: 66.6666666667%; }
	      .grid .tile.medium-right-9 {
	        left: 75%; }
	      .grid .tile.medium-right-10 {
	        left: 83.3333333333%; }
	      .grid .tile.medium-right-11 {
	        left: 91.6666666667%; }
	      .grid .tile.medium-right-12 {
	        left: 100%; } }
	    @media (min-width: 992px) {
	      .grid .tile.large-1 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 8.3333333333%;
	                flex: 0 0 8.3333333333%;
	        max-width: 8.3333333333%; }
	      .grid .tile.large-2 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 16.6666666667%;
	                flex: 0 0 16.6666666667%;
	        max-width: 16.6666666667%; }
	      .grid .tile.large-3 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 25%;
	                flex: 0 0 25%;
	        max-width: 25%; }
	      .grid .tile.large-4 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 33.3333333333%;
	                flex: 0 0 33.3333333333%;
	        max-width: 33.3333333333%; }
	      .grid .tile.large-5 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 41.6666666667%;
	                flex: 0 0 41.6666666667%;
	        max-width: 41.6666666667%; }
	      .grid .tile.large-6 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 50%;
	                flex: 0 0 50%;
	        max-width: 50%; }
	      .grid .tile.large-7 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 58.3333333333%;
	                flex: 0 0 58.3333333333%;
	        max-width: 58.3333333333%; }
	      .grid .tile.large-8 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 66.6666666667%;
	                flex: 0 0 66.6666666667%;
	        max-width: 66.6666666667%; }
	      .grid .tile.large-9 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 75%;
	                flex: 0 0 75%;
	        max-width: 75%; }
	      .grid .tile.large-10 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 83.3333333333%;
	                flex: 0 0 83.3333333333%;
	        max-width: 83.3333333333%; }
	      .grid .tile.large-11 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 91.6666666667%;
	                flex: 0 0 91.6666666667%;
	        max-width: 91.6666666667%; }
	      .grid .tile.large-12 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 100%;
	                flex: 0 0 100%;
	        max-width: 100%; }
	      .grid .tile.large-left-0 {
	        right: auto; }
	      .grid .tile.large-left-1 {
	        right: 8.3333333333%; }
	      .grid .tile.large-left-2 {
	        right: 16.6666666667%; }
	      .grid .tile.large-left-3 {
	        right: 25%; }
	      .grid .tile.large-left-4 {
	        right: 33.3333333333%; }
	      .grid .tile.large-left-5 {
	        right: 41.6666666667%; }
	      .grid .tile.large-left-6 {
	        right: 50%; }
	      .grid .tile.large-left-7 {
	        right: 58.3333333333%; }
	      .grid .tile.large-left-8 {
	        right: 66.6666666667%; }
	      .grid .tile.large-left-9 {
	        right: 75%; }
	      .grid .tile.large-left-10 {
	        right: 83.3333333333%; }
	      .grid .tile.large-left-11 {
	        right: 91.6666666667%; }
	      .grid .tile.large-left-12 {
	        right: 100%; }
	      .grid .tile.large-right-0 {
	        left: auto; }
	      .grid .tile.large-right-1 {
	        left: 8.3333333333%; }
	      .grid .tile.large-right-2 {
	        left: 16.6666666667%; }
	      .grid .tile.large-right-3 {
	        left: 25%; }
	      .grid .tile.large-right-4 {
	        left: 33.3333333333%; }
	      .grid .tile.large-right-5 {
	        left: 41.6666666667%; }
	      .grid .tile.large-right-6 {
	        left: 50%; }
	      .grid .tile.large-right-7 {
	        left: 58.3333333333%; }
	      .grid .tile.large-right-8 {
	        left: 66.6666666667%; }
	      .grid .tile.large-right-9 {
	        left: 75%; }
	      .grid .tile.large-right-10 {
	        left: 83.3333333333%; }
	      .grid .tile.large-right-11 {
	        left: 91.6666666667%; }
	      .grid .tile.large-right-12 {
	        left: 100%; } }
	    @media (min-width: 1400px) {
	      .grid .tile.extra-large-1 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 8.3333333333%;
	                flex: 0 0 8.3333333333%;
	        max-width: 8.3333333333%; }
	      .grid .tile.extra-large-2 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 16.6666666667%;
	                flex: 0 0 16.6666666667%;
	        max-width: 16.6666666667%; }
	      .grid .tile.extra-large-3 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 25%;
	                flex: 0 0 25%;
	        max-width: 25%; }
	      .grid .tile.extra-large-4 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 33.3333333333%;
	                flex: 0 0 33.3333333333%;
	        max-width: 33.3333333333%; }
	      .grid .tile.extra-large-5 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 41.6666666667%;
	                flex: 0 0 41.6666666667%;
	        max-width: 41.6666666667%; }
	      .grid .tile.extra-large-6 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 50%;
	                flex: 0 0 50%;
	        max-width: 50%; }
	      .grid .tile.extra-large-7 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 58.3333333333%;
	                flex: 0 0 58.3333333333%;
	        max-width: 58.3333333333%; }
	      .grid .tile.extra-large-8 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 66.6666666667%;
	                flex: 0 0 66.6666666667%;
	        max-width: 66.6666666667%; }
	      .grid .tile.extra-large-9 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 75%;
	                flex: 0 0 75%;
	        max-width: 75%; }
	      .grid .tile.extra-large-10 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 83.3333333333%;
	                flex: 0 0 83.3333333333%;
	        max-width: 83.3333333333%; }
	      .grid .tile.extra-large-11 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 91.6666666667%;
	                flex: 0 0 91.6666666667%;
	        max-width: 91.6666666667%; }
	      .grid .tile.extra-large-12 {
	        -webkit-box-flex: 0;
	            -ms-flex: 0 0 100%;
	                flex: 0 0 100%;
	        max-width: 100%; }
	      .grid .tile.extra-large-left-0 {
	        right: auto; }
	      .grid .tile.extra-large-left-1 {
	        right: 8.3333333333%; }
	      .grid .tile.extra-large-left-2 {
	        right: 16.6666666667%; }
	      .grid .tile.extra-large-left-3 {
	        right: 25%; }
	      .grid .tile.extra-large-left-4 {
	        right: 33.3333333333%; }
	      .grid .tile.extra-large-left-5 {
	        right: 41.6666666667%; }
	      .grid .tile.extra-large-left-6 {
	        right: 50%; }
	      .grid .tile.extra-large-left-7 {
	        right: 58.3333333333%; }
	      .grid .tile.extra-large-left-8 {
	        right: 66.6666666667%; }
	      .grid .tile.extra-large-left-9 {
	        right: 75%; }
	      .grid .tile.extra-large-left-10 {
	        right: 83.3333333333%; }
	      .grid .tile.extra-large-left-11 {
	        right: 91.6666666667%; }
	      .grid .tile.extra-large-left-12 {
	        right: 100%; }
	      .grid .tile.extra-large-right-0 {
	        left: auto; }
	      .grid .tile.extra-large-right-1 {
	        left: 8.3333333333%; }
	      .grid .tile.extra-large-right-2 {
	        left: 16.6666666667%; }
	      .grid .tile.extra-large-right-3 {
	        left: 25%; }
	      .grid .tile.extra-large-right-4 {
	        left: 33.3333333333%; }
	      .grid .tile.extra-large-right-5 {
	        left: 41.6666666667%; }
	      .grid .tile.extra-large-right-6 {
	        left: 50%; }
	      .grid .tile.extra-large-right-7 {
	        left: 58.3333333333%; }
	      .grid .tile.extra-large-right-8 {
	        left: 66.6666666667%; }
	      .grid .tile.extra-large-right-9 {
	        left: 75%; }
	      .grid .tile.extra-large-right-10 {
	        left: 83.3333333333%; }
	      .grid .tile.extra-large-right-11 {
	        left: 91.6666666667%; }
	      .grid .tile.extra-large-right-12 {
	        left: 100%; } }
	    .grid .tile.extra-small-top {
	      -ms-flex-item-align: start;
	          align-self: flex-start; }
	    .grid .tile.extra-small-middle {
	      -ms-flex-item-align: center;
	          -ms-grid-row-align: center;
	          align-self: center; }
	    .grid .tile.extra-small-bottom {
	      -ms-flex-item-align: end;
	          align-self: flex-end; }
	    @media (min-width: 544px) {
	      .grid .tile.small-top {
	        -ms-flex-item-align: start;
	            align-self: flex-start; }
	      .grid .tile.small-middle {
	        -ms-flex-item-align: center;
	            -ms-grid-row-align: center;
	            align-self: center; }
	      .grid .tile.small-bottom {
	        -ms-flex-item-align: end;
	            align-self: flex-end; } }
	    @media (min-width: 768px) {
	      .grid .tile.medium-top {
	        -ms-flex-item-align: start;
	            align-self: flex-start; }
	      .grid .tile.medium-middle {
	        -ms-flex-item-align: center;
	            -ms-grid-row-align: center;
	            align-self: center; }
	      .grid .tile.medium-bottom {
	        -ms-flex-item-align: end;
	            align-self: flex-end; } }
	    @media (min-width: 992px) {
	      .grid .tile.large-top {
	        -ms-flex-item-align: start;
	            align-self: flex-start; }
	      .grid .tile.large-middle {
	        -ms-flex-item-align: center;
	            -ms-grid-row-align: center;
	            align-self: center; }
	      .grid .tile.large-bottom {
	        -ms-flex-item-align: end;
	            align-self: flex-end; } }
	    @media (min-width: 1400px) {
	      .grid .tile.extra-large-top {
	        -ms-flex-item-align: start;
	            align-self: flex-start; }
	      .grid .tile.extra-large-middle {
	        -ms-flex-item-align: center;
	            -ms-grid-row-align: center;
	            align-self: center; }
	      .grid .tile.extra-large-bottom {
	        -ms-flex-item-align: end;
	            align-self: flex-end; } }

	table {
	  border-collapse: collapse;
	  border-spacing: 0; }
	  table caption, table th {
	    text-align: left; }
	  table.table {
	    margin-bottom: 20px;
	    width: 100%; }
	    table.table > caption, table.table > thead > tr > th {
	      color: #8E8E93;
	      font-weight: normal;
	      padding: 10px 10px;
	      vertical-align: top; }
	    table.table > tbody > tr {
	      -webkit-transition: background-color 200ms ease-in-out;
	      transition: background-color 200ms ease-in-out; }
	      table.table > tbody > tr > td {
	        border-top: 1px solid #CECED2;
	        padding: 10px 10px;
	        vertical-align: top; }
	    table.table.large > thead > tr > th, table.table.large tbody > tr > td {
	      font-size: 17.5px;
	      padding-left: 12.5px;
	      padding-right: 12.5px;
	      padding-bottom: 12.5px;
	      padding-top: 12.5px; }
	    table.table.small > thead > tr > th, table.table.small tbody > tr > td {
	      font-size: 11.9px;
	      padding-left: 8.5px;
	      padding-right: 8.5px;
	      padding-bottom: 8.5px;
	      padding-top: 8.5px; }
	    table.table.bordered {
	      border: 1px solid #CECED2; }
	      table.table.bordered > caption, table.table.bordered > thead > tr > th, table.table.bordered > tbody > tr td {
	        border: 1px solid #CECED2; }
	    table.table.striped > tbody > tr:nth-child(odd) {
	      background-color: #EFEFF4; }
	    table.table.toggle-row > tbody.table-row-link > tr:not(.table-row-hidden):hover > td:not(.table-cell-link-skip) {
	      cursor: pointer;
	      -webkit-user-select: none;
	         -moz-user-select: none;
	          -ms-user-select: none;
	              user-select: none; }
	    table.table.toggle-row > tbody > tr.table-row-hidden > td {
	      border-top: none;
	      padding: 0; }
	      table.table.toggle-row > tbody > tr.table-row-hidden > td > * {
	        display: none;
	        padding: 10px 10px; }
	    table.table.toggle-row.striped > tbody > tr:nth-child(4n+1), table.table.toggle-row.striped > tbody > tr:nth-child(4n+2) {
	      background-color: #EFEFF4; }
	    table.table.toggle-row.striped > tbody > tr:nth-child(4n+3), table.table.toggle-row.striped > tbody > tr:nth-child(4n+4) {
	      background-color: transparent; }
	    table.table.hover > tbody > tr:not(.table-row-hidden):hover {
	      background-color: rgba(0, 122, 255, 0.25); }
	    @media (max-width: 543px) {
	      table.table.responsive > thead {
	        display: none; }
	      table.table.responsive > tbody {
	        display: block; }
	        table.table.responsive > tbody > tr:not(.table-row-hidden) {
	          border-top: 1px solid #CECED2;
	          display: block;
	          padding: 10px 10px; }
	          table.table.responsive > tbody > tr:not(.table-row-hidden) > td {
	            border-top: none;
	            display: block;
	            padding: 0;
	            width: 100%; } }

	fieldset {
	  border: none;
	  margin: 0;
	  min-width: 0;
	  padding: 0; }
	  fieldset legend {
	    border: 0;
	    padding: 0; }

	.form-group .input-field {
	  margin-bottom: 20px; }

	.form-group .input-helper {
	  margin-top: -15px; }

	.form-group .range {
	  margin-bottom: 20px; }
	  .form-group .range + .input-helper {
	    margin-top: -15px; }

	.form-group .radio + .label {
	  margin-bottom: 10px; }

	.form-group .checkbox + .label {
	  margin-bottom: 10px; }

	.form-group .button {
	  margin-bottom: 20px; }

	.form-inline .input-field {
	  width: auto; }

	.label {
	  display: inline-block;
	  margin-bottom: 5px;
	  -ms-touch-action: manipulation;
	      touch-action: manipulation;
	  -webkit-user-select: none;
	     -moz-user-select: none;
	      -ms-user-select: none;
	          user-select: none; }
	  .label.required:after {
	    color: #FF3B30;
	    content: '*';
	    margin-left: 5px; }

	.input-field {
	  -webkit-appearance: none;
	     -moz-appearance: none;
	          appearance: none;
	  background-color: transparent;
	  border: 1px solid #CECED2;
	  border-radius: 4px;
	  color: #000000;
	  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
	  font-size: 14px;
	  line-height: 1.4;
	  margin: 0;
	  padding: 8.5px 10px;
	  -ms-touch-action: manipulation;
	      touch-action: manipulation;
	  -webkit-transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out, background-image 200ms ease-in-out;
	  transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out, background-image 200ms ease-in-out;
	  width: 100%; }
	  .input-field::-webkit-input-placeholder {
	    color: #CECED2;
	    opacity: 1; }
	  .input-field::-moz-placeholder {
	    color: #CECED2;
	    opacity: 1; }
	  .input-field:-ms-input-placeholder {
	    color: #CECED2;
	    opacity: 1; }
	  .input-field::placeholder {
	    color: #CECED2;
	    opacity: 1; }
	  .input-field:focus {
	    border-color: #007AFF;
	    outline: 0; }
	  .input-field::-moz-focus-inner {
	    border: 0;
	    padding: 0; }
	  .input-field.large {
	    border-radius: 5px;
	    border-width: 2px;
	    font-size: 17.5px;
	    padding-left: 12.5px;
	    padding-right: 12.5px;
	    padding-bottom: 10.625px;
	    padding-top: 10.625px; }
	  .input-field.small {
	    border-radius: 3.4px;
	    border-width: 0.5px;
	    font-size: 11.9px;
	    padding-left: 8.5px;
	    padding-right: 8.5px; }
	  .input-field.error {
	    border-color: #FF3B30;
	    color: #000000; }
	    .input-field.error:-moz-ui-invalid {
	      box-shadow: none; }
	  .input-field:disabled {
	    background-color: #EFEFF4;
	    color: #8E8E93;
	    cursor: not-allowed;
	    opacity: 1;
	    -webkit-user-select: none;
	       -moz-user-select: none;
	        -ms-user-select: none;
	            user-select: none; }

	input[type="number"].input-field::-webkit-inner-spin-button, input[type="number"].input-field::-webkit-outer-spin-button {
	  height: auto; }

	input[type="search"].input-field::-webkit-search-cancel-button, input[type="search"].input-field::-webkit-search-decoration {
	  -webkit-appearance: none; }

	select.input-field:not([multiple]) {
	  background-image: url('data:image/svg+xml,<svg%20width%3D"10"%20height%3D"5"%20viewBox%3D"169%20177%2010%205"%20xmlns%3D"http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg"><path%20fill%3D"%23000000"%20fill-rule%3D"evenodd"%20d%3D"M174%20182l5-5h-10"%2F><%2Fsvg>');
	  background-position: right 10px center;
	  background-repeat: no-repeat;
	  background-size: 10px 5px;
	  padding-right: 30px; }
	  select.input-field:not([multiple])::-ms-expand {
	    display: none; }
	  select.input-field:not([multiple]):focus {
	    background-image: url('data:image/svg+xml,<svg%20width%3D"10"%20height%3D"5"%20viewBox%3D"169%20177%2010%205"%20xmlns%3D"http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg"><path%20fill%3D"%23000000"%20fill-rule%3D"evenodd"%20d%3D"M174%20182l5-5h-10"%2F><%2Fsvg>'); }
	    select.input-field:not([multiple]):focus:-moz-focusring {
	      color: transparent;
	      text-shadow: 0 0 0 #000; }
	  select.input-field:not([multiple]).large {
	    padding-right: 35px; }
	  select.input-field:not([multiple]).small {
	    padding-right: 27px; }
	  select.input-field:not([multiple]) optgroup {
	    font-weight: bold; }
	  select.input-field:not([multiple]) option:disabled {
	    color: #8E8E93; }

	textarea.input-field {
	  overflow: auto;
	  resize: vertical; }

	.range {
	  -webkit-appearance: none;
	     -moz-appearance: none;
	          appearance: none;
	  background-color: transparent;
	  margin: 0;
	  width: 100%; }
	  .range::-webkit-slider-runnable-track {
	    background-color: transparent;
	    border: 1px solid #CECED2;
	    border-radius: 4px;
	    cursor: pointer;
	    height: 20px;
	    -webkit-transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	    transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	    width: 100%; }
	  .range::-moz-range-track {
	    background-color: transparent;
	    border: 1px solid #CECED2;
	    border-radius: 4px;
	    cursor: pointer;
	    height: 20px;
	    -webkit-transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	    transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	    width: 100%; }
	  .range::-ms-track {
	    background-color: transparent;
	    border: 1px solid #CECED2;
	    border-radius: 4px;
	    cursor: pointer;
	    height: 20px;
	    -webkit-transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	    transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	    width: 100%; }
	  .range::-ms-fill-lower {
	    background-color: transparent;
	    border: 1px solid #CECED2;
	    border-radius: 4px;
	    -webkit-transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	    transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out; }
	  .range::-ms-fill-upper {
	    background-color: transparent;
	    border: 1px solid #CECED2;
	    border-radius: 4px;
	    -webkit-transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	    transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out; }
	  .range::-webkit-slider-thumb {
	    -webkit-appearance: none;
	            appearance: none;
	    background-color: #CECED2;
	    border: 1px solid #8E8E93;
	    border-radius: 4px;
	    cursor: pointer;
	    height: 20px;
	    margin-top: -1px;
	    -webkit-transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	    transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	    width: 20px; }
	  .range::-moz-range-thumb {
	    -moz-appearance: none;
	         appearance: none;
	    background-color: #CECED2;
	    border: 1px solid #8E8E93;
	    border-radius: 4px;
	    cursor: pointer;
	    height: 20px;
	    margin-top: -1px;
	    -webkit-transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	    transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	    width: 20px; }
	  .range::-ms-thumb {
	    appearance: none;
	    background-color: #CECED2;
	    border: 1px solid #8E8E93;
	    border-radius: 4px;
	    cursor: pointer;
	    height: 20px;
	    margin-top: -1px;
	    -webkit-transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	    transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	    width: 20px; }
	  .range:focus {
	    outline: none; }
	    .range:focus::-moz-focus-outer {
	      border: 0; }
	    .range:focus::-webkit-slider-runnable-track {
	      border-color: #007AFF; }
	    .range:focus::-moz-range-track {
	      border-color: #007AFF; }
	    .range:focus::-ms-track {
	      border-color: #007AFF; }
	    .range:focus::-webkit-slider-thumb {
	      border-color: #007AFF; }
	    .range:focus::-moz-range-thumb {
	      border-color: #007AFF; }
	    .range:focus::-ms-thumb {
	      border-color: #007AFF; }
	  .range.large::-webkit-slider-runnable-track {
	    border-radius: 5px;
	    border-width: 2px;
	    height: 25px; }
	  .range.large::-moz-range-track {
	    border-radius: 5px;
	    border-width: 2px;
	    height: 25px; }
	  .range.large::-ms-track {
	    border-radius: 5px;
	    border-width: 2px;
	    height: 25px; }
	  .range.large::-ms-fill-lower {
	    border-radius: 5px;
	    border-width: 2px; }
	  .range.large::-ms-fill-upper {
	    border-radius: 5px;
	    border-width: 2px; }
	  .range.large::-webkit-slider-thumb {
	    border-radius: 5px;
	    border-width: 2px;
	    height: 25px;
	    width: 25px; }
	  .range.large::-moz-range-thumb {
	    border-radius: 5px;
	    border-width: 2px;
	    height: 25px;
	    width: 25px; }
	  .range.large::-ms-thumb {
	    border-radius: 5px;
	    border-width: 2px;
	    height: 25px;
	    width: 25px; }
	  .range.small::-webkit-slider-runnable-track {
	    border-radius: 3.4px;
	    border-width: 0.5px;
	    height: 17px; }
	  .range.small::-moz-range-track {
	    border-radius: 3.4px;
	    border-width: 0.5px;
	    height: 17px; }
	  .range.small::-ms-track {
	    border-radius: 3.4px;
	    border-width: 0.5px;
	    height: 17px; }
	  .range.small::-ms-fill-lower {
	    border-radius: 3.4px;
	    border-width: 0.5px; }
	  .range.small::-ms-fill-upper {
	    border-radius: 3.4px;
	    border-width: 0.5px; }
	  .range.small::-webkit-slider-thumb {
	    border-radius: 3.4px;
	    border-width: 0.5px;
	    height: 17px;
	    width: 17px; }
	  .range.small::-moz-range-thumb {
	    border-radius: 3.4px;
	    border-width: 0.5px;
	    height: 17px;
	    width: 17px; }
	  .range.small::-ms-thumb {
	    border-radius: 3.4px;
	    border-width: 0.5px;
	    height: 17px;
	    width: 17px; }
	  .range:disabled::-webkit-slider-runnable-track {
	    background-color: #EFEFF4;
	    cursor: not-allowed; }
	  .range:disabled::-moz-range-track {
	    background-color: #EFEFF4;
	    cursor: not-allowed; }
	  .range:disabled::-ms-track {
	    background-color: #EFEFF4;
	    cursor: not-allowed; }
	  .range:disabled::-webkit-slider-thumb {
	    cursor: not-allowed; }
	  .range:disabled::-moz-range-thumb {
	    cursor: not-allowed; }
	  .range:disabled::-ms-thumb {
	    cursor: not-allowed; }

	.radio {
	  display: none; }
	  .radio + .label {
	    cursor: pointer;
	    padding-left: 25px; }
	    .radio + .label:before {
	      background-color: transparent;
	      border: 1px solid #CECED2;
	      border-radius: 50%;
	      content: '';
	      display: inline-block;
	      height: 20px;
	      margin-bottom: -5px;
	      margin-left: -25px;
	      margin-right: 5px;
	      -webkit-transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out, box-shadow 200ms ease-in-out;
	      transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out, box-shadow 200ms ease-in-out;
	      vertical-align: top;
	      width: 20px; }
	    .radio + .label.required:after {
	      color: #FF3B30;
	      content: '*';
	      margin-left: 5px; }
	  .radio.large + .label {
	    padding-left: 30px; }
	    .radio.large + .label:before {
	      border-width: 2px;
	      height: 25px;
	      margin-left: -30px;
	      width: 25px; }
	  .radio.small + .label {
	    padding-left: 22px; }
	    .radio.small + .label:before {
	      border-width: 0.5px;
	      height: 17px;
	      margin-left: -22px;
	      width: 17px; }
	  .radio.error + .label:before {
	    background-color: transparent;
	    border-color: #FF3B30; }
	  .radio:disabled + .label {
	    color: #8E8E93;
	    cursor: not-allowed; }
	    .radio:disabled + .label:before {
	      background-color: #EFEFF4; }
	  .radio:checked + .label:before {
	    background-color: #007AFF;
	    border-color: #007AFF;
	    box-shadow: inset 0 0 0 2px #FFFFFF; }

	.checkbox {
	  display: none; }
	  .checkbox + .label {
	    cursor: pointer;
	    padding-left: 25px; }
	    .checkbox + .label:before {
	      background-color: transparent;
	      border: 1px solid #CECED2;
	      border-radius: 4px;
	      content: '';
	      display: inline-block;
	      height: 20px;
	      margin-bottom: -5px;
	      margin-left: -25px;
	      margin-right: 5px;
	      -webkit-transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out, box-shadow 200ms ease-in-out;
	      transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out, box-shadow 200ms ease-in-out;
	      vertical-align: top;
	      width: 20px; }
	    .checkbox + .label.required:after {
	      color: #FF3B30;
	      content: '*';
	      margin-left: 5px; }
	  .checkbox.large + .label {
	    padding-left: 30px; }
	    .checkbox.large + .label:before {
	      border-width: 2px;
	      height: 25px;
	      margin-left: -30px;
	      width: 25px; }
	  .checkbox.small + .label {
	    padding-left: 22px; }
	    .checkbox.small + .label:before {
	      border-width: 0.5px;
	      height: 17px;
	      margin-left: -22px;
	      width: 17px; }
	  .checkbox.error + .label:before {
	    background-color: transparent;
	    border-color: #FF3B30; }
	  .checkbox:disabled + .label {
	    color: #8E8E93;
	    cursor: not-allowed; }
	    .checkbox:disabled + .label:before {
	      background-color: #EFEFF4; }
	  .checkbox:checked + .label:before {
	    background-color: #007AFF;
	    border-color: #007AFF;
	    box-shadow: inset 0 0 0 2px #FFFFFF; }

	.input-helper {
	  color: #8E8E93;
	  font-size: 11.9px;
	  margin-top: 5px;
	  margin-bottom: 20px; }
	  .input-helper.error {
	    color: #FF3B30; }

	[role="button"] {
	  cursor: pointer; }

	.button {
	  background-color: #CECED2;
	  border: 1px solid #CECED2;
	  border-radius: 4px;
	  color: #000000;
	  cursor: pointer;
	  display: inline-block;
	  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
	  font-size: 14px;
	  line-height: 1.4;
	  padding: 8.5px 10px;
	  text-align: center;
	  text-decoration: none;
	  -webkit-transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	  transition: background-color 200ms ease-in-out, border-color 200ms ease-in-out;
	  -ms-touch-action: manipulation;
	      touch-action: manipulation;
	  -webkit-user-select: none;
	     -moz-user-select: none;
	      -ms-user-select: none;
	          user-select: none;
	  vertical-align: middle; }
	  .button.large {
	    border-radius: 5px;
	    border-width: 2px;
	    font-size: 17.5px;
	    padding-left: 12.5px;
	    padding-right: 12.5px;
	    padding-bottom: 10.625px;
	    padding-top: 10.625px; }
	  .button.small {
	    border-radius: 3.4px;
	    border-width: 0.5px;
	    font-size: 11.9px;
	    padding-left: 8.5px;
	    padding-right: 8.5px; }
	  .button.full {
	    width: 100%; }
	  .button:hover {
	    background-color: #b3b3ba;
	    border-color: #b3b3ba;
	    color: #000000; }
	    .button:hover:disabled {
	      background-color: #CECED2;
	      border-color: #CECED2; }
	  .button:focus, .button:active {
	    background-color: #9999a1;
	    border-color: #9999a1;
	    color: #000000; }
	    .button:focus:disabled, .button:active:disabled {
	      background-color: #CECED2;
	      border-color: #CECED2; }
	  .button.primary {
	    background-color: #007AFF;
	    border-color: #007AFF;
	    color: #FFFFFF; }
	    .button.primary:hover {
	      background-color: #0062cc;
	      border-color: #0062cc;
	      color: #FFFFFF; }
	      .button.primary:hover:disabled {
	        background-color: #007AFF;
	        border-color: #007AFF; }
	    .button.primary:focus, .button.primary:active {
	      background-color: #004999;
	      border-color: #004999;
	      color: #FFFFFF; }
	      .button.primary:focus:disabled, .button.primary:active:disabled {
	        background-color: #007AFF;
	        border-color: #007AFF; }
	  .button.secondary {
	    background-color: #5856D9;
	    border-color: #5856D9;
	    color: #FFFFFF; }
	    .button.secondary:hover {
	      background-color: #312ece;
	      border-color: #312ece;
	      color: #FFFFFF; }
	      .button.secondary:hover:disabled {
	        background-color: #5856D9;
	        border-color: #5856D9; }
	    .button.secondary:focus, .button.secondary:active {
	      background-color: #2725a4;
	      border-color: #2725a4;
	      color: #FFFFFF; }
	      .button.secondary:focus:disabled, .button.secondary:active:disabled {
	        background-color: #5856D9;
	        border-color: #5856D9; }
	  .button.success {
	    background-color: #4CD964;
	    border-color: #4CD964;
	    color: #FFFFFF; }
	    .button.success:hover {
	      background-color: #2ac845;
	      border-color: #2ac845;
	      color: #FFFFFF; }
	      .button.success:hover:disabled {
	        background-color: #4CD964;
	        border-color: #4CD964; }
	    .button.success:focus, .button.success:active {
	      background-color: #219e37;
	      border-color: #219e37;
	      color: #FFFFFF; }
	      .button.success:focus:disabled, .button.success:active:disabled {
	        background-color: #4CD964;
	        border-color: #4CD964; }
	  .button.information {
	    background-color: #5AC8FA;
	    border-color: #5AC8FA;
	    color: #FFFFFF; }
	    .button.information:hover {
	      background-color: #29b8f9;
	      border-color: #29b8f9;
	      color: #FFFFFF; }
	      .button.information:hover:disabled {
	        background-color: #5AC8FA;
	        border-color: #5AC8FA; }
	    .button.information:focus, .button.information:active {
	      background-color: #07a1e7;
	      border-color: #07a1e7;
	      color: #FFFFFF; }
	      .button.information:focus:disabled, .button.information:active:disabled {
	        background-color: #5AC8FA;
	        border-color: #5AC8FA; }
	  .button.warning {
	    background-color: #FFCC00;
	    border-color: #FFCC00;
	    color: #FFFFFF; }
	    .button.warning:hover {
	      background-color: #cca300;
	      border-color: #cca300;
	      color: #FFFFFF; }
	      .button.warning:hover:disabled {
	        background-color: #FFCC00;
	        border-color: #FFCC00; }
	    .button.warning:focus, .button.warning:active {
	      background-color: #997a00;
	      border-color: #997a00;
	      color: #FFFFFF; }
	      .button.warning:focus:disabled, .button.warning:active:disabled {
	        background-color: #FFCC00;
	        border-color: #FFCC00; }
	  .button.danger {
	    background-color: #FF3B30;
	    border-color: #FF3B30;
	    color: #FFFFFF; }
	    .button.danger:hover {
	      background-color: #fc0d00;
	      border-color: #fc0d00;
	      color: #FFFFFF; }
	      .button.danger:hover:disabled {
	        background-color: #FF3B30;
	        border-color: #FF3B30; }
	    .button.danger:focus, .button.danger:active {
	      background-color: #c90b00;
	      border-color: #c90b00;
	      color: #FFFFFF; }
	      .button.danger:focus:disabled, .button.danger:active:disabled {
	        background-color: #FF3B30;
	        border-color: #FF3B30; }
	  .button.inverted {
	    background-color: transparent;
	    border-color: #CECED2;
	    color: #000000;
	    -webkit-transition: background-color 200ms ease-in-out, color 200ms ease-in-out;
	    transition: background-color 200ms ease-in-out, color 200ms ease-in-out; }
	    .button.inverted:hover {
	      background-color: #CECED2; }
	      .button.inverted:hover:disabled {
	        background-color: transparent; }
	    .button.inverted:focus, .button.inverted:active {
	      background-color: #CECED2; }
	      .button.inverted:focus:disabled, .button.inverted:active:disabled {
	        background-color: transparent; }
	    .button.inverted.primary {
	      border-color: #007AFF;
	      color: #007AFF; }
	      .button.inverted.primary:hover {
	        background-color: #007AFF;
	        border-color: #007AFF;
	        color: #FFFFFF; }
	        .button.inverted.primary:hover:disabled {
	          background-color: transparent;
	          border-color: #007AFF;
	          color: #007AFF; }
	      .button.inverted.primary:focus, .button.inverted.primary:active {
	        background-color: #007AFF;
	        border-color: #007AFF;
	        color: #FFFFFF; }
	        .button.inverted.primary:focus:disabled, .button.inverted.primary:active:disabled {
	          background-color: transparent;
	          border-color: #007AFF;
	          color: #007AFF; }
	    .button.inverted.secondary {
	      border-color: #5856D9;
	      color: #5856D9; }
	      .button.inverted.secondary:hover {
	        background-color: #5856D9;
	        border-color: #5856D9;
	        color: #FFFFFF; }
	        .button.inverted.secondary:hover:disabled {
	          background-color: transparent;
	          border-color: #5856D9;
	          color: #5856D9; }
	      .button.inverted.secondary:focus, .button.inverted.secondary:active {
	        background-color: #5856D9;
	        border-color: #5856D9;
	        color: #FFFFFF; }
	        .button.inverted.secondary:focus:disabled, .button.inverted.secondary:active:disabled {
	          background-color: transparent;
	          border-color: #5856D9;
	          color: #5856D9; }
	    .button.inverted.success {
	      border-color: #4CD964;
	      color: #4CD964; }
	      .button.inverted.success:hover {
	        background-color: #4CD964;
	        border-color: #4CD964;
	        color: #FFFFFF; }
	        .button.inverted.success:hover:disabled {
	          background-color: transparent;
	          border-color: #4CD964;
	          color: #4CD964; }
	      .button.inverted.success:focus, .button.inverted.success:active {
	        background-color: #4CD964;
	        border-color: #4CD964;
	        color: #FFFFFF; }
	        .button.inverted.success:focus:disabled, .button.inverted.success:active:disabled {
	          background-color: transparent;
	          border-color: #4CD964;
	          color: #4CD964; }
	    .button.inverted.information {
	      border-color: #5AC8FA;
	      color: #5AC8FA; }
	      .button.inverted.information:hover {
	        background-color: #5AC8FA;
	        border-color: #5AC8FA;
	        color: #FFFFFF; }
	        .button.inverted.information:hover:disabled {
	          background-color: transparent;
	          border-color: #5AC8FA;
	          color: #5AC8FA; }
	      .button.inverted.information:focus, .button.inverted.information:active {
	        background-color: #5AC8FA;
	        border-color: #5AC8FA;
	        color: #FFFFFF; }
	        .button.inverted.information:focus:disabled, .button.inverted.information:active:disabled {
	          background-color: transparent;
	          border-color: #5AC8FA;
	          color: #5AC8FA; }
	    .button.inverted.warning {
	      border-color: #FFCC00;
	      color: #FFCC00; }
	      .button.inverted.warning:hover {
	        background-color: #FFCC00;
	        border-color: #FFCC00;
	        color: #FFFFFF; }
	        .button.inverted.warning:hover:disabled {
	          background-color: transparent;
	          border-color: #FFCC00;
	          color: #FFCC00; }
	      .button.inverted.warning:focus, .button.inverted.warning:active {
	        background-color: #FFCC00;
	        border-color: #FFCC00;
	        color: #FFFFFF; }
	        .button.inverted.warning:focus:disabled, .button.inverted.warning:active:disabled {
	          background-color: transparent;
	          border-color: #FFCC00;
	          color: #FFCC00; }
	    .button.inverted.danger {
	      border-color: #FF3B30;
	      color: #FF3B30; }
	      .button.inverted.danger:hover {
	        background-color: #FF3B30;
	        border-color: #FF3B30;
	        color: #FFFFFF; }
	        .button.inverted.danger:hover:disabled {
	          background-color: transparent;
	          border-color: #FF3B30;
	          color: #FF3B30; }
	      .button.inverted.danger:focus, .button.inverted.danger:active {
	        background-color: #FF3B30;
	        border-color: #FF3B30;
	        color: #FFFFFF; }
	        .button.inverted.danger:focus:disabled, .button.inverted.danger:active:disabled {
	          background-color: transparent;
	          border-color: #FF3B30;
	          color: #FF3B30; }
	  .button:disabled {
	    cursor: not-allowed;
	    opacity: .5; }

	button.button {
	  margin: 0;
	  overflow: visible; }
	  button.button:focus {
	    outline: 0; }
	  button.button::-moz-focus-inner {
	    border: 0;
	    margin: 0;
	    padding: 0; }

	.alert {
	  border: solid 1px;
	  border-radius: 4px;
	  padding: 10px;
	  margin-bottom: 20px; }
	  .alert > *:last-child {
	    margin-bottom: 0; }
	  .alert.primary {
	    background-color: rgba(0, 122, 255, 0.25);
	    border-color: #007AFF;
	    color: #0062cc; }
	  .alert.secondary {
	    background-color: rgba(88, 86, 217, 0.25);
	    border-color: #5856D9;
	    color: #312ece; }
	  .alert.success {
	    background-color: rgba(76, 217, 100, 0.25);
	    border-color: #4CD964;
	    color: #2ac845; }
	  .alert.information {
	    background-color: rgba(90, 200, 250, 0.25);
	    border-color: #5AC8FA;
	    color: #29b8f9; }
	  .alert.warning {
	    background-color: rgba(255, 204, 0, 0.25);
	    border-color: #FFCC00;
	    color: #cca300; }
	  .alert.danger {
	    background-color: rgba(255, 59, 48, 0.25);
	    border-color: #FF3B30;
	    color: #fc0d00; }

	progress.progress {
	  display: block;
	  height: 20px;
	  margin-bottom: 20px;
	  vertical-align: baseline;
	  width: 100%; }
	  progress.progress[value] {
	    -webkit-appearance: none;
	       -moz-appearance: none;
	            appearance: none;
	    background-color: #EFEFF4;
	    border: 1px solid #CECED2;
	    border-radius: 4px; }
	    progress.progress[value]::-webkit-progress-bar {
	      background-color: #EFEFF4;
	      border-radius: 4px; }
	    progress.progress[value]::-webkit-progress-value {
	      background-color: #CECED2;
	      border-bottom-left-radius: 4px;
	      border-top-left-radius: 4px; }
	    progress.progress[value]::-moz-progress-bar {
	      background-color: #CECED2;
	      border-bottom-left-radius: 4px;
	      border-top-left-radius: 4px; }
	    progress.progress[value]::-ms-fill {
	      background-color: #CECED2;
	      border: 0; }
	  progress.progress[value="100"]::-webkit-progress-value {
	    border-bottom-right-radius: 4px;
	    border-top-right-radius: 4px; }
	  progress.progress[value="100"]::-moz-progress-bar {
	    border-bottom-right-radius: 4px;
	    border-top-right-radius: 4px; }
	  progress.progress.large {
	    border-radius: 5px;
	    border-width: 2px;
	    height: 25px; }
	    progress.progress.large[value] {
	      border-radius: 5px; }
	      progress.progress.large[value]::-webkit-progress-bar {
	        border-radius: 5px; }
	      progress.progress.large[value]::-webkit-progress-value {
	        border-bottom-left-radius: 5px;
	        border-top-left-radius: 5px; }
	      progress.progress.large[value]::-moz-progress-bar {
	        border-bottom-left-radius: 5px;
	        border-top-left-radius: 5px; }
	    progress.progress.large[value="100"]::-webkit-progress-value {
	      border-bottom-right-radius: 5px;
	      border-top-right-radius: 5px; }
	    progress.progress.large[value="100"]::-moz-progress-bar {
	      border-bottom-right-radius: 5px;
	      border-top-right-radius: 5px; }
	  progress.progress.small {
	    border-radius: 3.4px;
	    border-width: 0.5px;
	    height: 17px; }
	    progress.progress.small[value] {
	      border-radius: 3.4px; }
	      progress.progress.small[value]::-webkit-progress-bar {
	        border-radius: 3.4px; }
	      progress.progress.small[value]::-webkit-progress-value {
	        border-bottom-left-radius: 3.4px;
	        border-top-left-radius: 3.4px; }
	      progress.progress.small[value]::-moz-progress-bar {
	        border-bottom-left-radius: 3.4px;
	        border-top-left-radius: 3.4px; }
	    progress.progress.small[value="100"]::-webkit-progress-value {
	      border-bottom-right-radius: 3.4px;
	      border-top-right-radius: 3.4px; }
	    progress.progress.small[value="100"]::-moz-progress-bar {
	      border-bottom-right-radius: 3.4px;
	      border-top-right-radius: 3.4px; }
	  progress.progress.primary[value]::-webkit-progress-value {
	    background-color: #007AFF; }
	  progress.progress.primary[value]::-moz-progress-bar {
	    background-color: #007AFF; }
	  progress.progress.primary[value]::-ms-fill {
	    background-color: #007AFF; }
	  progress.progress.secondary[value]::-webkit-progress-value {
	    background-color: #5856D9; }
	  progress.progress.secondary[value]::-moz-progress-bar {
	    background-color: #5856D9; }
	  progress.progress.secondary[value]::-ms-fill {
	    background-color: #5856D9; }
	  progress.progress.success[value]::-webkit-progress-value {
	    background-color: #4CD964; }
	  progress.progress.success[value]::-moz-progress-bar {
	    background-color: #4CD964; }
	  progress.progress.success[value]::-ms-fill {
	    background-color: #4CD964; }
	  progress.progress.information[value]::-webkit-progress-value {
	    background-color: #5AC8FA; }
	  progress.progress.information[value]::-moz-progress-bar {
	    background-color: #5AC8FA; }
	  progress.progress.information[value]::-ms-fill {
	    background-color: #5AC8FA; }
	  progress.progress.warning[value]::-webkit-progress-value {
	    background-color: #FFCC00; }
	  progress.progress.warning[value]::-moz-progress-bar {
	    background-color: #FFCC00; }
	  progress.progress.warning[value]::-ms-fill {
	    background-color: #FFCC00; }
	  progress.progress.danger[value]::-webkit-progress-value {
	    background-color: #FF3B30; }
	  progress.progress.danger[value]::-moz-progress-bar {
	    background-color: #FF3B30; }
	  progress.progress.danger[value]::-ms-fill {
	    background-color: #FF3B30; }

	[data-toggle="modal"] {
	  cursor: pointer; }

	body.modal-open {
	  overflow: hidden;
	  -ms-touch-action: none;
	      touch-action: none; }

	.modal-backdrop {
	  background-color: #000000;
	  bottom: 0;
	  display: none;
	  left: 0;
	  opacity: 0.5;
	  position: fixed;
	  right: 0;
	  top: 0;
	  z-index: 9999; }

	.modal {
	  bottom: 0;
	  display: none;
	  left: 0;
	  letter-spacing: -4px;
	  overflow: auto;
	  padding-left: 20px;
	  padding-right: 20px;
	  position: fixed;
	  text-align: center;
	  right: 0;
	  top: 0;
	  vertical-align: middle;
	  z-index: 10000; }
	  .modal:after {
	    content: '';
	    display: inline-block;
	    height: 100%;
	    vertical-align: middle; }
	  .modal.extra-small .modal-content {
	    max-width: -40px; }
	  .modal.small .modal-content {
	    max-width: 504px; }
	  .modal.medium .modal-content {
	    max-width: 728px; }
	  .modal.large .modal-content {
	    max-width: 952px; }
	  .modal.extra-large .modal-content {
	    max-width: 1360px; }
	  .modal .modal-content {
	    background-color: #FFFFFF;
	    border: #CECED2 solid 1px;
	    border-radius: 4px;
	    display: inline-block;
	    letter-spacing: normal;
	    margin-bottom: 20px;
	    margin-top: 20px;
	    padding: 20px;
	    text-align: left;
	    vertical-align: middle;
	    width: 100%; }

	.accordion-group {
	  margin-bottom: 20px; }
	  .accordion-group > .accordion + .accordion {
	    border-top: 1px solid #CECED2; }
	  .accordion-group > .accordion > .accordion-toggle {
	    cursor: pointer;
	    margin: 0;
	    padding: 10px 10px;
	    text-decoration: none;
	    -webkit-user-select: none;
	       -moz-user-select: none;
	        -ms-user-select: none;
	            user-select: none; }
	  .accordion-group > .accordion > .accordion-content {
	    display: none;
	    padding: 10px 10px; }
	  .accordion-group.striped > .accordion:nth-child(odd) > .accordion-toggle, .accordion-group.striped > .accordion:nth-child(odd) > .accordion-content {
	    background-color: #EFEFF4; }
	  .accordion-group.hover > .accordion > .accordion-toggle {
	    -webkit-transition: background-color 200ms ease-in-out;
	    transition: background-color 200ms ease-in-out; }
	    .accordion-group.hover > .accordion > .accordion-toggle:hover {
	      background-color: rgba(0, 122, 255, 0.25); }

	.calendar caption, .calendar th {
	  text-align: inherit; }

	.calendar > tbody > tr > td {
	  text-align: inherit;
	  width: 14.2857142857%; }
	  .calendar > tbody > tr > td:first-child, .calendar > tbody > tr > td:last-child {
	    background-color: #EFEFF4; }
	  .calendar > tbody > tr > td .date {
	    display: inline-block;
	    height: 40px;
	    line-height: 40px;
	    text-align: center;
	    vertical-align: top;
	    width: 40px; }
	  .calendar > tbody > tr > td.event .date {
	    background-color: #000000;
	    border-radius: 50%;
	    color: #FFFFFF; }
	  .calendar > tbody > tr > td.event .event-list {
	    margin-bottom: 0;
	    margin-top: 10px;
	    padding-left: 14px; }
	    .calendar > tbody > tr > td.event .event-list li {
	      text-align: left; }
	      .calendar > tbody > tr > td.event .event-list li span {
	        color: #000000;
	        font-size: 11.9px; }
	  .calendar > tbody > tr > td.today .date {
	    background-color: #007AFF;
	    border-radius: 50%;
	    color: #FFFFFF; }
	  .calendar > tbody > tr > td.off .date {
	    color: #CECED2; }

	@media (max-width: 543px) {
	  .calendar.responsive tbody > tr {
	    border-top: 0;
	    padding: 0; }
	    .calendar.responsive tbody > tr > td {
	      border-top: 1px solid #CECED2;
	      padding: 10px;
	      text-align: left; }
	      .calendar.responsive tbody > tr > td.event .event-list {
	        display: inline-block;
	        margin-left: 5px;
	        margin-top: 0;
	        vertical-align: top; }
	      .calendar.responsive tbody > tr > td.off {
	        display: none; } }

	.slides {
	  overflow: hidden; }
	  .slides:after {
	    clear: both;
	    content: '';
	    display: block; }
	  .slides .slide {
	    background: no-repeat center center;
	    background-size: cover;
	    float: left;
	    margin-right: -100%;
	    min-height: 500px;
	    position: relative;
	    width: 100%;
	    z-index: 1; }
	    .slides .slide.active {
	      z-index: 2; }
	    .slides .slide[data-transition-type="fade"] {
	      opacity: 0; }
	      .slides .slide[data-transition-type="fade"].active {
	        opacity: 1;
	        -webkit-transition: opacity ease-in-out;
	        transition: opacity ease-in-out; }
	      .slides .slide[data-transition-type="fade"].previous {
	        opacity: 1; }
	    .slides .slide[data-transition-type="slide"] {
	      -webkit-transform: translateX(100%);
	          -ms-transform: translateX(100%);
	              transform: translateX(100%); }
	      .slides .slide[data-transition-type="slide"].active {
	        -webkit-transform: translateX(0);
	            -ms-transform: translateX(0);
	                transform: translateX(0);
	        -webkit-transition: -webkit-transform ease-in-out;
	        transition: -webkit-transform ease-in-out;
	        transition: transform ease-in-out;
	        transition: transform ease-in-out, -webkit-transform ease-in-out; }
	      .slides .slide[data-transition-type="slide"].previous {
	        -webkit-transform: translateX(0);
	            -ms-transform: translateX(0);
	                transform: translateX(0); }
	    .slides .slide .overlay {
	      bottom: 0;
	      left: 0;
	      position: absolute;
	      right: 0;
	      top: 0; }
	    .slides .slide .caption {
	      -webkit-backface-visibility: hidden;
	              backface-visibility: hidden;
	      color: #FFFFFF;
	      height: 100%;
	      text-shadow: 0 1px 4px rgba(51, 51, 51, 0.7);
	      display: -webkit-box;
	      display: -ms-flexbox;
	      display: flex;
	      -webkit-box-orient: vertical;
	      -webkit-box-direction: normal;
	          -ms-flex-direction: column;
	              flex-direction: column; }
	      .slides .slide .caption.bottom {
	        -webkit-box-pack: end;
	            -ms-flex-pack: end;
	                justify-content: flex-end; }
	      .slides .slide .caption.middle {
	        -webkit-box-pack: center;
	            -ms-flex-pack: center;
	                justify-content: center; }
	      .slides .slide .caption.top {
	        -webkit-box-pack: start;
	            -ms-flex-pack: start;
	                justify-content: flex-start; }
	      .slides .slide .caption > .container {
	        padding-bottom: 20px;
	        padding-top: 20px; }
	        .slides .slide .caption > .container > *:last-child {
	          margin-bottom: 0; }

	.background-color-primary {
	  background-color: rgba(0, 122, 255, 0.25); }

	.background-color-secondary {
	  background-color: rgba(88, 86, 217, 0.25); }

	.background-color-success {
	  background-color: rgba(76, 217, 100, 0.25); }

	.background-color-information {
	  background-color: rgba(90, 200, 250, 0.25); }

	.background-color-warning {
	  background-color: rgba(255, 204, 0, 0.25); }

	.background-color-danger {
	  background-color: rgba(255, 59, 48, 0.25); }

	.color-primary {
	  color: #007AFF; }

	.color-secondary {
	  color: #5856D9; }

	.color-success {
	  color: #4CD964; }

	.color-information {
	  color: #5AC8FA; }

	.color-warning {
	  color: #FFCC00; }

	.color-danger {
	  color: #FF3B30; }

	.hidden, [hidden], template {
	  display: none; }

	@media print {
	  .hidden-print {
	    display: none; } }

	.hidden-extra-small-up {
	  display: none; }

	@media (max-width: 543px) {
	  .hidden-extra-small-down {
	    display: none; } }

	@media (min-width: 544px) {
	  .hidden-small-up {
	    display: none; } }

	@media (max-width: 767px) {
	  .hidden-small-down {
	    display: none; } }

	@media (min-width: 768px) {
	  .hidden-medium-up {
	    display: none; } }

	@media (max-width: 991px) {
	  .hidden-medium-down {
	    display: none; } }

	@media (min-width: 992px) {
	  .hidden-large-up {
	    display: none; } }

	@media (max-width: 1399px) {
	  .hidden-large-down {
	    display: none; } }

	@media (min-width: 1400px) {
	  .hidden-extra-large-up {
	    display: none; } }

	.hidden-extra-large-down {
	  display: none; }

	.align-left {
	  text-align: left; }

	.align-right {
	  text-align: right; }

	.align-center {
	  text-align: center; }

	.align-extra-small-left {
	  text-align: left; }

	.align-extra-small-right {
	  text-align: right; }

	.align-extra-small-center {
	  text-align: center; }

	@media (min-width: 544px) {
	  .align-small-left {
	    text-align: left; }
	  .align-small-right {
	    text-align: right; }
	  .align-small-center {
	    text-align: center; } }

	@media (min-width: 768px) {
	  .align-medium-left {
	    text-align: left; }
	  .align-medium-right {
	    text-align: right; }
	  .align-medium-center {
	    text-align: center; } }

	@media (min-width: 992px) {
	  .align-large-left {
	    text-align: left; }
	  .align-large-right {
	    text-align: right; }
	  .align-large-center {
	    text-align: center; } }

	@media (min-width: 1400px) {
	  .align-extra-large-left {
	    text-align: left; }
	  .align-extra-large-right {
	    text-align: right; }
	  .align-extra-large-center {
	    text-align: center; } }

	.alignnone {
	  height: auto;
	  margin-left: 0;
	  margin-right: 0;
	  max-width: 100%; }

	.aligncenter {
	  display: block;
	  height: auto;
	  margin: 10px auto;
	  max-width: 100%; }

	.alignleft, .alignright {
	  height: auto;
	  margin-bottom: 10px;
	  max-width: 100%; }

	@media (min-width: 544px) {
	  .alignleft {
	    float: left;
	    margin-right: 10px; }
	  .alignright {
	    float: right;
	    margin-left: 10px; } }

	.wp-caption {
	  background-color: #EFEFF4;
	  border: 1px solid #CECED2;
	  border-radius: 4px;
	  padding: 5px;
	  -webkit-transition: all 200ms ease-in-out;
	  transition: all 200ms ease-in-out; }

	.wp-caption-text {
	  padding: 20px; }
</style>
