<?php
session_start();
if(!empty($_SESSION['id'])){
	echo "<!DOCTYPE html>
<html style='font-size: 16px;'>
  
<head>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta charset='utf-8'>
    <meta name='keywords' content=''>
    <meta name='description' content=''>
    <meta name='page_type' content='np-template-header-footer-from-plugin'>
    <title>Fale com nosco</title>
    <link rel='stylesheet' href='nicepage3b2a.css?version=785f7921-8948-4314-9e1b-3ac583198d65' media='screen'>
    <script class='u-script' type='text/javascript' src='../static.amin.com.br/shared/assets/jquery-1.9.1.min.js' defer=''></script>
    <script class='u-script' type='text/javascript' src='../capp.amin.com.br/a65fb18d973a38100845603e2d18c5eb845005cb/nicepage.js' defer=''></script>
    <meta name='generator' content='Nicepage 3.30.1, amin.com.br'>
    <link id='u-theme-google-font' rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i'>
    <link id='u-page-google-font' rel='stylesheet' href='https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i'>
    <style class='u-style'> .u-section-2 {
  background-image: none;
}
.u-section-2 .u-sheet-1 {
  min-height: 1045px;
}
.u-section-2 .u-text-1 {
  text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
  font-size: 1rem;
  margin: 30px 0 0;
}
.u-section-2 .u-btn-1 {
  border-style: none;
  font-size: 2.25rem;
  padding: 0 30px;
}
.u-section-2 .u-btn-2 {
  border-style: none none solid;
  align-self: center;
  margin: -59px 0 0 auto;
  padding: 0;
}
.u-section-2 .u-icon-1 {
  color: rgb(71, 138, 201) !important;
  font-size: 2.3126em;
  margin-right: 6px;
  vertical-align: 0px;
}
.u-section-2 .u-shape-1 {
  height: 228px;
  margin-top: 230px;
  margin-bottom: 0;
  box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.4);
}
.u-section-2 .u-product-1 {
  min-height: 889px;
  width: 887px;
  margin: -416px auto 0;
}
.u-section-2 .u-container-layout-1 {
  padding: 30px;
}
.u-section-2 .u-image-1 {
  height: 486px;
  box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.4);
  animation-duration: 1000ms;
  width: 815px;
  margin: 0 auto;
}
.u-section-2 .u-video-1 {
  width: 740px;
  height: 421px;
  animation-duration: 1000ms;
  margin: -453px auto 0;
}
.u-section-2 .embed-responsive-1 {
  position: absolute;
}
.u-section-2 .u-group-1 {
  width: 616px;
  min-height: 334px;
  background-image: none;
  box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.4);
  margin: 34px auto 0;
}
.u-section-2 .u-container-layout-2 {
  padding: 30px 0 0;
}
.u-section-2 .u-text-2 {
  margin: 27px auto 0;
}
.u-section-2 .u-product-price-1 {
  margin: 32px auto 0;
}
.u-section-2 .u-text-3 {
  margin: 15px 30px 0;
}
.u-section-2 .u-btn-3 {
  border-style: solid;
  font-weight: 700;
  text-transform: uppercase;
  margin: 20px auto 0;
  padding: 10px 137px 10px 136px;
}
.u-section-2 .u-text-4 {
  font-weight: 400;
  text-align: center;
  font-size: 2.25rem;
  margin: -919px -45px 60px;
}
@media (max-width: 1199px) {
  .u-section-2 .u-text-1 {
    width: auto;
  }
  .u-section-2 .u-video-1 {
    width: 688px;
    height: 393px;
    margin-top: -439px;
  }
  .u-section-2 .u-group-1 {
    margin-top: 47px;
  }
  .u-section-2 .u-text-4 {
    width: auto;
  }
}
@media (max-width: 991px) {
  .u-section-2 .u-sheet-1 {
    min-height: 958px;
  }
  .u-section-2 .u-text-1 {
    margin-top: 22px;
  }
  .u-section-2 .u-shape-1 {
    margin-top: 238px;
  }
  .u-section-2 .u-product-1 {
    min-height: 824px;
    height: auto;
    margin-right: initial;
    margin-left: initial;
    width: auto;
  }
  .u-section-2 .u-container-layout-1 {
    padding-bottom: 0;
  }
  .u-section-2 .u-image-1 {
    height: 394px;
    width: 660px;
  }
  .u-section-2 .u-video-1 {
    width: 610px;
    height: 322px;
    margin-top: -358px;
  }
  .u-section-2 .u-group-1 {
    margin-top: 36px;
  }
  .u-section-2 .u-container-layout-2 {
    padding-left: 0;
    padding-right: 0;
    padding-bottom: 0;
  }
  .u-section-2 .u-text-4 {
    margin-top: -866px;
  }
}
@media (max-width: 767px) {
  .u-section-2 .u-sheet-1 {
    min-height: 858px;
  }
  .u-section-2 .u-text-1 {
    font-size: 2.25rem;
    text-align: center;
    margin-top: 20px;
    margin-left: -13px;
    margin-right: -13px;
  }
  .u-section-2 .u-shape-1 {
    margin-top: 240px;
  }
  .u-section-2 .u-product-1 {
    min-height: 723px;
    width: auto;
    margin-right: initial;
    margin-left: initial;
  }
  .u-section-2 .u-container-layout-1 {
    padding-bottom: 0;
    padding-left: 10px;
    padding-right: 10px;
  }
  .u-section-2 .u-image-1 {
    height: 310px;
    width: 520px;
  }
  .u-section-2 .u-video-1 {
    width: 483px;
    height: 238px;
    margin-top: -274px;
  }
  .u-section-2 .u-group-1 {
    min-height: 322px;
    width: 480px;
  }
  .u-section-2 .u-text-3 {
    margin-left: 0;
    margin-right: 0;
  }
  .u-section-2 .u-text-4 {
    font-size: 1.875rem;
    margin-top: -760px;
    margin-left: 0;
    margin-right: 0;
  }
}
@media (max-width: 575px) {
  .u-section-2 .u-sheet-1 {
    min-height: 777px;
  }
  .u-section-2 .u-text-1 {
    margin-top: 18px;
    margin-right: 50px;
    margin-left: -50px;
  }
  .u-section-2 .u-btn-1 {
    font-size: 1.5rem;
    animation-duration: 500ms;
  }
  .u-section-2 .u-btn-2 {
    margin-right: 18px;
  }
  .u-section-2 .u-shape-1 {
    margin-top: 244px;
  }
  .u-section-2 .u-product-1 {
    min-height: 604px;
    width: auto;
    margin-right: initial;
    margin-left: initial;
  }
  .u-section-2 .u-container-layout-1 {
    padding-top: 0;
    padding-left: 0;
    padding-right: 0;
  }
  .u-section-2 .u-image-1 {
    animation-duration: 500ms;
    height: 236px;
    width: 387px;
    margin-top: 15px;
    margin-left: -24px;
    margin-right: -24px;
  }
  .u-section-2 .u-video-1 {
    height: 197px;
    animation-duration: 500ms;
    width: 339px;
    margin-top: -217px;
  }
  .u-section-2 .u-group-1 {
    min-height: 344px;
    width: 320px;
    margin-top: 20px;
  }
  .u-section-2 .u-container-layout-2 {
    padding-bottom: 21px;
  }
  .u-section-2 .u-btn-3 {
    padding-right: 62px;
    padding-bottom: 11px;
    padding-left: 62px;
  }
  .u-section-2 .u-text-4 {
    animation-duration: 2000ms;
    font-size: 1.5rem;
    margin-top: -649px;
  }
}
.u-block-a191-5:not([data-block-selected]) {
  transition-property: fill, color, background-image, background-color, stroke-width, border-style, border-width, box-shadow, text-shadow, opacity, border-radius, stroke, border-color, font-size, font-style, font-weight, text-decoration, letter-spacing, transform !important;
}</style>
    <style class='u-style'>.u-section-3 .u-sheet-1 {
  min-height: 315px;
}
.u-section-3 .u-list-1 {
  grid-template-rows: repeat(1, auto);
  margin: 0 auto -1px 0;
}
.u-section-3 .u-repeater-1 {
  grid-template-columns: repeat(3, calc(33.3333% - 6.66667px));
  min-height: 315px;
  grid-gap: 10px;
}
.u-section-3 .u-container-layout-1 {
  padding: 30px;
}
.u-section-3 .u-icon-1 {
  height: 64px;
  width: 64px;
  margin: 0 auto;
}
.u-section-3 .u-text-1 {
  margin: 30px 0 0;
}
.u-section-3 .u-text-2 {
  margin: 20px 20px 0 0;
}
.u-section-3 .u-container-layout-2 {
  padding: 30px;
}
.u-section-3 .u-icon-2 {
  height: 64px;
  width: 64px;
  margin: 0 auto;
}
.u-section-3 .u-text-3 {
  margin: 30px 0 0;
}
.u-section-3 .u-text-4 {
  margin: 20px 20px 0 0;
}
.u-section-3 .u-container-layout-3 {
  padding: 30px;
}
.u-section-3 .u-icon-3 {
  height: 64px;
  width: 64px;
  margin: 0 auto;
}
.u-section-3 .u-text-5 {
  margin: 30px 0 0;
}
.u-section-3 .u-text-6 {
  margin: 20px 20px 0 0;
}
@media (max-width: 1199px) {
  .u-section-3 .u-list-1 {
    height: auto;
    margin-right: initial;
    margin-left: initial;
  }
  .u-section-3 .u-text-2 {
    margin-right: 16px;
  }
  .u-section-3 .u-text-4 {
    margin-right: 16px;
  }
  .u-section-3 .u-text-6 {
    margin-right: 16px;
  }
}
@media (max-width: 991px) {
  .u-section-3 .u-repeater-1 {
    grid-template-columns: repeat(2, calc(50% - 5px));
  }
  .u-section-3 .u-text-2 {
    margin-right: 0;
  }
  .u-section-3 .u-text-4 {
    margin-right: 0;
  }
  .u-section-3 .u-text-6 {
    margin-right: 0;
  }
}
@media (max-width: 767px) {
  .u-section-3 .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
  }
  .u-section-3 .u-container-layout-2 {
    padding-left: 10px;
    padding-right: 10px;
  }
  .u-section-3 .u-container-layout-3 {
    padding-left: 10px;
    padding-right: 10px;
  }
}
@media (max-width: 575px) {
  .u-section-3 .u-repeater-1 {
    grid-template-columns: repeat(1, 100%);
  }
}</style>
    <style class='u-style'> .u-section-4 {
  background-image: none;
}
.u-section-4 .u-sheet-1 {
  min-height: 950px;
}
.u-section-4 .u-text-1 {
  font-style: italic;
  text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
  width: 193px;
  margin: 60px auto 0;
}
.u-section-4 .u-icon-1 {
  width: 205px;
  height: 205px;
  background-image: none;
  box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.4);
  animation-duration: 1000ms;
  margin: 16px auto 0;
}
.u-section-4 .u-text-2 {
  font-size: 1.25rem;
  text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
  width: 555px;
  margin: 16px auto 0;
}
.u-section-4 .u-icon-2 {
  font-size: 3.7em;
}
.u-section-4 .u-form-1 {
  height: 427px;
  box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.4);
  background-image: none;
  width: 570px;
  margin: 35px auto 59px;
}
.u-section-4 .u-btn-1 {
  background-image: none;
  border-style: none;
}
@media (max-width: 991px) {
  .u-section-4 .u-form-1 {
    height: 397px;
  }
}
@media (max-width: 767px) {
  .u-section-4 .u-text-2 {
    width: auto;
    margin-left: 0;
    margin-right: 0;
  }
  .u-section-4 .u-form-1 {
    margin-right: initial;
    margin-left: initial;
    width: auto;
  }
}</style>
    
    <script type='application/ld+json'>{
		'@context': 'http://schema.org',
		'@type': 'Organization',
		'name': 'Pxsantos',
		'url': 'https://pxsantos.nicepage.io/Fale-com-nosco.html',
		'logo': '//images01.amin.com.br/c13033f4a78eec2395c2063b/4f2833be4ed050b1b99e7561/oie_transparent2.png',
		'sameAs': []
}</script>
    <meta name='theme-color' content='#478ac9'>
    <meta property='og:title' content='Fale com nosco'>
    <meta property='og:description' content=''>
    <meta property='og:type' content='website'>
    <link rel='canonical' href='Fale-com-nosco.html'>
  
