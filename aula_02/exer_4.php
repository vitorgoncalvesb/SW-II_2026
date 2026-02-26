
<?php
$opcao = 2 ;
    switch ($opcao) {
        case 1:
            echo "Olá! Bem-vindo.";
            break;

        case 2:
            echo "Data atual: " . date("d/m/Y");
            break;

        case 3:
            echo "Saindo...";
            break;

        default:
            echo "Opção inválida!";
            break;
    }

?>