<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesión</title>
        @vite(['resources/css/Bienvenido.css'])
    </head>
<center><div>
    <a href="https://www.sena.edu.co/" class="" target="_blank">
    <img src="{{ asset('Images/Logo-de-SENA-png-verde-300x300-1.png') }}" alt="" style="width: 300px; height: 200px;">
    </a>
</div></center>
<center><h1>EduControl PC</h1></center>
	<center>
    <div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Bienvenido, Inicie Sesion</h4>
											<div class="form-group">
												<input type="text" name="fNombre" class="form-style" placeholder="Ingresa tu Nombre" id="Nombre" autocomplete="off">
												<i class="input-icon uil uil-at"><img src="{{ asset('Images/usuario.png') }}" alt="" style="width: 33px; height: 38px;"></i>
											</div>
											<div class="form-group">
												<input type="text" name="fcorreo" class="form-style" placeholder="Ingresa tu Correo" id="Correo" autocomplete="off">
												<i class="input-icon uil uil-at"><img src="{{ asset('Images/correo.png') }}" alt="" style="width: 33px; height: 38px;"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" name="fclave" class="form-style" placeholder="Ingresa tu contraseña" id="contrasena" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"><img src="{{ asset('Images/contrasena.png') }}" alt="" style="width: 33px; height: 38px;"></i>
											</div>
                                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                            				<p class="mb-0 mt-4 text-center"><a href="#0" class="link">¿Olvido su contraseña?</a></p>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Registre su Usuario</h4>
											<div class="form-group">
												<input type="text" name="fNombre" class="form-style" placeholder="Ingresa tu Nombre" id="nombre" autocomplete="off">
												<i class="input-icon uil uil-user"><img src="{{ asset('Images/usuario.png') }}" alt="" style="width: 33px; height: 38px;"></i>
											</div>
											<div class="form-group mt-2">
												<input type="email" name="fcorreo" class="form-style" placeholder="Ingresa tu Correo" id="Correo" autocomplete="off">
												<i class="input-icon uil uil-at"><img src="{{ asset('Images/correo.png') }}" alt="" style="width: 33px; height: 38px;"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" name="fclave" class="form-style" placeholder="Ingresa una Contrasena" id="contrasena" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"><img src="{{ asset('Images/correo.png') }}" alt="" style="width: 33px; height: 38px;"></i>
											</div>
											<button type="submit" class="btn btn-primary">Registrese</button>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
    </center>
</html>
