<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Registro de Usuario</h2>
        <form action="index.php?action=register" method="POST">
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Registrarse</button>
        </form>
        <p>¿Ya tienes una cuenta? <a href="index.php?action=login">Inicia sesión aquí</a></p>
    </div>
</body>
</html>