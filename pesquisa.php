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

        <?php
            $pesquisa = isset($_POST['busca']) ? $_POST['busca'] : '';

            include "conexao.php";

            $stmt = $conn->prepare("SELECT * FROM plantas WHERE nomeCientifico LIKE ?");
            $param = "%{$pesquisa}%";
            $stmt->bind_param("s", $param);
            $stmt->execute();
            $dados = $stmt->get_result();

            if ($dados === false) {
                die($conn->error);
            }
        ?>
        


    <div class="container">
        <div class="row">
            <div class="col">
                <br><h1>Procure/Edite Plantas</h1><br>

                <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <form class="d-flex" role="search" action = "pesquisa.php" method="POST">
                    <input class="form-control me-2" type="search" placeholder="Qual o Nome Científico?" aria-label="Search" name="busca" autofocus/>
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                </div>
                </nav><br>

                <table class="table table-hover table-success table-striped">
                    <thead>
                        <tr>

                        <th scope="col">Nome Científico</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Funções</th>

                        
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            while($linha = mysqli_fetch_assoc($dados)){
                                $id_planta = $linha['id_planta'];
                                $nomeCientifico = $linha['nomeCientifico'];
                                $nome = $linha['nome'];
                                $quantidade = $linha['quantidade'];

                                echo "<tr>
                                        <th scope='row'>$nomeCientifico</th>
                                        <td>$nome</td>
                                        <td>$quantidade</td>
                                        <td width= 150px>
                                            <a href='edita.php?id=$id_planta' class='btn btn-info btn-sm'>Editar</a>
                                            <a href='' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma'>Excluir</a>
                                        
                                        </td>
                                
                                    </tr>";

                            }
                        ?>

                        
                    </tbody>
                    </table>
                

                <a href="inicial.php" class="btn btn-primary">Voltar</a>

            </div>
        </div>
    </div>

    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Planta</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="excluir_script.php" method="POST">
               <p>Deseja apagar </p>
               <p id="nome_planta"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <input type="submit" class="btn btn-danger" value ="Sim">
            </form>
            </div>
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