<?php

class Hash {
    public static function make($string){

        return password_hash($string,PASSWORD_BCRYPT);

    }

    public static function generate_id()
    {
        // $random = mt_rand(12,20);
        
        return "CGBCC_".substr(md5(time()), 0, 8);
    }


}