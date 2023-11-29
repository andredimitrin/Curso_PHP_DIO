<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão</title>
</head>
<body>
    <?php
        $string = "Curso na DIO";
        $numeros = 50;
        $array = array("PHP", "HTML", "CSS", "JAVASCRIPT");
        date_default_timezone_set("America/Sao_Paulo");
        $data = date("d-m-Y H:i:s");
    ?>
    <h4>Esse curso de tipo de variáveis tipo string,
        para implemetar uma variável do tipo string
        ultilizamos aspas simples ('') ou dupalas duplas ("")
        :
        <?php
            echo $string;
        ?>
    </h4>
    <h4>
        Essa é uma variável tipo números/integer  
        para implementar essa variável ultilizamos
        somente os números deste forma => 
        :
        <?php
            echo $numeros;
        ?>
    </h4>
    <h4>
        Essa é uma variável com um array, 
        para implementar um array em uma variável 
        utilizamos desta forma    
        :
        <?php
            print_r ($array)
        ?>

    </h4>
    <h4>
        Vamos agora implementar do tipo datas,
        para implementar uma variável do tipo datas ultilizamos
        uma funçãi própria do PHP desta forma :

        <?php
        print $data
        ?>
        
    </h4>
</body>
</html>