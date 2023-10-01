<style>
nav a:hover{

background-color: #324F9A!important;
border-radius: 9px;
}
#logout button:hover{
          background-color:  #324f9a ;
          border-radius: 4px;
          
}
#logout button{
border-radius: 4px;
background-color: #244393 ;
color: white;
}
#logout{
height: 39px;

}
.H1{


}
.conteiner{
                  position: absolute;
                  left: 40%;
                  width: 15%;
                  top: 20%;
                  border-style: none ;
                  padding-bottom: 25px;
                  padding-left: 15px;
                  padding-right: 15px;
                  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
                  border-radius: 9px;
                  
                  

                }
                .col button{
               
                
               background-color: #244393;
               color: white;
               width: 50%;
               border-radius: 10px;
               margin-bottom: 20px;

       }
       .col button:hover {
             background-color: #192f69;
       }
       .col select{
                width: 100%;
                font-size: 18px;
               padding: 1px;
               border-radius: 1px;
               border-style: none;
               box-shadow: 0px 1px 4px grey;
               color: gray;
       }
       .col input{
                width: 100%;
                border-style: none;
                border-radius: 9px;
                box-shadow: rgba(0, 0, 0, 0.06) 0px 2px 4px 0px inset;
                background-color: #F3F5F5;
                font-size: 22px;
       }


</STYLE>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">
    <title>FortecHub</title>
  </head>
  <body>
  <script src="js/bootstrap.bundle.min.js"></script>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #244393;">
 
  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link"  style="color: white" href="../admin/index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white" href="../admin/notas.php">Notas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  style="color: white" href="../admin/avisos.php">Avisos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  style="color: white" href="../admin/horarios.php">Horários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  style="color: white" href="../admin/cadastro.php">Cadastro</a>
      </li>
    </ul>
    <div id="logout">
          <div><button type="submit" name="sair" class="btn">Sair</button></div>
    </div>
  </div>
</nav>
<div class="conteiner">
    <div class="row">
        <div class="col mt-5">
                
                <h1>Novo Usuário:<br><br>
                        
                <input type="text" placeholder="Nome"><br><br>
               
                <input type="text" placeholder="Senha"><br><br>

                <select name="tipo">
                    <option value="">Tipo</option>
                    <option value="">Administrador</option>
                    <option value="">Professor</option>
                    <option value="">Aluno</option>
                </select><br><br>
                <select name="sala">
                    <option value="">Selecionar Sala</option>
                </select><br><br>
                    <center>
                    <button type="submit" name="btn_enviar" class="btn">Enviar</button>
                    </center>
                </form>
        </div>
    </div>
</div>