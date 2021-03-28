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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/styles.css">
</head>

<body>

    <?php 
      require_once "object_display_data.php";
      require_once "../../config/config.php";
    ?>
  <div class="container">
  <div id="floating-panel d-flex justify-content-center container-heading">
    <h2>Atrodi maršrutu uz tuvāko objektu</h2>
      <select id="end">
        <option value="">Izvēlies šeit</option>
        <!-- <option value="57.31407297501842, 25.269659842787174">Estrāde</option>
        <option value="57.3124866180003, 25.271510707926627">Baznīca</option>
        <option value="Cēsu Vēstures un mākslas muzejs">Cēsu Vēstures un mākslas muzejs</option> -->
      </select>
    </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                    <div id="map"></div>
            </div>
        </div>
    </div>
    

    <script
      src="https://maps.googleapis.com/maps/api/js?key=<?php echo $googleAPI; ?>&callback=initMap&libraries=&v=beta&map_ids=e7903b59956c0e74"
      async
    ></script>
    <script src="/assets/scripts.js"></script>
</body>
</html>
