<?php

if(isset($_POST['Submit'])){
    if(isset($_POST['Pnumero']) && !empty($_POST['Pnumero']) && isset($_POST['Snumero']) && !empty($_POST['Snumero'])){
        $varA = $_POST['Pnumero'];
        $varB = $_POST['Snumero'];

        if(is_numeric($varA) && is_numeric($varB)){
            $area = (($varA*8)*$varB)/2;
            echo "el area es de:".$area;
        }
        else
        {
            echo "Ingrese numeros validos";
        };
    };
};

?>