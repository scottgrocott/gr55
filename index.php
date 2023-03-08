<?php
// This path should point to Composer's autoloader
//require 'vendor/autoload.php';
//$mongo = new MongoDB\Client("mongodb://localhost:27017");
//$collection = $mongo->gr55->patches;
//$result = $collection->find()->toArray();

//print_r($result);

?>

<?php 
$json_url = "http://scottgrocott.com/gr55/api/";
$json = file_get_contents($json_url);
$result = json_decode($json, TRUE);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>GR-55 Navigator</title>

    

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="JZZ-master/javascript/JZZ.js"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      #outputinfo{
        font-size: 15px;
        color:lightgreen;
      }
      #songlist{
        font-size:25px;
      }
    </style>

<script>
/*
function setSong(theid,el){
//alert(el.innerHTML);
document.getElementById('outputinfo').innerHTML = el.innerHTML + ' -' + theid + ' /GR-55 Bank No. ' + (theid + 1);
    document.getElementById('theiframe').src = '/dev.php?song_id=' + theid;
}
*/
    </script>
        <script>
      function setSong(theid,el){  


        const boxes = document.querySelectorAll('#songlist li');

              boxes.forEach(box => {
                box.style.backgroundColor = 'white';
                
              });






        JZZ().or('Cannot start MIDI engine!')
        .openMidiOut().or('MIDI-Out: Cannot open!')
        .and(function(){ console.log('MIDI-Out:', this.name()); });
        //bank(c, kk);
        port = JZZ().openMidiOut(document.getElementById('selectmidiout').value);
        //port2 = JZZ().openMidiOut('2- GR-55');
        document.getElementById('outputinfo').innerHTML =  ' B-0 P-' + (theid + 1) + ' -' + el.innerHTML;
        el.style.backgroundColor = 'lightgreen';
        //document.getElementById('theiframe').src = '/dev.php?song_id=' + theid;
        msg = port.bank(0,0);
        msg = port.program(0,theid);

       // msg2 = port2.bank(0,0);
        //msg2 = port2.program(0,theid);
    } 


        </script>
    <!-- Custom styles for this template -->
    <link href="assets/navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GR-55 Navigator <span id="outputinfo"></span></a><select id="selectmidiout"></select>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </div>
</nav>

<main class="container">



<br/>
<ol id="songlist">
  <?php
  foreach ($result as $document) {
    ?>
<li onClick="setSong(<?php echo $document['program_id']?>,this);"><?php echo $document['name']?></li>
 <?php
    }
  ?>

</ol>

<input type="text" id="songnumber"><button onClick="setSong(document.getElementById('songnumber').value,this);">test</button>









</main>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var selectMidiOut = document.getElementById('selectmidiout');
    var midiOutPort;
    var midiOutName = 'Not available';
    var through = JZZ.Widget();
    JZZ().and(function(){
  var i;
  for (i = 0; i < this.info().outputs.length; i++) {
    selectMidiOut[i] = new Option(this.info().outputs[i].name);
  }
  if (!i) {
    selectMidiOut[i] = new Option('Not available');
  }

});

  midiOutPort = this;
  through.connect(this);
 
  

function changeMidiOut() {
  var name = selectMidiOut.options[selectMidiOut.selectedIndex].value;
  if (name == midiOutName) return;
  if (midiOutPort) through.disconnect(midiOutPort);
  JZZ().openMidiOut(name);
}
    selectMidiOut.addEventListener('change', changeMidiOut);
  </script>
      
  </body>
</html>