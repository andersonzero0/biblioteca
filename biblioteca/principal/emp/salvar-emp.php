<?php  
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$livro = $_POST['livro'];
			$nome = $_POST['nome'];
			$turma = $_POST['turma'];
			$data_dev = $_POST['data_dev'];

			$sql = "INSERT INTO emprestimo (livro, nome, turma, data_dev) VALUES ('{$livro}', '{$nome}', '{$turma}', '{$data_dev}')";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('Cadastrado');</script>";
				print "<script>location.href='?page=listar';</script>;";
			} else{
				print "<script>alert('ERROR');</script>";
				print "<script>location.href='?page=listar';</script>;";
			}
			break;

		case 'editar':
			$livro = $_POST['livro'];
			$nome = $_POST['nome'];
			$turma = $_POST['turma'];
			$data_dev = $_POST['data_dev'];

			$sql = "UPDATE emprestimo SET 
						livro='{$livro}',
						nome='{$nome}',
						turma='{$turma}',
						data_dev='{$data_dev}'
					WHERE id=".$_REQUEST['id'];

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('Editado');</script>";
				print "<script>location.href='?page=listar';</script>;";
			} else{
				print "<script>alert('ERROR');</script>";
				print "<script>location.href='?page=listar';</script>;";
			}
			break;

		case 'excluir':
			
			$sql = "DELETE FROM emprestimo WHERE id=".$_REQUEST['id'];

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('Deletado');</script>";
				print "<script>location.href='?page=listar';</script>;";
			} else{
				print "<script>alert('ERROR');</script>";
				print "<script>location.href='?page=listar';</script>;";
			}
			break;
	}
?>