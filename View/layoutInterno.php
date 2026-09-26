<?php

function IncludeCSS()
{
    echo '
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Lifty - Suplementos deportivos</title>

            <link rel="stylesheet" href="../assets/css/main.css">
        </head>
    ';
}

function MostrarHeader()
{
    echo '
          <div id="overlay" class="overlay"></div>
          <nav id="topbar" class="navbar bg-white border-bottom fixed-top topbar px-3">
            <button id="toggleBtn" class="d-none d-lg-inline-flex btn btn-light btn-icon btn-sm ">
              <i class="ti ti-layout-sidebar-left-expand"></i>
            </button>

            <button id="mobileBtn" class="btn btn-light btn-icon btn-sm d-lg-none me-2">
              <i class="ti ti-layout-sidebar-left-expand"></i>
            </button>
            <div>
              <ul class="list-unstyled d-flex align-items-center mb-0 gap-1">

                <li>
                  <a class="position-relative btn-icon btn-sm btn-light btn rounded-circle" data-bs-toggle="dropdown"
                    aria-expanded="false" href="#" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                      class="icon icon-tabler icons-tabler-outline icon-tabler-bell">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                      <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                    </svg>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 ms-n2">
                      2
                      <span class="visually-hidden">mensajes sin leer</span>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-0">
                    <ul class="list-unstyled p-0 m-0">
                      <li class="p-3 border-bottom ">
                        <div class="d-flex gap-3">
                          <div class="avatar avatar-sm rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center flex-shrink-0"><i class="ti ti-shopping-cart"></i></div>
                          <div class="flex-grow-1 small">
                            <p class="mb-0">Nuevo pedido recibido</p>
                            <p class="mb-1">Se registró el pedido #12345</p>
                            <div class="text-secondary">Hace 5 minutos</div>
                          </div>
                        </div>
                      </li>
                      <li class="p-3 border-bottom ">
                        <div class="d-flex gap-3">
                          <div class="avatar avatar-sm rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center flex-shrink-0"><i class="ti ti-user-plus"></i></div>
                          <div class="flex-grow-1 small">
                            <p class="mb-0">Nuevo usuario registrado</p>
                            <p class="mb-1">El usuario @jdoe creó una cuenta</p>
                            <div class="text-secondary">Hace 30 minutos</div>
                          </div>
                      </li>

                      <li class="p-3 border-bottom">
                        <div class="d-flex gap-3">
                          <div class="avatar avatar-sm rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center flex-shrink-0"><i class="ti ti-credit-card"></i></div>
                          <div class="flex-grow-1 small">
                            <p class="mb-0">Pago confirmado</p>
                            <p class="mb-1">Se recibió un pago de $299</p>
                            <div class="text-secondary">Hace 1 hora</div>
                          </div>
                        </div>
                      </li>
                      <li class="px-4 py-3 text-center">
                        <a href="#" class="text-primary ">Ver todas las notificaciones</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="ms-3 dropdown">
                  <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="avatar avatar-sm rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center flex-shrink-0"><i class="ti ti-user"></i></div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end p-0" style="min-width: 200px;">
                    <div>
                      <div class="d-flex gap-3 align-items-center border-dashed border-bottom px-3 py-3">
                        <div class="avatar avatar-md rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center flex-shrink-0"><i class="ti ti-user"></i></div>
                        <div>
                          <h4 class="mb-0 small">Administrador</h4>
                          <p class="mb-0  small">@admin</p>
                        </div>
                      </div>
                      <div class="p-3 d-flex flex-column gap-1 small lh-lg">
                        <a href="login.php" class="link-danger">
                          <i class="ti ti-logout"></i>
                          <span>Cerrar sesión</span>
                        </a>
                      </div>

                    </div>
                  </div>
                </li>
              </ul>
            </div>

          </nav>
    ';
}

function MostrarSidebar()
{
    echo '
        <aside id="sidebar" class="sidebar">
            <div class="logo-area">
                <a href="home.php" class="d-inline-flex align-items-center text-decoration-none">
                    <span class="logo-text fs-4 fw-bold">Lifty</span>
                </a>
            </div>
            <ul class="nav flex-column">
                <li class="px-4 py-2"><small class="nav-text">Menu</small></li>
                <li><a class="nav-link" href="home.php"><i class="ti ti-home"></i><span class="nav-text">Inicio</span></a></li>
                <li><a class="nav-link" href="inventory.php"><i class="ti ti-building-warehouse"></i><span class="nav-text">Inventario</span></a></li>
                <li><a class="nav-link" href="orders.php"><i class="ti ti-shopping-cart"></i><span class="nav-text">Pedidos</span></a></li>
                <li><a class="nav-link" href="reports.php"><i class="ti ti-receipt"></i><span class="nav-text">Reportes</span></a></li>

                <li class="px-4 pt-4 pb-2"><small class="nav-text">Cuenta</small></li>
                <li><a class="nav-link" href="login.php"><i class="ti ti-logout"></i><span class="nav-text">Iniciar sesión</span></a></li>
                <li><a class="nav-link" href="register.php"><i class="ti ti-user-plus"></i><span class="nav-text">Registrarse</span></a></li>
            </ul>
        </aside>
    ';
}

function MostrarFooter()
{
    echo '
        <div class="row">
            <div class="col-12">
                <footer class="text-center py-2 mt-6 text-secondary">
                    <p class="mb-0">Copyright &copy; 2026 Lifty. Suplementos deportivos.</p>
                </footer>
            </div>
        </div>
    ';
}

function IncludeJS()
{
    echo '
        <script type="module" src="../assets/js/main.js"></script>
    ';
}

function MostrarLogoLogin()
{
    echo '
        <a href="home.php" class="mb-4 d-inline-block text-decoration-none">
            <span class="fs-2 fw-bold">!Bienvenid@!</span>
        </a>
    ';
}

function MostrarLogoRegistro()
{
    echo '
        <a href="home.php" class="mb-4 d-inline-block text-decoration-none">
            <span class="fs-2 fw-bold">Registro</span>
        </a>
    ';
}

function MostrarLogoRecuperarContraseña()
{
    echo '
        <a href="home.php" class="mb-4 d-inline-block text-decoration-none">
            <span class="fs-2 fw-bold">Recuperar Contraseña</span>
        </a>
    ';
}