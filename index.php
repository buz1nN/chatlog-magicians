
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="chocomint">
<meta name="description" content="chatlog magician">
<title>Chatlog Magician</title>
<meta name="keywords" content="chatlog magician, chatlog, magician">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="assets/libs.min.css" rel="stylesheet">
<link href="assets/style.min.css" rel="stylesheet">
<link rel="icon" href="img/fav.gif">
</head>
<body>
<br>
<div class="container">
<div class="row header">
	<br>
	<br>
<img alt="image" src="img/buzin.gif" width="143" height="32" class="mx-auto d-block"></img>
<br>
<br>
</div>
<div class="row name">
<div class="col-xs-12">
<input type="hidden" class="form-control" id="name">
</div>
</div>
<br>
<div class="clog_settings">
<div class="row fontsize" id="bal">
<div class="col-xs-12">
<span id="font-label">size (13px):</span><br>
<button class="btn btn-default disabled" type="submit" id="decrease-fontsize">-</button>
<button class="btn btn-default" type="submit" id="reset-fontsize">reset</button>
<button class="btn btn-default" type="submit" id="increase-fontsize">+</button>
</div>
</div>
<div class="row color" id="jobb">
<div class="col-xs-12">
<span>color:</span>
<input type='text' id="color-picker" />
<br>
</div>
</div>
</div>
<center><textarea class="form-control textarea-input" rows="15" placeholder="Votre chatlog ici."></textarea></center>
<br>
<div class="output" id="output"></div>
</div>
<br <div class="col-xs-12">
<center><button id="downloadOutputTransparent" class="btn btn-success">Télécharger logs sans fond</button></center><br>
<center><button id="downloadOutput" class="btn btn-success">Télécharger logs avec fond</button></center>
<script src="assets/img.min.js"></script>
<script src="assets/filesaver.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
					
					 $(document).ready(function() {
						$("#downloadOutput").click(function() {
							//generated").css("background-color", "transparent");
							domtoimage.toBlob(document.getElementById('output'))
							.then(function (blob) {
								window.saveAs(blob, new Date().toLocaleString().replaceAll(",", "_").replaceAll(" ", "_")
																.replaceAll("/", "-").replace("__", "_").replaceAll(":", "-") + "_" + "chatlog.png")
							})
							.then(function(blob) {
								$(".generated").css("background-color","#" + $("#color-picker").spectrum("get").toHex());
							})
						})
						$("#downloadOutputTransparent").click(function() {
							$(".generated").css("background-color", "transparent");
							domtoimage.toBlob(document.getElementById('output'))
							.then(function (blob) {
								window.saveAs(blob, new Date().toLocaleString().replaceAll(",", "_").replaceAll(" ", "_")
																.replaceAll("/", "-").replace("__", "_").replaceAll(":", "-") + "_" + "chatlog.png")
							})
							.then(function(blob) {
								$(".generated").css("background-color","#" + $("#color-picker").spectrum("get").toHex());
							})
						})
					}) 

				</script>
</div>
<script src="assets/json2.min.js"></script>
<script src="assets/jstorage.min.js"></script>
<script src="assets/spectrum.min.js"></script>
<script src="assets/scripts.min.js"></script>

<!-- START THE COPYRIGHT INFO  -->
<section class="py-0 py-xxl-6" id="help">
        <div class="bg-holder" style="background-image:url(assets/img/gallery/footer-bg.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->
<div class="footer-bottom pt-5 pb-5">
    <div class="container">
      <div class="row text-center text-white">
        <div class="col-12">
          <div class="footer-bottom__copyright"><a href=""></a> <p class="text-200 text-center text-md-end"> avec&nbsp;
                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#f00020" viewBox="0 0 16 16">
                  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                </svg>&nbsp;by&nbsp;<a href="https://github.com/buz1nN" target="_blank">buz1n</a><br><br>

          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
