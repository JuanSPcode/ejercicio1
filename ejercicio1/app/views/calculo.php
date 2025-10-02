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
        <form action="/ejercicio1/public/persona" method="post" class="form mx-auto my-4 " style="width: 500px;">
            <div style="background-color:#dedede" class="p-4" >
                <h4>Informacion del cliente</h4>
                <?php if(isset($error)):?>
                    <div class="alert alert-warning">
                        <p><?=$error?></p>
                    </div>
                <?php endif?>
                <div>
                    <label for="nombre">Ingrese el nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>
                <div>
                    <label for="correo">Ingreso su correo:</label>
                    <input type="text" name="correo" id="correo" class="form-control">
                </div>
                <div>
                    <label for="dui">Ingrese su numero de DUI</label>
                    <input type="text" name="dui" id="dui" class="form-control">
                </div>
            </div>
            <div style="background-color:#dedede" class="p-4">
                <h4>datos</h4>
                <div>
                    <label for="capital">Ingrese el capital</label>
                    <input type="text" name="capital" id="capital"  class="form-control" required>
                </div>
                <div>
                    <label for="interes">Ingrese la tasa de interes</label>
                    <input type="text" name="interes" id="interes"  class="form-control" required>
                </div>
                <div>
                    <label for="numero_cuotas">Ingrese el numero de cuotas</label>
                    <input type="text" name="numero_cuotas" id="numero_cuotas" class="form-control" required>
                </div>
                <input type="submit" value="Enviar" class="btn btn-info my-2">
            </div>
  
        </form>
    </div>

    <?php if($_POST) ?>
</body>
</html>