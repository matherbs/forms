<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Forms</title>

    <link rel="stylesheet" href="assets/css/forms.css">

  </head>
  <body>

    <form class="" action="action.php" method="post">

      <h2>Nom</h2>
      <input type="text" name="lastName" value="nom" onfocus="this.select()">

      <h2>Prenom</h2>
      <input type="text" name="firstName" value="prenom" onfocus="this.select()">

      <h2>Sexe</h2>
      <select class="sexe" name="sexe">
        <option value="male">Homme</option>
        <option value="female">Femme</option>
      </select>

      <h2>Age</h2>
      <input type="text" name="birthDate" value="age" onfocus="this.select()">


    </form>

  </body>
</html>
