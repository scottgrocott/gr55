<?php
if(isset($_REQUEST['song_id'])){
$song_id = $_REQUEST['song_id'];
}else{
  $song_id = 0;
}


?>


<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="UTF-8">
    <title>WebMidi.js Quick Start</title>

    <script src="webmidi.iife.js"></script>

    <script>

WebMidi
  .enable()
  .then(onEnabled)
  .catch(err => alert(err));

function onEnabled() {
  
  // Inputs
  WebMidi.inputs.forEach(input => console.log(input.manufacturer, input.name));
  
  // Outputs
  WebMidi.outputs.forEach(output => console.log(output.manufacturer, output.name));
      const mySynth2 = WebMidi.getOutputByName("GR-55");
      const mySynth = WebMidi.getOutputByName("2- GR-55");
       mySynth.sendProgramChange(<?php echo $song_id?>);
       mySynth2.sendProgramChange(<?php echo $song_id?>);
}
       

      

    </script>

  </head>

  <body>
    debug<br>
    <?php echo $song_id?>


    <!--  

1100nnnn	0ppppppp	Program Change. This message sent when the patch number changes. (ppppppp) is the new program number.

Decimal	Binary	Hex	Value	Used As
0	00000000	00	Bank Select	0-127	MSB
    -->
  </body>

</html>