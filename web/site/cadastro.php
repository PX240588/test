<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	//var_dump($dados);
	$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
	
	$result_usuario = "INSERT INTO usuarios (nome, pix, email, usuario, senha, valor) VALUES (
					'" .$dados['nome']. "',
					'" .$dados['pix']. "',					
					'" .$dados['email']. "',
					'" .$dados['usuario']. "',
					'" .$dados['senha']. "',
					'" .$dados['valor']. "'
					)";
	$resultado_usario = mysqli_query($conn, $result_usuario);
	if(mysqli_insert_id($conn)){
		$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
		header("Location: foto.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar o usuário";
	}
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="amin1.css" media="screen">
<link rel="stylesheet" href="Cadastrar.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="amin.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"sameAs": [
				"https://facebook.com/name",
				"https://twitter.com/name",
				"https://instagram.com/name"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cadastrar">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="Cadastrar">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <section class="u-carousel u-carousel-duration-0 u-slide u-block-a647-1" id="carousel_9a3c" data-interval="0" data-u-ride="carousel">
    
      <div class="u-carousel-inner" role="listbox">
        <div class="u-active u-carousel-item u-clearfix u-gradient u-section-1-1">
          <br><br><br><br><div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <a href="#" class="u-border-4 u-border-white u-btn u-btn-round u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-radius-50 u-btn-1"><b>λ</b>
            </a>
            <h6 class="u-text u-text-1">min<span style="font-weight: 700;"></span>
            </h6>
            <div class="u-border-1 u-border-grey-15 u-container-style u-group u-radius-5 u-shape-round u-white u-group-1" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">
              <div class="u-container-layout u-container-layout-1">
                <h4 class="u-text u-text-custom-color-1 u-text-default u-text-2" data-animation-name="rubberBand" data-animation-duration="1000" data-animation-direction="">
                  <span style="font-style: italic;">Login 
                </h4>
			</span>
			 				<p class="u-text u-text-default u-text-3"><?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?></p>
                <p class="u-text u-text-default u-text-3">Criar minha&nbsp;<a data-u-target="#carousel_9a3c" data-u-slide-to="1" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2">Conta</a>
                </p>
                <div class="u-form u-form-1">
                  <form action="valida.php" method="POST"  style="padding: 15px;" >
                    <div class="u-form-group u-form-name">
                      <label for="name-6797" class="u-form-control-hidden u-label">Name</label>
                      <input type="text" placeholder="Usuario"  name="usuario" class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-1" required="">
                    </div>
                    <div class="u-form-group u-form-group-2">
                      <label for="text-49a6" class="u-form-control-hidden u-label"></label>
                      <input type="password" placeholder="Senha"  name="senha" class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-2">
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">
                      <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-gradient u-none u-radius-50 u-text-white u-btn-3">Submit</a>
                      <input type="submit" name="btnLogin" value="Acessar" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                    <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
                    <input type="hidden" value="" name="recaptchaResponse">
                  </form>
                </div>
                <p class="u-text u-text-4">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-4" href="#">Redefinir Senha</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="u-carousel-item u-clearfix u-gradient u-section-1-2">
          <br><div class="u-align-left u-clearfix u-sheet u-sheet-1">
         
            <a href="#" class="u-border-4 u-border-white u-btn u-btn-round u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-radius-50 u-btn-1"><b>λ</b>
            </a>
            <h6 class="u-text u-text-1">min<span style="font-weight: 700;"></span>
            </h6>
            <div class="u-border-1 u-border-grey-15 u-container-style u-expanded-width-xs u-group u-radius-5 u-shape-round u-white u-group-1" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">
              <div class="u-container-layout u-container-layout-1">
                <h4 class="u-text u-text-custom-color-1 u-text-default u-text-2" data-animation-name="rubberBand" data-animation-duration="1000" data-animation-direction="">
                  <span style="font-style: italic;">Cadastro</span>
                </h4>
                <p class="u-text u-text-default u-text-3">Ja tenho uma Conta <a data-u-target="#carousel_9a3c" data-u-slide-to="0" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2">fazer Login</a>
                </p>
				
                <div class="u-form u-form-1">
				                    <form action="" method="POST">

                  <div class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;" source="custom" name="form">
					<div class="u-form-group u-form-name">
                      <label for="name-6797" class="u-form-control-hidden u-label">Nome</label>
                      <input type="text" placeholder="Nome"  name="nome" class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-1" required="">
                    </div>
                    <div class="u-form-group">
                      <label for="email-6797" class="u-form-control-hidden u-label">Chave PIX</label>
                      <input type="text" placeholder="Chave PIX"  name="pix" class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-2" required="required">
                    </div>
                    <div class="u-form-email u-form-group">
                      <label for="message-6797" class="u-form-control-hidden u-label">Address</label>
                      <input placeholder="E-mail" rows="4" cols="50"  name="email" class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-3" required="required" type="email">
                    </div>
                    <div class="u-form-group u-form-group-4">
                      <label for="text-f2fd" class="u-form-control-hidden u-label"></label>
                      <input type="text" placeholder="Usuario"  name="usuario" class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-4" required="required">
                    </div>
                    <div class="u-form-group u-form-group-5">
                      <label for="text-49a6" class="u-form-control-hidden u-label"></label>
                      <input type="password" placeholder="Senha"  name="senha" class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-5">
                    <input style="display: none;" name="valor" value="1.00"id="tipo">
					</div>
                    <div class="u-form-group u-form-group-6">
                      <label for="text-c935" class="u-form-control-hidden u-label"></label>
                      <input type="password" placeholder="Confirma senha" id="text-c935" name="senha1" class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-6">
                    </div>
                    <div class="u-form-checkbox u-form-group u-form-group-7">
                      <input type="checkbox" id="checkbox-66da" name="checkbox" value="On" required="required">
                      <label for="checkbox-66da" class="u-label">Concordo com os <a href="" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3">Termos e Condicoes</a>
                      </label>
                    </div>
                    <div class="u-form-checkbox u-form-group u-form-group-8">
                      <input type="checkbox" id="checkbox-824e" name="checkbox-1" value="On" checked="checked" >
                      <label for="checkbox-824e" class="u-label">Quero receber email</label>
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">
                      <a href="" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-gradient u-none u-radius-50 u-text-white u-btn-4">Cadastrar</a>
                      <input type="submit" name="btnCadUsuario" value="Cadastrar" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                    <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
                    <input type="hidden" value="" name="recaptchaResponse">
				 </div>
				                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden u-text-grey-30 u-block-a647-3" href="#carousel_9a3c" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-hidden u-text-grey-30 u-block-a647-4" href="#carousel_9a3c" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    
    
    
    <section class="u-backlink ">
      <a class="u-link" href="https://amin.com.br" target="_blank">
        <span>Amin Sem Limites</span>
      </a>
      <p class="u-text">
        <span>“Aquele em quem se pode confiar”.</span>
      </p>
      <a class="u-link" href="https://amin.com.br" target="_blank">
        <span>amin.com.br</span>
      </a>. 
    </section>
  </body>
</html>