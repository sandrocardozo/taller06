<!DOCTYPE html>
<html>
<head>
  <title>Validación de Formularios</title>
</head>
<body>
  <form id="formulario">
    <table cellspacing="2" cellpadding="2" border="1">
      <tr>
        <td align="right">Nombre de Usuario</td>
        <td><input type="text" id="usuario" /></td>
      </tr>
      <tr>
        <td align="right">Email</td>
        <td><input type="text" id="email" /></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Submit" id="btn-enviar" /></td>
      </tr>
    </table>
  </form>

  <script src="js/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      // Selecciona el formulario por su ID
      var formulario = $("#formulario");

      formulario.submit(function(event) {
        // Obtenemos valor de los campos de usuario y email
        var usuario = $("#usuario").val();
        var email = $("#email").val();

        //revisa si los campos van vacios
        if (usuario === "" || email === "") {
          // evita que se envie
          event.preventDefault();
          //mensaje de error
          alert("Los campos de usuario y email no pueden estar vacíos.");
        }
   
      });
    });
  </script>
</body>
</html>