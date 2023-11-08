<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
</head>
<body>
    <h1>Crear Info Admins</h1>
    <div>
        <form action="{{ route('chefs.update', $chef->id) }}" method="POST">
            <label for="">Nombre del Admin:
                <input type="text" id="nameChef" name="nCf" required value="{{$chef->namechef}}">
            </label>
            <br>
            <label for="">Cédula del Admin:
                <input type="text" id="cedChef" name="cCf" required value="{{$chef->cedChef}}">
            </label>
            <br>
            <button type="submit" value="">Subir</button>
        </form>
    </div>
    
</body>
</html>