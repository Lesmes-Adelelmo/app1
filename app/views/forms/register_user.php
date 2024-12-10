<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Acceso</title>
</head>
<body>
    <header>
        <h1>Formulario de Registro de Usuario</h1>
    </header>

    <main>
        <section>
            <form method="POST" action="index.php?page=register&action=store">
                <fieldset>
                    <legend>Información Personal</legend>

                    <label for="nick">Nombre de usuario (Nick):</label>
                    <input type="text" id="nick" name="nick" required>
                    <br/><br/>

                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email" required>
                    <br/><br/>

                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                    <br/><br/>

                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                    <br/><br/>

                    <label for="apellido1">Primer apellido:</label>
                    <input type="text" id="apellido1" name="apellido1" required>
                    <br/><br/>

                    <label for="apellido2">Segundo apellido:</label>
                    <input type="text" id="apellido2" name="apellido2">
                    <br/><br/>

                </fieldset>

                <fieldset>
                    <legend>Dirección</legend>

                    <label for="tipo_via">Tipo de vía:</label>
                    <select id="tipo_via" name="tipo_via" required>
                        <option value="">Selecciona</option>
                        <option value="Calle">Calle</option>
                        <option value="Avenida">Avenida</option>
                        <option value="Plaza">Plaza</option>
                        <option value="Carretera">Carretera</option>
                    </select>
                    <br/><br/>

                    <label for="nombre_via">Nombre de la vía:</label>
                    <input type="text" id="nombre_via" name="nombre_via" required>
                    <br/><br/>

                    <label for="numero">Número:</label>
                    <input type="number" id="numero" name="numero" required>
                    <br/><br/>

                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required>
                    <br/><br/>
                </fieldset>

                <button type="submit">Registrarse</button>
            </form>
        </section>
        <section>
            <p>¿Ya tienes cuenta?<a href="index.php?page=login">Inicia sesión aquí</a></p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Mi Sitio Web. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
