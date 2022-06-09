<!DOCTYPE html>
<html>
<body>

<?php
class Car {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$suzuki = new Car();
$suzuki->set_name('Suzuki');
$suzuki->set_color('White');
echo "Name: " . $suzuki->get_name();
echo "<br>";
echo "Color: " .  $suzuki->get_color();
echo "<br>";

$honda = new Car();
$honda->set_name('Honda');
$honda->set_color('Red');
echo "Name: " . $honda->get_name();
echo "<br>";
echo "Color: " .  $honda->get_color();
echo "<br>";
?>
 
</body>
</html>
