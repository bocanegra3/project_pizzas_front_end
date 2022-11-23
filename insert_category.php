<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Categorias</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-center">Ingreso de Categorias</h5>
            </div>
            <div class="col-md-12">
                <form class="form-group" accept-charset="utf-8" action="save_categories.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <br>
                        <label class="control-label" for="producto"><strong>Categorias</strong></label>
                        <input type="text" require="" placeholder="Inserte aquí el nombre de la categoria aqui." class="form-control" id="categoria" name="categoria">
                    </div>
                    <br>
                    <div class="text-center">
                        <input type="submit" class="btn btn-success" value="Añadir Categoria">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>