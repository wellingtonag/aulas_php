<?php
    // Op lógicos em php
    // && and
    // || or

    $idade = 17;
    $temCarteira = true;

    if($idade >= 18 && $temCarteira){
        echo "Pode dirigir";
    }else{
        echo "Sua idade é $idade e você não pode dirigir";
    }

    echo "<br>";
    echo "Ex. 2 - and";
    echo "<br>";

    $nota1 = 7;
    $nota2 = 5;

    if($nota1 >= 6 && $nota2 >= 6){
        echo "aprovado";
    }else{
        echo "reprovado";
    }

    echo "<br>";
    echo "Ex. 2 - || (or)";
    echo "<br>";

    $dia_semana = "segunda";
    
    if($dia_semana == "sábado" || $dia_semana == "domingo"){
        echo "final de semana";
    } else{
        echo "dia útil";
    }


?>