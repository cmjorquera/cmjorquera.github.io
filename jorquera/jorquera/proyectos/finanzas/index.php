<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            background-color: #3498db;
            height: 20vh; /* Ajustado al 20% de la altura de la vista */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            overflow: hidden;
            transition: all 0.5s ease;
        }

        header h1 {
            font-size: 42px;
            color: #fff;
            line-height: 230px;
            text-transform: uppercase;
            font-weight: 100;
            transition: all 0.3s ease;
        }

        header nav {
            position: absolute;
            bottom: 0;
            height: 60px;
            line-height: 60px;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.1);
        }

        header nav a {
            color: #fff;
            display: inline-block;
            padding: 10px 15px;
            line-height: 1;
            text-decoration: none;
            border-radius: 2px;
        }

        header nav a:hover {
            box-shadow: 0 0 0 1px #fff;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 80vh; /* Ajustado al 80% de la altura de la vista */
            margin-top: 20vh;
        }

        .row {
            display: flex;
            width: 100%;
            justify-content: space-around;
        }

        .col {
            box-sizing: border-box;
            padding: 20px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            transform-style: preserve-3d;
            transform: rotateY(20deg) rotateX(10deg);
            transition: transform 0.5s;
        }

        .col:hover {
            transform: rotateY(0deg) rotateX(0deg);
        }
    </style>
</head>
<body>
<header>
    <h1>Sistema de Finanzas</h1>
    <nav>
        <a href="">Inicio</a>
        <a href="">xxx</a>
        <a href="">Galerias</a>
        <a href="">Contactos</a>
    </nav>
</header>
<div class="container">
    <div class="row">
        <div class="col">
            Gastos diarios
        </div>
        <div class="col">
            <a href="para_vivir/index.php" style="text-decoration: none; color: inherit;">
                Para vivir
            </a>
        </div>
        <div class="col">
              <a href="para_vivir/curriculum,.php" style="text-decoration: none; color: inherit;">
              Curriculum
            </a>
        </div>
    </div><br><br>
    
    <div class="row">
        <div class="col">
            Menú
        </div>
        <div class="col">
            Menú
        </div>
        <div class="col">
            Menú
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
