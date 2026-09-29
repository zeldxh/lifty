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
              <h1 class="fs-3 mb-1">Pedidos</h1>
              <p class="mb-0">Seguimiento de los pedidos de la tienda</p>
            </div>
            <div>
              <a href="#" class="btn btn-primary">Nuevo pedido</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div>
            <div class="d-flex gap-2 mb-3 flex-wrap justify-content-between">
              <input type="text" class="form-control" placeholder="Buscar pedidos..." style="max-width: 250px;">
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
                  <th>Pedido</th>
                  <th>Cliente</th>
                  <th>Fecha</th>
                  <th>Artículos</th>
                  <th>Total</th>
                  <th>Estado</th>
                  <th>Acción</th>
                </tr>
              </thead>
              <tbody>
                <tr class="align-middle">
                  <td><a href="#">#PED1001</a></td>
                  <td>Andrés Rojas</td>
                  <td>12/09/2026</td>
                  <td>3</td>
                  <td>$184.48</td>
                  <td><span class="badge bg-success-subtle text-success">Completada</span></td>
                  <td>
                    <a href="#"><i class="ti ti-eye"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td><a href="#">#PED1002</a></td>
                  <td>María Fernández</td>
                  <td>12/09/2026</td>
                  <td>1</td>
                  <td>$89.99</td>
                  <td><span class="badge bg-primary-subtle text-primary">En proceso</span></td>
                  <td>
                    <a href="#"><i class="ti ti-eye"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td><a href="#">#PED1003</a></td>
                  <td>Kevin Solís</td>
                  <td>11/09/2026</td>
                  <td>5</td>
                  <td>$212.40</td>
                  <td><span class="badge bg-success-subtle text-success">Completada</span></td>
                  <td>
                    <a href="#"><i class="ti ti-eye"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td><a href="#">#PED1004</a></td>
                  <td>Laura Vargas</td>
                  <td>11/09/2026</td>
                  <td>2</td>
                  <td>$67.49</td>
                  <td><span class="badge bg-warning-subtle text-warning">Pendiente</span></td>
                  <td>
                    <a href="#"><i class="ti ti-eye"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td><a href="#">#PED1005</a></td>
                  <td>Diego Campos</td>
                  <td>10/09/2026</td>
                  <td>4</td>
                  <td>$156.00</td>
                  <td><span class="badge bg-success-subtle text-success">Completada</span></td>
                  <td>
                    <a href="#"><i class="ti ti-eye"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td><a href="#">#PED1006</a></td>
                  <td>Sofía Jiménez</td>
                  <td>10/09/2026</td>
                  <td>1</td>
                  <td>$34.99</td>
                  <td><span class="badge bg-danger-subtle text-danger">Cancelada</span></td>
                  <td>
                    <a href="#"><i class="ti ti-eye"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td><a href="#">#PED1007</a></td>
                  <td>Bryan Mora</td>
                  <td>09/09/2026</td>
                  <td>6</td>
                  <td>$298.70</td>
                  <td><span class="badge bg-primary-subtle text-primary">En proceso</span></td>
                  <td>
                    <a href="#"><i class="ti ti-eye"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
                <tr class="align-middle">
                  <td><a href="#">#PED1008</a></td>
                  <td>Natalia Quesada</td>
                  <td>09/09/2026</td>
                  <td>2</td>
                  <td>$118.00</td>
                  <td><span class="badge bg-warning-subtle text-warning">Pendiente</span></td>
                  <td>
                    <a href="#"><i class="ti ti-eye"></i></a>
                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td class="border-bottom-0">Pedidos por página</td>
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
