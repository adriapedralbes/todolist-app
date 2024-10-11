<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>

    <body>
        <h1>Les teves tasques</h1>

        <form action="{{ url('/') }}" method="post">
            <!-- llave de blade @csrf se utiliza en los formularios 
            para crear un token de protección contra ataques de tipo CSRF (Cross-Site Request Forgery). !-->
            @csrf
            <input type="text" name="task" id="task">

            <input type="submit" value="Agregar">

        </form>
        <br>
        <table border="1">

            <tr>
                <td>Nombre de la tarea</td>
                <td>Acción</td>
            </tr>

            @foreach($tasks as $task)

            <tr>
                <td> {{ $task->task }} </td>
                <form action="{{ route('task.destroy', $task->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <td><input type="submit" value="x"></td>
                </form>
            </tr>

            @endforeach
        </table>
</body>
</html>