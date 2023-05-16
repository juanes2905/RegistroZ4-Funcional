
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Formulario Registro</title>
</head>
<body>
    <form action="CONTROLADOR/Agregarmoto.php" method="post">
        <section class="form-register">
            <h3>Formulario Para El Registro De La Moto Z4</h3>
            <br>
                <input class="controls" type="text" name="Placa_moto" id="Placa_moto" placeholder="Placa de la moto" autofocus>

                <input class="controls" type="text" name="modelo_moto" id="Modelo_moto" placeholder="Modelo de la moto">

                <input class="controls" type="text" name="Cilindraje_moto" id="Cilindraje_moto" placeholder="Cilindraje de la moto">

                <input class="controls" type="" name="kilometros_recorridos" id="kilometros_recorridos" placeholder="Kilometros recorridos">

                <input class="controls" type="date" name="fecha" id="Año" placeholder="Año">


                <textarea class="controls" name="Caracteristicas" id="Caractersiticas" cols="20" rows="0" placeholder="Caractersiticas"></textarea>

                <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
                 <input class="botons" type="submit" value="Registrar">
                <p><a href="#">¿Ya tengo Cuenta?</a></p>

    
        </section>
    </form>
</body>
</html>