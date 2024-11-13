<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1 class="mt-3 text-center"></h1>
        <hr>
        <form name="cadastro" method="post" action="cadastrar_filme.php">

            <div class="mb-3">
                <label for="id" class="form-label">id</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>

            <div class="mb-3">
                <label for="filme" class="form-label">filme</label>
                <input type="text" class="form-control" id="filme" name="filme" required>
            </div>

            <div class="mb-3">
                <label for="genero" class="form-label">genero</label>
                <input type="text" class="form-control" id="genero" name="genero" required>
            </div>  
            </form>
</body>
</html>