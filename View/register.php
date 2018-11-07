<?php include_once('..View/verifica_login.php'); ?>
<?php include_once('../Controller/config/verifica_login.php'); ?>

  <body class="bg-dark">



    <div class="container-fluid">
      <div align="center"><br />
        <img src="img/Logo.png" width="130px" height="100px">
          </div><br />


    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header" align="center">Registrar Usuário</div>
        <div class="card-body">
            <form action="../Controller/getDadosUser.php" method="post" name="f1">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                      <input type="text" id="firstName" name="primeiro_nome" class="form-control" placeholder="Primeiro Nome" required autofocus="autofocus">
                    <label for="firstName">Primeiro Nome</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" name="utlimo_nome" class="form-control" placeholder="Ultimo Nome" required>
                    <label for="lastName">Ultimo Nome:</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="@exemplo.com" required>
                <label for="inputEmail">Email:</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="senha1" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Senha</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" name="senha2" class="form-control" placeholder="Confirm password" required>
                    <label for="confirmPassword">Confirmação de senha</label><br />
                  </div>
                </div>
              </div>
            </div>

                <input type="button" class="btn btn-primary btn-block" value="Comparar Senhas" onClick="validarSenha()">

                <input type="submit" class="btn btn-primary btn-block" value="Registrar">
          </form>

        </div>
      </div>
    </div>
  </div>
<br />
<br />







  </body>
