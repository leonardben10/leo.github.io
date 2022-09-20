<?php
  session_start()
?>

<!DOCTYPE html>
<html>
  <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Garajul lui Varutu</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../stiluri/login.css">
        <style type="text/css">
          *{
              margin: 0;
              padding: 0;
              box-sizing: border-box;
          }
          #btn{
            width: 50px;
            height: 25px;
            border-width: 4px;
            border-radius: 15px;
            font-size: 25px;
            font-weight: bold;
            color: #f00;
            cursor: pointer;
          }
          #btn:active{
            font-size: 23px;
          }
      </style>
  </head>
<body>
<nav class="navbar">
      <button class="mutebutton"><a href="../pagini/formularregister.php">INREGISTREAZA-TE</a></button>
      <button id="stopvideo" class="mutebutton" onclick="functiestopvideo()">OPRESTE VIDEO</button>
      <a href="../index.php"><img src="../images/bmwtzu.gif" class="logo"></a>
      <button id="mutesound" class="mutebutton" onclick="functiemut()">OPRESTE SUNET</button>
      <button class="mutebutton"><a href="../pagini/formularlogin.php">LOGHEAZA-TE</a></button>
    </nav>

    <?php if(isset($_GET['errorf'])) {?>
    <p class="mesajdeeroare"><?php echo $_GET['errorf']; ?></p>
    <?php }?>
    <div class="backgroundform">
    <div class="formwrap">
    <form action="../scripturi/register.php" method="post">
      <p class="label">Nume</p>
      <input type="text" name="numef" placeholder="Introduceti numele...">
      <p class="label">Prenume</p>
      <input type="text" name="prenumef" placeholder="Introduceti prenumele...">
      <p class="label">Email</p>
      <input type="email" name="emailf" placeholder="Introduceti email...">
      <p class="label">Parola</p>
      <input type="password" name="passwordf" placeholder="Introduceti parola...">
      <p class="label">Parola din nou:</p>
      <input type="password" name="passwordfv" placeholder="Introduceti parola din nou..."><br><br>
      <input type="submit" value="Trimite">
    </form>
    </div>
    </div>
</body>
</html>