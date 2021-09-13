<?php

    class Connection {

        static public function connect() {
            $link = new PDO("mysql:host=localhost;dbname=php_course", 
                            "root", 
                            "040319659");   
            $link->exec("set names utf8");                                                                       
            return $link;
        }
    }

?>