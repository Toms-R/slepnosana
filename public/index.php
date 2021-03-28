<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Slēpņošana</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <link href='https://fonts.googleapis.com/css?family=Blinker' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body >
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
    <?php /*
    <div id="floating-panel">
      <b>Start: </b>
      <select id="start">
        <option value=""></option>
        <!-- <option value="57.31407297501842, 25.269659842787174">Estrāde</option>
        <option value="57.3124866180003, 25.271510707926627">Baznīca</option>
        <option value="Cēsu Vēstures un mākslas muzejs">Cēsu Vēstures un mākslas muzejs</option> -->
      </select>
      <b>End: </b>
      <select id="end">
        <option value=""></option>
        <!-- <option value="57.31407297501842, 25.269659842787174">Estrāde</option>
        <option value="57.3124866180003, 25.271510707926627">Baznīca</option>
        <option value="Cēsu Vēstures un mākslas muzejs">Cēsu Vēstures un mākslas muzejs</option> -->
      </select>
    </div> 
    */ ?>
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
    
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=<?php echo $googleAPI; ?>&callback=initMap&libraries=&v=beta&map_ids=e7903b59956c0e74"
      async
    ></script>
    <script src="/assets/functions.js"></script>
</body>

</html>
