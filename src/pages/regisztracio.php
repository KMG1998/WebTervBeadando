<!DOCTYPE HTML>
<html lang="hu">
<head>
  <title>Regisztráció</title>
  <meta charset="UTF8">
  <meta description="Regisztrácios oldal">
   <link rel="stylesheet" type="text/css" href="../styles/regisztracio_style.css">
</head>
<body>

  <div class="content">
        <form action="regisztracio.php" method="post">
        <h2>Regisztráció</h2>
                <label>Felhasználónév:
                <input type="text" name="username" placeholder="Felhasználónév"></label><br>
                <label>Jelszó:<br>
                <input type="password" name="password" placeholder="jelszó"></label<br>
                <input type="submit" value="Regisztracio">
                <p><a href="index.php">Vissza</a> a bejelentkezéshez</p>
        </form>
   </div>
   <h5>Kopanecz Márton és Kiss Máté honlapja</h5>
</body>
</html>