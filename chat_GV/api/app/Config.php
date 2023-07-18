<?php

class Config{
    public function connect(){
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "truongcap1";
        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        mysqli_set_charset($conn, 'UTF8');
        if(!$conn){
            echo "Lỗi kết nối Database".mysqli_connect_error();
        }
        return $conn;
    }
}