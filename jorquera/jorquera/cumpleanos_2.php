<!DOCTYPE html>
<html>
<head>
  <title>Invitación de Cumpleaños</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .container {
      position: relative;
      max-width: 800px;
      margin: 20px auto;
      background-color: #fff;
      border-radius: 32px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    .button-container {
      position: absolute;
      top: 49px;
      right: 10px;
      transform: translate(0, -50%);
    }

    .button-container .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #ff4081;
      color: #fff;
      text-decoration: none;
      border-radius: 3px;
      transition: background-color 0.3s ease;
      margin: 105px ;
    }

    .button-container .button:hover {
      background-color: #ff80ab;
    }
  </style>
  <?php
    $nombres = ["Carvajal", "Vergarra", "Familia-Caicedo-Nazareno","Tia Rosa", "Kety", "Margua"];
  ?>
</head>
<body>
  <div class="container">
    <!--<h1>Invitación de Cumpleaños</h1>-->
    <div class="button-container">
      <a href="cumpleaños.php" class="button">Click para Confirmar</a>

    </div>
      <iframe src="https://www.canva.com/design/DAFk3_Q6o5Y/A0Aluq9Dw8gROXQi_nYZaw/watch?embed" width="100%" height="600" frameborder="0" scrolling="auto"></iframe>

    <!--<iframe src="https://www.canva.com/design/DAFk3tDGH9Q/QMChScCCQBShq-e0hYlHFw/view?embed" width="100%" height="600" frameborder="0" scrolling="auto"></iframe>-->
     <!--<video src="https://www.canva.com/design/DAFk3_Q6o5Y/A0Aluq9Dw8gROXQi_nYZaw/watch?utm_content=DAFk3_Q6o5Y&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink" width="100%" height="auto" controls></video>-->
  </div>
</body>
</html>
