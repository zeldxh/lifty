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
      <div class="row">
        <div class="col-12">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
              <h1 class="fs-3 mb-1">Reportes</h1>
              <p class="mb-0">Analítica e informes del inventario</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-3 mb-3">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card h-100">
            <div class="card-body p-4">
              <h6 class="mb-4">Ingresos totales</h6>
              <h3 class="mb-1 fw-bold">$45,231</h3>
              <p class="mb-0 text-success small"><i class="ti ti-arrow-up"></i> 12% respecto al mes anterior</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="card h-100">
            <div class="card-body p-4">
              <h6 class="mb-4">Productos vendidos</h6>
              <h3 class="mb-1 fw-bold">1,234</h3>
              <p class="mb-0 text-success small"><i class="ti ti-arrow-up"></i> 8% respecto al mes anterior</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="card h-100">
            <div class="card-body p-4">
              <h6 class="mb-4">Productos con bajo stock</h6>
              <h3 class="mb-1 fw-bold">23</h3>
              <p class="mb-0 text-danger small"><i class="ti ti-arrow-down"></i> 3% respecto al mes anterior</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="card h-100">
            <div class="card-body p-4">
              <h6 class="mb-4">Productos agotados</h6>
              <h3 class="mb-1 fw-bold">5</h3>
              <p class="mb-0 text-danger small"><i class="ti ti-arrow-down"></i> 2% respecto al mes anterior</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-12">
          <div class="card">
            <div class="card-body p-4">
              <div class="d-flex flex-column flex-md-row justify-content-between align-items-start mb-3 gap-2">
                <div>
                  <h2 class="mb-0 fs-5">Resumen de ventas</h2>
                </div>
                <div class="controls">
                  <button id="btn-random" class="btn btn-light btn-sm">Generar datos</button>
                  <button id="btn-update" class="btn btn-primary btn-sm">Ver solo este año</button>
                </div>
              </div>

              <div id="salesChart"></div>

              <div class="d-flex justify-content-end">
                <a href="#" class="small">Ver reporte detallado</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body p-4">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                  <h2 class="mb-0 fs-5">Productos más vendidos</h2>
                </div>
              </div>

              <div class="list-group list-group-flush">
                <div class="list-group-item p-3 d-flex align-items-center">
                  <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <h6 class="mb-0">Whey Protein Isolate 2kg</h6>
                        <small class="text-secondary">156 unidades vendidas</small>
                      </div>
                      <div class="text-end">
                        <strong>$14,038</strong>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="list-group-item p-3 d-flex align-items-center">
                  <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <h6 class="mb-0">Creatina Monohidratada 300g</h6>
                        <small class="text-secondary">134 unidades vendidas</small>
                      </div>
                      <div class="text-end">
                        <strong>$4,688</strong>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="list-group-item p-3 d-flex align-items-center">
                  <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <h6 class="mb-0">Pre-Entreno C4 Original</h6>
                        <small class="text-secondary">98 unidades vendidas</small>
                      </div>
                      <div class="text-end">
                        <strong>$3,822</strong>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <?php MostrarFooter(); ?>

    </div>
  </main>

    <?php IncludeJS(); ?>

</body>

</html>
