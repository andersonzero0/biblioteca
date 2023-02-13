<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Biblioteca WRA - Painel ADMIN.</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <div class="top">
    <h1>Biblioteca WRA</h1>
  </div>
  
  <nav role='navigation'>
    <ul>
      <li><a class="tablink ativo" onClick="openTab(event,'inicio')">Início</a></li>
      <li><a class="tablink" onClick="openTab(event,'pesquisar')">Pesquisar</a></li>
      <li><a class="tablink" onClick="openTab(event,'admin')">Admin.</a></li>
    </ul>
  </nav>

<div id="inicio" class="tab">
    <div class="banner">
     <img src="https://img.freepik.com/fotos-gratis/aluno-compartilhando-seu-conhecimento-com-seus-colegas_329181-8498.jpg?w=1060&t=st=1675531079~exp=1675531679~hmac=3a255860daae4325192d8a818c33eff2ab2858f66ad6cf4044c8c9b49ca1f494">
     <span>Procure o título que você deseja de forma rápida.</span>
    </div>
  
    <div class="callout">
      <h1>A biblioteca WRA está esperando a sua visita.</h1>
    </div>
  </div>
   
  <div id="pesquisar" class="tab" style="display:none">
    <form action="?page=pesquisar" method="post">
      <fieldset class="pesquisa">
        <label for="pesquisa">Pesquisar:</label><br>
        <input type="text" id="pesquisa" name="pesquisa" placeholder="Título da obra" style="width: 450px" required><br><br>
        <input class="button" type="submit" value="Pesquisar">
        <?php
        include("../conexao.php");
        switch(@$_REQUEST["page"]){
          case 'pesquisar':
            include("pesquisar.php");
            break;
          case 'resultado':
            include("resultado.php");
            break;
          default:
            // nada
        }
        ?>
      </fieldset>
    </form>
    
    <div class="callout">
      <h1>Pesquise o título que você deseja.</h1>
    </div>
  </div>

  <div id="admin" class="tab" style="display:none">
    <fieldset>
      <a class="button3" href="emp/index.php">Empréstimos</a><br><br>
      <a class="button3" href="func/index.php">Funcionários</a><br><br>
      <a class="button3" href="livro/index.php" style="width: 135px">Livros</a><br><br>
      <a class="button2" href="">Sair</a>
    </fieldset>

    <div class="callout">
      <h1>Área de administração.</h1>
    </div>
  </div>
  
<div class="footer">
  <b>Todos os direitos reservados</b><br>
    Escola Walter Ramos de Araújo - Av. Prefeito Mauricio Brasileiro s/n, CE - Brasil - 2023<br>
    <a href="mailto: walter@ramos.com">walter@ramos.com</a> 
</div>
<!-- partial -->
  <script  src="../js/script.js"></script>

</body>
</html>
