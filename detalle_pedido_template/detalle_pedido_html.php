<?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://cevicherias.informaticapp.com/DetallePedido',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
         'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VnVHZPcXhGNVg5MmZ6OGxyOGtuZHM0MGZBT2JWY0U2Om8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlLjF4VzB4NEZVWmNXNlpKYTVMMi5iUS5jekVyRzdpcQ==' ), 
      ));
  
$response = curl_exec($curl);

curl_close($curl);
$data = json_decode($response, true);
?>

<!DOCTYPE html>
    <html lang="en">
      <head>
   <head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Ventas</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
	<link href="../../css/styles.css" rel="stylesheet" />
	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script> </head>
 </head>
  <body class="sb-nav-fixed">
        <!-- MAIN -->
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">BRAXLY</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-7 me-2 me-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Editar perfil</a></li>
                        <li><a class="dropdown-item" href="#!">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Principal
                            </a>
                            <div class="sb-sidenav-menu-heading">Modulos</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVentas" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-receipt-cutoff"></i></div>
                                Ventas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseVentas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Registrar Pedidos</a>
                                    <a class="nav-link" href="../detalte/detalle_pedido_html.php">Registrar Ventas</a>
                                    <a class="nav-link" href="../module_cliente/cliente_html.php">Registrar Clientes</a>
                                    <a class="nav-link" href="layout-static.html">Registrar el tipo de pago</a>
                                    <a class="nav-link" href="layout-static.html">Registrar el tipo de pedido</a>
                                    <a class="nav-link" href="layout-static.html">Registrar el tipo de reserva</a>
                                </nav>
                            </div>  
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSeguridad" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-shield-check"></i></div>
                                Seguridad
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseSeguridad" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Registrar Usuarios</a>
                                    <a class="nav-link" href="layout-static.html">Registrar Perfiles</a>
                                    <a class="nav-link" href="../permisos_template/permiso_html.php">Registrar Permisos</a>
                                    <a class="nav-link" href="">Registrar Empresa</a>
                                    <a class="nav-link" href="sucursal_template/sucursal_html.php">Registrar Sucursales</a>
                                    <a class="nav-link" href="layout-sidenav-light.html"></a>
                                </nav>
                            </div>  
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCompras" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-bag-fill"></i></div>
                                Compras
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseCompras" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Registrar Productos</a>
                                    <a class="nav-link" href="layout-static.html">Registrar tipo de producto</a>
                                    <a class="nav-link" href="layout-static.html">Registrar Stock</a>
                                    <a class="nav-link" href="layout-static.html">Registrar Proveedores</a>
                                    <a class="nav-link" href="layout-static.html">Registrar Pagos</a>
                                    <a class="nav-link" href="layout-sidenav-light.html"></a>
                                </nav>
                            </div> 

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseReportes" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-clipboard-data-fill"></i></i></div>
                                Reportes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseReportes" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Reporte de Ventas</a>
                                    <a class="nav-link" href="layout-static.html">Reporte de Compras</a>
                                    <a class="nav-link" href="layout-static.html">Reporte de Pedidos</a>
                                    <a class="nav-link" href="layout-static.html">Reporte de Clientes</a>
                                    <a class="nav-link" href="layout-static.html">Reporte de stock</a>
                                    <a class="nav-link" href="layout-static.html">Reporte de Reserva</a>
                                    <a class="nav-link" href="layout-static.html">Reporte de Comentarios</a>
                                    <a class="nav-link" href="layout-sidenav-light.html"></a>
                                </nav>
                            </div> 
                        </div>
                        
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Iniciado sesión como:</div>
                        Trabajador
                    </div>
                </nav>
            </div>

			<!-- TABLA -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Lista de Ventas</h1>
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="card-body px-0">
                                    <a href="detalle_pedido_registrar_html.php" class="btn btn-primary">Registrar</a>
                                </div>
								
								
                                <table  class="table table-striped">
                                    <thead>
                                        <tr>
                                          <th scope="col">Fecha de la venta</th>
                                          <th scope="col">Número de mesa</th>
                                          <th scope="col">Información de la venta</th>
                                          <th scope="col">Número de pedido</th>
                                          <th scope="col">Tipo de venta</th>
                                          <th scope="col">Estado del pedido</th>
                                          <th scope="col">Detalle del pedido</th>
                                          <th scope="col">Tipo de Pago</th>
                                          <th scope="col">Lugar de consumo</th>
                                          <th scope="col" colspan="2">Operaciones</th>
                                        </tr>
            </thead>
            <tbody>
              <?php foreach($data["Detalles"] as $detalle_pedido): ?>
              <tr>
                <td><?= $detalle_pedido["depe_fecha"] ?></td>
                <td><?= $detalle_pedido["depe_num_mesa"] ?></td>
                <td><?= $detalle_pedido["deco_info_compra"] ?></td>
                <td><?= $detalle_pedido["ped_num_pedido"] ?></td>
                <td><?= $detalle_pedido["ped_tipo_compra"] ?></td>
                <td><?= $detalle_pedido["ped_estado_pedido"] ?></td>                
                <td><?= $detalle_pedido["ped_detalles"] ?></td>                
                <td><?= $detalle_pedido["tipa_pago"] ?></td>
                <td><?= $detalle_pedido["ticon_consumo"] ?></td>
                <td><a href="detalle_pedido_editar_html.php?depe_id=<?= $detalle_pedido['depe_id'] ?>" class="btn btn-warning">Editar</a></td>
                <td><a href="detalle_pedido_eliminar_html.php?depe_id=<?= $detalle_pedido['depe_id'] ?>" class="btn btn-danger">Eliminar</a></td>
              </tr>
										<?php endforeach ?>
									</tbody>
                </table>
               </div>
             </div>
            </div>
          </main>
          <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../../js/datatables-simple-demo.js"></script>
    </body>
</html>


