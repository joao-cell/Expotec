<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
<div class="container">
    <div class="box">
    <form  method="POST">
    <center><h1>Login</h1></center>
        <input type="hidden" name="acao" value="conta">  
        <div class="mb-3"> 
            
            <input type="text" name="nome_us" class="form-control" required placeholder="Nome">
        </div>  
        <div class="mb-3">
            
            <input type="password" name="senha" class="form-control"required placeholder="Senha">
        </div>
        <center>
        <div class="mb-3">
            <button type="submit" class="btn ">Enviar</button>
        </div>
        </center>
    </form>
    </div>
</div>

<style>
        body{


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
                width: 420px;
                height: 420px;
                padding: 50px;
                border-radius: 60px;
                text-align: center;
                background-color: white;
                
                

                
        }
        .box h1{
                margin-bottom: 20px;

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
        }
        .mb-3 button:hover{
            
            background-color: rgb(217, 145, 0);
        }
        

</style>