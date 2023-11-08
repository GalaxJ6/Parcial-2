<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
</head>
<body>
    <h1>Crear Info Chefs</h1>
    <div>
        <form action="">
            <label for="">Nombre del Chef:
                <input type="text" id="nameChef" name="nCf">
            </label>
            <br>
            <label for="">Cédula del Chef:
                <input type="text" id="cedChef" name="cCf">
            </label>
            <br>
            <button type="submit" value="">Subir</button>
        </form>
    </div>
    <h1>Control Chefs</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre del Chef</th>
                <th>Cédula del Chef</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($chef as $chefs)
                <tr>
                    <td>{{$chef->nameChef}}</td>
                    <td>{{$chef->cedChef}}</td>
                    <td>
                        <a href="{{ route('chefs.edit', $chef->id) }}">Editar</a>
                        <form action="{{ route('chefs.destroy', $chef->id) }}" method="POST">
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