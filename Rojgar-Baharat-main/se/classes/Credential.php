<?php

require_once dirname(__DIR__).'/core/init.php';


class Credential {


    public static function RegisterNewUser($data = array())
    {   
        $db = DB::getInstance();
        return $db->signup($_POST);
    }


    public static function Login($data = array())
    {
        $db = DB::getInstance();
        $status = $db->login($_POST);
        if($status != null)
        {
            
            if($status->password == $data['pass'])
            {
                $_SESSION['empid'] = $status->employer_id;
                $_SESSION['phone'] = $status->phone;
                $_SESSION['name'] = $status->Name;

                return true;
            }


        }

        return false;
    }

}


?>