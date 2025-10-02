<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container-sm">
        <form action="calculo" method="post" class="form mx-auto my-4 " style="width: 500px;">
            <div style="background-color:#dedede" class="p-4" >
                <h4>Informacion del cliente</h4>
                <div>
                    <label for="cliente">Ingrese el nombre:</label>
                    <input type="text" name="cliente" id="cliente" class="form-control">
                </div>
                <div>
                    <label for="correo">Ingreso su nombre:</label>
                    <input type="text" name="correo" id="correo" class="form-control">
                </div>
                <div>
                    <label for="dui">Ingrese su numero de DUI</label>
                    <input type="text" name="DUI" id="DUI" class="form-control">
                </div>
            </div>
            <div style="background-color:#dedede" class="p-4">
                <h4>datos</h4>
                <div>
                    <label for="capital">Ingrese el capital</label>
                    <input type="text" name="capital" id="capital"  class="form-control">
                </div>
                <div>
                    <label for="interes">Ingrese la tasa de interes</label>
                    <input type="text" name="interes" id="interes">
                </div>
                <div>
                    <label for="numero_cuotas">Ingrese el numero de cuotas</label>
                    <input type="text" name="numero_cuotas" id="numero_cuotas">
                </div>
            </div>
            <input type="submit" value="Enviar" class="btn btn-info">
        </form>
    </div>

    <?php if($_POST) ?>
</body>
</html>