<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form Example 3</title>
</head>

<body>
  <center>
    <h2 class="style1"><strong>PHP Form Example 3 :</strong></h2>
    <form method="post" action="">
      <p class="style1">Read Name :

        <input name="name" type="text" />&nbsp;
        <input name="Submit1" type="submit" value="submit" />
      </p>

      <p class="style1">&nbsp;</p>
    </form>
    <p>
      <?php
      if (isset($_POST['name'])) {
        $name = $_POST['name'];
      } else {
        $name = "NULL";
      }

      echo "You have keyed in the name of " . $name;
      ?>
    </p>
  </center>

</body>

</html>