</head>
  <body class='u-body'>
<header class='u-clearfix u-header u-valign-middle-xs u-white u-header' id='sec-054c' data-animation-name='' data-animation-duration='0' data-animation-delay='0' data-animation-direction=''><div class='u-clearfix u-sheet u-valign-middle-sm u-sheet-1'>
        <nav class='u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-offcanvas-shift u-menu-1' data-position='Menu'>
          <div class='menu-collapse' style='font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;'>
            <a class='u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-text-shadow u-custom-top-bottom-menu-spacing u-nav-link u-text-custom-color-2' href='#' style='font-size: calc(1em + 22px); color: rgb(17, 17, 17) !important;'>
              <svg class='u-svg-link' preserveAspectRatio='xMidYMin slice' viewBox='0 0 382.293 382.293' style=''><use xlink:href='#svg-3363'></use></svg>
              <svg class='u-svg-content' viewBox='0 0 382.293 382.293' x='0px' y='0px' id='svg-3363' style='enable-background:new 0 0 382.293 382.293;'><path style='fill:#00E7FF;' d='M6.828,47.968V27.822c0-11.595,9.4-20.995,20.995-20.995H136.02c11.595,0,20.995,9.4,20.995,20.995  v108.196c0,11.595-9.4,20.995-20.995,20.995H27.824c-11.595,0-20.995-9.4-20.995-20.995V81.923'></path><path style='fill:#602F75;' d='M136.02,163.84H27.824c-15.343,0-27.822-12.479-27.822-27.819V81.92c0-3.772,3.058-6.827,6.827-6.827  s6.827,3.055,6.827,6.827v54.101c0,7.813,6.356,14.165,14.169,14.165h108.192c7.817,0,14.172-6.352,14.172-14.165V27.819  c0-7.813-6.356-14.165-14.169-14.165H27.824c-7.813,0-14.169,6.352-14.169,14.165v20.145c0,3.772-3.058,6.827-6.827,6.827  s-6.827-3.055-6.827-6.827V27.819C0.002,12.479,12.481,0,27.824,0h108.192c15.346,0,27.826,12.479,27.826,27.819v108.203  C163.842,151.361,151.363,163.84,136.02,163.84z'></path><path style='fill:#FFFFFF;' d='M354.473,157.013H246.277c-11.595,0-20.995-9.4-20.995-20.995V27.822  c0-11.595,9.4-20.995,20.995-20.995h108.196c11.595,0,20.995,9.4,20.995,20.995v108.196  C375.468,147.613,366.068,157.013,354.473,157.013z'></path><path style='fill:#602F75;' d='M354.473,163.84H246.277c-15.343,0-27.822-12.479-27.822-27.819V27.819  C218.455,12.479,230.934,0,246.277,0H354.47c15.343,0,27.822,12.479,27.822,27.819v108.203  C382.295,151.361,369.816,163.84,354.473,163.84z M246.277,13.653c-7.813,0-14.169,6.352-14.169,14.165v108.203  c0,7.813,6.356,14.165,14.169,14.165H354.47c7.813,0,14.169-6.352,14.169-14.165V27.819c0-7.813-6.356-14.165-14.169-14.165H246.277  z'></path><g><path style='fill:#FFE600;' d='M136.02,375.467H27.824c-11.595,0-20.995-9.4-20.995-20.995V246.275   c0-11.595,9.4-20.995,20.995-20.995H136.02c11.595,0,20.995,9.4,20.995,20.995v108.196   C157.015,366.066,147.615,375.467,136.02,375.467z'></path><path style='fill:#FFE600;' d='M136.02,382.293H27.824c-15.343,0-27.822-12.479-27.822-27.819V246.272   c0-15.34,12.479-27.819,27.822-27.819h108.192c15.346,0,27.826,12.479,27.826,27.819v108.199   C163.842,369.814,151.363,382.293,136.02,382.293z M27.824,232.107c-7.813,0-14.169,6.352-14.169,14.165v108.199   c0,7.813,6.356,14.165,14.169,14.165h108.192c7.813,0,14.169-6.352,14.169-14.165V246.272c0-7.813-6.356-14.165-14.169-14.165   H27.824z'></path>
