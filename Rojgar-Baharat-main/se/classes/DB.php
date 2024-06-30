<?php

// database wrapper can be used anywhere
// using pdo php database object 

class DB 
{
    private static $_instance = null;               //the underscore is the notation for private members
    private $_pdo,
            $_query,                                   //last query that is executed
            $_error=false,                             //for error 
            $_results,                                 //results from the querry
            $_count=0;                                 //count for the results
    

    private function __construct()                              //connection to database always
    {                            
        try{                                                       //try and catch for errors 

            $this->_pdo = new PDO('mysql:host='.Config::get('mysql/host').';dbname='.Config::get('mysql/db'),Config::get('mysql/username'),Config::get('mysql/password'));    //using PDO ;connection to db
            $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }catch(PDOException $e){                                       //pdo exception gives the error in $e through getMessage function 
            die($e->getMessage());
        }
    }

    public static function getInstance()                                  //instantiating the class first 
        {
            if(!isset(self::$_instance))
            {
                self::$_instance = new DB();
            }
            return self::$_instance;
        }

    public function signup($data)
    {
        if($data['mtype'] == 'employer')
        {
            $sql = 'INSERT INTO `employer` (`Name`,`occupation`, `phone`, `State`, `City`, `Zip`,`password`) VALUES (?, ?, ?, ?, ?, ?, ?)';
        }
        elseif ($data['mtype'] == 'job_seeker') {
            $sql = 'INSERT INTO `employees` ( `Name`, `Work`,`phone`,`State`, `City`, `Zip`,`password`) VALUES (?, ?, ?, ?, ?, ?, ?)';
        }
        $query  = $this->_pdo->prepare($sql);
        return $query->execute(array(
            $data['name'],$data['etype'],$data['phone'],$data['state'],$data['city'],$data['pincode'],$data['pass']
        ));
    }


    public function login($data)
    {
        $sql = 'SELECT `employer_id`,`Name`,`phone`,`password` FROM `employer` WHERE `phone` = ?';
        $query  = $this->_pdo->prepare($sql);

        $query->execute(array($data['phone']));
        $data = $query->fetchAll(PDO::FETCH_OBJ);
        if(!empty($data))
        {
            return $data[0];
        }
        return null;
    }

}

?>