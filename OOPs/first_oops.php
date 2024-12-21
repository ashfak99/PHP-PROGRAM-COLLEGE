<?php
class fruit
{
    public $name;
    public $color;

    function set_name($name)  {
        $this->name=$name;
    }

    function set_color($color){
        $this->color=$color;
    }

    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }

}

$apple=new fruit();
$apple->set_name('Apple');
$apple->set_color('Red');

echo "Fruit Name : ". $apple->get_name();
echo "<br>";
echo "Fruit Color : ".$apple->get_color();
?>