</g><path style='fill:#EA3457;' d='M375.468,335.497v18.975c0,11.595-9.4,20.995-20.995,20.995H246.277  c-11.595,0-20.995-9.4-20.995-20.995V246.275c0-11.595,9.4-20.995,20.995-20.995h108.196c11.595,0,20.995,9.4,20.995,20.995v41.421'></path><path style='fill:#602F75;' d='M354.473,382.293H246.277c-15.343,0-27.822-12.479-27.822-27.819V246.272  c0-15.34,12.479-27.819,27.822-27.819H354.47c15.343,0,27.822,12.479,27.822,27.819v41.421c0,3.772-3.058,6.827-6.827,6.827  c-3.768,0-6.827-3.055-6.827-6.827v-41.421c0-7.813-6.356-14.165-14.169-14.165H246.277c-7.813,0-14.169,6.352-14.169,14.165  v108.199c0,7.813,6.356,14.165,14.169,14.165H354.47c7.813,0,14.169-6.352,14.169-14.165v-18.975c0-3.772,3.058-6.827,6.827-6.827  s6.827,3.055,6.827,6.827v18.975C382.295,369.814,369.816,382.293,354.473,382.293z'></path></svg>
            </a>
          </div>
          <div class='u-custom-menu u-nav-container'>
            <ul class='u-nav u-spacing-30 u-unstyled u-nav-1'><li class='u-nav-item'><a class='u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90' href='https://pxsantos.com.br/login/pxsantos/' target='_blank' style='padding: 10px 0px;'>Login</a>
</li><li class='u-nav-item'><a class='u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90' href='https://pxsantos.com.br/login/conta/' target='_blank' style='padding: 10px 0px;'>Criar conta</a>
</li><li class='u-nav-item'><a class='u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90' href='https://pxsantos.com.br/sobre/pxsantos/' style='padding: 10px 0px;'>Sobre</a>
</li><li class='u-nav-item'><a class='u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90' href='https://pxsantos.com.br/22/qr/' style='padding: 10px 0px;'>QR</a>
</li><li class='u-nav-item'><a class='u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90' href='https://pxsantos.com.br/fale/pxsantos/' style='padding: 10px 2px 10px 0px;'>Fale com nosco</a>
</li></ul>
          </div>
          <div class='u-custom-menu u-nav-container-collapse'>
            <div class='u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav'>
              <div class='u-inner-container-layout u-sidenav-overflow'>
                <div class='u-menu-close'></div>
                <ul class='u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2'><li class='u-nav-item'><a class='u-button-style u-nav-link' href='https://pxsantos.com.br/login/pxsantos/' target='_blank'>Login</a>
