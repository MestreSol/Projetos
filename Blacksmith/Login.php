<!DOCTYPE html>
<?php
  include("source/php/conect.php");
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="source/img/favicon.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="source/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="source/css/jquery-ui.css">
    <link rel="stylesheet" href="source/css/owl.carousel.min.css">
    <link rel="stylesheet" href="source/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="source/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="source/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="source/css/bootstrap/bootstrap-datepicker.css">

<script>

</script>

<link rel="stylesheet" href="source/css/aos.css">

<link rel="stylesheet" href="source/css/Index.css">
    <title>Blacksmitch</title>
    <style>
    /* Made with love by Mutiullah Samim*/

    @import url('https://fonts.googleapis.com/css?family=Numans');

    html,body{
      background-image: url('source/img/bg.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      height: 100%;
      font-family: 'Numans', sans-serif;
    }

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
    </style>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
    <div class="container">
    <div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i onclick="return Avizo();" class="fas fa-atom"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form  method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Usuario" id="usuario">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <h1 id="erroSenha" style="display: none;">Erro na senha.</h1>
						<input type="password" class="form-control" placeholder="Senha" id="senha">
					</div>
					<div class="row align-items-center remember">
            
						<input type="checkbox">Lembre de mim.
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" onclick="return validar();">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Não tem conta?<a href="#">inscreva-se</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Esqueceu a senha?</a>
				</div>
			</div>
		</div>
	</div>
  </div>
 
</body>
<script src="source/js/jquery-3.3.1.min.js"></script>
  <script src="source/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="source/js/jquery-ui.js"></script>
  <script src="source/js/popper.min.js"></script>
  <script src="source/js/bootstrap.min.js"></script>
  <script src="source/js/owl.carousel.min.js"></script>
  <script src="source/js/jquery.stellar.min.js"></script>
  <script src="source/js/jquery.countdown.min.js"></script>
  <script src="source/js/bootstrap-datepicker.min.js"></script>
  <script src="source/js/jquery.easing.1.3.js"></script>
  <script src="source/js/aos.js"></script>
  <script src="source/js/jquery.fancybox.min.js"></script>
  <script src="source/js/jquery.sticky.js"></script>
  <script>
    function validar(){
      event.preventDefault();
      var Usuario = document.getElementById('usuario').value;
      var Senha = document.getElementById("senha").value;
      var a = false;
      var b = false;
      if(Usuario == ""){
        event.preventDefault();
        alert("Por favor preencha o campo usuario");
        a = true;
      }else if(Senha == ""){
        alert("Por favor preencha o campo Senha");
        b = true;
      }else {
        <?php
          $Usuario?> =Usuario;<?php
          $Senha?> = Senha;<?php
          $Query = $PDO->prepare("SELECT * FROM Usuario WHERE Senha = :senha AND Login = :login");
          $Query->bindParam(":senha", $Senha);
          $Query->bindParam(":login", $Usuario);
          $Query->execute();
          if($Query->rowsCount() == 0){
            ?>
            alert("Login e/ou senha invalidos");
            <?php
          }
          $valor = $Query->fetchAll();
          
          ?>

      }


    }
  function Avizo(){
    alert("Esta pagina é parte da iniciatival Universal e pode ser conectada com a plataforma quando ela for lançada.");
  }
  </script>
  
  <script src="source/js/main.js"></script>
</html>