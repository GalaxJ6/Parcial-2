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
        <form action="">
            <label for="">Nombre de la Receta:
                <input type="text" id="nameRecipe" name="nR">
            </label>
            <br>
            <label for="">Nombre de la Proteína:
                <input type="text" id="nameP" name="nP">
            </label>
            <br>
            <label for="">Cantidad de la Proteína:
                <input type="text" id="cantP" name="cP">
            </label>
            <br>
            <label for="">Nombre del Carbohidrato:
                <input type="text"id="nameC" name="nC">
            </label>
            <br>
            <label for="">Cantidad del Carbohidrato:
                <input type="text"id="cantC" name="cC">
            </label>
            <br>
            <label for="">Nombre de la Verdura:
                <input type="text"id="nameV" name="nV">
            </label>
            <br>
            <label for="">Cantidad de la Verdura:
                <input type="text"id="cantV" name="cV">
            </label>
            <br>
            <button type="submit" value="">Subir</button>
        </form>
    </div>
    <h1>Control Recetas</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Proteína</th>
                <th>CantiProteína</th>
                <th>Carbohidrato</th>
                <th>CantiCarbohidrato</th>
                <th>Verdura</th>
                <th>CantiVerdura</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recipe as $recipes)
                <tr>
                    <td>{{$recipe->nameRecipe}}</td>
                    <td>{{$recipe->nameP}}</td>
                    <td>{{$recipe->cantP}}</td>
                    <td>{{$recipe->nameC}}</td>
                    <td>{{$recipe->cantC}}</td>
                    <td>{{$recipe->nameV}}</td>
                    <td>{{$recipe->cantV}}</td>
                    <td>
                        <a href="{{ route('recipes.edit', $recipe->id) }}">Editar</a>
                        <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST">
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