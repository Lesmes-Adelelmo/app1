<?php session_start();
if (!isset($_SESSION['user'])){
    header('Location: ../index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal - Videojuegos Retro</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="categorias.php">Categorías</a></li>
                <li><a href="ofertas.php">Ofertas</a></li>
                <li><a href="perfil.php">Mi Perfil</a></li>
                <li><a href="../logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h1>Bienvenido a la Página Principal, <?php echo $_SESSION['user']; ?>!</h1>
            <p>Estás en tu página principal. Aquí podrás explorar todas las secciones de nuestro sitio.</p>
        </section>

        <section>
            <h2>Categorías de Videojuegos</h2>
            <ul>
                <li><a href="categoria_1.php">Acción</a></li>
                <li><a href="categoria_2.php">Aventura</a></li>
                <li><a href="categoria_3.php">Deportes</a></li>
                <li><a href="categoria_4.php">Estrategia</a></li>
                <li><a href="categoria_5.php">Simulación</a></li>
            </ul>
        </section>

        <section>
            <h2>Ofertas Especiales</h2>
            <p>¡No te pierdas nuestras ofertas! Pronto estarán disponibles las mejores ofertas para ti.</p>
            <a href="ofertas.php">Ver Ofertas</a>
        </section>

        <section>
            <h2>Próximos Lanzamientos</h2>
            <p>¡Esté atento! Nuevos juegos están por llegar. Mantente informado sobre los próximos lanzamientos.</p>
            <a href="lanzamientos.php">Ver Próximos Lanzamientos</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Videojuegos Retro. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
