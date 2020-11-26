<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../lab2/assets/bootstrap-4.5.3-dist/css/bootstrap-reboot.css">
  <link rel="stylesheet" href="../lab2/assets/bootstrap-4.5.3-dist/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../lab2/assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../lab2/assets/css/main.css">
  <link rel="stylesheet" href="../lab2/assets/css/erro.css">
  <title>Главная страница</title>
</head>
<body>
<?php require_once 'header.php' ?>
<main>
    <div class="wrapper">
    <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="logo">
              <a href="index.php"><img src="../lab2/assets/img/logo.png" alt="Logo"> </a>
            </div>
          </div>
        </div>
</div>   
<div class="container">
    <div class="row">
      <div class="col-12">
      <form action="login.php" method="post">
          <div class="form-group">
            <label for="Email">Електроная почта</label>
            <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="Email" required>
            <small id="emailHelp" class="form-text text-muted">Мы никогда никому не передадим вашу электронную почту.</small>
          </div>
          <div class="form-group">
            <label for="Password">Пароль</label>
            <input type="password" class="form-control" id="Password" name="Password" required>
          </div>
          <div class="error">Вы ввели не правильный пароль или почту</div>
          <br>
          <button type="submit" class="btn btn-primary" value="Регистрация">Войти</button>
        </form>
      </div>
    </div>
  </div>
  </div>
</main>
<?php require_once 'footer.php' ?>    
</body>
