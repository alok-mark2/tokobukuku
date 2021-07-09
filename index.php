<!DOCTYPE html>
<?php
include('koneksi.php');
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TokoBukuku</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Data Buku PKW</a>
            <!-- Sidebar Toggle-->
            
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
                            <div class="sb-sidenav-menu-heading"></div>
                            </br></br>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                       
						
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content" >
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabel Buku
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama Buku</th>
                                            <th>Kategori</th>
                                            <th>Penerbit</th>
                                            <th>Harga</th>
                                            <th>Diskon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Buku</th>
                                            <th>Kategori</th>
                                            <th>Penerbit</th>
                                            <th>Harga</th>
                                            <th>Diskon</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
									
									<?php
									$data = mysqli_query($koneksi,"select * from tblTokoBuku");
									while($d = mysqli_fetch_array($data)){
									?>
			
                                        <tr>
                                            <td><?php echo $d['NamaBuku']; ?></td>
                                            <td><?php echo $d['KategoriBuku']; ?></td>
                                            <td><?php echo $d['Penerbit']; ?></td>
                                            <td><?php echo $d['Harga']; ?></td>
                                            <td><?php echo $d['Diskon']; ?></td>
											<td>
												<a  href="edit.php?id=<?php echo $d['ID']; ?>" id="btnEdit" class="btn btn-primary disabled" style="width:100%;"><i class="fas fa-edit" disabled="disabled"></i>Edit</a>
												<a  href="delete.php?id=<?php echo $d['ID']; ?>" id="btnHapus" class="btn btn-danger disabled" style="width:100%;" ><i class="fas fa-eraser" ></i> Hapus</a>
											</td>
                                        </tr>
									<?php
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; UCP2PKW</div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>