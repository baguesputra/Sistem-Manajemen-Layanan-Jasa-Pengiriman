<?php

class koneksi{
    public function get_connection(){
        $host = "localhost";
        $database = "db_simjp";
        $username = "root";
        $password = "";
        $connect = new mysqli($host, $username, $password, $database);
        return $connect;
    }
}
?>