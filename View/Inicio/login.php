<?php include_once '../layoutInterno.php'; ?>

<!DOCTYPE html>
<html lang="es">

<?php IncludeCSS(); ?>

<body>

    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card" style="max-width:420px; width:100%;">
            <div class="card-body p-5">

                <div class="text-center mb-3">
                    <?php MostrarLogoLogin(); ?>
                    <h1 class="card-title mb-5 h5">Ingrese su credenciales</h1>
                </div>

                <form class="needs-validation mt-3" novalidate>
                    <div class="mb-3">
                        <label for="email" class="form-label">Dirección de correo electrónico</label>
                        <input id="email" type="email" class="form-control" placeholder="Ingrese su correo electrónico" required autofocus>
                        <div class="invalid-feedback">Please enter a valid email.</div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label d-flex justify-content-between">
                            <span>Contraseña</span>
                            <a href="forgot-password.php" class="small link-primary">Olvidó su contraseña?</a>
                        </label>
                        <input id="password" type="password" class="form-control" placeholder="Ingrese su contraseña" required minlength="6">
                        <div class="invalid-feedback">Please provide a password (min 6 characters).</div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input id="remember" class="form-check-input" type="checkbox">
                            <label class="form-check-label small" for="remember">Conservar usuario</label>
                        </div>
                    </div>

                    <button class="btn btn-primary w-100" type="submit">Ingresar</button>
                </form>

                <div class="text-center mt-3 small text-muted">
                    No tiene una cuenta? <a href="register.php" class="link-primary">Registrarse</a>
                </div>

            </div>
        </div>
    </div>

    <?php IncludeJS(); ?>

</body>

</html>