</li><li class='u-nav-item'><a class='u-button-style u-nav-link' href='https://pxsantos.com.br/login/conta/' target='_blank'>Criar conta</a>
</li><li class='u-nav-item'><a class='u-button-style u-nav-link' href='https://pxsantos.com.br/sobre/pxsantos/'>Sobre</a>
</li><li class='u-nav-item'><a class='u-button-style u-nav-link' href='https://pxsantos.com.br/22/qr/'>QR</a>
</li><li class='u-nav-item'><a class='u-button-style u-nav-link' href='https://pxsantos.com.br/fale/pxsantos/'>Fale com nosco</a>
</li></br><b>Nome:</b> ".$_SESSION['nome']." </br></br><b>Email:</b> ".$_SESSION['email']."</br><li class='u-nav-item'><a class='u-button-style u-nav-link' href='sair.php'>Sair</a>
</li></ul>
              </div>
            </div>
            <div class='u-black u-menu-overlay u-opacity u-opacity-70'></div>
          </div>
        </nav>
        <a href='#' class='u-enable-responsive u-image u-image-default u-logo u-image-1' data-image-width='500' data-image-height='500' title='Bot' data-animation-name='swing' data-animation-duration='1000' data-animation-delay='0' data-animation-direction=''>
          <img src='../images01.amin.com.br/c13033f4a78eec2395c2063b/4f2833be4ed050b1b99e7561/oie_transparent2.png' class='u-logo-image u-logo-image-1'>
        </a>
        <div class='u-social-icons u-spacing-10 u-social-icons-1'>
          <a class='u-social-url' title='facebook' target='_blank' href='#'><span class='u-icon u-social-facebook u-social-icon u-icon-1'><svg class='u-svg-link' preserveAspectRatio='xMidYMin slice' viewBox='0 0 112 112' style=''><use xlink:href='#svg-f824'></use></svg><svg class='u-svg-content' viewBox='0 0 112 112' x='0' y='0' id='svg-f824'><circle fill='currentColor' cx='56.1' cy='56.1' r='55'></circle><path fill='#FFFFFF' d='M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z'></path></svg></span>
          </a>
          <a class='u-social-url' title='twitter' target='_blank' href='#'><span class='u-icon u-social-icon u-social-twitter u-icon-2'><svg class='u-svg-link' preserveAspectRatio='xMidYMin slice' viewBox='0 0 112 112' style=''><use xlink:href='#svg-1710'></use></svg><svg class='u-svg-content' viewBox='0 0 112 112' x='0' y='0' id='svg-1710'><circle fill='currentColor' class='st0' cx='56.1' cy='56.1' r='55'></circle><path fill='#FFFFFF' d='M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z'></path></svg></span>
          </a>
          <a class='u-social-url' title='instagram' target='_blank' href='#'><span class='u-icon u-social-icon u-social-instagram u-icon-3'><svg class='u-svg-link' preserveAspectRatio='xMidYMin slice' viewBox='0 0 112 112' style=''><use xlink:href='#svg-b796'></use></svg><svg class='u-svg-content' viewBox='0 0 112 112' x='0' y='0' id='svg-b796'><circle fill='currentColor' cx='56.1' cy='56.1' r='55'></circle><path fill='#FFFFFF' d='M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z'></path><path fill='#FFFFFF' d='M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z'></path><path fill='#FFFFFF' d='M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z'></path></svg></span>
          </a>
          <a class='u-social-url' title='linkedin' target='_blank' href='#'><span class='u-icon u-social-icon u-social-linkedin u-icon-4'><svg class='u-svg-link' preserveAspectRatio='xMidYMin slice' viewBox='0 0 112 112' style=''><use xlink:href='#svg-05fe'></use></svg><svg class='u-svg-content' viewBox='0 0 112 112' x='0' y='0' id='svg-05fe'><circle fill='currentColor' cx='56.1' cy='56.1' r='55'></circle><path fill='#FFFFFF' d='M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z'></path></svg></span>
          </a>
          <a class='u-social-url' target='_blank' title='Telegram' href='#'><span class='u-icon u-social-icon u-social-telegram u-icon-5'><svg class='u-svg-link' preserveAspectRatio='xMidYMin slice' viewBox='0 0 112 112' style=''><use xlink:href='#svg-ab7e'></use></svg><svg class='u-svg-content' viewBox='0 0 112 112' x='0' y='0' id='svg-ab7e'><circle fill='currentColor' cx='56.1' cy='56.1' r='55'></circle><path fill='#FFFFFF' d='M18.4,53.2l64.7-24.9c3-1.1,5.6,0.7,4.7,5.3l0,0l-11,51.8c-0.8,3.7-3,4.6-6.1,2.8L53.9,75.8l-8.1,7.8
	c-0.9,0.9-1.7,1.6-3.4,1.6l1.2-17l31.1-28c1.4-1.2-0.3-1.9-2.1-0.7L34.2,63.7l-16.6-5.2C14,57.4,14,54.9,18.4,53.2L18.4,53.2z'></path></svg></span>
          </a>
          <a class='u-social-url' target='_blank' title='YouTube' href='#'><span class='u-icon u-social-icon u-social-youtube u-icon-6'><svg class='u-svg-link' preserveAspectRatio='xMidYMin slice' viewBox='0 0 112 112' style=''><use xlink:href='#svg-1157'></use></svg><svg class='u-svg-content' viewBox='0 0 112 112' x='0' y='0' id='svg-1157'><circle fill='currentColor' cx='56.1' cy='56.1' r='55'></circle><path fill='#FFFFFF' d='M74.9,33.3H37.3c-7.4,0-13.4,6-13.4,13.4v18.8c0,7.4,6,13.4,13.4,13.4h37.6c7.4,0,13.4-6,13.4-13.4V46.7 C88.3,39.3,82.3,33.3,74.9,33.3L74.9,33.3z M65.9,57l-17.6,8.4c-0.5,0.2-1-0.1-1-0.6V47.5c0-0.5,0.6-0.9,1-0.6l17.6,8.9 C66.4,56,66.4,56.8,65.9,57L65.9,57z'></path></svg></span>
          </a>
        </div>
      </div></header>
    
    <section class='u-align-center u-clearfix u-custom-color-2 u-section-2' id='carousel_fcc4'>
      <div class='u-clearfix u-sheet u-sheet-1'>
        <p class='u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-1'>
          <a class='u-btn u-btn-round u-button-style u-radius-23 u-text-black u-white u-btn-1' href='https://amin.com.br/' data-animation-name='slideIn' data-animation-duration='500' data-animation-direction='Left'>
            <span style='font-weight: 700; font-style: italic;'></span><b>
              <span class='u-text-custom-color-2' style='font-style: italic;'>λ<span style='font-style: normal;'></span>
              </span>
              <span style='font-weight: 400;'>
                <span style='font-weight: 700;'></span>
              </span></b>
            <span style='font-size: 2.25rem;'>𝖒𝖎𝖓</span>
          </a>
        </p>
        <a href='' class='u-active-none u-border-2 u-border-active-palette-2-dark-1 u-border-hover-palette-2-base u-border-palette-1-base u-btn u-button-style u-hover-none u-none u-text-hover-palette-2-base u-text-palette-1-base u-btn-2'><span class='u-icon u-icon-1'><svg class='u-svg-content' viewBox='0 0 505.1 505.1' x='0px' y='0px' style='width: 1em; height: 1em;'><circle style='fill:#90DFAA;' cx='252.55' cy='252.5' r='252.5'></circle><path style='fill:#E6E9EE;' d='M307.75,308.6c3.2,6.8,5.3,14,7.3,21.2c2.4,8.5,4.9,17,7.3,25.5c4.1,14.5,8.2,30.3,2.5,44.2  c-3.3,8-9.4,14.4-15.8,20.3c-7,6.4-14.4,12.4-22.2,17.9c-6.8,4.8-14,9.2-22,11.6c-8.6,2.5-17.7,2.5-26.7,2.3  c-5.8-0.1-11.8-0.3-17-2.9c-4.3-2.1-7.7-5.8-10.4-9.8c-9.9-14.8-10.2-33.8-10.2-51.6c0.1-27.3,0.2-54.6,0.2-82c0-5,0-10.1,1.3-15  c4-14.9,19.3-24.2,34.5-26.9c6-1.1,12.3-1.4,18.3-0.1c5.6,1.2,10.8,3.9,15.8,6.8C286.15,279.4,300.05,292.3,307.75,308.6z'></path><path style='fill:#F9B54C;' d='M252.55,177.9c-20.8,0-37.6,40.7-37.6,67.1c0,15.4,5.8,29.2,14.8,37.9c1.1-0.1,2.8-0.3,3.2-0.3  c1.7,0,3.6,0.2,5.2,0.7c1.6,0.5,3.3,1.1,4.8,1.9c0.3,0.2,1.3,0.8,2,1.3c0.3,0.1,0.6,0.3,1,0.5c1.1,0.5,2,1.1,3,1.8  c0.8,0.6,1.5,1.1,2.3,1.6c0.5,0.3,0.9,0.6,1.3,0.9h0.1c1-0.9,2.5-1.7,3.6-2.4c0.7-0.4,1.3-0.8,2.1-1.1c1-0.4,1.6-0.8,2.1-1  c0.4-0.8,4.9-2.3,5.2-2.4c2.7-0.9,5.2-0.7,8-0.3c0.1,0,0.2,0,0.3,0.1c9.9-8.6,16.4-23,16.4-39.3  C290.15,218.7,273.35,177.9,252.55,177.9z'></path><path style='fill:#324A5E;' d='M142.35,471.1c0.5,2.9,0.8,5.9,1.1,9.2c-20.9-10-40.2-22.8-57.4-38c9.6-111.3,28.8-142.6,28.8-142.6  s0,0,0.1,0.2l37.7,61l-15.3,93.8c0,0,0,0,0,0.1C139.65,458.9,141.25,464.5,142.35,471.1z'></path><path style='fill:#2B3B4E;' d='M262.45,504.8c-3.3,0.1-6.6,0.2-9.9,0.2c-3.3,0-6.6-0.1-9.9-0.2c-35-1.3-68.1-9.8-98-24  c-0.7-3.6-1.5-6.8-2.3-9.7c-2.5-9.5-4.7-15.6-5-16.4v-0.1c7.3-79.4-20.8-150.9-22.3-154.8c0-0.1-0.1-0.2-0.1-0.2  c7.9-9.2,44.9-18.2,68.4-23.2c11.6-2.4,20-3.9,20-3.9l-0.6,12.8l0.4,2.1l7.9,50.2c0,0,19.9,47.4,35.2,86.8c0,0.1,0.1,0.2,0.1,0.2  c2.2,5.9,4.4,11.6,6.4,17c0.2,0.5,0.3,1,0.5,1.5c0.7,2.1,1.5,4.2,2.2,6.2c0.2,0.6,0.4,1.1,0.6,1.7c0.4,1.2,0.9,2.4,1.2,3.6l0,0  c1.8,5.1,3,12.1,3.9,20.4c0.6,5.4,0.9,11.5,1.2,17.9C262.35,496.8,262.45,500.7,262.45,504.8z'></path><path style='fill:#324A5E;' d='M211.65,251.6c0,0,26.4,170.1,45.5,203.1c0,0-55.3-32.2-77-136.4l16.3-5.6l-23.7-19.7  C172.75,293,185.15,266.3,211.65,251.6z'></path><path style='fill:#FFFFFF;' d='M252.55,291.3c0,0-27.2-18.6-39.6,16.2c0,0-6.1-59.1,2.7-70C215.65,237.6,224.45,267.7,252.55,291.3z  '></path><path style='fill:#2B3B4E;' d='M367.85,454.7L367.85,454.7l-15.3-93.9l37.7-61c0-0.1,0.1-0.2,0.1-0.2s19.2,31.3,28.8,142.6  c-17.2,15.1-36.5,27.9-57.4,38c0.3-3.2,0.6-6.3,1.1-9.2C363.85,464.5,365.45,458.9,367.85,454.7z'></path><path style='fill:#324A5E;' d='M390.15,299.9c-1.5,3.9-29.6,75.4-22.3,154.8c0,0,0,0,0,0.1c-0.3,0.8-2.6,6.8-5,16.4  c-0.7,2.9-1.5,6.2-2.3,9.7c-29.9,14.2-63,22.6-98,24c-3.3,0.1-6.6,0.2-9.9,0.2c-3.3,0-6.6-0.1-9.9-0.2c0.2-21.3,1.7-39.7,5.3-50.1  l0,0c0.3-1,0.7-2,1.1-3c0.2-0.7,0.5-1.5,0.8-2.2c0.7-2,1.4-4,2.2-6.2c0.2-0.5,0.4-1,0.6-1.5c2-5.4,4.2-11.2,6.4-17.1c0,0,0,0,0-0.1  c15.2-39.5,35.2-86.8,35.2-86.8l6.5-41l1.8-11.3l-0.6-12.8c0,0,8.4,1.5,20.1,3.9c23.6,5,60.4,14,68.4,23.2  C390.25,299.7,390.25,299.8,390.15,299.9z'></path><path style='fill:#2B3B4E;' d='M293.45,251.6c0,0-26.4,170.1-45.5,203.1c0,0,55.3-32.2,77-136.4l-16.3-5.6l23.7-19.7  C332.35,293,319.95,266.3,293.45,251.6z'></path><path style='fill:#FFFFFF;' d='M252.55,291.3c0,0,27.2-18.6,39.6,16.2c0,0,6.1-59.1-2.7-70C289.45,237.6,280.65,267.7,252.55,291.3z  '></path><circle style='fill:#2B3B4E;' cx='265.55' cy='483.8' r='9.8'></circle><g><path style='fill:#F9B54C;' d='M327.05,163.7c-5.1,12.6-17.6,25.9-25.4,23.6c-7.8-2.3-7.9-19.2-2.7-31.8   c5.1-12.6,13.6-16,21.3-13.8C328.05,144,332.25,151.1,327.05,163.7z'></path><path style='fill:#F9B54C;' d='M178.05,163.7c5.1,12.6,17.6,25.9,25.4,23.6c7.8-2.3,7.9-19.2,2.7-31.8c-5.1-12.6-13.6-16-21.3-13.8   C177.05,144,172.85,151.1,178.05,163.7z'></path>
