<fieldset>
	<h1>Novo funcionário</h1><br>
	<form action="?page=salvar" method="post">
		<input type="hidden" name="acao" value="cadastrar">

		<label>Nome:</label><br>
		<input type="text" name="nome"><br>
	
		<label>Login:</label><br>
		<input type="text" name="login"><br>

		<label>Senha:</label><br>
		<input type="text" name="senha"><br><br>
	
		<button type="submit" class="button">Enviar</button>
	</form>
</fieldset>