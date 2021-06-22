<?php
$jml_pasien = mysqli_query($koneksi,"select * from pasien");
$count_pasien = mysqli_num_rows($jml_pasien); 

$pasien_masuk = mysqli_query($koneksi,"select * from psn_masuk where status = 'on'");
$count_masuk = mysqli_num_rows($pasien_masuk); 

$pasien_keluar = mysqli_query($koneksi,"select * from psn_keluar");
$count_keluar = mysqli_num_rows($pasien_keluar); 

$ruangan = mysqli_query($koneksi,"select * from ruangan where status = 'Kosong'");
$count_ruangan = mysqli_num_rows($ruangan); 

$query_jan = mysqli_query($koneksi, "select MONTH(tgl_masuk) from psn_masuk where MONTH(tgl_masuk) = 1");
$jan = mysqli_num_rows($query_jan);

$query_feb = mysqli_query($koneksi, "select MONTH(tgl_masuk) from psn_masuk where MONTH(tgl_masuk) = 2");
$feb = mysqli_num_rows($query_feb);

$query_mar = mysqli_query($koneksi, "select MONTH(tgl_masuk) from psn_masuk where MONTH(tgl_masuk) = 3");
$mar = mysqli_num_rows($query_mar);

$query_apr = mysqli_query($koneksi, "select MONTH(tgl_masuk) from psn_masuk where MONTH(tgl_masuk) = 4");
$apr = mysqli_num_rows($query_apr);

$query_mei = mysqli_query($koneksi, "select MONTH(tgl_masuk) from psn_masuk where MONTH(tgl_masuk) = 5");
$mei = mysqli_num_rows($query_mei);

$query_jun = mysqli_query($koneksi, "select MONTH(tgl_masuk) from psn_masuk where MONTH(tgl_masuk) = 6");
$jun= mysqli_num_rows($query_jun);

$query_jul = mysqli_query($koneksi, "select MONTH(tgl_masuk) from psn_masuk where MONTH(tgl_masuk) = 7");
$jul= mysqli_num_rows($query_jul);

$query_agu = mysqli_query($koneksi, "select MONTH(tgl_masuk) from psn_masuk where MONTH(tgl_masuk) = 8");
$agu= mysqli_num_rows($query_agu);

$query_sep = mysqli_query($koneksi, "select MONTH(tgl_masuk) from psn_masuk where MONTH(tgl_masuk) = 9");
$sep= mysqli_num_rows($query_sep);

$query_okt = mysqli_query($koneksi, "select MONTH(tgl_masuk) from psn_masuk where MONTH(tgl_masuk) = 10");
$okt= mysqli_num_rows($query_okt);

$query_nov = mysqli_query($koneksi, "select MONTH(tgl_masuk) from psn_masuk where MONTH(tgl_masuk) = 11");
$nov= mysqli_num_rows($query_nov);

$query_des = mysqli_query($koneksi, "select MONTH(tgl_masuk) from psn_masuk where MONTH(tgl_masuk) = 12");
$des= mysqli_num_rows($query_des);
?>

<div class="row mt-4">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL."index.php?page=dashboard"; ?>">Dashboard</a></li>
    </ol>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-procedures"></i>
                </div>
                <div class="mr-5">
                    <h5><?php echo $count_pasien ?>&nbsp;Pasien</h5>
                </div>
            </div>
            <a class="card-footer text-white clearfix small z-1"
                href="<?php echo BASE_URL."index.php?page=pasien"; ?>">
                <span class="float-left" >View Details</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </div>
                <div class="mr-5">
                    <h5><?php echo $count_masuk?>&nbsp;Pasien Masuk</h5>
                </div>
            </div>
            <a class="card-footer text-white clearfix small z-1"
                href="<?php echo BASE_URL."index.php?page=pasien_masuk"; ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="far fa-arrow-alt-circle-up"></i>
                </div>
                <div class="mr-5">
                    <h5><?php echo $count_keluar?>&nbsp;Pasien Keluar</h5>
                </div>
            </div>
            <a class="card-footer text-white clearfix small z-1"
                href="<?php echo BASE_URL."index.php?page=pasien_keluar"; ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-bed"></i>
                </div>
                <div class="mr-5">
                    <h5><?php echo $count_ruangan?>&nbsp;Ruangan</h5>
                </div>
            </div>
            <a class="card-footer text-white clearfix small z-1"
                href="<?php echo BASE_URL."index.php?page=ruangan"; ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
    <hr>
