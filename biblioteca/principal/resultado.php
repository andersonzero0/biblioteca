<?php
	$sql = "SELECT * FROM livro WHERE id=".$_REQUEST['id'];

	$res = $conn->query($sql);
	$row = $res->fetch_object();

	print "<table>";
	print "<tr>";
	print "<th>ID</th>";
	print "<th>Título</th>";
	print "<th>Autor</th>";
	print "<th>Gênero</th>";
	print "<th>Editora</th>";
	print "<th>Quant.</th>";
	print "<th>Livre</th>";
	print "</tr>";
	print "<tr>";
	print "<td>".$row->id."</td>";				
	print "<td>".$row->titulo."</td>";
	print "<td>".$row->autor."</td>";
	print "<td>".$row->genero."</td>";
	print "<td>".$row->editora."</td>";
	print "<td>".$row->quant."</td>";
	print "<td></td>";
	print "</tr>";
	print "</table>";
?>