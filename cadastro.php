<!doctype html>
<html lang="pt" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">

    <title>Cadastro Floricultura</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Preencha os campos</h1><br><br>
                <form action="cadastro_script.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Informe o nome da planta:</label>
                        <input type="text" class="form-control" placeholder="Ex. 'Orquídea'" name ="nome" required><br>
                        
                    </div>

                    <div class="form-group">
                        <label for="nomeCientifico">Informe o nome  científico da planta:</label>
                        <input type="text" class="form-control" placeholder="Ex. 'Orchidaceae'" name ="nomeCientifico" required><br>
                        
                    </div>

                    <div class="form-group">
                        <label for="quantidade">Informe a quantidade de sementes em estoque:</label>
                        <input type="text" class="form-control" placeholder="Quantidade de sementes" name ="quantidade" required><br>
                        
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success">
                        
                    </div>
                </form><br>

                <a href="index.php" class="btn btn-primary">Voltar</a>

            </div>
        </div>
    </div>

  <!-- Optional JavaScript-->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/
  X+965Dz00rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="
  sha384-U02eT@CpHqdSJQ6hJty5KVphtPhzWj9W01c1HTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="
  sha384-3j5mVgyd@p3pXB1rRibZUAYOIIy60rQ6VrjIEaFf/nJGzIxFDsf4x0xIM+807jRM" crossorigin="anonymous"></script>
  </body>
  </html>