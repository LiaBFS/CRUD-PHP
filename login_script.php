<!doctype html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <title>Login Usuário</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
            <?php
            include "conexao.php";
        
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

           
            if ($usuario == 'Lia' && $senha == '12345'){
                mensagem("Login realizado com sucesso", 'success');
                echo "<meta http-equiv='refresh' content='2;url=inicial.php'>";
            } else {
                mensagem("Usuário ou senha incorretos", 'danger');
            }
            ?>
            <hr>
            
            </div>
        </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965Dz00rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-U02eT@CpHqdSJQ6hJty5KVphtPhzWj9W01c1HTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-3j5mVgyd@p3pXB1rRibZUAYOIIy60rQ6VrjIEaFf/nJGzIxFDsf4x0xIM+807jRM" crossorigin="anonymous"></script>
  </body>
</html>