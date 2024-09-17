<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        body {
            background-color: #eeedec; /* Fundo cinza para a página inteira */
        }
        .navbar {
            background-color: #ffffff; /* Fundo branco para a navbar */
        }
    </style>

</head>
<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Criar Conta</h1>
			<div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"><img src="https://img.icons8.com/?size=512&id=17949&format=png" alt="" width="30px"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/2023_Facebook_icon.svg" alt="" width="30px"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"><img src="https://static.vecteezy.com/system/resources/previews/023/986/970/original/linkedin-logo-linkedin-logo-transparent-linkedin-icon-transparent-free-free-png.png" width="40px"alt=""></i></a>
			</div>
			<span>ou use seu email para registrar</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Senha" />
			<button>Criar Conta</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Entrar</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"><img src="https://img.icons8.com/?size=512&id=17949&format=png" alt="" width="30px"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/2023_Facebook_icon.svg" alt="" width="30px"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"><img src="https://static.vecteezy.com/system/resources/previews/023/986/970/original/linkedin-logo-linkedin-logo-transparent-linkedin-icon-transparent-free-free-png.png" width="40px"alt=""></i></a>
			</div>
			<span>ou use sua conta</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Senha" />
			<a href="#">Esqueceu sua senha?</a>
			<button>Entrar</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bem-vindo de volta!</h1>
				<p>Para continuar conectado, por favor insira suas informações de login!</p>
				<button class="ghost" id="signIn">Entrar</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Olá, Amigo!</h1>
				<p>Insira seus dados para fazer uma jornada com a gente :)</p>
				<button class="ghost" id="signUp">Cadastrar</button>
			</div>
		</div>
	</div>
</div>



<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>

</body>
</html>