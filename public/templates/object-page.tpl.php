<body>
<div class="container">
  <div id="floating-panel d-flex justify-content-center container-heading">
    <h2>Atrodi maršrutu uz tuvāko objektu</h2>
      <select id="end">
        <option value="">Izvēlies šeit</option>
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
  async>
</script>
<script
  src="/assets/scripts.js">
</script>
</body>
</html>
