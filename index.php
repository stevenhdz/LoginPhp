<!DOCTYPE html>
<html>
    <header>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        require 'header.php';
        ?>
    </header>
    <body>

        <div id="login">
            <h3 class="text-center text-white display-4">Login</h3>

            <div class="container">
                <div  id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">

                        <div id="login-box" class="col-md-12 bg-light text-dark">
                            <form id="formlogin" class="form" action="action" method="post">
                                <br>
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

        <footer>
            <?php
            require 'footer.php';
            ?>
        </footer>
    </body>
</html>