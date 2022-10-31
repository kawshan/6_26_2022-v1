<?php
class CommonDao{
    public static function getConnection(){
        $servername="localhost";
        $username="root";
        $password="";
        $database="earth";

        $dbconn=new mysqli($servername,$username,$password,$database);

        if(!$dbconn){
            die("connection error".$dbconn->connect_error);
        }
        return $dbconn;
    }
}

?>