</g><g><ellipse style='fill:#FFD05B;' cx='252.55' cy='164.3' rx='60.6' ry='78.5'></ellipse><path style='fill:#FFD05B;' d='M283.75,140.4l-11.7-47.2c0,0,15.4-18.4,19.6-17.8c4.1,0.6,27.5,25.4,27.5,25.4V136v14.5l-6.4,12.9   l-25.2-11L283.75,140.4z'></path><polygon style='fill:#FFD05B;' points='238.25,98.4 200.25,91.2 187.45,103.9 185.25,131.8 192.55,162.5 241.25,149.3  '></polygon>
</g><path style='fill:#324A5E;' d='M242.75,52.8c0,0,19.4-32.4,55.7,0c0,0-10-1.5-14.8,0c0,0,60.5,4.1,44.8,73.7c0,0,0.6,19.1-15.7,37  c0,0,18.8-79.9-30.6-60.5c0,0-32.1,18.1-55.1-0.8c0,0-44.2-12.8-34.5,60.2c0,0-51.4-92.4,5.4-104.1c0,0,14.8-32.1,69-23.7  C266.95,34.6,247.95,34.6,242.75,52.8z'></path></svg><img></span>&nbsp;".$_SESSION['nome']." 
        </a>
        <div class='u-expanded-width u-shape u-shape-rectangle u-white u-shape-1'></div><!--product--><!--product_options_json--><!--{'source':''}--><!--/product_options_json--><!--product_item-->
        <div class='u-align-center-xs u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-product u-product-1'>
          <div class='u-container-layout u-container-layout-1'><!--product_image-->
            <img class='u-image u-image-round u-product-control u-radius-25 u-image-1' src='../images01.amin.com.br/c13033f4a78eec2395c2063b/ace1b16944b95f4199cd5a02/Designsemnome13.png' data-image-width='1980' data-image-height='1038'><!--/product_image-->
            <div class='u-video u-video-contain u-video-1'>
              <div class='embed-responsive embed-responsive-1'>
                <iframe style='position: absolute;top: 0;left: 0;width: 100%;height: 100%;' class='embed-responsive-item' src='https://www.youtube.com/embed/EAgsUSGZru0?mute=0&amp;showinfo=0&amp;controls=0&amp;start=0' frameborder='0' allowfullscreen=''></iframe>
              </div>
            </div>
            <div class='u-container-style u-group u-shape-rectangle u-white u-group-1'>
              <div class='u-container-layout u-container-layout-2'><!--product_title-->
                <h2 class='u-align-center u-product-control u-text u-text-default u-text-2'>
                  <a class='u-product-title-link' href='#'><!--product_title_content-->Sample Product<!--/product_title_content--></a>
                </h2><!--/product_title--><!--product_price-->
                <div class='u-product-control u-product-price u-product-price-1'>
                  <div class='u-price-wrapper u-spacing-10'><!--product_old_price-->
                    <div class='u-hide-price u-old-price' style='text-decoration: line-through !important;' wfd-invisible='true'><!--product_old_price_content-->$12<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
                    <div class='u-price' style='font-size: 1.875rem; font-weight: 700;'><!--product_regular_price_content-->$9.95<!--/product_regular_price_content--></div><!--/product_regular_price-->
                  </div>
                </div><!--/product_price--><!--product_content-->
                <div class='u-align-center u-product-control u-product-desc u-text u-text-3'><!--product_content_content-->
                  <p>Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p><!--/product_content_content-->
                </div><!--/product_content--><!--product_button--><!--options_json--><!--{'clickType':'add-to-cart','content':''}--><!--/options_json-->
                <a href='https://nicepage.cc/' class='u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-product-control u-text-black u-text-hover-white u-btn-3'><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button-->
              </div>
            </div>
          </div>
        </div><!--/product_item--><!--/product-->
        <h2 class='u-custom-font u-font-merriweather u-text u-text-body-alt-color u-text-4' data-animation-name='lightSpeedIn' data-animation-duration='2000' data-animation-direction=''>“ aquele em quem se pode confiar”.</h2>
      </div>
      <style class='u-block-a191-5 u-state-style'>.u-block-a191-5:not([data-block-selected]) {
    transition-property: fill, color, background-image, background-color, stroke-width, border-style, border-width, box-shadow, text-shadow, opacity, border-radius, stroke, border-color, font-size, font-style, font-weight, text-decoration, letter-spacing, transform !important
} </style>
    </section>
    <section class='u-align-center u-clearfix u-section-3' id='sec-377f'>
      <div class='u-clearfix u-sheet u-valign-middle u-sheet-1'>
        <div class='u-expanded-width u-list u-list-1'>
          <div class='u-repeater u-repeater-1'>
            <div class='u-align-center u-container-style u-list-item u-repeater-item'>
              <div class='u-container-layout u-similar-container u-valign-top u-container-layout-1'><span class='u-icon u-icon-circle u-icon-1'><svg class='u-svg-link' preserveAspectRatio='xMidYMin slice' viewBox='0 0 128 128' style=''><use xlink:href='#svg-8998'></use></svg><svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' xml:space='preserve' class='u-svg-content' viewBox='0 0 128 128' id='svg-8998'><path d='m118.6 47.8h-61.2c-5.2 0-9.4 4.2-9.4 9.3v35.7c0 5.1 4.2 9.3 9.4 9.3h37.5l16.8 16.8c2.5 2.5 6.8 0.7 6.8-2.8v-10-3.9h0.1c5.2 0 9.4-4.2 9.4-9.3v-35.8c0-5.1-4.2-9.3-9.4-9.3zm1.2 45c0 0.7-0.5 1.2-1.2 1.2h-5.2c-1.6 0-2.9 1.2-3.1 2.8v9.2l-11.2-11.2c-0.5-0.5-1.3-0.8-2-0.8h-39.7c-0.7 0-1.2-0.5-1.2-1.2v-35.7c0-0.7 0.5-1.2 1.2-1.2h61.3c0.7 0 1.2 0.5 1.2 1.2v35.7z'></path><path d='m38.1 67.7c-1 0-2 0.4-2.7 1-0.1 0-0.1 0.1-0.2 0.2l-14.7 15.1v-12.5c-0.2-2.1-1.9-3.8-4-3.8h-6.9c-0.9 0-1.6-0.7-1.6-1.6v-48.3c0-0.9 0.7-1.6 1.6-1.6h80.8c0.9 0 1.6 0.7 1.6 1.6v30.1h8v-30.1c0-5.4-4.3-9.8-9.6-9.8h-80.8c-5.3 0-9.6 4.4-9.6 9.8v48.3c0 5.4 4.3 9.8 9.6 9.8h2.9v8.1 10c0 3.6 4.4 5.3 6.9 2.8l6.8-7 13.6-13.9h8.2v-8.2h-9.9z'></path></svg></span>
                <h3 class='u-text u-text-1'>Support</h3>
                <p class='u-text u-text-2'>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class='u-align-center u-container-style u-list-item u-repeater-item'>
              <div class='u-container-layout u-similar-container u-valign-top u-container-layout-2'><span class='u-icon u-icon-circle u-icon-2'><svg class='u-svg-link' preserveAspectRatio='xMidYMin slice' viewBox='0 0 128 128' style=''><use xlink:href='#svg-79f6'></use></svg><svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' xml:space='preserve' class='u-svg-content' viewBox='0 0 128 128' id='svg-79f6'><path d='m102.7 39.2c0.8 0 1.5 0.3 2.1 0.9l7.8 7.8c4.8 4.8 7.7 11.5 7.4 18.3-0.6 12.6-11 22.6-23.7 22.6h-29c-0.1 0-0.1-0.1-0.1-0.2 1.1-3 4.1-5.2 7.5-5.2h10.5c0.9 0 1.8-0.4 2.3-1.1 0.8-1.1 0.7-2.6-0.3-3.5l-24.9-24.8c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.5 0.9-2.1 1.3-0.8 2.1-0.8 1.5 0.3 2.1 0.8l16.9 16.9c0.5 0.5 1.2 0.8 1.9 0.8s1.4-0.3 1.9-0.8 0.8-1.2 0.8-1.9-0.3-1.4-0.8-1.9l-6.7-6.7c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.5 0.9-2.1 1.3-0.8 2.1-0.8 1.5 0.3 2.1 0.8l4 4c0.5 0.5 1.2 0.8 1.9 0.8s1.4-0.3 1.9-0.8 0.8-1.2 0.8-1.9-0.3-1.4-0.8-1.9l-2.7-2.7c-0.5-0.5-0.8-1.2-0.8-2s0.3-1.5 0.9-2.1 1.3-0.9 2.1-0.9 1.5 0.3 2.1 0.9l2.7 2.7c0.5 0.5 1.2 0.8 1.9 0.8s1.4-0.3 1.9-0.8 0.8-1.2 0.8-1.9-0.2-1.3-0.7-1.8c-0.8-0.9-1.2-2.1-0.8-3.3 0.5-1.3 1.6-1.9 2.8-1.9m0-8c-2.9 0-5.7 1.1-7.8 3.2-0.7 0.7-1.2 1.4-1.7 2.1 0 0-0.1 0.1-0.1 0-0.4 0-0.8-0.1-1.1-0.1-2.9 0-5.7 1.1-7.8 3.2-1 1-1.8 2.2-2.3 3.4 0 0 0 0.1-0.1 0.1-2.6 0.2-5.1 1.3-6.9 3.2l-0.2 0.2-2.5-2.5c-2-2-4.9-3.2-7.8-3.2s-5.7 1.1-7.8 3.2-3.2 4.9-3.2 7.8c0 3 1.2 5.7 3.2 7.8l15.8 15.8c0.1 0.1 0 0.2-0.1 0.2-5.8 0.8-10.8 4.8-12.8 10.5-1.9 5.2 2 10.7 7.5 10.7h29.1c8.5 0 16.4-3.3 22.4-9.3 6.1-6.1 9.4-14.3 9.3-23-0.1-8.4-3.8-16.4-9.8-22.4l-7.8-7.8c-1.8-2-4.6-3.1-7.5-3.1z'></path><path d='m82.1 118c0 1.1-0.9 2-2 2h-70.2c-1.1 0-2-0.9-2-2v-108c0-1.1 0.9-2 2-2h70.1c1.1 0 2 0.9 2 2v16.9c0 2.2 1.8 4 4 4s4-1.8 4-4v-16.9c0-5.5-4.5-10-9.9-10h-70.2c-5.4 0-9.9 4.5-9.9 10v108c0 5.5 4.5 10 9.9 10h70.1c5.5 0 9.9-4.5 9.9-10v-10.6c0-2.2-1.8-4-4-4s-4 1.8-4 4v10.6z'></path></svg></span>
                <h3 class='u-text u-text-3'>No Coding</h3>
                <p class='u-text u-text-4'>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class='u-align-center u-container-style u-list-item u-repeater-item'>
              <div class='u-container-layout u-similar-container u-valign-top u-container-layout-3'><span class='u-icon u-icon-circle u-icon-3'><svg class='u-svg-link' preserveAspectRatio='xMidYMin slice' viewBox='0 0 128 128' style=''><use xlink:href='#svg-b0e6'></use></svg><svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' xml:space='preserve' class='u-svg-content' viewBox='0 0 128 128' id='svg-b0e6'><path d='m78.9 15.9c2.1 0 3.7 1.7 3.7 3.7v3.7h-37.2v-3.7c0-2 1.7-3.7 3.7-3.7h29.8m39.7 14.8-11.6 34.5c-0.5 1.5-1.9 2.5-3.5 2.5h-20.9v-3.7c0-2-1.7-3.7-3.7-3.7h-29.8c-2.1 0-3.7 1.7-3.7 3.7v3.7h-20.9c-1.6 0-3-1-3.5-2.5l-11.6-34.5h109.2m1.5 19.1v58.6c0 2-1.7 3.7-3.7 3.7h-104.7c-2.1 0-3.7-1.7-3.7-3.7v-58.6l5.9 17.7c1.5 4.5 5.8 7.6 10.6 7.6h20.9v3.7c0 2 1.7 3.7 3.7 3.7h29.8c2.1 0 3.7-1.7 3.7-3.7v-3.7h20.9c4.8 0 9.1-3 10.6-7.6l6-17.7m-44.9 17.9v7.4h-22.4v-7.4h22.4m15.3-44.9v-3.2c0-6.4-5.2-11.6-11.6-11.6h-29.8c-6.4 0-11.7 5.2-11.7 11.6v3.2h-29.5c-4.4 0-7.9 3.5-7.9 7.9v77.7c0 6.4 5.2 11.6 11.7 11.6h104.7c6.4 0 11.7-5.2 11.7-11.6v-77.7c0-4.4-3.6-7.9-7.9-7.9h-29.7z'></path></svg></span>
                <h3 class='u-text u-text-5'>Skills</h3>
                <p class='u-text u-text-6'>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class='u-clearfix u-custom-color-2 u-section-4' id='sec-18b7'>
      <div class='u-clearfix u-sheet u-valign-middle u-sheet-1'>
        <h4 class='u-custom-font u-font-merriweather u-text u-text-white u-text-1'>Ta com dulvida?</h4><span class='u-border-10 u-border-palette-1-base u-icon u-icon-circle u-spacing-27 u-text-palette-1-base u-white u-icon-1' data-animation-name='swing' data-animation-duration='1000' data-animation-direction=''><svg class='u-svg-link' preserveAspectRatio='xMidYMin slice' viewBox='0 0 512 512' style=''><use xlink:href='#svg-1ba1'></use></svg><svg class='u-svg-content' viewBox='0 0 512 512' id='svg-1ba1'><linearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='512' y1='256' y2='256'><stop offset='0' stop-color='#00f1ff'></stop><stop offset='.231' stop-color='#00d8ff'></stop><stop offset='.5138' stop-color='#00c0ff'></stop><stop offset='.7773' stop-color='#00b2ff'></stop><stop offset='1' stop-color='#00adff'></stop>
