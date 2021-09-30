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
    font-size: 15px;
 }
 .city {
  background-color: #3fddaa;
  color: #baf7e3;
  align-items: center;
  justify-content: center;
 }

 .cito {
  align-items: center;
  justify-content: center;
 }
</style>

</head>

<body>



<section>

        <form action="">        
        <div class="cito">
        <h1>Lista de Veículos</h1>
        </div>
<label>
<div class="city">

        <input name="busca" value="<?php if (isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Digite os termos de pesquisa" type="text">
        
        <button type="submit">Pesquisar</button>
        </div>

    </form>
    <br>
    <table width="600px" border="1">
        <tr>
            <th>Nome</th>
            <th>Bairros</th>
            <th>WhatsApp</th>
            <th>Imagem</th>
        </tr>
        <?php
        if (!isset($_GET['busca'])) {
        ?>
            <tr>
                <td colspan="4">Digite algo para pesquisar...</td>
            </tr>
            <?php
        } else {
            $pesquisa = $mysqli->real_escape_string($_GET['busca']);
            $sql_code = "SELECT * 
                FROM usuarios 
                WHERE nome LIKE '%$pesquisa%' 
                OR bairro LIKE '%$pesquisa%'
                OR whatsapp LIKE '%$pesquisa%'
                OR nome_imagem LIKE '%$pesquisa%'";
            $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error);

            if ($sql_query->num_rows == 0) {
            ?>
                <tr>
                    <td colspan="4">Nenhum resultado encontrado...</td>
                </tr>
                <?php
            } else {
                while ($dados = $sql_query->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['bairro']; ?></td>
                        <td><?php echo $dados['whatsapp']; ?></td>
                        <td><img src="foto/<?php echo $dados['nome_imagem']; ?> " width="40"></td>
                    </tr>
            <?php
                }
            }
            ?>
        <?php
        } ?>
    </table>
</section>
    
</body>

</html>