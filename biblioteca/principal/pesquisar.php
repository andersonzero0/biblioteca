<?php
	$pesquisar = $_POST['pesquisa'];
	$sql = "SELECT * FROM livro WHERE titulo LIKE '%$pesquisar%'";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;
	
	if ($qtd > 0) {
		print "<script>alert('Achou resultados!');</script>";
		print "<table>";
		print "<tr>";
		print "<th>Título</th>";
		print "<th>Autor</th>";
		print "<th>Gênero</th>";
		print "<th>Link</th>";
		print "</tr>";
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>".$row->titulo."</td>";
			print "<td>".$row->autor."</td>";
			print "<td>".$row->genero."</td>";
			print "<td>
						<button onclick=\"location.href='?page=resultado&id=".$row->id."';\" class='button3'>Visitar</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	} else{
		print "<script>alert('Sem resultados!');</script>";
		print "<p>Sem resultados</p>";
	}
?>