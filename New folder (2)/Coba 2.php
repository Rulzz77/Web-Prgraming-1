<?php
if(isset($_POST['fruits'])){
  $selected_fruits = $_POST['fruits'];
  foreach ($selected_fruits as $fruit) {
    echo $fruit . "<br>";
  }
}
?>
