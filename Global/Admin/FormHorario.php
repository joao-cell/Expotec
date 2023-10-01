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


</STYLE>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Inclua o Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Inclua o jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Inclua o Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

<!-- Inclua o Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">
    <title>FortecHub</title>
</head>
<body>
<script src="js/bootstrap.bundle.min.js"></script>


<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #244393;">
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../admin/index.php">Inicio</a>
            </li>
            <li class="nav-item">
            <div class="dropdown nav-item">
  <a class="nav-link dropdown-toggle" style="color: white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Notas
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Ver Notas</a>
    <a class="dropdown-item" href="#">Inserir Nota</a>
  </div>
</div>

            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../admin/avisos.php">Avisos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="../admin/horarios.php">Horários</a>
            </li>
        </ul>
        <div id="logout">
        <form method="post">
          <div><button type="submit" name="sair" class="btn">Sair</button></div>
        </form>
    </div>
    </div>
</nav>
<div class="conteiner">
    <div class="row">
        <div class="col mt-5">
                
                <h1>Novo horário:<br><br>
                        
                <select name="sala">
                    <option value="">Selecionar Dia</option>
                </select><br><br> 

                <select name="sala">
                    <option value="">Selecionar Horário</option>
                </select><br><br>
                <select name="sala">
                    <option value="">Selecionar Matéria</option>
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