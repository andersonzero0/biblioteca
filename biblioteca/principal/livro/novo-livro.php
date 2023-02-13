<fieldset>
	<h1>Novo livro</h1><br>
	<form action="?page=salvar" method="post">
		<input type="hidden" name="acao" value="cadastrar">

		<label>Título:</label><br>
		<input type="text" name="titulo"><br>
	
		<label>Autor:</label><br>
		<input type="text" name="autor"><br><br>

		<label>Gênero:</label>
		<select name="genero">
			<option disabled selected>Selecione</option>
			<option value="Ficção">Ficção</option>
			<option value="Não ficção">Não ficção</option>
			<option value="Didático">Didático</option>
		</select><br><br>

		<label>Editora:</label><br>
		<input type="text" name="editora"><br>

		<label>Quant.:</label><br>
		<input type="number" name="quant"><br><br>
	
		<button type="submit" class="button">Enviar</button>
	</form>
</fieldset>