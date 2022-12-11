<?php

require_once __DIR__ . "/../config/database_configure.php";
require_once __DIR__ . "/../model/classes.php";

/*class Combs_DAO{

    private database_config $database_config;

    public function __construct($database_config)
    {
       $this->database_config = $database_config; 
    }


    public function create(Combs $Combs){

        $connect = $this->database_config->connect();

        $statement = "INSERT INTO Combs (image, name, name_of_type, description, price, availability) Values(
            ". $Combs->getImage() ."
            ". $Combs->getName() ."
            ". $Combs->getName_of_type() ."
            ". $Combs->getDescription() ."
            ". $Combs->getPrice() ."
            ". $Combs->getAvailability() ." 
        )";

        if ($result = $connect->query($statement)) {

            $connect->close();
            return $result;
   
        } else {

            die("Query failed: " . $connect->error);
            $connect->close();

        }
    }


    public function readAll() {

        $connect = $this->database_config->connect();

        $Combs_Data = [];

        $statement = "SELECT * FROM combs";

        if ($result = $connect->query($statement)) {

            while ($row = $result->fetch_object()) {

                $Combs_Object = Combs::createCombsFromDb($row);

                array_push($Combs_Data, $Combs_Object);
            }

            $connect->close();
            return $Combs_Data;

        } else {

            die($connect->error . "<br><br>");
            $connect->close(); 
            
        }

    }


    public function readById($id) {

        $connect = $this->database_config->connect();

        $statement = "SELECT * FROM combs WHERE id='$id'";

        if ($result = $connect->query($statement)) {

            $row = $result->fetch_object();

            if ($row !== null) {
                
                $Combs = Combs::createCombsFromDb($row);
                $connect->close();
                return $Combs;
            }

        } else {

            $connect->close();
            die("Connection failed: " . $connect->error); //die function to close connection in case of error
        }
    }


    /public function update(Combs $Combs) {

        $connect = $this->database_config->connect();

        $statement = "UPDATE Combs
                      SET image = '".$Combs->getImage()."',
                          name = '".$Combs->getName()."',
                          name_of_type = '".$Combs->getName_of_type()."',
                          description = '".$Combs->getDescription()."',
                          price = '".$Combs->getPrice()."',
                          availability = '".$Combs->getAvailability()."'
                      WHERE id='".$Combs->getId()."'
        ";

        if ($result = $connect->query($statement)) {

            $connect->close();
            return $result;

        } else {

            die($connect->error); //die function to close connection in case of error
            $connect->close();
         
        }
    }

}



class Mousse_DAO{

    private database_config $database_config;

    public function __construct($database_config)
    {
       $this->database_config = $database_config; 
    }


    public function create(Mousse $Mousse){

        $connect = $this->database_config->connect();

        $statement = "INSERT INTO Mousse (image, name, name_of_type, description, price, availability) Values(
            ". $Mousse->getImage() ."
            ". $Mousse->getName() ."
            ". $Mousse->getName_of_type() ."
            ". $Mousse->getDescription() ."
            ". $Mousse->getPrice() ."
            ". $Mousse->getAvailability() ." 
        )";

        if ($result = $connect->query($statement)) {

            $connect->close();
            return $result;
   
        } else {

            die("Query failed: " . $connect->error);
            $connect->close();

        }
    }


    public function readAll() {

        $connect = $this->database_config->connect();

        $Mousse_Data = [];

        $statement = "SELECT * FROM mousse";

        if ($result = $connect->query($statement)) {

            while ($row = $result->fetch_object()) {

                $Mousse_Object = mousse::createMousseFromDb($row);

                array_push($Mousse_Data, $Mousse_Object);
            }

            $connect->close();
            return $Mousse_Data;

        } else {

            die($connect->error . "<br><br>");
            $connect->close(); 
            
        }

    }


    public function readById($id) {

        $connect = $this->database_config->connect();

        $statement = "SELECT * FROM mousse WHERE id='$id'";

        if ($result = $connect->query($statement)) {

            $row = $result->fetch_object();

            if ($row !== null) {
                
                $Mousse = mousse::createMousseFromDb($row);
                $connect->close();
                return $Mousse;
            }

        } else {

            $connect->close();
            die("Connection failed: " . $connect->error); //die function to close connection in case of error
        }
    }


    public function update(Mousse $Mousse) {

        $connect = $this->database_config->connect();

        $statement = "UPDATE Mousse
                      SET image = '".$Mousse->getImage()."',
                          name = '".$Mousse->getName()."',
                          name_of_type = '".$Mousse->getName_of_type()."',
                          description = '".$Mousse->getDescription()."',
                          price = '".$Mousse->getPrice()."',
                          availability = '".$Mousse->getAvailability()."'
                      WHERE id='".$Mousse->getId()."'
        ";

        if ($result = $connect->query($statement)) {

            $connect->close();
            return $result;

        } else {

            die($connect->error); //die function to close connection in case of error
            $connect->close();
         
        }
    }

}



class Sealant_DAO{

    private database_config $database_config;

    public function __construct($database_config)
    {
       $this->database_config = $database_config; 
    }


    public function create(Sealant $Sealant){

        $connect = $this->database_config->connect();

        $statement = "INSERT INTO Sealant (image, name, name_of_type, description, price, availability) Values(
            ". $Sealant->getImage() ."
            ". $Sealant->getName() ."
            ". $Sealant->getName_of_type() ."
            ". $Sealant->getDescription() ."
            ". $Sealant->getPrice() ."
            ". $Sealant->getAvailability() ." 
        )";

        if ($result = $connect->query($statement)) {

            $connect->close();
            return $result;
   
        } else {

            die("Query failed: " . $connect->error);
            $connect->close();

        }
    }


    public function readAll() {

        $connect = $this->database_config->connect();

        $Sealant_Data = [];

        $statement = "SELECT * FROM Sealant";

        if ($result = $connect->query($statement)) {

            while ($row = $result->fetch_object()) {

                $Sealant_Object = Sealant::createSealantFromDb($row);

                array_push($Sealant_Data, $Sealant_Object);
            }

            $connect->close();
            return $Sealant_Data;

        } else {

            die($connect->error . "<br><br>");
            $connect->close(); 
            
        }

    }


    public function readById($id) {

        $connect = $this->database_config->connect();

        $statement = "SELECT * FROM Sealant WHERE id='$id'";

        if ($result = $connect->query($statement)) {

            $row = $result->fetch_object();

            if ($row !== null) {
                
                $Sealant = Sealant::createSealantFromDb($row);
                $connect->close();
                return $Sealant;
            }

        } else {

            $connect->close();
            die("Connection failed: " . $connect->error); //die function to close connection in case of error
        }
    }


    public function update(Sealant $Sealant) {

        $connect = $this->database_config->connect();

        $statement = "UPDATE Sealant
                      SET image = '".$Sealant->getImage()."',
                          name = '".$Sealant->getName()."',
                          name_of_type = '".$Sealant->getName_of_type()."',
                          description = '".$Sealant->getDescription()."',
                          price = '".$Sealant->getPrice()."',
                          availability = '".$Sealant->getAvailability()."'
                      WHERE id='".$Sealant->getId()."'
        ";

        if ($result = $connect->query($statement)) {

            $connect->close();
            return $result;

        } else {

            die($connect->error); //die function to close connection in case of error
            $connect->close();
         
        }
    }

}*/



