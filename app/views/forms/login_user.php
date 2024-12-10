<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <header>
        <h1>Formulario de Ingreso de Usuario</h1>
    </header>

    <main>
        <section>
            <form method="POST" action="index.php?page=login&action=authenticate">
                <fieldset>
                    <legend>Accede a tu cuenta</legend>

                    <label for="nick">Nombre de usuario (Nick):</label>
                    <input type="text" name="nick" id="nick" required>
                    <br/><br/>

                    <label for="email">Correo electrónico:</label>
                    <input type="email" name="email" id="email" required>
                    <br/><br/>

                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" required>
                    <br/><br/>
                </fieldset>

                <button type="submit">Iniciar sesión</button>
            </form>
        </section>

        <section>
            <p>¿No tienes cuenta? <a href="index.php?page=register">Regístrate aquí</a></p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Mi Sitio Web. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
