<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.header {
  background-color: #333;
  color: #fff;
  padding: 20px;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.navbar-brand {
  display: flex;
  align-items: center;
  font-size: 24px;
}

.avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  margin-right: 10px;
}

.brand-text {
  font-weight: bold;
}

.navbar-menu {
  list-style: none;
  display: flex;
}

.navbar-item {
  margin-left: 10px;
}

.navbar-link {
  color: #fff;
  text-decoration: none;
}

.navbar-link:hover {
  text-decoration: underline;
}

</style>
<body>

<header class="header">
  <nav class="navbar">
    <div class="navbar-brand">
      <span class="brand-text"> 
        <img src="../img/logo_3.png" alt="Avatar" class="avatar">
    </span>
    </div>
    <ul class="navbar-menu">
       <img src="../img/foto_avatar.jpeg" alt="Avatar" class="avatar">
      <li class="navbar-item"><a href="#" class="navbar-link">Editar</a></li>
      <li class="navbar-item"><a href="#" class="navbar-link">Acerca</a></li>
      <li class="navbar-item"><a href="#" class="navbar-link">Servicios</a></li>
      <li class="navbar-item"><a href="https://qa.seduc.cl/JardineriaWeb/index.php" class="navbar-link">Salir</a></li>
    </ul>
  </nav>
</header>


    
</body>
</html>