class Accessory_DAO{

    private database_config $database_config;

    public function __construct($database_config)
    {
       $this->database_config = $database_config; 
    }


    public function create(Accessory $Accessory){

        $connect = $this->database_config->connect();

        $statement = "INSERT INTO `accessory`(`image`, `id`, `name`, `notype`, `description`, `price`) VALUES ('". $Accessory->getImage() ."','". $Accessory->getId() ."','". $Accessory->getName() ."','". $Accessory->getName_of_type() ."','". $Accessory->getDescription() ."','". $Accessory->getPrice() ."')";

        if ($result = $connect->query($statement)) {

            $connect->close();
            return $result;
   
        } else {

            die("Query failed: " . $connect->error);
            $connect->close();

        }
    }


    public function readAll() {

        $conn = $this->database_config->connect();

        $Accessory_Data = [];

        $statement = "SELECT * FROM `accessory`";

        if ($result = $conn->query($statement)) {

            while ($row = $result->fetch_object()) {

                $Accessory_Object = accessory::createAccessoryFromDb($row);

                array_push($Accessory_Data, $Accessory_Object);
            }

            //echo $result;
            $conn->close();
            return $Accessory_Data;

        } else {

            die($conn->error . "<br><br>");
            $conn->close(); 
            
        }

    }


    public function readById($id) {

        $connect = $this->database_config->connect();

        $statement = "SELECT * FROM `accessory` WHERE id='$id'";

        if ($result = $connect->query($statement)) {

            $row = $result->fetch_object();

            if ($row !== null) {
                
                $Accessory = Accessory::createAccessoryFromDb($row);
                $connect->close();
                return $Accessory;
            }

        } else {

            $connect->close();
            die("Connection failed: " . $connect->error); //die function to close connection in case of error
        }
    }

}


?>