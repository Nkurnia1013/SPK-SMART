<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>

<body style="background-image: url('mine/bg/blue.png');background-size: 100%">
    <div class="container-fluid " style="padding-right: 8vw;padding-left: 8vw;padding-top: 10vh;padding-bottom: 10vh">
        <div class="row  align-items-center " >
            <?php if (isset($Session['admin'])): ?>
            <div class="col-12">
                <div class="d-flex  border-primary border rounded" id="wrapper">
                    <!-- Sidebar -->
                    <?php include 'sidebar.php';?>
                    <!-- /#sidebar-wrapper -->
                    <!-- Page Content -->
                    <div id="page-content-wrapper" class="bg-white">
                        <?php include 'navbar.php';?>
                        <div class="container-fluid">
                            <h4 class="mt-4"><?php echo $data['judul']; ?></h4>
                            <hr>
                            <?php include 'Pages/' . $data['path'] . ".php";?>
                        </div>
                    </div>
                    <!-- /#page-content-wrapper -->
                </div>
            </div>
            <?php else: ?>
            <div class="col-7 mx-auto">
                <div class="card mb-3  rounded" style="margin-top: 20vh">
                    <div class="row no-gutters">
                        <div class="col-md-6 px-5" style="background: url('mine/bg/dinsos.jpeg') ;background-size: 100%">

                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Selamat Datang Kembali

                                </h5>

                                <div class="auto-form-wrapper">
                                    <form action="Login" role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="label">Username</label>
                                            <div class="input-group">
                                                <input type="text" name="user" autocomplete="off" required="" class="form-control" placeholder="Username">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="label">Password</label>
                                            <div class="input-group">
                                                <input type="password" name="pass" autocomplete="off" required="" class="form-control" placeholder="*********">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="label">Periode</label>
                                            <div class="input-group">
                                                <input type="number" name="tahun" autocomplete="off" required="" class="form-control" placeholder="2020">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="login" value="1" class="btn btn-primary submit-btn btn-block">Login</button>
                                        </div>
                                         <small class="h3 text-justify text-dark ">“<?php echo $data['quote']->quote; ?>” <small><strong><i><?php echo $data['quote']->by; ?></i></strong></small></small>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>

    <!-- /#wrapper -->
    <!-- Bootstrap core JavaScript -->
    <?php include 'js.php';?>
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <script type="text/javascript">
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
    <script type="text/javascript">
    var aneh;
    $(document).ready(function() {

        aneh = $('.tb').DataTable({
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.childRowImmediate,
                    type: 'column',
                    renderer: function(api, rowIdx, columns) {
                        var data = $.map(columns, function(col, i) {
                            return col.hidden ?
                                '<li  class="" data-dtr-index="1" data-dt-row="' + col.rowIndex + '" data-dt-column="' + col.columnIndex + '">' +
                                '<div class="d-flex justify-content-between" >' +

                                '<span class="dtr-title">' + col.title + ':' + '</span> ' +
                                '<span class="dtr-data  text-break text-wrap">' + col.data + '</span>' +
                                '</li></div>' :
                                '';
                        }).join('');

                        return data ?
                            $('<ul style="display:block;" class="dtr-details" />').append(data) :
                            false;
                    }
                }
            },
            "dom": '<"p-2 d-flex justify-content-between" f>t<"card-body d-flex justify-content-between" ip>',
            "lengthMenu": [
                [5, 10, -1],
                [5, 10, "All"]
            ],
            "language": {
                "paginate": {
                    "previous": "<",
                    "next": ">",
                }
            }
        });

    });
    </script>
</body>

</html>