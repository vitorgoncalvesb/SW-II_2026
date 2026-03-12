<html>
<?php
?>

<body>

    <p>Bem vindo <?php echo $_POST["nome"]; ?></p>
    <p>Seu e-mail é <?php echo $_POST["email"]; ?></p>
    <p>Sua idade é <?php echo $_POST["idade"]; ?></p>
    <p>Seu ano de nascimento é: <?php echo date('Y') - $_POST["idade"]; ?></p>

    <?php
    if ($_POST["idade"] >= 18) {
        echo "<p style= color:red>Você é maior de idade </p>";
    } else {
        echo "<p style= color:blue>Você é menor de idade </p>";
    }
    ?>
    <h1>Lista de clientes</h1>
    <ul>
        <?php
            for ($i=1; $i <= rand(1, 100); $i++) { 
                echo "<li>Cliente $i</li>";
            }
        ?>
    </ul>
</body>

</html>