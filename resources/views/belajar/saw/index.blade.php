<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK SAW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="container py-4">
    <h1 class="mb-4">SPK SAW - Simple Additive Weighting</h1>
    <hr>
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
</body>
</html>
