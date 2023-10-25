<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>equipo</title>
</head>
<body>
    @include('partials.nav')
    <div class="container mt-5">
        <h1>Registro de Computadoras</h1>


        <form action="{{ route('equipof') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="hidden" class="form-control" id="idEquipo"name="fequipo" value="${unquipo.idequipo}">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" id="marca" placeholder="Ingrese la marca" name="fmarcaE" value="${unequipo.marca}">
            </div>
            <div class="form-group">
                <label for="modelo">Codigo:</label>
                <input type="text" class="form-control" id="codigo" placeholder="Ingrese el modelo" name="fcodigoE" value="${unequipo.codigo}">
            </div>
            <div class="form-group">
                <label for="serial">Color:</label>
                <input type="text" class="form-control" id="color" placeholder="Ingrese el número de serie" name="fcolorE" value="${unequipo.color}">
            </div>
            <div class="form-group">
                <label for="serial">Descripcion:</label>
                <input type="text" class="form-control" id="serial" placeholder="Ingrese el número de serie" name="fdespE" value="${unequipo.desp}">
            </div>
            <div class="form-group">
                <label for="serial">estado:</label>
                <div>
                    <div><input type="radio"name="festadoE" value="${unequipo.estadoo}">prestado</div>
                    <div><input type="radio">no prestado</div>

            </div>
            </div>

            <button type="submit" class="btn btn-primary" name="faccion" value="insertar">Registrar</button>
        </form>
    </div>
</body>
</html>
