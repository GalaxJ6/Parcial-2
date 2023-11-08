<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
</head>
<body>
<body>
    <h1>Crear Info admins</h1>
    <div>
        <form action="{{ route('admins.update', $admin->id) }}" method="POST">
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
</body>
</html>