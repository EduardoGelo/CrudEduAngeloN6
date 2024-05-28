<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artes da Tia Eva</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.js"></script>
  <style>
    .gradient-custom {
      background: #6a11cb;

      background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

      background: linear-gradient(to right, rgba(219, 112, 147, 1), rgba(255, 192, 203, 1))
    }

    .color-pink {
      color: #d63384;
    }
  </style>
</head>

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-white" style="border-radius: 1rem;">
            <img class="w-25 mx-auto rounded-circle mt-5" src="img.jpg" alt="">
            <div class="card-body px-5 text-center">
              <div class="mt-md-3 pb-5">
                <h2 class="fw-bold mb-2 text-uppercase">Entrar</h2>
                <p class=" mb-5">Por favor insira seu nome e sua senha</p>
                <div data-mdb-input-init class="form-outline form-white mb-4">

                  <?php
                  if(isset($_GET['erro'])) {
                    if($_GET['erro'] == "ok") {
                       echo '<div class="alert alert-danger alert-dismissible fade show mx-auto" role="alert">
                        <strong>Usuário ou senha incorreto(s).</strong> Tente novamente!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }
                  }
                  ?>

                  <!-- usuario -->
                  <form action="logar.php" method="post" data-parsley-validate>
                    <div data-mdb-input-init class="form-outline form-white mb-4 vw-75">
                      <input type="text" placeholder="Usuario*" name="nome" id="inputUsuario"
                        class="form-control form-control-lg" required>
                    </div>
                    <!-- senha -->
                    <div data-mdb-input-init class="form-outline form-white mb-4 vw-75">
                      <input type="password" placeholder="Senha*" id="senha" name="senha"
                        class="form-control form-control-lg" required>
                    </div>

                    <div class="mb-3 form-check">
                      <!-- checkbox aqui -->
                      <input type="checkbox" class="form-check-input" id="mostrarSenha" onclick="mostrar()">
                      <label class="form-check-label d-flex" for="mostrarSenhaCheckbox">Mostrar Senha</label>
                    </div>
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg px-5" name="submit"
                      type="submit">Enviar</button>
                </div>
                </form>
                <a class="color-pink" href="cadastro.php">Não possui uma conta? Cadastre-se.</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/parsleyjs/dist/parsley.min.js"></script>
  <script src="node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
  <link rel="stylesheet" href="node_modules/parsleyjs/src/parsley.css">
  <script>
    function mostrar() {
      var senhaInput = document.getElementById("senha");
      if (senha.type === "password") {
        senha.type = "text";
      } else {
        senha.type = "password";
      }
    }
  </script>
</body>

</html>