</linearGradient><path d='m512 256c0 141.386719-114.613281 256-256 256s-256-114.613281-256-256 114.613281-256 256-256 256 114.613281 256 256zm0 0' fill='url(#a)'></path><g fill='#fff'><path d='m268.691406 324.136719c0 7.375-5.980468 13.359375-13.359375 13.359375-7.378906 0-13.359375-5.984375-13.359375-13.359375 0-7.378907 5.980469-13.363281 13.359375-13.363281 7.378907 0 13.359375 5.984374 13.359375 13.363281zm0 0'></path><path d='m270.996094 280.523438c0-3.671876 2.082031-6.933594 5.304687-8.308594 19.105469-8.160156 31.445313-26.847656 31.4375-47.617188 0-.207031-.003906-.410156-.011719-.613281-.332031-28.242187-23.410156-51.121094-51.730468-51.121094-28.527344 0-51.734375 23.210938-51.734375 51.738281 0 8.28125 6.714843 15 15 15 8.285156 0 15-6.71875 15-15 0-11.988281 9.75-21.738281 21.734375-21.738281s21.734375 9.753907 21.734375 21.738281c0 .132813 0 .265626.003906.402344-.152344 8.570313-5.304687 16.238282-13.214844 19.617188-14.289062 6.101562-23.523437 20.195312-23.523437 35.902344v.859374c0 8.285157 6.714844 15 15 15 8.28125 0 15-6.714843 15-15zm0 0'></path><path d='m386.925781 207.601562h-6.726562c-1.105469 0-2.113281-.71875-2.574219-1.832031l-.101562-.242187c-.460938-1.117188-.257813-2.34375.523437-3.125l4.757813-4.757813c16.265624-16.265625 16.265624-42.734375 0-59l-9.449219-9.449219c-16.265625-16.265624-42.734375-16.265624-59 0l-4.757813 4.757813c-.777344.78125-2.003906.988281-3.125.523437l-.246094-.105468c-1.109374-.457032-1.824218-1.464844-1.824218-2.566406v-6.730469c0-23.003907-18.71875-41.71875-41.722656-41.71875h-13.359376c-23.003906 0-41.71875 18.714843-41.71875 41.71875v6.730469c0 1.101562-.714843 2.109374-1.828124 2.570312l-.152344.0625 5.773437 13.84375-5.863281-13.804688c-1.121094.464844-2.347656.257813-3.125-.519531l-4.757812-4.757812c-16.265626-16.269531-42.734376-16.269531-59 0l-9.449219 9.445312c-16.265625 16.265625-16.265625 42.734375 0 59l4.757812 4.757813c.78125.78125.984375 2.007812.511719 3.148437l-.09375.222657c-.457031 1.109374-1.464844 1.828124-2.570312 1.828124h-6.730469c-23.003907 0-41.71875 18.714844-41.71875 41.71875v13.359376c0 23.003906 18.714843 41.722656 41.71875 41.722656h6.730469c1.105468 0 2.113281.714844 2.574218 1.828125l.101563.246093c.460937 1.117188.257812 2.34375-.523438 3.125l-4.757812 4.757813c-16.265625 16.265625-16.265625 42.734375 0 59l9.449219 9.445313c16.265624 16.265624 42.730468 16.265624 59 0l4.753906-4.757813c.78125-.777344 2.007812-.984375 3.070312-.542969l.304688.125c1.109375.460938 1.824218 1.46875 1.824218 2.570313v6.730469c0 23.003906 18.71875 41.71875 41.722657 41.71875h13.359375c23.003906 0 41.71875-18.714844 41.71875-41.71875v-6.730469c0-1.101563.714844-2.109375 1.828125-2.570313l.246093-.101562c1.117188-.464844 2.34375-.257813 3.125.523437l4.757813 4.753907c16.265625 16.269531 42.734375 16.269531 59 0 5.855469-5.855469 5.855469-15.355469 0-21.210938-5.859375-5.859375-15.355469-5.859375-21.214844 0-4.570312 4.566406-12.003906 4.566406-16.574219 0l-4.757812-4.757812c-9.398438-9.398438-23.46875-12.152344-35.898438-6.988282l-.136718.054688c-12.378906 5.113281-20.375 17.003906-20.375 30.300781v6.726563c0 6.464843-5.257813 11.722656-11.71875 11.722656h-13.359375c-6.464844 0-11.722657-5.257813-11.722657-11.722656v-6.726563c0-13.296875-7.996093-25.1875-20.371093-30.296875l-.195313-.082031c-12.371094-5.140625-26.441406-2.386719-35.84375 7.011719l-4.757812 4.757812c-4.570313 4.570312-12.003906 4.570312-16.574219 0l-9.445313-9.445312c-4.570312-4.570313-4.570312-12.003907 0-16.574219l4.757813-4.757813c9.398437-9.402344 12.152344-23.46875 7.019531-35.820312l-.085937-.214844c-5.113281-12.378906-17.003907-20.375-30.300781-20.375h-6.730469c-6.460938 0-11.71875-5.257812-11.71875-11.722656v-13.359375c0-6.460938 5.257812-11.71875 11.71875-11.71875h6.730469c13.292968 0 25.1875-8 30.296874-20.371094l.082032-.195313c5.140625-12.375 2.386718-26.445312-7.011719-35.847656l-4.761719-4.753906c-4.566406-4.570312-4.566406-12.003906 0-16.574219l9.449219-9.449219c4.570313-4.566406 12.003906-4.566406 16.574219 0l4.757812 4.761719c9.398438 9.398438 23.46875 12.148438 35.820313 7.019531l.214843-.089843c12.378907-5.109375 20.375-17.003907 20.375-30.296875v-6.730469c0-6.460937 5.257813-11.71875 11.71875-11.71875h13.359376c6.464843 0 11.722656 5.257813 11.722656 11.71875v6.730469c0 13.292968 7.996094 25.1875 20.441406 30.324218l.125.054688c12.371094 5.136719 26.441406 2.386719 35.84375-7.011719l4.757812-4.761719c4.570313-4.566406 12.003907-4.566406 16.574219 0l9.445313 9.449219c4.570312 4.570313 4.570312 12.003907 0 16.574219l-4.757813 4.757812c-9.398437 9.398438-12.152343 23.46875-7.019531 35.820313l.085938.214844c5.113281 12.378906 17.007812 20.375 30.300781 20.375h6.726562c6.464844 0 11.722657 5.257812 11.722657 11.71875v13.359375c0 6.464844-5.257813 11.722656-11.722657 11.722656h-6.726562c-13.296875 0-25.1875 7.996094-30.296875 20.371094l-.082032.195312c-5.140624 12.375-2.386718 26.441406 7.011719 35.84375 5.859375 5.859375 15.355469 5.859375 21.214844 0 5.855469-5.855468 5.859375-15.355468 0-21.210937-.78125-.78125-.984375-2.007813-.511719-3.152344l.09375-.222656c.457032-1.109375 1.46875-1.828125 2.570313-1.828125h6.726562c23.003907 0 41.722657-18.714844 41.722657-41.71875v-13.359375c-.003907-23.007813-18.71875-41.722657-41.722657-41.722657zm0 0'></path>
</g></svg></span>
        <h2 class='u-custom-font u-font-montserrat u-text u-text-white u-text-2'><span class='u-icon u-text-palette-1-base u-icon-2'><svg class='u-svg-content' viewBox='0 0 25.588 25.588' x='0px' y='0px' style='width: 1em; height: 1em;'><g><path style='fill:currentColor;' d='M18.724,9.903l3.855,1.416l-3.206,8.729c-0.3,0.821-1.927,3.39-3.06,3.914l-0.275,0.75   c-0.07,0.19-0.25,0.309-0.441,0.309c-0.054,0-0.108-0.01-0.162-0.029c-0.243-0.09-0.369-0.359-0.279-0.604l0.26-0.709   c-0.575-1.117-0.146-4.361,0.106-5.047L18.724,9.903z M24.303,0.667c-1.06-0.388-2.301,0.414-2.656,1.383l-2.322,6.326l3.854,1.414   l2.319-6.325C25.79,2.673,25.365,1.056,24.303,0.667z M17.328,9.576c0.108,0.04,0.219,0.059,0.327,0.059   c0.382,0,0.741-0.234,0.882-0.614l2.45-6.608c0.181-0.487-0.068-1.028-0.555-1.208c-0.491-0.178-1.028,0.068-1.209,0.555   l-2.45,6.608C16.592,8.855,16.841,9.396,17.328,9.576z M13.384,21.967c-0.253-0.239-0.568-0.537-1.078-0.764   c-0.42-0.187-0.829-0.196-1.128-0.203c-0.031,0-0.067-0.001-0.103-0.002c-0.187-0.512-0.566-0.834-1.135-0.96   c-0.753-0.159-1.354,0.196-1.771,0.47c0.037-0.21,0.098-0.46,0.143-0.64c0.144-0.58,0.292-1.18,0.182-1.742   c-0.087-0.444-0.462-0.774-0.914-0.806c-1.165-0.065-2.117,0.562-2.956,1.129c-0.881,0.595-1.446,0.95-2.008,0.749   c-0.686-0.244-0.755-2.101-0.425-3.755c0.295-1.49,0.844-4.264,2.251-5.524c0.474-0.424,1.16-0.883,1.724-0.66   c0.663,0.26,1.211,1.352,1.333,2.653c0.051,0.549,0.53,0.952,1.089,0.902c0.55-0.051,0.954-0.539,0.902-1.089   c-0.198-2.12-1.192-3.778-2.593-4.329C6.058,7.07,4.724,6.982,3.107,8.429c-1.759,1.575-2.409,4.246-2.88,6.625   c-0.236,1.188-0.811,5.13,1.717,6.029c1.54,0.549,2.791-0.298,3.796-0.976c0.184-0.124,0.365-0.246,0.541-0.355   c-0.167,0.725-0.271,1.501,0.167,2.155c0.653,0.982,1.576,1.089,2.742,0.321c0.045-0.029,0.097-0.063,0.146-0.097   c0.108,0.226,0.299,0.475,0.646,0.645c0.42,0.206,0.84,0.216,1.146,0.224c0.131,0.003,0.31,0.007,0.364,0.031   c0.188,0.083,0.299,0.185,0.515,0.389c0.162,0.153,0.333,0.312,0.55,0.476c0.18,0.135,0.39,0.199,0.598,0.199   c0.304,0,0.605-0.139,0.801-0.4c0.331-0.442,0.241-1.069-0.201-1.4C13.61,22.183,13.495,22.072,13.384,21.967z'></path>
