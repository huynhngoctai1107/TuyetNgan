
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php
$query = $mysqli->query("SELECT ten_loai,count(hang_hoa.ma_loai) as 'loai' FROM loai,hang_hoa where hang_hoa.ma_loai= loai.ma_loai group by hang_hoa.ma_loai;");
$query1 = $mysqli->query("SELECT count(hoadon.ma_kh) as 'sodonhang',email FROM khach_hang,hoadon WHERE khach_hang.ma_kh = hoadon.ma_kh GROUP BY hoadon.ma_kh;");

foreach ($query as $data) {
    $tenloai[] = $data["ten_loai"];
    $tenhh[] = $data["loai"];
}
foreach ($query1 as $data1) {
    $soluong[] = $data1["sodonhang"];
    $email[] = $data1["email"];
} ?>

<script>
    const ctx = document.getElementById('myChart1');
    const ctx2 = document.getElementById('myChart2');
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
</script>