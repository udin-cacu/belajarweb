<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisa Penjualan</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <h1>Analisa Penjualan Bulanan</h1>
    <canvas id="jumlahChart" width="400" height="200"></canvas>
    <canvas id="penjualanChart" width="400" height="200"></canvas>

    <script>
        $(document).ready(function () {
            $.ajax({
                url: "{{ route('penjualan.data') }}",
                method: "GET",
                success: function (data) {
                    const ctxJumlah = document.getElementById('jumlahChart').getContext('2d');
                    const ctxPenjualan = document.getElementById('penjualanChart').getContext('2d');

                    // Diagram Jumlah Produk Terjual
                    new Chart(ctxJumlah, {
                        type: 'bar',
                        data: {
                            labels: data.labels,
                            datasets: [{
                                label: 'Jumlah Produk Terjual',
                                data: data.jumlah,
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
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

                    // Diagram Total Penjualan
                    new Chart(ctxPenjualan, {
                        type: 'line',
                        data: {
                            labels: data.labels,
                            datasets: [{
                                label: 'Total Penjualan (Rp)',
                                data: data.penjualan,
                                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                                borderColor: 'rgba(153, 102, 255, 1)',
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
                }
            });
        });
    </script>
</body>
</html>
