<!DOCTYPE html>
  <head>
    <title>CALCULADORA</title>
  </head>
  <body>
    <?php echo '<h1>Calculadora en PHP</h1>'; ?>
    <?php echo '<h3>Seleccione la operación a realizar:</h3>'; ?>
    <form action="index.php" method="post">
      <label for="operacion">Operación:</label>
      <select id="operacion" name="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
      </select>
      <br><br>
    </form>


    <form action="procesar_datos.php" method="post">
      <label for="primer_numero">1ER NUMERO:</label>
      <input type="text" id="nombre" name="nombre" required>
      <br><br>
      <label for="segundo_numero">2DO NUMERO::</label>
      <input type="text" id="nombre" name="nombre" required>
      <br><br>
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>