<?php include_once '../layoutInterno.php'; ?>

<!DOCTYPE html>
<html lang="es">

<?php IncludeCSS(); ?>

<body>

    <div id="overlay" class="overlay"></div>

    <?php MostrarHeader(); ?>

    <?php MostrarSidebar(); ?>

    <main id="content" class="content py-10">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-12">
          <div class="mb-6">
            <h1 class="fs-3 mb-1">Inicio</h1>
            <p>Resumen general de la tienda.</p>
          </div>
        </div>
      </div>
      <div class="row g-3 mb-3">
        <div class="col-lg-3 col-12">

          <div class="card p-4  bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-2">

            <div class="d-flex gap-3 ">
              <div class="icon-shape icon-md bg-primary text-white rounded-2">
                <i class="ti ti-report-analytics fs-4"></i>
              </div>
              <div>
                <h2 class="mb-3 fs-6">Ventas totales</h2>
                <h3 class="fw-bold mb-0">$25,000</h3>
                <p class="text-primary mb-0 small">+5% respecto al mes anterior</p>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-3 col-12">

          <div class="card p-4  bg-success bg-opacity-10 border border-success border-opacity-25 rounded-2">

            <div class="d-flex gap-3 ">
              <div class="icon-shape icon-md bg-success text-white rounded-2">
                <i class="ti ti-repeat fs-4"></i>
              </div>
              <div>
                <h2 class="mb-3 fs-6">Compras totales</h2>
                <h3 class="fw-bold mb-0">$18,000</h3>
                <p class="text-success mb-0 small">+22% respecto al mes anterior</p>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-3 col-12">

          <div class="card p-4  bg-info bg-opacity-10 border border-info border-opacity-25 rounded-2">

            <div class="d-flex gap-3 ">
              <div class="icon-shape icon-md bg-info text-white rounded-2">
                <i class="ti ti-currency-dollar fs-4"></i>
              </div>
              <div>
                <h2 class="mb-3 fs-6">Gastos totales</h2>
                <h3 class="fw-bold mb-0">$9,000</h3>
                <p class="text-info mb-0 small">+10% respecto al mes anterior</p>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-3 col-12">

          <div class="card p-4  bg-warning bg-opacity-10 border border-warning border-opacity-25 rounded-2">

            <div class="d-flex gap-3 ">
              <div class="icon-shape icon-md bg-warning text-white rounded-2">
                <i class="ti ti-notes fs-4"></i>
              </div>
              <div>
                <h2 class="mb-3 fs-6">Facturas por cobrar</h2>
                <h3 class="fw-bold mb-0">$25,000</h3>
                <p class="text-warning mb-0 small">+35% respecto al mes anterior</p>
              </div>
            </div>
          </div>

        </div>

      </div>
      <div class="row g-3 mb-3">
        <div class="col-lg-4 col-12">
          <div class="card">
            <div class="card-body p-4">
              <div class="d-flex justify-content-between border-bottom pb-5 mb-3">
                <div>
                  <h3 class="fw-bold h4">$25,458</h3>
                  <span>Ganancia total</span>
                </div>
                <div>
                  <i class="ti ti-layers-subtract fs-1 text-primary"></i>
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center small">
                <div class="text-muted"><span class="text-success">+35%</span> vs mes anterior</div>
                <div><a href="#" class="link-primary text-decoration-underline">Ver</a></div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-4 col-12">
          <div class="card">
            <div class="card-body p-4">
              <div class="d-flex justify-content-between border-bottom pb-5 mb-3">
                <div>
                  <h3 class="fw-bold h4">$45,458</h3>
                  <span>Devoluciones</span>
                </div>
                <div>
                  <i class="ti ti-credit-card fs-1 text-danger"></i>
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center small">
                <div class="text-muted"><span class="text-danger">-20%</span> vs mes anterior</div>
                 <div><a href="#" class="link-primary text-decoration-underline">Ver</a></div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-4 col-12">
          <div class="card">
            <div class="card-body p-4">
              <div class="d-flex justify-content-between border-bottom pb-5 mb-3">
                <div>
                  <h3 class="fw-bold h4">$34,458</h3>
                  <span>Gastos totales</span>
                </div>
                <div>
                  <i class="ti ti-cash-banknote fs-1 text-warning"></i>
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center small">
                <div class="text-muted"><span class="text-warning">-20%</span> vs mes anterior</div>
                <div><a href="#" class="link-primary text-decoration-underline">Ver</a></div>
              </div>
            </div>
          </div>

        </div>

      </div>
      <div class="row g-3 mb-3">
        <div class="col-12 col-lg-6">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center bg-transparent px-4 py-3">
              <h3 class="h5 mb-0">Ventas vs compras</h3>
              <div>
                <select class="form-select form-select-sm">
                  <option selected>Este año</option>
                  <option>Este mes</option>
                  <option>Esta semana</option>
                </select>
              </div>
            </div>
            <div class="card-body p-4">

              <div id="salesPurchaseChart"></div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center bg-transparent px-4 py-3">
              <h3 class="h5 mb-0">Información general</h3>
              <div>
                <select class="form-select form-select-sm">
                  <option selected>Últimos 6 meses</option>
                  <option>Este mes</option>
                  <option>Esta semana</option>
                </select>
              </div>
            </div>
            <div class="card-body p-4">
              <h3 class="h6">Resumen de clientes</h3>
              <div class="row align-items-center">
                <div class="col-sm-6">
                  <div id="customerChart">

                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="row">
                    <div class="col-6 border-end">
                      <div class="text-center ">
                        <h2 class="mb-1">5.5K</h2>
                        <p class="text-success mb-2">Nuevos</p>
                        <span class="badge bg-success"><i class="ti ti-arrow-up-left me-1"></i>25%</span>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="text-center">
                        <h2 class="mb-1">3.5K</h2>
                        <p class="text-warning mb-2">Recurrentes</p>
                        <span class="badge bg-success badge-xs d-inline-flex align-items-center"><i
                            class="ti ti-arrow-up-left me-1"></i>21%</span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row text-center border-top mt-4 pt-4">
                <div class="col-4 border-end">
                  <h3 class="fw-bold mb-2">6987</h3>
                  <small class="text-secondary">Proveedores</small>
                </div>
                <div class="col-4 border-end">
                  <h3 class="fw-bold mb-2">4896</h3>
                  <small class="text-secondary">Clientes</small>
                </div>
                <div class="col-4">
                  <h3 class="fw-bold mb-2">487</h3>
                  <small class="text-secondary">Pedidos</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row g-3">

        <div class="col-lg-4">
          <div class="card  h-100">
            <div class="card-header bg-white d-flex justify-content-between align-items-center px-4 py-3">
              <h4 class="mb-0 h5">Productos más vendidos</h4>
              <button class="btn btn-sm btn-outline-secondary">
                <i class="ti ti-calendar"></i> Hoy
              </button>
            </div>

            <ul class="list-group list-group-flush">

              <li class="list-group-item d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                  <p class="mb-1">Creatina Monohidratada 300g</p>
                  <div class="d-flex align-items-center gap-2 text-muted">
                    <small class="fw-semibold">$89 </small>
                    <small>•</small>
                    <small>1,250 Unidades</small>
                  </div>
                </div>
                <span class="badge bg-danger-subtle text-danger border border-danger">18%</span>
              </li>

              <li class="list-group-item d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                  <p class="mb-1">Whey Protein Isolate 2kg</p>
                  <div class="d-flex align-items-center gap-2 text-muted">
                    <small class="fw-semibold">$49 </small>
                    <small>•</small>
                    <small>5,420 Unidades</small>
                  </div>

                </div>
                <span class="badge bg-primary-subtle text-primary border border-primary">32%</span>
              </li>

              <li class="list-group-item d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                  <p class="mb-1">Pre-Entreno C4 Original</p>
                  <div class="d-flex align-items-center gap-2 text-muted">
                    <small class="fw-semibold">$98 </small>
                    <small>•</small>
                    <small>862 Unidades</small>
                  </div>

                </div>
                <span class="badge bg-info-subtle text-info border border-info">22%</span>
              </li>
              <li class="list-group-item d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                  <p class="mb-1">BCAA 2:1:1 250g</p>
                  <div class="d-flex align-items-center gap-2 text-muted">
                    <small class="fw-semibold">$35 </small>
                    <small>•</small>
                    <small>3,200 Unidades</small>
                  </div>

                </div>
                <span class="badge bg-success-subtle text-success border border-success">28%</span>
              </li>
              <li class="list-group-item d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                  <p class="mb-1">Omega 3 1000mg 120 caps</p>
                  <div class="d-flex align-items-center gap-2 text-muted">
                    <small class="fw-semibold">$65 </small>
                    <small>•</small>
                    <small>2,890 Unidades</small>
                  </div>

                </div>
                <span class="badge bg-warning-subtle text-warning border border-warning">25%</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card  h-100">
            <div class="card-header bg-white d-flex justify-content-between align-items-center px-4 py-3">
              <div class="d-flex align-items-center">

                <h4 class="mb-0 h5">Productos con bajo stock</h4>
              </div>
              <a href="#" class="small text-primary text-decoration-underline">Ver todos</a>
            </div>

            <ul class="list-group list-group-flush">

              <li class="list-group-item d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                  <p class="mb-1">Caseina Micelar 1kg</p>
                  <small>ID: #554433</small>
                </div>
                <div class="d-flex flex-column gap-0 align-items-center">
                  <span class="fw-semibold text-primary">06</span>
                  <small class="text-muted">En stock</small>
                </div>
              </li>

              <li class="list-group-item d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                  <p class="mb-1">Glutamina 500g</p>
                  <small>ID: #887766</small>
                </div>
                <div class="d-flex flex-column gap-0 align-items-center">
                  <span class="fw-semibold text-primary">09</span>
                  <small class="text-muted">En stock</small>
                </div>
              </li>

              <li class="list-group-item d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                  <p class="mb-1">Multivitaminico Opti-Men</p>
                  <small>ID: #332211</small>
                </div>
                <div class="d-flex flex-column gap-0 align-items-center">
                  <span class="fw-semibold text-primary">03</span>
                  <small class="text-muted">En stock</small>
                </div>
              </li>
              <li class="list-group-item d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                  <p class="mb-1">Beta-Alanina 200g</p>
                  <small>ID: #998877</small>
                </div>
                <div class="d-flex flex-column gap-0 align-items-center">
                  <span class="fw-semibold text-primary">07</span>
                  <small class="text-muted">En stock</small>
                </div>
              </li>
              <li class="list-group-item d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                  <p class="mb-1">Ganador de Peso Serious Mass 5kg</p>
                  <small>ID: #665544</small>
                </div>
                <div class="d-flex flex-column gap-0 align-items-center">
                  <span class="fw-semibold text-primary">02</span>
                  <small class="text-muted">En stock</small>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card  h-100">
            <div class="card-header bg-white d-flex justify-content-between align-items-center px-4 py-3">
              <h4 class="mb-0 h5">Ventas recientes</h4>
              <button class="btn btn-sm btn-outline-secondary">
                <i class="ti ti-calendar-event"></i> Semanal
              </button>
            </div>

            <ul class="list-group list-group-flush">

              <li class="list-group-item d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                  <p class="mb-1">Whey Protein Gold Standard 2.2kg</p>
                  <div class="d-flex align-items-center gap-2 text-muted">
                    <small class="fw-semibold">Proteínas </small>
                    <small>•</small>
                    <small>2,$2,499</small>
                  </div>

                </div>
                <span class="badge bg-success-subtle text-success">Completada</span>
              </li>

              <li class="list-group-item d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                  <p class="mb-1">Creatina Creapure 500g</p>
                  <div class="d-flex align-items-center gap-2 text-muted">
                    <small class="fw-semibold">Creatinas </small>
                    <small>•</small>
                    <small>$549</small>
                  </div>

                </div>
                <span class="badge bg-primary-subtle text-primary">En proceso</span>
              </li>

              <li class="list-group-item d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                  <p class="mb-1">Pre-Entreno Total War</p>
                  <div class="d-flex align-items-center gap-2 text-muted">
                    <small class="fw-semibold">Pre entrenos </small>
                    <small>•</small>
                    <small>$799</small>
                  </div>
                </div>
                <span class="badge bg-success-subtle text-success">Completada</span>
              </li>

              <li class="list-group-item d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                  <p class="mb-1">ZMA Zinc + Magnesio</p>
                  <div class="d-flex align-items-center gap-2 text-muted">
                    <small class="fw-semibold">Vitaminas </small>
                    <small>•</small>
                    <small>$799</small>
                  </div>
                </div>
                <span class="badge bg-warning-subtle text-warning">Pendiente</span>
              </li>

              <li class="list-group-item d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                  <p class="mb-1">Barras Proteicas Caja x12</p>
                  <div class="d-flex align-items-center gap-2 text-muted">
                    <small class="fw-semibold">Snacks </small>
                    <small>•</small>
                    <small>$299</small>
                  </div>

                </div>
                <span class="badge bg-danger-subtle text-danger">Cancelada</span>
              </li>
            </ul>
          </div>
        </div>

      </div>

      <?php MostrarFooter(); ?>

    </div>
  </main>

    <?php IncludeJS(); ?>

</body>

</html>
