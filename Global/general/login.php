<link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">
<div class="container">
    <div class="box">
    <form  method="POST">
    <center><h1>Login</h1></center>  
   <h2>Faça login para acessar</h2>
        <input type="hidden" name="acao" value="conta">  
        <div class="mb-3"> 
            
            <input type="text" name="nome_us" class="form-control" required placeholder="Nome">
        </div>  
        <div class="mb-3">
            
            <input type="password" name="senha" class="form-control"required placeholder="Senha">
        </div>
        <center>
        <div class="mb-3">
            <button type="submit" class="btn">Entrar</button>
        </div>
        </center>
    </form>  
    <div id="logo">
            <img src="../img/logo.png" width="100px">
    </div>
    </div>
</div>
<style>
        body{
                background-image: url(../img/bg2.png);
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: 100% 100%;
        }
     .container{
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 70vh;
        }
        .box{
                display: flex;
                flex-direction: column;
                justify-content: center;
                text-align: left;
                align-items: center;
                width: 320px;
                height: 420px;
                padding: 50px;
                border-radius: 9px;
                text-align: center;
                background-color: white;
                box-shadow: 0px 0px 10px black;
        }
        .box h1{
                margin-bottom: 10px;
                margin-top: -70px;
                
        }
        .box h2{
                margin-bottom: 20px;
                color: gray;
                font-size: 15px;
                text-align: center;
        }
        .mb-3 input{
                background-color: white;
                width: 100%;
                border-style: hidden;
                box-shadow: 0px 1px 4px grey;
                margin-bottom: 26px;
        }
        .mb-3 button{
                background-color: #244393;
                color: white;
                width: 60%;
                border-radius: 10px;
                margin-bottom: 20px;
        }
        .mb-3 button:hover{
                background-color: #192f69;
            }
        #logo{
                opacity: 0.5;
                margin-top: -40px;
                margin-bottom: -80px;
        }
</style>
