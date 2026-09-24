<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Mi horóscopo</title>
<link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <h1>Mi horóscopo</h1>
    <form action="recibe_formulario.php" method="POST">
        <label for="nombre" class="form-label">
            Nombre:
            <input type="text" id="nombre" name="nombre" class="form-control">
        </label>
        <br>
        <label for="correo" class="form-label">Correo:</label>
            <input type="email" id="correo" name="correo" class="form-control">
            <br>
        <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control">
            <br>    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html> 