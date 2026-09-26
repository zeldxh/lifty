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
              <h1 class="fs-3 mb-1">Inventario</h1>
              <p class="mb-0">Administrá el inventario de productos</p>
            </div>
            <div>
              <a href="#" class="btn btn-primary">Agregar producto</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div>
            <div class="d-flex gap-2 mb-3 flex-wrap justify-content-between">
              <input type="text" class="form-control" placeholder="Buscar productos..." style="max-width: 250px;">
              <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary">
                  <i class="ti ti-filter"></i> Filtrar
                </button>
                <button class="btn btn-outline-secondary">
                  <i class="ti ti-file-excel"></i> Excel
                </button>
                <button class="btn btn-outline-secondary">
                  <i class="ti ti-file-pdf"></i> PDF
                </button>
              </div>
            </div>
          </div>
          <div class="card table-responsive">
            <table class="table mb-0 text-nowrap table-hover">
              <thead class="table-light border-light">
                <tr>
                  <th>Producto</th>
                  <th>Código</th>
                  <th>Categoría</th>
                  <th>Marca</th>
                  <th>Precio</th>
                  <th>Unidad</th>
                  <th>Cantidad</th>
                  <th>Acción</th>
                </tr>
              </thead>
              <tbody>
                <tr class="align-middle">
                  <td><a href="#">Whey Protein Isolate 2kg</a></td>
                  <td>SUP001</td>
                  <td>Proteínas</td>
                  <td>Optimum Nutrition</td>
                  <td>$89.99</td>
                  <td>unidad</td>
                  <td>150</td>
                  <td>
                    <a href="#"><i class="ti ti-edit"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td><a href="#">Creatina Monohidratada 300g</a></td>
                  <td>SUP002</td>
                  <td>Creatinas</td>
                  <td>Universal Nutrition</td>
                  <td>$34.99</td>
                  <td>unidad</td>
                  <td>320</td>
                  <td>
                    <a href="#"><i class="ti ti-edit"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td><a href="#">Pre-Entreno C4 Original</a></td>
                  <td>SUP003</td>
                  <td>Pre entrenos</td>
                  <td>Cellucor</td>
                  <td>$39.00</td>
                  <td>unidad</td>
                  <td>200</td>
                  <td>
                    <a href="#"><i class="ti ti-edit"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td><a href="#">BCAA 2:1:1 250g</a></td>
                  <td>SUP004</td>
                  <td>Aminoácidos</td>
                  <td>Scitec Nutrition</td>
                  <td>$28.50</td>
                  <td>unidad</td>
                  <td>80</td>
                  <td>
                    <a href="#"><i class="ti ti-edit"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td><a href="#">Omega 3 1000mg 120 caps</a></td>
                  <td>SUP005</td>
                  <td>Vitaminas</td>
                  <td>Now Foods</td>
                  <td>$19.90</td>
                  <td>frasco</td>
                  <td>110</td>
                  <td>
                    <a href="#"><i class="ti ti-edit"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td><a href="#">Caseína Micelar 1kg</a></td>
                  <td>SUP006</td>
                  <td>Proteínas</td>
                  <td>Dymatize</td>
                  <td>$54.00</td>
                  <td>unidad</td>
                  <td>10</td>
                  <td>
                    <a href="#"><i class="ti ti-edit"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td><a href="#">Ganador de Peso Serious Mass 5kg</a></td>
                  <td>SUP007</td>
                  <td>Proteínas</td>
                  <td>Optimum Nutrition</td>
                  <td>$64.00</td>
                  <td>unidad</td>
                  <td>10</td>
                  <td>
                    <a href="#"><i class="ti ti-edit"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td><a href="#">Barras Proteicas Caja x12</a></td>
                  <td>SUP008</td>
                  <td>Snacks</td>
                  <td>Quest Nutrition</td>
                  <td>$32.00</td>
                  <td>caja</td>
                  <td>200</td>
                  <td>
                    <a href="#"><i class="ti ti-edit"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td class="border-bottom-0">Productos por página</td>
                  <td colspan="9" class="border-bottom-0">
                    <nav aria-label="Paginacion" class="d-flex justify-content-end">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Anterior</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Siguiente</a>
                        </li>
                      </ul>
                    </nav>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>

      <?php MostrarFooter(); ?>

    </div>
  </main>

    <?php IncludeJS(); ?>

</body>

</html>
