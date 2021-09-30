<?php
session_start();
include('conexao.php');



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Busca</title>
    
    <style>

*{
    padding: 0px;
    margin: 0px;
}

body{
background-color: #eefff9;

}
header {


    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background-color: #3fddaa;
    color: white;
    font-family: Cambria, arial;


}

section {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 80vh;

}


form {
    font-family: arial;

}

form div{
    display: flex;
    flex-direction: collumn; 
    margin-bottom: 30px;

}

form textarea{
outline: unset;
padding: 15px;
width: 250px;
border: 1px solid #3fddaa;
border-radius: 20px;
background-color: #3fddaa;

}

form input{
outline: unset;
padding: 15px;
width: 250px;
border: 1px solid #3fddaa;
border-radius: 20px;
background-color: #fff;

}
form textarea:focus {

background-color: #fff;


 }

 form input:focus {

background-color: #baf7e3;


 }


 Form label {

    margin-left: 25px;
    font-size: 30px;
 }
 .city {
  background-color: #3fddaa;
  color: #baf7e3;
  align-items: center;
  justify-content: center;
 }

</style>

</head>

<body>
    
<header>

<img src="logo.png" width="40"> <h1>Cadastro</h1>
    </header>
    
<section>
    
    
<form method="POST" action="processa.php" enctype="multipart/form-data">

    <label>Envie a sua foto</label><br><br>
        
        
        <input type="file" class="custom-file-input" name="imagem" id="imagem" ><br><br>   

        <input type="text" name="nome" placeholder="Digite o seu nome completo"><br><br>
        
        <input type="bairro" name="bairro" placeholder="Digite o seu bairro"><br><br>
        
        <input type="whatsapp" name="whatsapp" placeholder="Digite o seu whatsapp"><br><br>
        <div class="city">
        <input type="submit" value="Clique para cadastrar">
        </div>

</form>





</section>

<?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    ?>
    
</body>

</html>
