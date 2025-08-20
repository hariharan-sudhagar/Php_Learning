

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Creating class
    class Car {
    public $name ;
    public $color;
 
    // Creatiing Methods

    //getter method
    public function set_name($name){
          $this-> name = $name;
          
    }

    //setter method
    public function get_name(){
        return $this-> name;
    }

    
}

 // creating objects and calling the functions

    $audi = new Car();
    $audi ->set_name('new model audi car');
    
    echo $audi->get_name();
    ?>
</body>
</html>




   