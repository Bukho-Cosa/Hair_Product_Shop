<?php


// remember you need sql pages for each table


class database_config {
    private $user = 'root';
    private $password = 'root';
    private $db_name = 'combs';
    private $host = 'localhost';
    private $port = 3306;

    public function connect(){
        $connect = new mysqli($this->user, $this->password, $this->db_name, $this->host, $this->port);

        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error); 
        } else {

            echo "successfully connected";
            return $connect;
        }
    }
}

?>