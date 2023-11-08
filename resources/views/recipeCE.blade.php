<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
</head>
<body>
    <h1>Crear Recetas</h1>
    <div>
        <form action="{{ route('recipes.update', $recipe->id) }}" method="POST">
            <label for="">Nombre de la Receta:
                <input type="text" id="nameRecipe" name="nR" required value="{{$recipe->nameRecipe}}">
            </label>
            <br>
            <label for="">Nombre de la Proteína:
                <input type="text" id="nameP" name="nP" required value="{{$recipe->nameP}}">
            </label>
            <br>
            <label for="">Cantidad de la Proteína:
                <input type="text" id="cantP" name="cP" required value="{{$recipe->cantP}}">
            </label>
            <br>
            <label for="">Nombre del Carbohidrato:
                <input type="text"id="nameC" name="nC" required value="{{$recipe->nameC}}">
            </label>
            <br>
            <label for="">Cantidad del Carbohidrato:
                <input type="text"id="cantC" name="cC" required value="{{$recipe->cantC}}">
            </label>
            <br>
            <label for="">Nombre de la Verdura:
                <input type="text"id="nameV" name="nV" required value="{{$recipe->nameV}}">
            </label>
            <br>
            <label for="">Cantidad de la Verdura:
                <input type="text"id="cantV" name="cV" required value="{{$recipe->cantV}}">
            </label>
            <br>
            <button type="submit" value="">Subir</button>
        </form>
    </div>
</body>
</html>