<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form action="index.php?action=login" method="POST">
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
        <p>¿No tienes una cuenta? <a href="index.php?action=register">Regístrate aquí</a></p>
    </div>
</body>
</html>