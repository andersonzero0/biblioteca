<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Biblioteca WRA</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
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
      <li><a class="tablink" onClick="openTab(event,'login')">Login</a></li>
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
        include("conexao.php");
        switch(@$_REQUEST["page"]){
          case 'pesquisar':
            include("principal/pesquisar.php");
            break;
          case 'resultado':
            include("principal/resultado.php");
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

  <div id="login" class="tab" style="display:none">
    <fieldset>
      <h1>Acesso restrito</h1><br>
      <form action="" method="POST">
          <label>Login:</label>
          <input type="text" id="loginInput" name="login"><br><br>

          <label>Senha:</label>
          <input type="password" id="senha" name="senha"><br><br>

          <button type="button" onclick="authLogin()" class="button3">Entrar</button>

    </form>
    </fieldset>
    
    <div class="callout">
      <h1>Área de administradores.</h1>
    </div>
  </div>
  
<div class="footer">
  <b>Todos os direitos reservados</b><br>
    Escola Walter Ramos de Araújo - Av. Prefeito Mauricio Brasileiro s/n, CE - Brasil - 2023<br>
    <a href="mailto: walter@ramos.com">walter@ramos.com</a> 
</div>
<!-- partial -->
  <script  src="js/script.js"></script>

</body>
</html>

<script>
  function authLogin() {

    let login = document.getElementById("loginInput").value;
    let senha = document.getElementById("senha").value;

    const loginAuth = "adminwra";
    const senhaAuth = "wra2023";

    if(login === loginAuth && senha === senhaAuth) {

      sessionStorage.setItem("auth", loginAuth + senhaAuth);
      window.location.href = "principal/index.php";
        
    } else {

      alert("Login e/ou senha incorretas.");
      
    }
  }
</script>
