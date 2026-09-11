<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro de aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="..\imagens\carro.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..\imagens\montanha.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..\imagens\ponte.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br/>
    <div class="container">
        <form action="..\controller\AlunoController.php" method="post">
            <div class="row">
                <div class="col-9">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome"><br />
                </div>
                <div class="col-3">

                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="nota1" class="form-label">Nota 1:</label>
                    <input type="number" class="form-control" name="nota1" id="nota1" step="0.01"><br />
                </div>
                <div class="col-3">
                    <label for="nota2" class="form-label">Nota 2:</label>
                    <input type="number" class="form-control" name="nota2" id="nota2" step="0.01"><br />
                </div>
                <div class="col-3">
                    <label for="nota3" class="form-label">Nota 3:</label>
                    <input type="number" class="form-control" name="nota3" id="nota3" step="0.01"><br />
                </div>
                <div class="col-3">

                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="faltas" class="form-label">Faltas:</label>
                    <input type="number" class="form-control" name="faltas" id="faltas"><br />
                </div>
                <div class="col-3">

                </div>
                <div class="col-3">

                </div>
                <div class="col-3">

                </div>
            </div>





            <input type="submit" class="btn btn-outline-primary" name="btnMostrar" id="btnMostrar" value="Mostrar Resultado">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>