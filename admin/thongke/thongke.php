<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php
$query = $mysqli->query("SELECT ten_loai,count(hang_hoa.ma_loai) as 'loai' FROM loai,hang_hoa where hang_hoa.ma_loai= loai.ma_loai group by hang_hoa.ma_loai;");
$query1 = $mysqli->query("SELECT count(hoadon.ma_kh) as 'sodonhang',email FROM khach_hang,hoadon WHERE khach_hang.ma_kh = hoadon.ma_kh GROUP BY hoadon.ma_kh;");
$query2 = $mysqli->query("SELECT sum(tongtien) as 'sum',tgdat FROM hoadon where tinhtrang = 3 GROUP BY YEAR(tgdat);");
$query3 = $mysqli->query("SELECT sum(tongtien) as 'sum',tgdat FROM hoadon where tinhtrang = 3 GROUP BY DATE(tgdat);");
$query4 = $mysqli->query("SELECT sum(tongtien) as 'sum',MONTH(tgdat) as 'thang' ,YEAR(tgdat) as 'nam' FROM hoadon where tinhtrang = 3 GROUP BY MONTH(tgdat);");

foreach ($query as $data) {
    $tenloai[] = $data["ten_loai"];
    $tenhh[] = $data["loai"];
}
foreach ($query1 as $data1) {
    $soluong[] = $data1["sodonhang"];
    $email[] = $data1["email"];
}
foreach ($query2 as $data2) {

    $nam[] = $data2["tgdat"];
    $sum[] = $data2["sum"];
}
foreach ($query3 as $data3) {

    $ngay[] = $data3["tgdat"];
    $tong[] = $data3["sum"];
}
foreach ($query4 as $data4) {

    $thang[] = $data4["thang"]." / ".  $data4["nam"];
    $tong2[] = $data4["sum"];
} ?>



<script>
    const ctx = document.getElementById('myChart1');
    const ctx2 = document.getElementById('myChart2');
    const ctx3 = document.getElementById('myChart3');
    const ctx4 = document.getElementById('myChart4');
    const ctx5 = document.getElementById('myChart5');

    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: <?php echo json_encode($tenloai) ?>,
            datasets: [{
                label: '',
                data: <?php echo json_encode($tenhh) ?>,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: <?php echo json_encode($email) ?>,
            datasets: [{
                label: '',
                data: <?php echo json_encode($soluong) ?>,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($nam)  ?>,
            datasets: [{
                label: 'Danh thu',
                data: <?php echo json_encode($sum) ?>,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    new Chart(ctx5, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($ngay)  ?>,
            datasets: [{
                label: 'Danh thu',
                data: <?php echo json_encode($tong) ?>,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    new Chart(ctx4, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($thang)  ?>,
            datasets: [{
                label: 'Danh thu',
                data: <?php echo json_encode($tong2) ?>,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>