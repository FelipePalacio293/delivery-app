@extends('templates.app')
@section('content')
<title>Panel de administrador</title>
<style>
  body {
    background-color: #f2f2f2; /* Fondo gris claro */
    font-family: Arial, sans-serif;
  }

  .container {
    max-width: 400px;
    margin: 0 auto;
    margin-top: 150px;
    background-color: #fff;
    padding: 40px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }

  h2 {
    text-align: center;
    color: #4286f4; /* Azul */
  }

  .button-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 20px;
  }

  .button-container a {
    display: flex;
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    background-color: #4286f4; /* Azul */
    color: #fff; /* Texto blanco */
    border: none;
    border-radius: 3px;
    cursor: pointer;
    text-decoration: none;
    justify-content: center;
    flex-direction: column;
    align-items: center;
  }
</style>

<div class="container">
  <h2>Panel de administrador</h2>
  <div class="button-container">
    <a href='/pedidos'>Gestionamiento</a>
    <a href='/pedidos'>Dispositivos</a>
    <a href='/pedidos'>Notificaciones</a>
  </div>
</div>
@endsection