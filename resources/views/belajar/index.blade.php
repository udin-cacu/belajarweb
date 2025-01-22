@include('belajar.header')
<!-- Header -->
<style>
#customers {
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 12px 8px 12px 8px;
  font-size: 12px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #dd3343;
  color: white;
}
</style>
<div class="header bg-survey pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
      <!-- Card stats -->
      <div class="row">
        <div class="col-xl-4">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Ayat Suci Al-Quran</h5>
                  <br>
                  <span class="h2 font-weight-bold mb-0">Ayat Suci Al-Quran</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                    <i class="fas fa-book"></i>
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Doa Harian</h5>
                  <br>
                  <span class="h2 font-weight-bold mb-0"> Doa Harian</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                    <i class="fas fa-users"></i>
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Jadwal Sholat</h5>
                  <br>
                  <span class="h2 font-weight-bold mb-0"> Jadwal Sholat</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                    <i class="fas fa-bullhorn"></i>
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
@include('belajar.footer')  

<script type="text/javascript">
  
  
</script>   