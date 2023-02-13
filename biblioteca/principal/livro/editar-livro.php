<?php 
	$sql = "SELECT * FROM livro WHERE id=".$_REQUEST['id'];

	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<fieldset>
	<h1>Editar livro</h1><br>
	<form action="?page=salvar" method="post">
		<input type="hidden" name="acao" value="editar">
		<input type="hidden" name="id" value="<?php print $row->id ?>">

		<label>Título:</label><br>
		<input type="text" name="titulo" value="<?php print $row->titulo ?>"><br>
	
		<label>Autor:</label><br>
		<input type="text" name="autor" value="<?php print $row->autor ?>"><br>

		<label>Quant.:</label><br>
		<input type="number" name="quant" value="<?php print $row->quant ?>"><br><br>
	
		<button type="submit" class="button">Editar</button>
	</form>
</fieldset>