</div>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Grafik</h1>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">

                            <!-- Bar Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Line Chart Pasien</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="barPasien"></canvas>
                                        <script>
                        var ctx = document.getElementById("barPasien").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                                datasets: [{
                                    label: 'Grafik Pasien',
                                    data: [<?php echo json_encode($jan);?>, <?php echo json_encode($feb);?>, <?php echo json_encode($mar);?>, <?php echo json_encode($apr);?>, <?php echo json_encode($mei);?>, <?php echo json_encode($jun);?>, <?php echo json_encode($jul);?>, <?php echo json_encode($agu);?>, <?php echo json_encode($sep);?>, <?php echo json_encode($okt);?>, <?php echo json_encode($nov);?>, <?php echo json_encode($des);?>],
                                    backgroundColor: 'rgba(255, 99, 132, 1)',
                                    borderColor: 'rgba(255,99,132,1)',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                        });
                    </script>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                        </div>

                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Pie Chart Jenis Kelamin</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4">
                                        <canvas id="myPieChart"></canvas>
                                        <?php 
                                        //ambil data jenis kelamin Laki-laki
                                        $laki = mysqli_query($koneksi, "SELECT * FROM pasien WHERE jenis_kelamin='Laki-laki'");
                                        $count_laki = mysqli_num_rows($laki);
                                        //ambil data jenis kelamin Perempuan
                                        $perempuan = mysqli_query($koneksi, "SELECT * FROM pasien WHERE jenis_kelamin='Perempuan'");
                                        $count_perempuan = mysqli_num_rows($perempuan);
                                        ?>
                                        <script>
                                            var config = {
                                                type: 'pie',
                                                data: {
                                                    datasets: [{
                                                        data:[<?php echo json_encode($count_laki); ?>, <?php echo json_encode($count_perempuan); ?>],
                                                        backgroundColor: [
                                                        'rgba(52, 235, 91, 0.2)',
                                                        'rgba(255, 99, 132, 0.2)',
                                                        ],
                                                        borderColor: [
                                                        'rgba(52, 235, 91, 1)',
                                                        'rgba(255,99,132,1)',
                                                        ],
                                                        label: 'jenis_kelamin'
                                                    }],
                                                    labels: ['Laki-laki', 'Perempuan']},
                                                options: {
                                                    responsive: true
                                                }
                                            };

                                            window.onload = function() {
                                                var ctx = document.getElementById('myPieChart').getContext('2d');
                                                window.myPie = new Chart(ctx, config);
                                            };

                                            document.getElementById('randomizeData').addEventListener('click', function() {
                                                config.data.datasets.forEach(function(dataset) {
                                                    dataset.data = dataset.data.map(function() {
                                                        return randomScalingFactor();
                                                    });
                                                });

                                                window.myPie.update();
                                            });

                                            var colorNames = Object.keys(window.chartColors);
                                            document.getElementById('addDataset').addEventListener('click', function() {
                                                var newDataset = {
                                                    backgroundColor: [],
                                                    data: [],
                                                    label: 'New dataset ' + config.data.datasets.length,
                                                };

                                                for (var index = 0; index < config.data.labels.length; ++index) {
                                                    newDataset.data.push(randomScalingFactor());

                                                    var colorName = colorNames[index % colorNames.length];
                                                    var newColor = window.chartColors[colorName];
                                                    newDataset.backgroundColor.push(newColor);
                                                }

                                                config.data.datasets.push(newDataset);
                                                window.myPie.update();
                                            });

                                            document.getElementById('removeDataset').addEventListener('click', function() {
                                                config.data.datasets.splice(0, 1);
                                                window.myPie.update();
                                            });
                                        </script>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

<style>
.card-body-icon{
    position: absolute;
    z-index: 0;
    top: 1px;
    right: 20px;
    opacity: 0.4;
    font-size: 80px;
}
</style>