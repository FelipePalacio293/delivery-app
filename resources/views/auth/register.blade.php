<!DOCTYPE html>
<html>
<head>
  <title>Registro de Usuarios</title>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2; /* Fondo gris claro */
    }

    .container {
      max-width: 400px;
      background-color: #fff; /* Fondo blanco */
      padding: 40px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #4286f4; /* Color azul */
    }

    form {
      margin-top: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #555; /* Color de texto gris */
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc; /* Borde gris */
      border-radius: 3px;
    }

    input[type="submit"] {
      background-color: #4286f4; /* Color azul */
      color: #fff; /* Color de texto blanco */
      border: none;
      padding: 10px 20px;
      border-radius: 3px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #1a5db3; /* Color azul más oscuro */
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Registro de Usuarios</h2>
    <form action="/register" method="POST">
      @csrf
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="name" required>

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" required>

      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Registrarse">
    </form>
  </div>
</body>
</html>
