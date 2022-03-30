<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style3.css"/>
        <meta charset="UTF-8"/>
        <title>Linguagem de Programação 1</title>
    </head>
    <body bgcolor="#B0E0E6">
    <div id="primeiro">
    <h1>Linguagem de Programação 1</h1>
    <h1>RA: 8127726 - Nome: Pedro Henrique Jacobucci</h1>
    <br>
    <form action="" method="GET">
         <input type="number" placeholder="Digite o primeiro valor" name="num1">
        <button type="submit">Enviar</button>
    <br>
    <br>
    <?php
        $n1 = $_GET['num1'];

        if($n1 % 2){
            echo "<p> IMPAR </p>";
        }else{
            echo "<p> PAR </p>";
        }
       
        if($n1 < 0){
            echo "<br><p1>Negativo</p1>";
        }else{
            echo "<br><p2>Positivo</p2>";
        }
        
    ?>
    </div>
    </body>
</html>