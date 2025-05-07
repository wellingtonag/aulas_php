<?php
    //verificar os campos
    if(isset($_POST['nome'],$_POST['email'])){
        $nome = htmlspecialchars($_POST['nome']);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

        // ver if se o emial é valid
        

    
    }else{

    }
?>
