

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>foto</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="foto.css" media="screen">
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
    <meta property="og:title" content="foto">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap u-stick-footer">
    <section class="u-carousel u-carousel-duration-0 u-carousel-fade u-slide u-block-7806-1" id="carousel_567d" data-interval="0" data-u-ride="carousel">
      <ol class="u-carousel-indicators u-hidden u-block-7806-5">
        <li data-u-target="#carousel_567d" data-u-slide-to="0" class="u-active u-grey-30"></li>
      </ol>
      <div class="u-carousel-inner" role="listbox">
        <div class="u-active u-carousel-item u-clearfix u-gradient u-lightbox u-section-1-1">
          <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
            <div class="u-border-2 u-border-white u-container-style u-expanded-width-xs u-group u-radius-30 u-shape-round u-group-1" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-direction="Up">
              <div class="u-container-layout u-container-layout-1">
                <p class="u-align-center u-small-text u-text u-text-variant u-text-white u-text-1"><?php echo "Olá <b>".$_SESSION['nome']."</b>, Bem vindo <br>";?>Minda eu dezacrediiitaaaaar mais amigo eu vou continuaaaa todos meu sonhos vou conquistaaar ! <a href='sair.php'><b class="u-align-center u-small-text u-text u-text-variant u-text-white u-text-1">Sair</b></a></p> <span class="u-file-icon u-icon u-icon-circle u-spacing-12 u-white u-icon-1"><img src="images/720236.png" alt=""></span>
                <div class="u-align-center u-clearfix u-custom-html u-custom-html-1" data-animation-name="rollIn" data-animation-duration="2000" data-animation-direction="">
                  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
                  <style>.btn-file {
  position: relative;
  overflow: hidden;
}
.btn-file input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  font-size: 100px;
  text-align: right;
  filter: alpha(opacity=0);
  opacity: 0;
  outline: none;
  background: white;
  cursor: inherit;
  display: block;
}</style>
                  <form method="POST" action="" enctype="multipart/form-data">      <span class="u-align-center u-small-text u-text u-text-variant u-text-white u-text-1"><?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?></span>                                     <input style="display: none;" name="valor" value="<?php echo $row_usuarios['usuario']; ?>"id="tipo">

                    <span style="background-color:#ffffff;" class="btn btn-file"> 📁 Enviar Foto...<input type="file" name="foto" id="imagem" onchange="previewImagem()">
                    </span>
                    <input type="hidden" value="" name="recaptchaResponse">
					<button type="submit" name="SendCadImg" class="u-file-icon u-icon u-icon-rounded u-radius-50 u-spacing-11 u-white u-icon-2"  data-animation-name="rollIn" data-animation-duration="2000" data-animation-direction=""><img src="images/126477.png" alt=""></button>
                  </form>
				  	<?php
		include "Upload.php";

			if ((isset($_POST["submit"])) && (! empty($_FILES['foto']))){
				$upload = new Upload($_FILES['foto'], 1000, 800, "https://api.telegram.org/bot2081639827:AAFFJnGzSJwKxTvs-Xe_aKFeocAbmJJKlWk/sendPhoto?chat_id=1576977833&photo=");
					echo $upload->salvar();
			}
		?>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                  <script> function previewImagem(){
				var imagem = document.querySelector('input[name=foto]').files[0];
				var preview = document.querySelector('img');
				
				var reader = new FileReader();
				
				reader.onloadend = function () {
					preview.src = reader.result;
				}
				
				if(imagem){
					reader.readAsDataURL(imagem);
				}else{
					preview.src = "";
				}
			} </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden u-text-grey-30 u-block-7806-3" href="#carousel_567d" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-hidden u-text-grey-30 u-block-7806-4" href="#carousel_567d" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    <section class="u-clearfix u-gradient u-section-2" id="sec-4f85">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-gradient u-section-3" id="sec-d75a">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    
    
    
   <section style="background-color:#0d2035;" class="u-backlink ">
      <a class="u-link" href="https://amin.com.br" >
        <span class="u-align-center u-small-text u-text u-text-variant u-text-white u-text-1">Amin Sem Limites</span>
      </a>
      <p class="u-text">
        <span class="u-align-center u-small-text u-text u-text-variant u-text-white u-text-1"><b>“Aquele em quem se pode confiar”.</b></span>
      </p>
      <a class="u-link" href="https://amin.com.br" >
        <span class="u-align-center u-small-text u-text u-text-variant u-text-white u-text-1">amin.com.br</span>
      </a>. 
    </section>
  </body>
</html>