<table>
    <thead>
        <tr>
        <th><strong>Id</strong></th>
        <th><strong>Nombre</strong></th>
        <th><strong>Descripción</strong></th>
        <th><strong>Estado</strong></th>
        <th><strong>Ip</strong></th>
    </tr>
    </thead>
    <tbody>
    @foreach($devices as $device)
        <tr>
            <td>{{ $device->id }}</td>
            <td>{{ $device->name }}</td>
            <td>{{ $device->description }}</td>
            <td>{{ $device->active }}</td>
            <td>{{ $device->ip_address }}</td>
        </tr>
    @endforeach
    </tbody>
</table>