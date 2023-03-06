
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
  <h1><?= "Login" ?></h1>
  <?php 
    if ($_REQUEST["warning"]) {
      echo "<p> {$_REQUEST["warning"]} </p>";
    }
  ?>
  <form action="/login" method="post">
    <input placeholder="name" name="nameUser"/>
    <input type="password" placeholder="password" name="passUser"/>
    <input type="submit" value="login"/>
  </form>
  </body>
</html>
