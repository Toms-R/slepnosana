<body>
<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <h2>Pievienot jaunu objektu</h2>
        </div>
    </div>
 </div>
<div class="container form-page">
    <div class="row">
        <div class="col">
            <div class="form">
                <form name="checkListForm">
                    <label for="latitude">Ievadi latitūdi</label>
                    <input type="text" name="latitude" value="<?php echo $latitude ?>"/>
                    <label for="longitude">Ievadi longitūdi</label>
                    <input type="text" name="longitude" value="<?php echo $longitude ?>"/>
                    <label for="place_name">Ievadi veitas nosaukumu</label>
                    <input type="text" name="place_name" value="<?php echo $place_name ?>"/>
                    <label for="points">Punkti par vietas apmeklēšanu</label>
                    <input type="text" name="points" value="<?php echo $points ?>"/>
                    <label for="about_place">Vietas apraksts</label>
                    <input type="text" name="about_place" value="<?php echo $about_place ?>"/>
                </form>
                    <?php
                        if(empty($_GET['id'])):
                    ?>
                        <div id="add-place" class="align-middle">
                            Pievienot
                        </div>
                    <?php
                        endif;
                    ?>
            </div>
        </div>
    </div>
</div>

<script
    src="/assets/scripts.js">
</script>

</body>
</html>
