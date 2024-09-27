<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1>Datos macroeconómicos</h1>
 
    <form action="{{ route('datos_macro.store') }}" method="POST">
      @csrf
      <label for="fecha">Fecha: </label>
      <input type="date" id="fecha" name="fecha" required>
      <br>
      <label for="pib">Pib:</label>
      <input type="number" id="pib" step="0.0001" name="pib" required>
      <br> 
      <label for="inflacion">Inflación:</label>
      <input type="number" id="inflacion" step="0.0001" name="inflacion" required>
      <br>
      <label for="tasa_interes">Tasa de interés:</label>
      <input type="number" id="tasa_interes" step="0.0001" name="tasa_interes" required>
      <br>
      <label for="tasa_desempleo">Tasa de desempleo:</label>
      <input type="number" id="tasa_desempleo" step="0.00001" name="tasa_desempleo" required>
      <br>
      <button type="submit">Enviar</button>
    </form>
</head>
<body>
    
</body>
</html>
