<?php

function divisao ($dividendo, $divisor)
{   
    try{

    if ($divisor == 0) 
    {
        throw new RangeException("Não é possível dividir por zero");
    }

    $resultado = $dividendo / $divisor;

    echo "O resultado é: ". $resultado;
        }catch(Exception ){
        //     echo $e->getMessage();
             echo "O número não pode ser dividido por zero";
        
         }
        finally{
            echo "<br> Tratando execução";
        }
    
}


divisao(10, 0);