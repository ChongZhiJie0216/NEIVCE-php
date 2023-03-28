<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form Example 1</title>
</head>

<body>
  <center>
    <p class="style1">"Enter your Choice (0 or 1)";
    <form method="post">
      <div class="style1">
        <input name="Text1" type="text" /><br />
        <br />
        <input name="Submit1" type="submit" value="submit" /><br />
      </div>
    </form>

    <br>
    <?php $i = $_POST['Text1'];
    if ($i == 0) {
      echo "hello world!";
    } elseif ($i == 1) {
      echo "My world";
    } else {
      echo "error";
    }
    ?>
  </center>

</body>

</html>