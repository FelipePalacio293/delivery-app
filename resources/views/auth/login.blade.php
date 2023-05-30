<!DOCTYPE html>
<html>
<head>
  <title>Iniciar sesión</title>
  <style>
    body {
      background-color: #f2f2f2; 
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 40px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #4286f4; 
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: #555; 
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      width: 105%;
      padding: 10px;
      background-color: #4286f4;
      color: #fff; 
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .form-group {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Iniciar sesión</h2>
    <form action="/login" method="POST">
      @csrf
      <div class="form-group">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="email" required>
      </div>

      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
      </div>

      <input type="submit" value="Continuar">
    </form>
  </div>
</body>
</html>