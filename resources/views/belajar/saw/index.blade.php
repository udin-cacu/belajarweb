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
<div class="header bg-survey pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
      <!-- Card stats -->
      <div class="row">
        <div class="col-12">
          <div style="font-size: 24px;font-weight: bold;color: white;">
            SPK SAW - Simple Additive Weighting
          </div>
          <hr>
          <div style="font-size: 12px;color: white;">
            List data Pengolahan SPK SAW - Simple Additive Weighting.
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
        <!-- Data Mentah -->
        <h2>Data Mentah</h2>
        <hr>
        <div class="table-responsive">          
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        @foreach ($kriterias as $kriteria)
                            <th>{{ $kriteria->nama }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alternatifs as $alternatif)
                        <tr>
                            <td>{{ $alternatif->nama }}</td>
                            @foreach ($kriterias as $kriteria)
                                <td>{{ $nilai[$alternatif->id][$kriteria->id] ?? '-' }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>
        <!-- Normalisasi -->
        <h2>Normalisasi</h2>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        @foreach ($kriterias as $kriteria)
                            <th>{{ $kriteria->nama }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alternatifs as $alternatif)
                        <tr>
                            <td>{{ $alternatif->nama }}</td>
                            @foreach ($kriterias as $kriteria)
                                <td>{{ number_format($normalisasi[$alternatif->id][$kriteria->id], 4) }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>
        <!-- Perhitungan Nilai Akhir -->
        <h2>Perhitungan Nilai Akhir</h2>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ranking as $rank)
                        <tr>
                            <td>{{ $rank['alternatif'] }}</td>
                            <td>{{ number_format($rank['nilai'], 4) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>
        <!-- Ranking -->
        <h2>Ranking</h2>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Peringkat</th>
                        <th>Alternatif</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ranking as $index => $rank)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $rank['alternatif'] }}</td>
                            <td>{{ number_format($rank['nilai'], 4) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
      <br><br>
    </div>
  </div>
</div>
@include('belajar.footer')  
