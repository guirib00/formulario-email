	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 	integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk	+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<style>
		.box{
    		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    		border-radius: 10px;
    		min-height: 30rem;
    		width: 40rem;
    		margin: auto;
			display: block;
    		text-align: justify;
    		font-size: 25px;
    		padding: 1rem;
			margin-top: 10rem;
			}
			input{
				border-radius: 5px;
			}
			textarea{
				border-radius: 5px;
			}
			textarea::placeholder{
				font-size: 20px;
			}
			select{
				border-radius: 5px;
			}
			@media (max-width: 1000px){
				.box{
					margin: auto;
					display: block;
					margin-top:10rem;
				}
			}
	</style>
	<form method="post" class="box">
		<h1 style="text-align: center">Formulario para Email</h1>
	<label for="name">Nome</label>
	<br>
	<input type="text" name="nome" placeholder="Digite seu nome">
	<br><label for="email">Email</label>
	<br>
	<input type="email" name="email" placeholder="Digite seu email">
	<br>
	Assunto:<br>
	<select name="assunto">
		<option>Duvidas</option>
		<option>Criticas</option>
		<option>Sugestoes</option>
	</select>
	<br>
	Mensagem:
	<br>
	<textarea name="msg" placeholder="Digite a Mensagem que deseja enviar"></textarea>
	<br>
	<button class="btn btn-dark" style="margin-left: 34rem;">Enviar</button>
</form>
<?php
if ($_POST) {
	$nome = $_POST['nome'];
	$email =$_POST['email'];
	$assunto =$_POST['assunto'];
	$msg =$_POST['msg'];
	$texto = "Nome: $nome.\r\n\r\n";
	$texto .= "Email: $email.\r\n\r\n";
	$texto .= "Assunto: $assunto.\r\n\r\n";
	$texto .= "Mensagem: $msg.\r\n\r\n";
	$para =$email;
	function function_alert($message) {
        echo "<script>alert('$message');</script>";
    }
	if (mail($para,$assunto,$texto)) {
function_alert("Email enviado com sucesso");
	}else{
		function_alert("Erro ao enviar o email");
	}
}
?>