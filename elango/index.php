<!doctype html>
<html>

<head>
  <title>database connected login form</title>
  <link rel="stylesheet" href="/styles.css">
</head>

<body>
  <div class="container">
    <div class="login-form">
      <form action="./connect.php"method="post">
        <label for="name">name</label>
          <input id="name" type="text" name="name" required><br>
      <label for="email">email</label>
          <input type="email" name="email" id="email" required><br>
        <button name="submit" type="submit">Submit</button>
      </form>
    </div>

  </div>

</body>

</html>