<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>subCODErrs</title>
  <link rel="stylesheet" href="style_signup.css">
    <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php" style="display: flex; justify-content: center; font-size: 23px;">Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php" style="display: flex; justify-content: center; font-size: 23px;">Личный кабинет</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
<main>
  <form action="check.php" method="post">
    <div class="container">
      <h1>Регистрация</h1>
      <p>Пожалуйста, заполните данную форму для регистрации</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Введите Email" name="email" required>
      <label for="login"><b>Логин</b></label>
      <input type="text" placeholder="Введите логин" name="login" id="login" required>
      <label for="psw"><b>Пароль</b></label>
      <input type="password" placeholder="Введите пароль" name="psw" required>
      <hr>
      <button type="submit" class="registerbtn">Регистрация</button>
    </div>
    <div class="container signin">
      <p>Уже есть аккаунт? <a href="signup2.php">Войти</a>.</p>
    </div>
  </form>
</main>
<footer>
</footer>
</body>
</html>