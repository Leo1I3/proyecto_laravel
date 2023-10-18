<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesión</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Bienvenido</h3>
                        </div>
                        <div class="card-body">
                            <form action="Cinicio" method="post">
                                <div class="mb-3">
                                    <label for="Correo" class="form-label">Correo</label>
                                    <input type="text" class="form-control" id="Correo" name="fcorreo" placeholder="Ingresa tu Correo">
                                </div>
                                <div class="mb-3">
                                    <label for="contrasena" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="contrasena" name="fclave" placeholder="Ingresa tu contraseña">
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary" value="login">Iniciar Sesión</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            ¿No tienes una cuenta? <a href="ControladorUsuario">Regístrate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>