</g></svg><img></span>
          <span style='font-style: italic;'>&nbsp;​Faça uma pergunta! Qual a sua&nbsp;maior duvida teremos um prazer em responderla</span>
        </h2>
        <div class='u-border-2 u-border-custom-color-3 u-expanded-width-sm u-expanded-width-xs u-form u-palette-1-base u-radius-25 u-form-1'>
          <form action='https://amin.com.br/editor/Forms/Process' method='POST' class='u-clearfix u-form-spacing-14 u-form-vertical u-inner-form' source='email' name='form' style='padding: 20px;'>
            <input type='hidden' id='siteId' name='siteId' value='917446'>
            <input type='hidden' id='pageId' name='pageId' value='961676'>
            <div class='u-form-group u-form-name'>
              <label for='name-be47' class='u-label'>Insira seu Nome</label>
              <input type='text' placeholder='Nome' id='name-be47' name='name' class='u-border-4 u-border-grey-30 u-input u-input-rectangle u-radius-11 u-white' required=''>
            </div>
            <div class='u-form-email u-form-group'>
              <label for='email-be47' class='u-label'>Insira um endereço de email válido</label>
              <input type='email' placeholder='E-mail' id='email-be47' name='email' class='u-border-4 u-border-grey-30 u-input u-input-rectangle u-radius-11 u-white' required=''>
            </div>
            <div class='u-form-group u-form-message'>
              <label for='message-be47' class='u-form-control-hidden u-label'></label>
              <textarea placeholder='Insira sua mensagem' rows='4' cols='50' id='message-be47' name='message' class='u-border-4 u-border-grey-30 u-input u-input-rectangle u-radius-11 u-white' required=''></textarea>
            </div>
            <div class='u-align-left u-form-group u-form-submit'>
              <a href='#' class='u-border-none u-btn u-btn-submit u-button-style u-custom-color-2 u-btn-1'>Enviar</a>
              <input type='submit' value='submit' class='u-form-control-hidden'>
            </div>
            <div class='u-form-send-message u-form-send-success'> Obrigado! A sua mensagem foi enviada. </div>
            <div class='u-form-send-error u-form-send-message'> Não foi possível enviar a sua mensagem. Por favor, corrija os erros e tente novamente. </div>
            <input type='hidden' value='' name='recaptchaResponse'>
          </form>
        </div>
      </div>
    </section>
    
    
