<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registrostyle.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>tela de cadastro</title>
    
</head>

    <body>
   

        <form id="myform" method="POST" action="cadastrar_action.php" >
        <div class="container">
            <h2>Cadastro</h2>
            <form>
            <div class="caixa_registro">
                <input type="text" name="email" required>
                <label>E-mail</label>
            </div>
            
            <br>

            <div class="caixa_registro">
                <input type="text" name="usuario" required>
                <label>Usúario</label>
            </div>
            
            <br>

            <div class="caixa_registro">
                <input type="text" name="senha" required>
                <label>Senha</label>
                
            </div>
           
            <br>
            <br>
            <div class="enviar">
                <a href="javascript:{}" onclick="document.getElementById('myform').submit();">               
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    registrar
                </a>
            </div>
           
            

           <hr class="solid">
             </form> 
        
             
        <div class="footer">
            <a href="http://localhost/site_crud/PHPCRUD/PHPCRUD/login.php">
                retornar ao login
            </a>
        
        </div>

        </footer>

    </div>
        
    </form>
    </body>


</htmL>