
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../lab2/assets/bootstrap-4.5.3-dist/css/bootstrap-reboot.css">
  <link rel="stylesheet" href="../lab2/assets/bootstrap-4.5.3-dist/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../lab2/assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../lab2/assets/css/main.css">
  <link rel="stylesheet" href="../lab2/assets/css/modal.css">
  <title>Главная страница</title>
</head>

<body>
  <div class="wrapper">
    <?php require_once 'header.php' ?>
      <main>
        <div class="container">
          <div class="row">
            <div class="col-6">
              <div class="logo">
              <a href="index.php"><img src="../lab2/assets/img/logo.png" alt="Logo"> </a> 
              </div>
            </div>
            <div class="col-6 reg">
                <a href="##" id="myBtn">Sign in</a>
                <div id="myModal" class="modal">
                  <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="modal-body">
                      
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
                        <button type="submit" class="btn btn-primary">Войти</button>
                      </form>
                      
                    </div>
                  </div>
                </div>
                <script src="../lab2/assets/js/modal.js"></script>
                <a href="register.php">Sign up</a>
            </div>
          </div>
        </div>
        <?php require_once 'db.php' ?>
          <?php $q= mysqli_query($conn, "SELECT * FROM users, roles WHERE users.role_id = roles.id_r");
$row=mysqli_fetch_array($q);?>
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                      </tr>
                    </thead>
                    <?php foreach ($q as $row){ ?>
                      <tbody>
                        <tr>
                          <th scope="row">
                          <a href="acc_unreg.php?id= <?php echo $row['id'] ; ?>">  <?php echo $row['id'] ; ?> </a>
                          </th>
                          <td>
                            <?php echo $row['first_name']; ?>
                          </td>
                          <td>
                            <?php echo $row['last_name']; ?>
                          </td>
                          <td>
                            <?php echo $row['email']; ?>
                          </td>
                          <td>
                            <?php echo $row['title']; ?>
                          </td>
                        </tr>
                        <tr>
                          <?php } ?>
                  </table>
                </div>
              </div>
      </main>
      <?php require_once 'footer.php' ?>
        </div>
</body>

</html>