<?php

require_once dirname(__DIR__).'/se/core/init.php';

// echo json_encode($_POST);

// print_r($_POST);
if(isset($_POST['phone']))
{
    // print_r($_POST['etype']);

    if(Credential::Login($_POST))
    {
        echo 1;
    }
    else{
        echo 0;
    }
}
?>