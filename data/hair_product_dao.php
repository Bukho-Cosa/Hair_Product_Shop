<?php

require_once __DIR__ . "/../config/database_configure.php";
require_once __DIR__ . "/../model/classes.php";

class Combs_DAO{

    private database_config $database_config;

    public function __construct($database_config)
    {
        $this->database_config = $database_config;
    }


    public function create(Combs $Combs)
    {

        $connect = $this->database_config->connect();


        $state = "SELECT `image`, `id`, `name`, `notype`, `description`, `price` FROM `combs` WHERE `image`= ". $Combs->getImage() .", `id` = " . $Combs->getId() . ", `name`=" . $Combs->getName() . ", `notype` = " . $Combs->getName_of_type() . ", `description` = " . $Combs->getDescription() . ", `price` = " . $Combs->getPrice() . " ";

        if ($result = $connect->query($state)) {

            $connect->close();
            return $result;
            # code...
        }else {

            die("Query failed: " . $connect->error);
            $connect->close();
        }
    }


    public function readAll()
    {

        $conn = $this->database_config->connect();

        //$Combs_Data = [];

        $statement = "SELECT * FROM `combs`";

        if ($result = $conn->query($statement)) {

            /*while ($row = $result->fetch_object()) {

                $Combs_Object = accessory::createCombsFromDb($row);

                array_push($Combs_Data, $Combs_Object);
            }*/

            //echo $result;
            $conn->close();
            return $result;
        } else {

            die($conn->error . "<br><br>");
            $conn->close();
        }
    }


    public function readById($id)
    {

        $connect = $this->database_config->connect();

        $statement = "SELECT * FROM `combs` WHERE id='$id'";

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
}



class Mousse_DAO{

    private database_config $database_config;

    public function __construct($database_config)
    {
        $this->database_config = $database_config;
    }


    public function create(Mousse $Mousse)
    {

        $connect = $this->database_config->connect();


        $state = "SELECT `image`, `id`, `name`, `notype`, `description`, `price` FROM `mousse` WHERE `image`= ". $Mousse->getImage() .", `id` = " . $Mousse->getId() . ", `name`=" . $Mousse->getName() . ", `notype` = " . $Mousse->getName_of_type() . ", `description` = " . $Mousse->getDescription() . ", `price` = " . $Mousse->getPrice() . " ";

        if ($result = $connect->query($state)) {

            $connect->close();
            return $result;
            # code...
        }else {

            die("Query failed: " . $connect->error);
            $connect->close();
        }
    }


    public function readAll()
    {

        $conn = $this->database_config->connect();

//        $Combs_Data = [];

        $statement = "SELECT * FROM `mousse`";

        if ($result = $conn->query($statement)) {

//            while ($row = $result->fetch_object()) {
//
//                $Combs_Object = combs::createCombsFromDb($row);
//
//                array_push($Combs_Data, $Combs_Object);
//            }

            //echo $result;
            $conn->close();
            return $result;
        } else {

            die($conn->error . "<br><br>");
            $conn->close();
        }
    }


    public function readById($id)
    {

        $connect = $this->database_config->connect();

        $statement = "SELECT * FROM `mousse` WHERE id='$id'";

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
}



class Sealant_DAO{
    
    private database_config $database_config;

    public function __construct($database_config)
    {
        $this->database_config = $database_config;
    }


    public function create(Sealant $Sealant)
    {

        $connect = $this->database_config->connect();


        $state = "SELECT `image`, `id`, `name`, `notype`, `description`, `price` FROM `sealant` WHERE `image`= ". $Sealant->getImage() .", `id` = " . $Sealant->getId() . ", `name`=" . $Sealant->getName() . ", `notype` = " . $Sealant->getName_of_type() . ", `description` = " . $Sealant->getDescription() . ", `price` = " . $Sealant->getPrice() . " ";

        if ($result = $connect->query($state)) {

            $connect->close();
            return $result;
            # code...
        }else {

            die("Query failed: " . $connect->error);
            $connect->close();
        }
    }


    public function readAll()
    {

        $conn = $this->database_config->connect();

//        $Combs_Data = [];

        $statement = "SELECT * FROM `sealant`";

        if ($result = $conn->query($statement)) {

//            while ($row = $result->fetch_object()) {
//
//                $Combs_Object = combs::createCombsFromDb($row);
//
//                array_push($Combs_Data, $Combs_Object);
//            }

            //echo $result;
            $conn->close();
            return $result;
        } else {

            die($conn->error . "<br><br>");
            $conn->close();
        }
    }


    public function readById($id)
    {

        $connect = $this->database_config->connect();

        $statement = "SELECT * FROM `sealant` WHERE id='$id'";

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
}



class Accessory_DAO
{

    private database_config $database_config;

    public function __construct($database_config)
    {
        $this->database_config = $database_config;
    }


    public function create(Accessory $Accessory)
    {

        $connect = $this->database_config->connect();

        /*$statement = "INSERT INTO `accessory`(`image`, `id`, `name`, `notype`, `description`, `price`) VALUES (
            '" . $Accessory->getImage() . "',
            '" . $Accessory->getId() . "',
            '" . $Accessory->getName() . "',
            '" . $Accessory->getName_of_type() . "',
            '" . $Accessory->getDescription() . "',
            '" . $Accessory->getPrice() . "')";

        if ($result = $connect->query($statement)) {

            $connect->close();
            return $result;
        } else {

            die("Query failed: " . $connect->error);
            $connect->close();
        }*/


        $state = "SELECT `image`, `id`, `name`, `notype`, `description`, `price` FROM `accessory` WHERE `image`= ". $Accessory->getImage() .", `id` = " . $Accessory->getId() . ", `name`=" . $Accessory->getName() . ", `notype` = " . $Accessory->getName_of_type() . ", `description` = " . $Accessory->getDescription() . ", `price` = " . $Accessory->getPrice() . " ";

        if ($result = $connect->query($state)) {

            $connect->close();
            return $result;
            # code...
        }else {

            die("Query failed: " . $connect->error);
            $connect->close();
        }
    }


    public function readAll()
    {

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


    public function readById($id)
    {

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
