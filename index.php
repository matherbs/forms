<!DOCTYPE html>

<?php
  include 'core/connexion.php';
  include 'core/signUp.php';
?>

<html>
  <head>

    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="assets/css/forms.css">

  </head>
  <body>

    <div class="connexion">

      <ul id="nav">
        <li class="signOff" id="signOn"><a href="#" class="close" id="open1" onclick="signSwitch1()"><h2>SIGN UP</h2></a></li>
        <li class="signOff" id="signOff"><a href="#" class="close" id="open2" onclick="signSwitch2()"><h2>SIGN IN</h2></a></li>
      </ul>

      <form class="hide" id="signUp" action="submit.php" method="post">

        <h3>Pseudo</h3>
        <input type="text" name="pseudo" onfocus="this.select()">

        <h3>Password</h3>
        <input type="text" name="password" onfocus="this.select()">

        <h3>Email</h3>
        <input type="text" name="email" onfocus="this.select()">

        <h3>Sexe</h3>
        <select class="sexe" name="sexe">
          <option value="select">Select</option>
          <option value="male">Homme</option>
          <option value="female">Femme</option>
        </select>

        <h3>Age</h3>
        <input type="text" name="age" onfocus="this.select()"><br>

        <button class="submit" type="submit" name="submit"><h3>S'inscrire</h3></button>

      </form>

      <form class="hide" id="signIn" action="signUp.php" method="get">

        <h3>Pseudo</h3>
        <input type="text" name="pseudo" onfocus="this.select()">

        <h3>Password</h3>
        <input type="text" name="password" onfocus="this.select()">

        <button class="submit" type="submit" name="submit"><h3>Se connecter</h3></button>

      </form>

    </div>

    <script type="text/javascript" src="assets/js/signUp.js"></script>
  </body>
</html>
