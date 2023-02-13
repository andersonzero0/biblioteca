<fieldset>
<h1>Listar empréstimos</h1><br>
	<?php
		$sql = "SELECT
				E.id,
    			L.titulo as livro,
    			E.nome,
    			E.turma,
    			E.data_dev
				FROM emprestimo E INNER JOIN livro L ON E.livro = L.id";

		$res = $conn->query($sql);

		$qtd = $res->num_rows;

		if ($qtd > 0) {
			print "<table>";
			print "<tr>";
			print "<th>ID</th>";
			print "<th>Livro</th>";
			print "<th>Nome</th>";
			print "<th>Turma</th>";
			print "<th>Data de devolução</th>";
			print "<th>Ações</th>";
			print "</tr>";
			while ($row = $res->fetch_object()) {
				print "<tr>";
				print "<td>".$row->id."</td>";
				print "<td>".$row->livro."</td>";
				print "<td>".$row->nome."</td>";
				print "<td>".$row->turma."</td>";
				print "<td>".$row->data_dev."</td>";
				print "<td>
						<button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='button'>Editar</button>
						<button onclick=\"if(confirm('Tem certeza?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='button2'>Excluir</button>
				   		</td>";
				print "</tr>";
			}
			print "</table>";
		} else{
			print "<p style='color: red'>Sem resultados</p>";
		}
	?>
</fieldset>