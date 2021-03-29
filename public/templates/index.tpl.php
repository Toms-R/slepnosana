<body>
<div class="container-fluid slepnosana-container hover-fade">
  <div class="layer">
      <div class="centered">
        <h1  data-aos="fade-up" data-aos-duration="3000">Slēpņošana</h1>
      </div>
    <div class="row">
      <div class="col d-flex justify-content-center">
      </div>
    </div>
  </div>
</div>
<div class="container-fluid slepnosana-container-clean">
  <div class="row d-flex justify-content-center container-heading">
    <h2 data-aos="fade-right" data-aos-duration="1500">Meklē sev tuvāko apskates punktu</h2>
  </div>
  <div class="row">
    <div class="col d-flex justify-content-center">
      <div id="map" ></div>
    </div>
  </div>
  <div class="row d-flex justify-content-center container-heading">
      <h3>Dodoties uz apskates objektu meklē QR kodu un saņem punktus!</h3>
  </div>
</div>
<div class="container-fluid slepnosana-container-2 hover-fade">
  <div class="layer">
    <div class="centered">
              <h1 data-aos="fade-left" data-aos-duration="1500">Apskati</h1>
    </div>
    <div class="row">
      <div class="col d-flex justify-content-center">
      </div>
    </div>
  </div>
</div>
<div class="container slepnosana-container-clean">
  <div class="row d-flex justify-content-center container-heading">
    <h2 data-aos="fade-right" data-aos-duration="1500" >Iepazīsti Latviju</h2>
  </div>
  <div class="row">
    <div class="col-md-6 col-lg-4">
      <div class="card  text-center" data-aos="fade-right"  data-aos-easing="ease-in-sine" data-aos-duration="1500">
        <i class="fa fa-car fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
          <div class="card-body blockquote">
            <p class="card-text">Dodies uz kādu no kartē atzīmētajiem punktiem.</p>
          </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="card  text-center" data-aos="fade-up"  data-aos-easing="ease-in-sine" data-aos-duration="1500">
        <i class="fa fa-qrcode fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
          <div class="card-body blockquote">
            <p class="card-text">Noskenē QR kodu, kas atrodas izvēlētajā vietā un saņem punktus par to</p>
          </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="card  text-center" data-aos="fade-left"  data-aos-easing="ease-in-sine" data-aos-duration="1500">
        <i class="fa fa-map-marker fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
          <div class="card-body blockquote">
            <p class="card-text">Uzzini vairāk informācijas par sevis izvēlēto vietu</p>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid slepnosana-container-3 hover-fade">
  <div class="layer">
    <div class="centered">
      <h1 data-aos="fade-left" data-aos-duration="1500">Iepazīsti</h1>
    </div>
    <div class="row">
      <div class="col d-flex justify-content-center">
      </div>
    </div>
  </div>
</div>
<div class="container slepnosana-container-clean">
  <div class="row d-flex justify-content-center container-heading">
    <h2 data-aos="fade-right" data-aos-duration="1500">Latvijas dažādība</h2>
  </div>
  <div class="row">
    <div class="col d-flex justify-content-center">
    </div>
  </div>
  <div class="row d-flex justify-content-center container-heading">
    <h4>Latvija piedāvā daudz uz dažādus apskates objektus. Gadalaikiem mainoties, katram apskates objektam mainās tā noskaņa un paver pavisam citu skatījumu uz to. Iepazīsim Latviju kopā! </h4>
  </div>
</div>
<div class="container-fluid slepnosana-container-4 hover-fade">
  <div class="layer">
    <div class="centered">
      <h1 data-aos="fade-left" data-aos-duration="1500">Uzzini</h1>
    </div>
    <div class="row">
      <div class="col d-flex justify-content-center">
      </div>
    </div>
  </div>
</div>

<script>
  AOS.init();
</script>
<?php include '../config/config.php' ?>
<script
  src="https://maps.googleapis.com/maps/api/js?key=<?php echo $googleAPI; ?>&callback=initMap&libraries=&v=beta&map_ids=e7903b59956c0e74"
  async>
</script>
<script
  src="/assets/functions.js">
</script>
</body>

</html>
