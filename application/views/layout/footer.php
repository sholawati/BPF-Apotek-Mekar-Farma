        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
            </div>
            <strong>Copyright &copy; 2022 <a href="">Apotek Mekar Farma</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="<?= base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url('assets/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url('assets/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url('assets/') ?>plugins/jszip/jszip.min.js"></script>
        <script src="<?= base_url('assets/') ?>plugins/pdfmake/pdfmake.min.js"></script>
        <script src="<?= base_url('assets/') ?>plugins/pdfmake/vfs_fonts.js"></script>
        <script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

        <script src="<?= base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>

        <!-- AdminLTE App -->
        <script src="<?= base_url('assets/') ?>dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url('assets/') ?>dist/js/demo.js"></script>
        <!-- Page specific script -->
        <script>
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
})
        </script>
        <script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": [{
                extend: 'pdfHtml5',
                text: "Export to PDF",
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5],
                    stripHtml: false,
                },
            }
            // "copy", "csv", "excel", "pdf", "print", "colvis"
        ],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
        </script>
        <script>
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
})
$(document).ready(function() {
    $("#jumlah").on('keydown keyup change blur', function() {
        var harga = $("#harga").val();
        var jumlah = $("#jumlah").val();
        var total = parseInt(harga) * parseInt(jumlah);
        $("#total").val(total);
        if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
            alert('stok tidak tersedia! stok tersedia : ' + parseInt($('input[name="stok"]').val()))
            reset()
        }
    });

    function reset() {
        $('input[name="jumlah"]').val('')
        $('input[name="total"]').val('')
    }
})
        </script>
        <script type="text/javascript">
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            <?php
                        foreach ($totalb as $data) {
                            echo "'" . $data['obat'] . "',";
                        }
                        ?>
        ],
        datasets: [{
            label: 'Jumlah Obat Terjual',
            backgroundColor: "#4e73df",
            hoverBackgroundColor: "#2e59d9",
            borderColor: "#4e73df",
            data: [
                <?php
                            foreach ($totalb as $data) {
                                echo $data['jum'] . ", ";
                            }
                            ?>
            ]
        }]
    },
    options: {
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0
            }
        },
        scales: {
            xAxes: [{
                time: {
                    unit: 'obat'
                },
                gridLines: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    maxTicksLimit: 20
                },
                maxBarThickness: 50,
            }],
            yAxes: [{
                gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                }
            }],
        },
        tooltips: {
            titleMarginBottom: 10,
            titleFontColor: '#6e707e',
            titleFontSize: 14,
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
        },
    }
});
        </script>
        </body>

        </html>