
<?php include "function.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php $users=get_users(); ?>
  <?php foreach ($users as $user):
     $template="hello dear #name# , {email} .";
    ?>
    
      <?php $template= str_replace(array('#name#','{email}'),array($user['name'],$user['email']),$template); ?>
      <p><?php echo $template; ?></p>
  <?php endforeach; ?>
</body>
</html>