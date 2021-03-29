<body onload="getAllEntries()">
<div class="modal fade" id="exampleModal" data-id="1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Labot ierakstu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div id="modal-places">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn " id="add-place" data-dismiss="modal">Aizvērt</button>
        <button type="button" class="btn " id="add-place" onclick="editCurrentPlace()">Saglabāt</button>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col d-flex justify-content-center">
      <h2>Vietu labošana</h2>
    </div>
  </div>
</div>
<div class="container form-page">
  <div class="row">
    <div class="col">
      <ul id="places">
      </ul>
    </div>
  </div>
</div>

<script src="/assets/scripts.js"></script>
</body>
</html>
