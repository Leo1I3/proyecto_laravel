<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>devoluciones</title>
</head>
<body>
    @include('partials.nav')
    <div class="container">
        <h2>Registro de Entregas</h2>
        
        <!-- Formulario para ingresar la fecha de entrega, ID de salida y ID de equipo -->
        <form action="ControladorDetallesalida" method="post">
            <div class="form-group">
                <label for="fechaEntrega">Fecha de Entrega:</label>
                <input type="hidden" class="form-control"  name="fidDetalleSalida" value="${unasalida.idDetalleSalida}">
                <input type="date" class="form-control" id="fechaEntrega" name="ffechaEntregaDetalleSalida">
            </div>
            <div class="form-group">
                <label for="idSalida">ID de Salida:</label>
                <select class="form-control"  name="fidSalida" >
                    <c:forEach items="${misalida.listar(0)}" var="unasal"><!-- Aquí puedes agregar opciones de ID de salida, por ejemplo: -->
                    <option value="${unasal.idSalida}">${unasal.idSalida}</option>
                    </c:forEach><!-- Agrega más opciones según sea necesario -->
                </select>
            </div>
            <div class="form-group">
                <label for="idEquipo">ID de Equipo:</label>
                <select class="form-control"  name="fidequipo" >
                    <c:forEach items="${miequipo.listar(0)}" var="unequi"><!-- Aquí puedes agregar opciones de ID de salida, por ejemplo: -->
                    <option value="${unequi.idequipo}">${unequi.idequipo}</option>
                    </c:forEach><!-- Agrega más opciones según sea necesario -->
                </select>
            </div>
                    <button type="submit" class="btn btn-primary" name="faccion" value="insertar">Guardar</button>
                    
        </form>

        <!-- Tabla para listar las entregas -->
        <h3>Lista de Entregas</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Entrega</th>
                    <th>Fecha de Entrega</th>
                    <th>ID de Salida</th>
                    <th>ID de Equipo</th>
                </tr>
            </thead>
            <tbody>
                
                <c:forEach items="${mitablaa.listar(0)}" var="unatabla">
                <tr>     
                        <td value="${unatabla.idDetalleSalida}">${unatabla.idDetalleSalida}</td>
                        <td value="${unatabla.fechaEntregaDetalleSalida}">${unatabla.fechaEntregaDetalleSalida}</td>
                        <td value="${unatabla.idSalida}">${unatabla.idSalida}</td>
                        <td value="${unatabla.idequipo}">${unatabla.idequipo}</td>   
                </tr>
               </c:forEach>
                <!-- Puedes agregar más filas aquí -->
            </tbody>
        </table>
    </div>
</body>
</html>