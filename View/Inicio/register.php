<?php include_once '../layoutExterno.php'; ?>

<!DOCTYPE html>
<html lang="es">

<?php IncludeCSS(); ?>

<body>

    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card" style="max-width:420px; width:100%;">
            <div class="card-body p-5">

                <div class="text-center mb-3">
                    <?php MostrarLogo(); ?>
                    <h1 class="card-title mb-5 h5">Crea tu cuenta</h1>
                </div>

                <form class="needs-validation mt-3" novalidate>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Nombre completo</label>
                        <input id="fullName" type="text" class="form-control" placeholder="Juan Brenes" required>
                        <div class="invalid-feedback">Por favor ingrese su nombre.</div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input id="email" type="email" class="form-control" placeholder="nombre@ejemplo.com" required>
                        <div class="invalid-feedback">Por favor ingrese un correo electrónico válido.</div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input id="password" type="password" class="form-control" placeholder="Crear una contraseña" required minlength="6">
                        <div class="invalid-feedback">Por favor, proporcione una contraseña (mínimo 6 caracteres).</div>
                    </div>

                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirmar contraseña</label>
                        <input id="confirmPassword" type="password" class="form-control" placeholder="Repetir contraseña" required>
                        <div class="invalid-feedback">Las contraseñas deben coincidir.</div>
                    </div>

                    <div class="mb-3 form-check">
                        <input id="terms" class="form-check-input" type="checkbox" required>
                        <label class="form-check-label small" for="terms">Acepto los <a href="#" class="text-decoration-none">términos y privacidad</a></label>
                        <div class="invalid-feedback">Debe aceptar antes de continuar.</div>
                    </div>

                    <button class="btn btn-primary w-100" type="submit">Registrarse</button>
                </form>

                <div class="text-center mt-3 small text-muted">
                    ¿Ya tienes una cuenta? <a href="login.php" class="link-primary">Iniciar Sesión</a>
                </div>

            </div>
        </div>
    </div>

    <?php IncludeJS(); ?>

</body>

</html>
