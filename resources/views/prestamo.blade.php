<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>prestamo</title>
</head>
<body>
    @include('partials.nav')
    <div class="container">
        <h2>Registro de Salidas</h2>
        
        <!-- Formulario para ingresar la fecha de salida -->
        <form action="ControladorSalidaequipo" method="post">
            <div class="form-group">
                <label for="fechaSalida">Fecha de Salida:</label>
                <input type="hidden" class="form-control" id="id" name="fidSalida" value="${unquipo.idsalida}">
                <input type="date" class="form-control" id="fechaSalida" name="ffechaSalida" value="${unquipo.fechasalida}">
            </div>
            
        
        <div class="form-group">
                <label for="idSalida">ID de usuario:</label>
               
                <select class="form-control"  name="fidusuario" >
                    <c:forEach items="${miusuario.listar(0)}" var="unusuario"><!-- Aquí puedes agregar opciones de ID de salida, por ejemplo: -->
                    <option value="${unusuario.idusuario}">${unusuario.idusuario}</option>
                    </c:forEach><!-- Agrega más opciones según sea necesario -->
                </select>
                
            </div>
            <div class="form-group">
                <label for="idEquipo">ID de administrador:</label>
                <select class="form-control" id="idEquipo" name="fidAdministrador">
                    <c:forEach items="${miadmin.listar(0)}" var="unadmin">
                    <option value="${unadmin.idadministrador}">${unadmin.idadministrador}</option>
                    </c:forEach><!-- Agrega más opciones según sea necesario -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="faccion" value="insertar">Guardar</button>
</form>
        <!-- Tabla para listar las salidas -->
        <h3>Lista de Salidas</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Salida</th>
                    <th>Fecha de Salida</th>
                    <th>ID Usuario</th>
                    <th>ID Administrador</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí puedes agregar filas con datos de salidas utilizando PHP, Python, u otro lenguaje en tu servidor -->
                <c:forEach items="${mitabla.listar(0)}" var="unatabla">
                <tr>     
                        <td value="${unatabla.idSalida}">${unatabla.idSalida}</td>
                        <td value="${unatabla.fechaSalida}">${unatabla.fechaSalida}</td>
                        <td value="${unatabla.idusuario}">${unatabla.idusuario}</td>
                        <td value="${unatabla.idAdministrador}">${unatabla.idAdministrador}</td>   
                </tr>
               </c:forEach>
            </tbody>
        </table>
    </div>
</body>
</html>