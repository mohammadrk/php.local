<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php $a=10 ?>
  <?php while($a<20): ?>
  <p><?php echo $a ?></p>
  <?php $a++; endwhile ?>
</body>
</html>