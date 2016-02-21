<!doctype html>
<html>
<head>
  <title>PiZeta Lights</title>
  <link rel="apple-touch-icon" href="touch-icon-iphone.png">
  <link rel="apple-touch-startup-image" href="touch-icon-iphone.png">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/fabric.js/1.2.0/fabric.all.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.js"></script>
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.css" />
  <script src="lights.js"></script>
</head>
<body><center>
<div><?php
include("checkDNS.php");
?></div>
  <div id="status">Connecting...</div>
  <canvas id="room" width="300" height="400"></canvas>
  ​
  <div class="btn-group" data-toggle="buttons" id="groups">
    <label class="btn btn-primary">
      <input type="radio" name="options" id="option1" checked="checked" value="selected" /> Selected Lights
    </label>
    <label class="btn btn-primary">
      <input type="radio" name="options" id="option2" value="0"/> All Lights
    </label>
  </div>
  <div id="colorpresets">
    <button class="btn" style="background:#FDFEFB">Normal</button>
    <button class="btn" style="background:#FFFFFF">White</button>
    <button class="btn" style="background:#FF0000">Red</button>
    <button class="btn" style="background:#00FF00">Green</button>
    <button class="btn" style="background:#0000FF">Blue</button>
    <button class="btn" style="background:#000000" data-state="off">Off</button>
  </div>
  <div>
    <input type='text' id="customColor" />
  </div>
  <div style="max-height:300px; overflow: scroll;">
<?php
include("counter.php");
?>
  </div>
</center></body>
</html>
