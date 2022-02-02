
<?php
session_start();
if(!empty($_SESSION['id'])){
	echo "";
}else{
	$_SESSION['msg'] = "Precadastro Realizado!";
	header("Location: cadastro.php");	

}
?>
<?php include_once("conexao.php");

$amin = $_GET['amin'];
$result_usuarios = "SELECT * FROM usuarios WHERE id='$amin'";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);
$row_usuarios = mysqli_fetch_assoc($resultado_usuarios);
?>


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>PIX</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="PIX.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Pxsantos"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="PIX">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap u-stick-footer"><header class="u-clearfix u-header u-valign-middle-xs" id="sec-054c" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-border-2 u-border-custom-color-10 u-container-style u-group u-radius-50 u-shape-round u-white u-group-2">
              <div class="u-container-layout u-container-layout-2"><span class="u-file-icon u-icon u-text-grey-90 u-icon-1"><img src="images/1.png" alt=""></span>
                <h6 class="u-custom-font u-font-lato u-text u-text-default-xs u-text-grey-90 u-text-1"><?php echo $row_usuarios['nome']; ?>&nbsp;</h6><span class="u-file-icon u-icon u-text-grey-90 u-icon-2"><img src="images/2.png" alt=""></span>
              </div>
            </div>
            <div class="u-border-2 u-border-white u-image u-image-circle u-image-1" alt="" data-image-width="374" data-image-height="405"></div>
          </div>
        </div>
        <a href="https://nicepage.com/wordpress-themes" class="u-border-5 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-gradient u-hover-palette-1-light-1 u-none u-radius-50 u-text-white u-btn-1"> λ<span style="font-weight: 400;">min</span>
        </a>
        <nav class="u-menu u-menu-dropdown u-menu-1" data-submenu-level="on-click" data-responsive-from="LG">
          <div class="menu-collapse u-custom-font u-font-open-sans" style="font-weight: 700;">
            <a class="u-button-style u-custom-text-color u-file-icon u-nav-link u-file-icon-3" href="#">
              <img src="images/hamburger-menu-icon-png-white-10.jpg" alt="">
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-font-open-sans u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-white" href="Shopping.html">Shopping</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-white" href="Amin.html">Amin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-white" href="PIX.html">PIX</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-white" href="login.html">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-white" href="inicio.html">Inicio</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-80 u-sidenav u-sidenav-1" data-offcanvas-width="232.3479">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close u-menu-close-1"></div>
                <div class="u-border-3 u-border-grey-dark-1 u-shape u-shape-right u-shape-1"></div>
                <ul class="u-align-center u-custom-font u-font-courier-new u-nav u-popupmenu-items u-text-active-white u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Shopping.html">Shopping</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Amin.html">Amin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="PIX.html">PIX</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="login.html">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="inicio.html">Inicio</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div><style class="u-sticky-style" data-style-id="ebf7">.u-sticky-fixed.u-sticky-ebf7:before, .u-body.u-sticky-fixed .u-sticky-ebf7:before {
