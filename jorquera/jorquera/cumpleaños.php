<!DOCTYPE html>
<html>
     <style>
     .swal2-popup {
          width: 300px; /* Ajusta el ancho aquí */
        }
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 500px;
      margin: 20px auto;
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    h1 {
      color: #ff4081;
      margin-top: 0;
    }

    .avatar {
      margin-top: 30px;
      text-align: center;
    }

    .avatar img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
    }

    p {
      color: #333;
      text-align: center;
    }

    .details {
      margin-top: 30px;
      text-align: center;
    }

    .details p {
      margin: 5px 0;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #ff4081;
      color: #fff;
      text-decoration: none;
      border-radius: 3px;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #ff80ab;
    }

    /* Modal Styling */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
      background-color: #fff;
      margin: 10% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      max-width: 400px;
      border-radius: 5px;
    }

    .close {
      color: #888;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    /* Responsive Styling */
    @media (max-width: 100px) {
      .container {
        background-color: red;
        margin: 10px;
        padding: 10px;
      }
    }
  </style>
<head>
  <title>Invitación de Cumpleaños</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">

</head>

<?php
const nombres = ["Carvajal", "Vergarra", "Caicedo","Tia Rosa", "Kety"];
?>
<body>
  <div class="container">
    <h1>¡Fiesta de Cumpleaños!</h1>
    <div class="avatar">
      <img src="imagenes/perfil_lupe.jpeg" alt="Avatar">
    </div>
    <p>¡Estás invitado/a a mi fiesta de cumpleaños!</p>
    <div class="details">
      <p>Fecha: 17 de junio</p>
      <p>Hora: 7:00 PM</p>
      <p>Lugar: Alcerreca 1341 Qta. Normal</p>
      <p><img src="imagenes/logo_metro.jpg" style="width: 30px;  height: 30;"alt="Avatar"> 3 cuadras del metro Gruta Lourdes<img src="imagenes/logo_metro.jpg" style="width: 30px;  height: 30;"alt="Avatar"> </p>
    </div>
    <p>Por favor, confirma tu asistencia.</p>
    <p>¡Espero verte allí!</p>
    <div class="details">
      <button class="button" onclick="openModal()">Confirmar Asistencia</button>
       <button class="button" onclick="openModal_2()">Lo siento no puedo </button
    </div>
  </div>

  <!-- Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <h2>Confirmar Asistencia</h2>
        <p>¡Gracias por confirmar tu asistencia a mi fiesta de cumpleaños!</p>
          Agrega tu correo para mandarle la direccion
            <input type="text" id="dato" name="dato"><br>
            <input type="button" id="dato" name="dato" onclick="validacion()"value="Enviar">
    </div>
  </div>
    <!-- Modal -->
    
    <!-- ****************************************Modal NEGATIVO -->
    <div id="myModal_2" class="modal">
        <div class="modal-content">
          <span class="close" onclick="closeModal_2()">&times;</span>
          <h2>Le diste Color</h2>
          <p>Igual manda el regalo </p>
        </div>
      </div>
    <!-- ****************************************** Modal NEGATIVO -->


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
<script>
    function validacion() {
      var email = document.getElementById('dato').value;
      
      if (email.trim() === '') {
        Swal.fire({
          position: 'top-end',
          icon: 'error',
        //   title: 'Oops...',
          width: '300px', // Ajusta el ancho aquí
          showConfirmButton: false,
          timer: 2500,
          text: 'El campo de correo está vacío',
        });
      } else if (!validarFormatoCorreo(email)) {
        Swal.fire({
          position: 'top-end',
          icon: 'error',
        //   title: 'Oops...',
          width: '300px', // Ajusta el ancho aquí
          showConfirmButton: false,
          timer: 2500,
          text: 'El correo ingresado no tiene un formato válido',
        });
      } else {
        // Aquí puedes agregar la lógica para enviar el correo
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Dirección enviada al correo',
          showConfirmButton: false,
         timer: 1500
    }).then(function() {
      window.location.href = 'https://qa.seduc.cl/jorquera/cumplea%C3%B1os.php'; // Establece la URL de la página a la que deseas redirigir
    });
          }
    }

    function validarFormatoCorreo(email) {
      var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      return regex.test(email);
    }
  </script>
      
      
      
      
      
  <script>
    function openModal() {
      var modal = document.getElementById("myModal");
      modal.style.display = "block";
    }

    function closeModal() {
      var modal = document.getElementById("myModal");
      modal.style.display = "none";
    }
  </script>
  
  
  
    <script>
    function openModal_2() {
      var modal = document.getElementById("myModal_2");
      modal.style.display = "block";
    }

    function closeModal_2() {
      var modal = document.getElementById("myModal_2");
      modal.style.display = "none";
    }
  </script>
  
</body>
</html>
