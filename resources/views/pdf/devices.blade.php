<!DOCTYPE html>
<html>
<head>
    <title>Dispositivos</title>
    <style>
        /* Aquí puedes poner tus estilos CSS */
        table { width: 100%; }
        th { background-color: #f8f9fa; }
        td, th { padding: 15px; text-align: left; border-bottom: 1px solid #ddd; }
    </style>
</head>
<body>
    <h1>Dispositivos</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Serial Number</th>
                <th>Fecha de creación</th>
                <th>Fecha de actualización</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($devices as $device)
            <tr>
                <td>{{ $device->id }}</td>
                <td>{{ $device->name }}</td>
                <td>{{ $device->description }}</td>
                <td>{{ $device->status }}</td>
                <td>{{ $device->serial_number }}</td>
                <td>{{ $device->created_at }}</td>
                <td>{{ $device->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
