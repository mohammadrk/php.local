<?php
 require "function.php";

 $background="#000";
 if(isset($_POST['send'])){
  // var_dump($_POST);
  $background = select_bg($_POST['background']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body style="background:<?php echo $background ?>">
  <?php
  $String="hello";$Color="green"; echo '<span style="color:'.$Color.'">'.$String.'</span>';
  ?>

<?php if(20>21): ?>
  <p>a string in php</p>
<?php else: ?>
<p>a</p>
<?php endif ?>


<?php 
  function sum($a,$b){
      return $a+$b ."<br/>";
  }
  echo sum(2,3);


 

?>
<?php 
 function inc(){
  static $data=10;
  echo $data ."<br/>";
  $data++;
}

inc();
inc();
inc();

?>


<?php if(is_user_logged_in()): ?>
<p>welcome</p>

<?php else: ?>
<a href="">login</a>
<?php endif ?>


<?php 
  $a='z';
  switch($a){
    case true:
      echo 'true';
    break;

    
    case false:
      echo 'false';
    break;

    default:
    echo "default";
  break;

  }

?>
<form action="" method="post">
<input type="radio" name="background" value="blue">blue
<input type="radio" name="background" value="red">red
<input type="radio" name="background" value="green">green
<input type="submit" name="send" value="send">
</form>
</body>
</html>