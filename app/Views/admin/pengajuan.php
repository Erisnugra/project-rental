<!doctype html>
<html lang="en" class="no-js">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>Rental Mobil | Admin Kelola Pengajuan </title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="css/fileinput.min.css">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }

        .succWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }
    </style>

</head>

<body>


    <div class="ts-main-content">

        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Kelola Pengajuan</h2>

                        <!-- Zero Configuration Table -->
                        <div class="panel panel-default">
                            <div class="panel-heading">Daftar Sewa</div>
                            <div class="panel-body">
                                <div class="errorWrap"><strong></strong></div>
                                <div class="succWrap"><strong></strong></div>
                                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr align="center">
                                            <th>No</th>
                                            <th>Kode Sewa</th>
                                            <th>Mobil</th>
                                            <th>Tgl. Mulai</th>
                                            <th>Tgl. Selesai</th>
                                            <th>Total</th>
                                            <th>Penyewa</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr align="center">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><a href="" data-toggle="" data-load-id="" data-remote-target="#myModal .modal-body"></a></td>
                                            <td></td>
                                            <td>
                                                <a href="" data-toggle="" data-load-code="" data-remote-target=""><span class=""></span></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <!-- Large modal -->
                                <div class="modal fade bs-example-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p>One fine body…</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Large modal -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>
    <script>
        var app = {
            code: '0'
        };
        $('[data-load-code]').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var code = $this.data('load-code');
            if (code) {
                $($this.data('remote-target')).load('sewaview.php?code=' + code);
                app.code = code;

            }
        });
        $('[data-load-id]').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var code = $this.data('load-id');
            if (code) {
                $($this.data('remote-target')).load('userview.php?code=' + code);
                app.code = code;

            }
        });
    </script>
</body>

</html>