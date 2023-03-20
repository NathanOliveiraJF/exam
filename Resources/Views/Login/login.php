
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
  <h1>Login</h1>
  <?php if(isset($_REQUEST["warning"])): ?>
    <?= "<span style='background: red'> {$_REQUEST["warning"]} </span>"; ?>
  <?php endif; ?>
  <form action="/" method="post">
    <input placeholder="name" name="nameUser"/>
    <input type="password" placeholder="password" name="passUser"/>
    <input type="submit" value="login"/>
  </form>
  </body>
</html>
