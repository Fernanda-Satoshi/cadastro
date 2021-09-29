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
</head>
<body>
<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}


        
		?>

<h1>Cadastrar Usuário</h1>

<h2> Carregar a foto</h2>
<form method="POST" action="processa.php" enctype="multipart/form-data">
	Imagem: <input name="arquivo" type="file"><br><br>				
		<form method="POST" action="processa.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo"><br><br>			
			<label>Bairro: </label>
			<input type="bairro" name="bairro" placeholder="Digite o seu bairro"><br><br>
            <label>Whatsapp: </label>
			<input type="whatsapp" name="whatsapp" placeholder="Digite o seu whatsapp"><br><br> 
			<input type="submit" value="Cadastrar">
		</form>
        </form>
    <h1>Lista de Veículos</h1>
    <form action="">
        <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Digite os termos de pesquisa" type="text">
        <button type="submit">Pesquisar</button>
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
                while($dados = $sql_query->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['bairro']; ?></td>
                        <td><?php echo $dados['whatsapp']; ?></td>
                        <td><?php echo $dados['nome_imagem']; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        <?php
        } ?>
    </table>
</body>
</html>