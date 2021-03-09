<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>New Objects</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body >
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pievienot jaunu objektu</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="form">
                    <form name="checkListForm">
                        <label for="latitude">Enter latitude</label>
                        <input type="text" name="latitude" value=""/>
                        <label for="longitude">Enter longitude</label>
                        <input type="text" name="longitude" value=""/>
                        <label for="place_name">Enter Place name</label>
                        <input type="text" name="place_name" value=""/>
                        <label for="points">Enter points</label>
                        <input type="text" name="points" value=""/>
                        <label for="about_place">Enter information about place</label>
                        <input type="text" name="about_place" value=""/>
                    </form>
                    <div id="button" class="align-middle">
                        Pievienot
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/scripts.js"></script>
</body>

</html>
