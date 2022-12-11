<?php


class database_config {
    private $user = "root";
    private $password = "root";
    private $db_name = "hotel_products";
    private $host = "localhost";
    private $port = 3306;

    public function connect(){
        $connect = new mysqli($this->user, $this->password, $this->db_name, $this->host, $this->port);
        //$connect = new mysqli($user = 'root', $password = 'root', $db_name = 'hotel_products', $host = 'localhost', $port = 3306);

        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error); 
        } else {

            echo "successfully connected";
            return $connect;
        }
    }
}

$database_config = new database_config();

//function connect() {

//     $host = "localhost";
//     $username = "root";
//     $password = "root";
//     $db_name = "hotel_products";
//     $port = 3306; 


//     $conn = new mysqli($host, $username, $password, $db_name, $port);
     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error); 
//     } else {
//        echo "successful connection";
//         return $conn;
//     }

// }

?>