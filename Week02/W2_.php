<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<body>
  <?php
  echo 'HelloWorld!<br />';
  echo ('Hello World!<br />');
 
  print 'Hello World!<br />';
  print ('Hello World!<br />');
  ?>

  <?php
  echo 'Calaire O\'Reilly ';
  echo "said \"Hello\".";
  ?>

  <?php
  echo '<br>';
  $NAME ='Phil';
  $AGE =23;
  echo $NAME;
  echo ' is ';
  echo $AGE;
  ?>

  <?php
  echo '<br>';
  define('NAME','William');
  define('AGE',23);
  echo NAME;
  echo ' is ';
  echo AGE;
  ?>

  <?php
  echo '<br>';
  $NAME ='Phil';
  $AGE =23;
  echo "$NAME is $AGE";
  ?>
</body>
</html>