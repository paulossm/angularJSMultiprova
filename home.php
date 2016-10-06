<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <header>
            <h3>
                <?php
                    if(isset($_SESSION['matricula']))
                        echo "Aluno: " . $_SESSION['matricula'];
                    else 
                        echo "Você não está logado.";
                ?>
            </h3>
        </header>
        <section><h2>Vou criar a dashboard mais bonita do mundo! (saudades lua em Leão)</h2></section>
    </body>
</html>