borders: top right bottom left !important
}</style></header>
    <section class="u-carousel u-carousel-duration-0 u-slide u-valign-middle-xs u-block-9c0f-1" id="carousel_dab2" data-image-width="1920" data-image-height="960" data-interval="0" data-u-ride="carousel">
     
      <div class="u-carousel-inner" role="listbox">
        <div class="u-active u-carousel-item u-clearfix u-gradient u-section-1-1">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-rotation-parent u-rotation-parent-1">
              <div class="u-image u-image-circle u-opacity u-opacity-90 u-preserve-proportions u-rotate-180 u-image-1" alt="" data-image-width="1600" data-image-height="1600"></div>
            </div><span class="u-border-2 u-border-white u-custom-color-11 u-file-icon u-icon u-icon-circle u-spacing-4 u-text-white u-icon-1" data-href="love.php"><img src="images/4.png" alt=""></span>
            <img class="u-image u-image-default u-preserve-proportions u-image-2" src="images/Oak-tree-on-transparent-background-PNG.png" alt="" data-image-width="1600" data-image-height="1600">
            <div class="u-border-2 u-border-white u-container-style u-expanded-width-xs u-group u-radius-30 u-shape-round u-white u-group-1" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-direction="Up">
              <div class="u-container-layout u-container-layout-1">
                <p class="u-custom-font u-heading-font u-text u-text-custom-color-2 u-text-1"> Olá seja muito bem-vindo, Para finalizar o pagamento você precisa escâner ou copiar e colar o QRPIX... ​Se veio apenas conhecer meu perfil assista o vindo abaixo 🎥​👇.</p>
                <div class="u-border-2 u-border-white u-container-style u-grey-90 u-group u-shape-rectangle u-group-2">
                  <div class="u-container-layout u-container-layout-2">
                    <div class="u-border-2 u-border-white u-video u-video-contain u-video-1">
                      <div class="embed-responsive embed-responsive-1">
                        <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" data-src="https://www.youtube.com/embed/pVYQTI3Lmu0?playlist=pVYQTI3Lmu0&amp;loop=1&amp;mute=0&amp;showinfo=0&amp;controls=0&amp;start=0" data-poster="images/Designsemnome.png" frameborder="0" allowfullscreen=""></iframe>
                        <button class="u-video-poster u-video-poster-1" data-src="images/Designsemnome.png"></button>
                      </div>
                    </div>
                    <div class="u-custom-color-7 u-shape u-shape-circle u-shape-1"></div>
                    <div class="u-border-1 u-border-custom-color-1 u-line u-line-horizontal u-line-1"></div>
                  </div>
                </div>
                <div class="u-container-style u-group u-shape-rectangle u-group-3">
                  <div class="u-container-layout u-container-layout-3">
                    <div class="u-absolute-hcenter u-border-3 u-border-white u-custom-color-10 u-expanded u-radius-21 u-shape u-shape-round u-shape-2"></div>
                    <p class="u-custom-font u-heading-font u-text u-text-body-alt-color u-text-2">
                      <span style="font-weight: 700;">Beneficiário:</span>
                      <span style="font-weight: 700;">
                        <br>
                      </span>
                      <span style="font-weight: 700;">
                        <span style="font-weight: 400;">Nome</span>: <?php echo $row_usuarios['nome']; ?>&nbsp; &nbsp;<span style="font-weight: 400;">0</span>&nbsp;&nbsp;<span class="u-file-icon u-icon u-icon-2"><img src="images/8334723.png" alt=""></span>
                        <br>
                      </span>
                      <span style="font-weight: 400;">
                        <span style="font-weight: 400;"> Amin</span>:&nbsp;
                      </span>
                      <span style="font-weight: 700;">@<?php echo $row_usuarios['usuario']; ?></span>
                      <br>
                      <span style="font-weight: 400;"> E-mail:</span>&nbsp;<span style="font-weight: 700;"><?php echo $row_usuarios['email']; ?></span>
                    </p><span class="u-file-icon u-icon u-icon-circle u-text-white u-icon-3"><img src="images/8.png" alt=""></span>
                    <div class="u-social-icons u-spacing-10 u-social-icons-1">
                      <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-text-custom-color-2 u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d643"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d643"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
                      </a>
                      <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-text-custom-color-2 u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5608"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-5608"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
                      </a>
                      <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-text-custom-color-2 u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bff5"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-bff5"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
                      </a>
                      <a class="u-social-url" target="_blank" data-type="YouTube" title="YouTube" href=""><span class="u-icon u-social-icon u-social-youtube u-text-custom-color-2 u-icon-7"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ae3d"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ae3d"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M74.9,33.3H37.3c-7.4,0-13.4,6-13.4,13.4v18.8c0,7.4,6,13.4,13.4,13.4h37.6c7.4,0,13.4-6,13.4-13.4V46.7 C88.3,39.3,82.3,33.3,74.9,33.3L74.9,33.3z M65.9,57l-17.6,8.4c-0.5,0.2-1-0.1-1-0.6V47.5c0-0.5,0.6-0.9,1-0.6l17.6,8.9 C66.4,56,66.4,56.8,65.9,57L65.9,57z"></path></svg></span>
                      </a>
                      <a class="u-social-url" target="_blank" data-type="Telegram" title="Telegram" href=""><span class="u-icon u-social-icon u-social-telegram u-text-custom-color-2 u-icon-8"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8c36"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-8c36"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M18.4,53.2l64.7-24.9c3-1.1,5.6,0.7,4.7,5.3l0,0l-11,51.8c-0.8,3.7-3,4.6-6.1,2.8L53.9,75.8l-8.1,7.8
	c-0.9,0.9-1.7,1.6-3.4,1.6l1.2-17l31.1-28c1.4-1.2-0.3-1.9-2.1-0.7L34.2,63.7l-16.6-5.2C14,57.4,14,54.9,18.4,53.2L18.4,53.2z"></path></svg></span>
                      </a>
                    </div>
                    <div class="u-border-2 u-border-white u-image u-image-circle u-preserve-proportions u-image-3" alt="" data-image-width="374" data-image-height="405"></div>
                    <div class="u-enable-responsive u-image u-image-circle u-opacity u-opacity-50 u-preserve-proportions u-image-4" alt="" data-image-width="240" data-image-height="240"></div>
                    <h6 data-u-target="#carousel_dab2" data-u-slide-to="1" class="u-align-center u-text u-text-body-alt-color u-text-default u-text-3">&nbsp;Loja Virtual<br>&nbsp;<span class="u-file-icon u-icon u-icon-9" data-href="#carousel_d76d"><img src="images/1170576.png" alt=""></span>&nbsp;<br>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <a href="PIX.html#sec-e6d7" data-page-id="1068178" class="u-border-1 u-border-active-custom-color-10 u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-gradient u-hover-palette-1-light-1 u-none u-radius-50 u-text-white u-btn-1" data-animation-name="fadeIn" data-animation-duration="2000" data-animation-direction="Up"><span class="u-file-icon u-icon u-text-white u-icon-10"><img src="images/4.png" alt=""></span>&nbsp; PIX
            </a><span class="u-border-2 u-border-white u-file-icon u-icon u-icon-circle u-spacing-5 u-white u-icon-11" data-animation-name="fadeIn" data-animation-duration="2000" data-animation-direction="Up"><img src="images/8334723.png" alt=""></span>
          </div>
        </div>
        <div class="u-carousel-item u-clearfix u-gradient u-section-1-2">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-border-2 u-border-white u-container-style u-gradient u-group u-opacity u-opacity-70 u-radius-30 u-shape-round u-group-1" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-direction="Down">
              <div class="u-container-layout u-container-layout-1">
                <div class="u-clearfix u-custom-html u-custom-html-1">
                 
                </div>
                <div class="u-container-style u-group u-radius-30 u-shape-round u-white u-group-2">
                  <div class="u-container-layout u-container-layout-2">
                    <div class="u-container-style u-custom-color-2 u-group u-radius-30 u-shape-round u-group-3">
                      <div class="u-container-layout u-container-layout-3">
                        <div class="u-container-style u-custom-color-10 u-group u-radius-30 u-shape-round u-group-4">
                          <div class="u-container-layout u-container-layout-4">
                            <div class="u-container-style u-group u-radius-30 u-shape-round u-white u-group-5">
                              <div class="u-container-layout u-container-layout-5">
                                <div class="u-border-1 u-border-grey-30 u-line u-line-vertical u-line-1"></div>
                                <img class="u-expanded-width u-image u-image-round u-radius-30 u-image-1" src="images/g46d53682b6740377e618010f51dee92e134a0de510080ea5dbd709805b9a2f45e8fb4f6ff0de37e314b12f15e0b81007d336d91967a8629fd9793a95e33242b9_1280.jpg" alt="" data-image-width="1280" data-image-height="853">
                                <a href="#" class="u-border-none u-btn u-btn-round u-button-style u-gradient u-hover-black u-none u-radius-50 u-text-hover-white u-text-white u-btn-1"><span class="u-file-icon u-icon u-text-palette-4-base u-icon-1"><img src="images/6.png" alt=""></span>&nbsp;Qualidade
                                </a>
                                <h6 class="u-text u-text-custom-color-2 u-text-default u-text-1">Novo!</h6>
                                <h6 class="u-text u-text-custom-color-10 u-text-default u-text-2">20 Estoque</h6>
                                <h6 class="u-text u-text-default u-text-grey-60 u-text-3">Valor inicial</h6>
                                <h6 class="u-text u-text-default u-text-grey-60 u-text-4">Comprar agora</h6>
                                <h6 class="u-text u-text-default u-text-grey-90 u-text-5">Leilão </h6>
                                <h6 class="u-text u-text-black u-text-default u-text-6">R$ 0.00</h6>
                                <h6 class="u-text u-text-black u-text-default u-text-7">R$ 0.00</h6>
                                <a href="https://amin.com.br" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-10 u-hover-palette-1-light-1 u-radius-50 u-btn-2">comprar</a>
                                <a href="https://amin.com.br" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-palette-1-light-1 u-radius-50 u-btn-3">oferta</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <h6 class="u-text u-text-custom-color-10 u-text-default-xs u-text-8">Ver Ma​is Produtos&nbsp;<span class="u-file-icon u-icon u-text-grey-50 u-icon-2"><img src="images/7.png" alt=""></span>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <a data-u-target="#carousel_dab2" data-u-slide-to="0" class="u-border-1 u-border-white u-btn u-btn-round u-button-style u-gradient u-hover-palette-1-light-1 u-none u-radius-50 u-text-body-alt-color u-btn-4" data-animation-name="fadeIn" data-animation-duration="2000" data-animation-direction="Up"><span class="u-file-icon u-icon u-icon-3"><img src="images/720236.png" alt=""></span>&nbsp; Percil
            </a>
          </div>
        </div>
      </div>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden u-text-grey-30 u-block-9c0f-3" href="#carousel_dab2" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-hidden u-text-grey-30 u-block-9c0f-4" href="#carousel_dab2" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    <section class="u-clearfix u-gradient u-section-2" id="sec-8fb8">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-custom-color-2 u-section-3" id="sec-b72b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-social-icons u-spacing-19 u-social-icons-1" data-animation-name="lightSpeedIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
          <a class="u-social-url" title="link" href="https://amin.com.br/amin" target="_blank"><span class="u-file-icon u-icon u-social-facebook u-social-icon u-text-white u-icon-1"><img src="images/15.png" alt=""></span>
          </a>
          <a class="u-social-url" title="complaining" href="https://amin.com.br/complaining.php"><span class="u-file-icon u-icon u-social-icon u-social-twitter u-text-white u-icon-2"><img src="images/16.png" alt=""></span>
          </a>
          <a class="u-social-url" title="shopping" href="https://amin.com.br/shopping.php"><span class="u-file-icon u-icon u-social-icon u-social-instagram u-text-white u-icon-3"><img src="images/17.png" alt=""></span>
          </a>
          <a class="u-social-url" data-type="YouTube" title="official" href="https://amin.com.br/official.php"><span class="u-file-icon u-icon u-social-icon u-social-youtube u-text-white u-icon-4"><img src="images/18.png" alt=""></span>
          </a>
          <a class="u-social-url" data-type="Telegram" title="loja virtual" href="https://amin.com.br/loja.php"><span class="u-file-icon u-icon u-social-icon u-social-telegram u-text-white u-icon-5"><img src="images/19.png" alt=""></span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-gradient u-section-4" id="sec-2c4e">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-section-5" id="sec-e6d7">
      <div class="u-clearfix u-sheet u-valign-middle-sm u-sheet-1">
	  
        <img class="u-image u-image-round u-preserve-proportions u-radius-10 u-image-1" alt="QR code" src="https://chart.googleapis.com/chart?chs=148x148&amp;cht=qr&amp;chl=00020126330014br.gov.bcb.pix01110861263545452040000530398654041.005802BR5916maria de lourdes6006recife62120508w388h45563044FF6&amp;choe=UTF-8" alt="" data-image-width="100" data-image-height="100">
        <div class="u-clearfix u-custom-html u-custom-html-1">
          <div class="u-form-group u-form-group-1 u-form-name">
            <label for="name-30a4" class="u-form-control-hidden u-label" wfd-invisible="true"></label>
            <input type="text" placeholder="R$ <?php echo $row_usuarios['valor']; ?>" id="name-30a4" name="name"  class="u-border-2 u-border-white u-input u-input-1 u-input-rectangle u-radius-50 u-white" required="">
          </div>
        </div>
        <a href="https://nicepage.com/website-builder" class="u-border-2 u-border-white u-btn u-btn-round u-button-style u-gradient u-hover-palette-1-light-1 u-none u-radius-50 u-text-white u-btn-1">copiar</a>
      </div>
    </section>
    <section class="u-clearfix u-gradient u-section-6" id="sec-0eee">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    
    
    <footer class="u-clearfix u-custom-color-2 u-footer u-footer" id="sec-251e"><div class="u-align-left u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xs u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-submenu-level="on-click" data-responsive-from="LG">
          <div class="menu-collapse u-custom-font u-font-open-sans" style="font-weight: 700;">
            <a class="u-button-style u-custom-text-color u-nav-link u-text-white" href="#" style="font-size: calc(1em + 12px); color: rgb(17, 17, 17) !important;">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 20 20" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6934"></use></svg>
              <svg class="u-svg-content" viewBox="0 0 20 20" id="svg-6934"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-font-open-sans u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-white" href="Shopping.html">Shopping</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-white" href="Amin.html">Amin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-white" href="PIX.html">PIX</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-white" href="login.html">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-white" href="inicio.html">Inicio</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-80 u-sidenav u-sidenav-1" data-offcanvas-width="232.3479">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-custom-font u-font-courier-new u-nav u-popupmenu-items u-text-active-white u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Shopping.html">Shopping</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Amin.html">Amin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="PIX.html">PIX</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="login.html">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="inicio.html">Inicio</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></footer>
   
  </body>
</html>


