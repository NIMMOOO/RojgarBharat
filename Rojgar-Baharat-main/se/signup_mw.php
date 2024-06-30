<?php

require_once dirname(__DIR__).'/se/core/init.php';

// echo json_encode($_POST);

// print_r($_POST);
if(isset($_POST['name']))
{
    // print_r($_POST['etype']);

    if(Credential::RegisterNewUser($_POST))
    {
        echo 1;
    }
    else{
        echo 0;
    }
}
?>