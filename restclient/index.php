<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rental PS</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center klik_menu" id="#dashboard" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fab fa-playstation"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Rental PS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link klik_menu" id="dashboard" href="#">
                    <i class="fab fa-playstation"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link klik_menu" id="paket" href="#">
                    <i class="fas fa-users"></i>
                    <span>Paket</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link klik_menu" id="barang" href="#">
                    <i class="fas fa-swatchbook"></i>
                    <span>Barang</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                                <img class="img-profile rounded-circle" src="assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid val">

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.val').load('dashboard.php');
            $('.klik_menu').on('click', function() {
                let menu = $(this).attr('id');
                console.log(menu);
                if (menu == "dashboard") {
                    $('.val').load('dashboard.php');
                } else if (menu == "paket") {
                    $('.val').load('paket.php');
                    loadTablePaket();
                } else if (menu == "barang") {
                    $('.val').load('barang.php');
                    loadTableBarang();
                }
            });
            $('.val').on('click', '.addPkt', function() {
                var paket = $('[name="createPaket"]').val();
                var waktu = $('[name="createWaktu"]').val();
                
                $.ajax({
                    type: "POST",
                    url: "http://localhost/rental-ps/Paket",
                    data: {
                        paket: paket,
                        waktu: waktu
                        
                    },
                    dataType: "JSON",
                    headers: {
                        'RENTAL-TOKEN': "RENTAL-2020"
                    },
                    success: function(response) {
                        loadTablePaket();
                        var paket = $('[name="createPaket"]').val("");
                        var waktu = $('[name="createWaktu"]').val("");
                    }
                });
            });
            $('.val').on('click', '.editPkt', function() {
                var id = $(this).attr('key');
                $.ajax({
                    type: "GET",
                    url: `http://localhost/rental-ps/Paket?id_paket=${id}`,
                    dataType: "JSON",
                    headers: {
                        'RENTAL-TOKEN': "RENTAL-2020"
                    },
                    success: function(response) {
                        response.data.forEach(element => {
                            $('[name="id_paket"]').val(element.id_paket);
                            $('[name="updatePaket"]').val(element.paket);
                            $('[name="updateWaktu"]').val(element.paket);
                           
                        });
                    }
                });
            });
            $('.val').on('click', '.updatePkt', function() {
                var id_paket = $('[name="id_paket"]').val();
                var paket = $('[name="updatePaket"]').val();
                var waktu = $('[name="updateWaktu"]').val();
                $.ajax({
                    type: "PUT",
                    url: "http://localhost/rental-ps/Paket",
                    data: {
                        id_paket: id,
                        paket: paket,
                        waktu: waktu
                        
                    },
                    dataType: "JSON",
                    headers: {
                        'RENTAL-TOKEN': "RENTAL-2020"
                    },
                    success: function(response) {
                        loadTablePaket();
                        $('[name="id"]').val("");
                        $('[name="updatePaket"]').val("");
                        $('[name="updateWaktu"]').val("");
                
                        console.log(response);
                    }
                });
            });
            $('.val').on('click', '.deletePkt', function() {
                var id = $(this).attr('key');
                var kondisi = confirm(`apa anda yakin ingin menghapus data ${id}`);
                if (kondisi == false) {
                    return;
                } else {
                    $.ajax({
                        type: "DELETE",
                        url: "http://localhost/rental-ps/Paket",
                        data: {
                            id_paket: id
                        },
                        dataType: "JSON",
                        headers: {
                            'RENTAL-TOKEN': "RENTAL-2020"
                        },
                        success: function(response) {
                            loadTablePaket();
                        }
                    });
                }

            });



            function loadTablePaket() {
                let html = "";
                $.ajax({
                    type: "GET",
                    url: `http://localhost/rental-ps/Paket`,
                    dataType: "JSON",
                    headers: {
                        'RENTAL-TOKEN': "RENTAL-2020"
                    },
                    success: function(response) {
                        let i = 1;
                        response.data.forEach(element => {
                            console.log(element);
                            html += `<tr>
                                        <th scope="row">${i}</th>
                                        <td>${element.id_paket}</td>
                                        <td>${element.paket}</td>
                                        <td>${element.waktu}</td>
                                        <td>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button key="${element.id_paket}" class="btn btn-success btn-sm rounded-0 editPkt" type="button" data-toggle="modal" data-target="#updateModalCenterPkt"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button key="${element.id_paket}" class="btn btn-danger btn-sm rounded-0 deletePkt" type="button"><i class="fa fa-trash"></i></button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>`;
                            i++;
                        });
                        $('#table_paket').html(html);
                    }
                });
            }

            $('.val').on('click', '.create', function() {
                $.ajax({
                    type: "GET",
                    url: `http://localhost/rental-ps/Paket`,
                    dataType: "JSON",
                    headers: {
                        'RENTAL-TOKEN': "RENTAL-2020"
                    },
                    success: function(response) {
                        var html = "<option>Pilih Paket</option>`";
                        response.data.forEach(element => {
                            html += `<option value ="${element.id_paket}">${element.paket}</option>`;
                        });
                        $('.inputPkt').html(html);
                    }
                });
            });

            $('.val').on('click', '.addBrg', function() {
                var id = $('[name="id_paket"]').val();
                var item = $('[name="createItem"]').val();
                var syarat = $('[name="createSyarat"]').val();
                var harga = $('[name="createHarga"]').val();
                $.ajax({
                    type: "POST",
                    url: "http://localhost/rental-ps/Barang",
                    data: {
                        id_barang: id,
                        item: item,
                        syarat: syarat,
                        harga: harga
                    },
                    dataType: "JSON",
                    headers: {
                        'RENTAL-TOKEN': "RENTAL-2020"
                    },
                    success: function(response) {
                        loadTableBarang();
                        $('[name="id_paket"]').val("");
                        $('[name="createItem"]').val("");
                        $('[name="createSyarat"]').val("");
                        $('[name="createHarga"]').val("");
                    }
                });
            });

            $('.val').on('click', '.editBrg', function() {
                $.ajax({
                    type: "GET",
                    url: `http://localhost/rental-ps/Paket`,
                    dataType: "JSON",
                    headers: {
                        'RENTAL-TOKEN': "RENTAL-2020"
                    },
                    success: function(response) {
                        var html = "<option>Pilih Paket</option>`";
                        response.data.forEach(element => {
                            html += `<option value ="${element.id_paket}">${element.paket}</option>`;
                        });
                        $('.inputUpPkt').html(html);
                    }
                });
                var id = $(this).attr('key');

                $.ajax({
                    type: "GET",
                    url: `http://localhost/rental-ps/Barang?id_barang=${id}`,
                    dataType: "JSON",
                    headers: {
                        'RENTAL-TOKEN': "RENTAL-2020"
                    },
                    success: function(response) {
                        response.data.forEach(element => {
                            $('[name="id_barang"]').val(element.id_barang);
                            $('[name="update_id_paket"]').val(element.id_paket);
                            $('[name="updateItem"]').val(element.item);
                            $('[name="updateSyarat"]').val(element.syarat);
                            $('[name="updateHarga"]').val(element.harga);
                        });
                    }
                });
            });

            $('.val').on('click', '.updateBrg', function() {
                var id = $('[name="id_barang"]').val();
                var id_paket = $('[name="update_id_paket"]').val();
                var item= $('[name="updateItem"]').val();
                var syarat = $('[name="updateSyarat"]').val();
                var harga = $('[name="updateHarga"]').val();
                $.ajax({
                    type: "PUT",
                    url: "http://localhost/rental-ps/Barang",
                    data: {
                        id_barang: id,
                        id_paket: id_paket,
                        item: item,
                        syarat: syarat,
                        harga: harga
                    },
                    dataType: "JSON",
                    headers: {
                        'RENTAL-TOKEN': "RENTAL-2020"
                    },

                    success: function(response) {
                        loadTableBarang();
                        $('[name="id"]').val("");
                        $('[name="update_id_paket"]').val("");
                        $('[name="updateItem"]').val("");
                        $('[name="updateSyarat"]').val("");
                        $('[name="updateHarga"]').val("");

                    }
                });
            });

            $('.val').on('click', '.deleteBrg', function() {
                var id = $(this).attr('key');
                var kondisi = confirm(`apa anda yakin ingin menghapus data ${id}`);
                if (kondisi == false) {
                    return;
                } else {
                    $.ajax({
                        type: "DELETE",
                        url: "http://localhost/rental-ps/Barang",
                        data: {
                            id_barang: id
                        },
                        dataType: "JSON",
                        headers: {
                            'RENTAL-TOKEN': "RENTAL-2020"
                        },
                        success: function(response) {
                            loadTableBarang();
                        }
                    });
                }

            });

            function loadTableBarang() {
                let html = "";
                $.ajax({
                    type: "GET",
                    url: `http://localhost/rental-ps/Barang`,
                    dataType: "JSON",
                    headers: {
                        'RENTAL-TOKEN': "RENTAL-2020"
                    },
                    success: function(response) {
                        let i = 1;
                        response.data.forEach(element => {
                            console.log(element);
                            html += `<tr>
                                        <th scope="row">${i}</th>
                                        <td>${element.id_paket}</td>
                                        <td>${element.item}</td>
                                        <td>${element.syarat}</td>
                                        <td>${element.harga}</td>
                                        <td>
                                        <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button key="${element.id_barang}" class="btn btn-success btn-sm rounded-0 editBrg" type="button" data-toggle="modal" data-target="#updateModalCenterBrg"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button key="${element.id_barang}" class="btn btn-danger btn-sm rounded-0 deleteBrg" type="button"><i class="fa fa-trash"></i></button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>`;
                            i++;
                        });
                        $('#table_barang').html(html);
                    }
                });
            }
        });
    </script>
    <td></td>
</body>

</html>