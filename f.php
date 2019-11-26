<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>

  table,tr,td{
    border:2px solid #ddd
  }
  table{
  border-collapse: collapse;
}
td{
  text-align:center;
  padding:5px

}
</style>
<body>
<table>

  <?php for($i=0;$i<10;$i++): ?>
    <tr>
      <?php for($j=0;$j<5;$j++):
        $red=mt_rand(0,255);
        $green=mt_rand(0,255);
        $blue=mt_rand(0,255);
        $bg_color=$red.','.$green.','.$blue 
        ?>
      <td style="background:rgb(<?php echo $bg_color ?>)">
      <?php echo $bg_color ?></td>

      <?php endfor ?>
    </tr>
  <?php endfor ?>
  </table>
</body>
</html>