<footer class='u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80' id='sec-251e'><div class='u-clearfix u-sheet u-sheet-1'>
        <a href='pxsantos.com.html' class='u-image u-logo u-image-1' data-image-width='500' data-image-height='500' title='pxsantos.com.b' data-animation-name='swing' data-animation-duration='1000' data-animation-direction=''>
          <img src='../images01.amin.com.br/c13033f4a78eec2395c2063b/4f2833be4ed050b1b99e7561/oie_transparent2.png' class='u-logo-image u-logo-image-1'>
        </a>
        <p class='u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-1'><b>
            <span class='u-text-custom-color-2'>λ</span>
            <span style='font-weight: 400;'>
              <span style='font-weight: 700;'></span>
            </span></b>min.com.br&nbsp;<b>
            <span class='u-text-custom-color-2'>λ</span>
            <span class='u-text-custom-color-2'></span></b>
          <a href='https://emojiterra.com/pt/simbolo-de-copyright/' class='u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-white u-btn-1'>dianto ©️</a>
        </p>
      </div></footer>
    <section class='u-backlink u-clearfix u-grey-80'>
      <a class='u-link' href='https://amin.com.br/website-templates' target='_blank'>
        <span>Website Templates</span>
      </a>
      <p class='u-text'>
        <span>created with</span>
      </p>
      <a class='u-link' href='https://amin.com.br/' target='_blank'>
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>

</html>";
}else{
	$_SESSION['msg'] = "Área restrita";
	header("Location: login.php");	
}
