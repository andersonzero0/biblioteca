<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Funcionários</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../../css/style.css">
  </head>
  <body>

    <div class="wrapper">
      <div class="top">
        <h1>Biblioteca WRA - Funcionários (ADMIN).</h1>
      </div>

      <nav role='navigation'>
        <ul>
          <li><a class="tablink ativo" href="../index.php">Voltar</a></li>
          <li><a class="tablink" href="?page=novo">Novo Func.</a></li>
          <li><a class="tablink" href="?page=listar">Listar Func.</a></li>
        </ul>
      </nav>

      <div class="tab">
        <?php
          include("../../conexao.php");

          switch(@$_REQUEST["page"]){
            case 'novo':
              include("novo-func.php");
              break;
            case 'listar':
              include("listar-func.php");
              break;
            case 'salvar':
              include("salvar-func.php");
              break;
            case 'editar':
              include("editar-func.php");
              break;
            default:
              print "<div class='banner'>
                    <img src='https://img.freepik.com/fotos-gratis/aluno-compartilhando-seu-conhecimento-com-seus-colegas_329181-8498.jpg?w=1060&t=st=1675531079~exp=1675531679~hmac=3a255860daae4325192d8a818c33eff2ab2858f66ad6cf4044c8c9b49ca1f494'>
                    <span>Área de edição FUNCIONÁRIOS.</span>
                    </div>";
          }
        ?>
      </div>

    <div class="footer">
    <b>Todos os direitos reservados</b><br>
      Escola Walter Ramos de Araújo - Av. Prefeito Mauricio Brasileiro s/n, CE - Brasil - 2023<br>
      <a href="mailto: walter@ramos.com">walter@ramos.com</a> 
    </div>

    <script src="../../js/script.js" ></script>
  </body>
</html>