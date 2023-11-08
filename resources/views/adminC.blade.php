<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
</head>
<body>
    <h1>Crear Info admins</h1>
    <div>
        <form action="">
            <label for="">Nombre del admin:
                <input type="text" id="nameAdmin" name="nAm">
            </label>
            <br>
            <label for="">Cédula del admin:
                <input type="text" id="cedAdmin" name="cAm">
            </label>
            <br>
            <button type="submit" value="">Subir</button>
        </form>
    </div>
    <h1>Control Admins</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre del Admin</th>
                <th>Cédula del Admin</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admin as $admins)
                <tr>
                    <td>{{$admin->nameadmin}}</td>
                    <td>{{$admin->cedadmin}}</td>
                    <td>
                        <a href="{{ route('admins.edit', $admin->id) }}">Editar</a>
                        <form action="{{ route('admins.destroy', $admin->id) }}" method="POST">
                            @crsf
                            @method('DESTROY')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
</body>
</html>