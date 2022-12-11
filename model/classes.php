<?php


class Combs{
    // ----------------------- fields --------------------------
    private $image;
    private $id;
    private $name;
    private $name_of_type;
    private $description;
    private $price;
    private $availability = true;

    public function __construct($image, $name, $name_of_type, $description, $price, $availability )
    {
        $this->image = $image;
        $this->name = $name;
        $this->name_of_type = $name_of_type;
        $this->description = $description;
        $this->price = $price;
        $this->availability = $availability;
    }

    // ----------------------- methods --------------------------

    public static function createCombsFromDb($row) {

        $Combs = new Combs($row->image, $row->name, $row->name_of_type, $row->description, $row->price,$row->availability);
        $Combs->setId($row->id);
        $Combs->setAvailability($row->availability)
        ($row->available);

        return $Combs;
    }

    // --------------- Getters and Setters -------------------


    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name_of_type
     */ 
    public function getName_of_type()
    {
        return $this->name_of_type;
    }

    /**
     * Set the value of name_of_type
     *
     * @return  self
     */ 
    public function setName_of_type($name_of_type)
    {
        $this->name_of_type = $name_of_type;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of availability
     */ 
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set the value of availability
     *
     * @return  self
     */ 
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}

class Mousse{
    // ----------------------- fields --------------------------
    private $image;
    private $id;
    private $name;
    private $name_of_type;
    private $description;
    private $price;
    private $availability = true;

    public function __construct($image, $name, $name_of_type, $description, $price, $availability )
    {
        $this->image = $image;
        $this->name = $name;
        $this->name_of_type = $name_of_type;
        $this->description = $description;
        $this->price = $price;
        $this->availability = $availability;
    }

    // ----------------------- methods --------------------------

    public static function createMousseFromDb($row) {

        $Mousse = new Mousse($row->image, $row->name, $row->name_of_type, $row->description, $row->price,$row->availability);
        $Mousse->setId($row->id);
        $Mousse->setAvailability($row->availability)
        ($row->available);

        return $Mousse;
    }


    // --------------- Getters and Setters -------------------


    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name_of_type
     */ 
    public function getName_of_type()
    {
        return $this->name_of_type;
    }

    /**
     * Set the value of name_of_type
     *
     * @return  self
     */ 
    public function setName_of_type($name_of_type)
    {
        $this->name_of_type = $name_of_type;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of availability
     */ 
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set the value of availability
     *
     * @return  self
     */ 
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}

class Sealant{
    // ----------------------- fields --------------------------
    private $image;
    private $id;
    private $name;
    private $name_of_type;
    private $description;
    private $price;
    private $availability = true;

    public function __construct($image, $name, $name_of_type, $description, $price, $availability )
    {
        $this->image = $image;
        $this->name = $name;
        $this->name_of_type = $name_of_type;
        $this->description = $description;
        $this->price = $price;
        $this->availability = $availability;
    }


    // ----------------------- methods --------------------------

    public static function createSealantFromDb($row) {

        $Sealant = new Sealant($row->image, $row->name, $row->name_of_type, $row->description, $row->price,$row->availability);
        $Sealant->setId($row->id);
        $Sealant->setAvailability($row->availability)
        ($row->available);

        return $Sealant;
    }

    // --------------- Getters and Setters -------------------


    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name_of_type
     */ 
    public function getName_of_type()
    {
        return $this->name_of_type;
    }

    /**
     * Set the value of name_of_type
     *
     * @return  self
     */ 
    public function setName_of_type($name_of_type)
    {
        $this->name_of_type = $name_of_type;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of availability
     */ 
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set the value of availability
     *
     * @return  self
     */ 
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}


class Accessory{
    // ----------------------- fields --------------------------
    private $image;
    private $id;
    private $name;
    private $name_of_type;
    private $description;
    private $price;
    private $availability = true;

    public function __construct($image, $name, $name_of_type, $description, $price, $availability )
    {
        $this->image = $image;
        $this->name = $name;
        $this->name_of_type = $name_of_type;
        $this->description = $description;
        $this->price = $price;
        $this->availability = $availability;
    }

    // ----------------------- methods --------------------------

    public static function createAccessoryFromDb($row) {

        $Accessory = new Accessory($row->image, $row->name, $row->name_of_type, $row->description, $row->price,$row->availability);
        $Accessory->setId($row->id);
        $Accessory->setAvailability($row->availability)
        ($row->available);

        return $Accessory;
    }

    // --------------- Getters and Setters -------------------


    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name_of_type
     */ 
    public function getName_of_type()
    {
        return $this->name_of_type;
    }

    /**
     * Set the value of name_of_type
     *
     * @return  self
     */ 
    public function setName_of_type($name_of_type)
    {
        $this->name_of_type = $name_of_type;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of availability
     */ 
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set the value of availability
     *
     * @return  self
     */ 
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}

?>