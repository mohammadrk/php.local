
<?php include "function.php";
  $users=get_users();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <!-- <?php for($i=0;$i<=10;$i++): ?>
    <p><?php echo $i ?></p>
  <?php endfor ?> -->
<table>
    <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>action</th>
</tr>
<?php if($users && count($users)): ?>
    <?php foreach($users as $user): ?>
      <tr>
        <td><?php echo $user['id'] ?></td>
        <td><?php echo $user['name'] ?></td>
        <td><?php echo $user['email'] ?></td>
        <td>
        </td>
      </tr>
      <?php endforeach ?>
    <?php  else: ?>
      <tr>
        <td colspan="4">
          <span>هیچ اطلاعاتی یافت نشد</span>
        </td>
      </tr>
    <?php endif ?>
    </table>
    <?php echo "hi" ?>
</body>
</html>