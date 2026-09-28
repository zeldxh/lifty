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
                    <h1 class="card-title mb-5 h5">Recuperar contraseña</h1>
                </div>

                <form class="needs-validation mt-3" novalidate>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input id="email" type="email" class="form-control" placeholder="" required autofocus>
                        <div class="invalid-feedback">Porfavor ingrese un correo electrónico válido.</div>
                    </div>

                    <button class="btn btn-primary w-100" type="submit">Procesar</button>
                </form>

                <div class="text-center mt-3 small text-muted">
                    ¿No tienes una cuenta? <a href="register.php" class="link-primary">Registrarse</a>
                </div>

            </div>
        </div>
    </div>

    <?php IncludeJS(); ?>

</body>

</html>
