<!-- resources/views/createPedido.blade.php -->

@extends('templates.app')

@section('content')
<div class="container">
    <h1>Create a new Pedido</h1>

    <form action="/pedidos" method="POST">
        @csrf

        <div class="form-group">
            <label for="nombre_cliente">Nombre Cliente:</label>
            <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" required>
        </div>

        <div class="form-group">
            <label for="lugar_entrega">Lugar de Entrega:</label>
            <input type="text" class="form-control" id="lugar_entrega" name="lugar_entrega" required>
        </div>

        <div class="form-group">
            <label for="correo_cliente">Correo del Cliente:</label>
            <input type="email" class="form-control" id="correo_cliente" name="correo_cliente" required>
        </div>

        <div class="form-group">
            <label for="tipo_servicio">Tipo de Servicio:</label>
            <input type="text" class="form-control" id="tipo_servicio" name="tipo_servicio" required>
        </div>

        <div class="form-group">
            <label for="fecha_entrega">Fecha de Entrega:</label>
            <input type="date" class="form-control" id="fecha_entrega" name="fecha_entrega" required>
        </div>

        <div class="form-group">
            <label for="hora_entrega">Hora de Entrega:</label>
            <input type="time" class="form-control" id="hora_entrega" name="hora_entrega" required>
        </div>

        <div class="form-group">
            <label for="dispositivo_asignado">Dispositivo Asignado:</label>
            <input type="text" class="form-control" id="dispositivo_asignado" name="dispositivo_asignado" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado" name="estado" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
