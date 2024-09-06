$(document).ready(function() {
  
  // Por defecto oculto todas las cajas excepto la activa
  $(".box").hide();
  $("#" + $("#nav").find(".selected").attr("name")).show();
  
  // Abrir caja correspondiente al pulsar sobre una pestaña
  $("#nav").on("click", "button", function () {
    
    // Marco pestaña pulsada como pestaña activa
    $("#nav").find(".selected").removeClass("selected");
    $(this).addClass("selected");
    
    // Muestro la caja correspondiente a la pestaña activa
    $(".box").hide();
    $("#" +  $(this).attr("name")).show();
    
  });
});