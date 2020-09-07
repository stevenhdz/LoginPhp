<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="estilos.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div id="login">
            <h3 class="text-center text-white display-4">Login</h3>

            <div class="container">
                <div  id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">

                        <div id="login-box" class="col-md-12 bg-light text-dark">
                            <form id="formlogin" class="form" action="action" method="post">
                                <h3 class="text-center text-dark">Iniciar sesion</h3>
                                <br>
                                <div class="form-group">
                                    <input type="text" name="usuario" id="usuario" placeholder="Usuario" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                                </div>
                                <div class="form-group text-center">
                                    <input type="submit" name="submit" class="btn btn-dark btn-lg btn-block" value="Conectar">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <script src="popper/popper.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="jquery/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="plugins/sweetalert2/sweetalert2.all.min.js" type="text/javascript"></script>
        <script src="codigo.js" type="text/javascript"></script>
    </body>
</html>