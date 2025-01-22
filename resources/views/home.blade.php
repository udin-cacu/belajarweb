@include('layouts.head')
<style>
#customers {
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 12px 8px 12px 8px;
  font-size: 11px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #399e4b;
  color: white;
}

.nav2 {
    position: fixed;
    bottom: 0;
    left: 15px;
    background-color: #399e4b;
    display: flex;
    overflow-x: auto;

    margin-bottom: 20px;
    border-radius: 3rem;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.4);
    height: 55px;
    width: 55px;
    border-color: whitesmoke;
  }

#profile { overflow-y:scroll }
</style>
<div class="main-content">  
    <div class="container-fluid pt-3 pt-md-8" style="padding-bottom: 8rem;">
      
      <div class="row">
        <div class="col-12">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="card-body shadow-ss" style="border-radius: 15px; background-color: orange;">
                    <h1>Contoh1</h1>
                </div>
                </div>
                <div class="carousel-item">
                  <div class="card-body shadow-ss" style="border-radius: 15px; background-color: orange;">
                    <h1>Contoh2</h1>
                </div>
                </div>
                <div class="carousel-item">
                  <div class="card-body shadow-ss" style="border-radius: 15px; background-color: orange;">
                    <h1>Contoh3</h1>
                </div>
                </div>
              </div>
            </div>            
        </div>
      </div>

      <div class="row pt-3 pt-md-8">
          <div class="col-9">
              <h4>Rekomendasi Untukmu!</h4>
          </div>
          <div class="col-3">
              <a href="">Lainnya &nbsp;<span class="fa fa-arrow-right"></span></a>
          </div>
      </div>

      <div class="row">
        <div class="col-6">
            <div class="card-body shadow-ss" style="border-radius: 15px; background-color: orange;">
                <h1>Contoh</h1>
            </div>
        </div>
        <div class="col-6">
            <div class="card-body shadow-ss" style="border-radius: 15px; background-color: orange;">
                <h1>Contoh</h1>
            </div>
        </div>
        <div class="col-6">
            <div class="card-body shadow-ss" style="border-radius: 15px; background-color: orange;">
                <h1>Contoh</h1>
            </div>
        </div>
        <div class="col-6">
            <div class="card-body shadow-ss" style="border-radius: 15px; background-color: orange;">
                <h1>Contoh</h1>
            </div>
        </div>
      </div>

      <div class="row pt-3 pt-md-8">
          <div class="col-12">
              <h1>BENTAR</h1>
              <p style="font-size: 14px;">Menyediakan layanan bimbel online. <br>
                Untuk persiapan UTBK-SNBT, Ujian Mandiri, SKD CPNS & Kedinasan, RB BUMN, dan PPPK dengan pembelajaran yang berkualitas.
              </p>
              <p>
                  <span class="fa fa-facebook"></span>
              </p>
          </div>
      </div>

    </div>
</div>     



@include('layouts.footer')
<nav class="nav2">
  <div class="nav__link menusxx">
    <a href="/home"><i style="color:white;font-size: 20px;" class="fa fa-home"></i></a>
  </div>
</nav>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry"></script>
<script type="text/javascript">

    


</script>

</body>

</html>
