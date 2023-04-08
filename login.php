<?php include("includes/header.php"); ?>

<div class="container mlogin">
<div id="login">
<h1>Вход</h1>
<form action="auth.php" method="post">
	<input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
	<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
	<button class="btn btn-success">Авторизоваться</button><br>
</form>

	<p class="regtext">Еще не зарегистрированы?<a href= "register.php">Регистрация</a>!</p>
   </form>
 </div>
  </div>

<?php include("includes/footer.php"); ?>