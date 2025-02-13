@include('belajar.header')
<!-- Header -->
<style>
#customers {
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  font-size: 12px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #399e4b !important;
  color: white;
}

.btn:not(:last-child) {
    margin-right: .2rem;
}
td {
        white-space: nowrap;
    }

</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<div class="header bg-survey pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
      <!-- Card stats -->
      <div class="row">
        <div class="col-12">
          <div style="font-size: 24px;font-weight: bold;color: white;">
            Analisa Penjualan
          </div>
          <hr>
          <div style="font-size: 12px;color: white;">
            List data Analisa Penjualan Bulanan.
          </div>
          <hr>
        </div>
      </div>
      <hr>
    </div>
  </div>
</div>
<div class="container-fluid mt--9">
  <div class="row">
    <div class="col-xl-12">
      <div class="card shadow" style="padding: 1.5rem;">
        <h2>JUMLAH PENJUALAN PRODUK PERBULAN</h2>
        <hr>
        <div class="table-responsive">          
            <canvas id="jumlahChart" width="400" height="200"></canvas>
        </div>
      </div>
    </div>

    <div class="col-xl-12">
      <div class="card shadow" style="padding: 1.5rem;">
        <h2>TOTAL PENJUALAN PERBULAN</h2>
        <hr>
        <div class="table-responsive">          
            <canvas id="penjualanChart" width="400" height="200"></canvas>
        </div>
      </div>
    </div>
  </div>
  <br><br>
@include('belajar.footer')  
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