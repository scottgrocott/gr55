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
    <title>WebMidi</title>

    

    <script>

navigator.requestMIDIAccess()
    .then(onMIDISuccess, onMIDIFailure);

function onMIDISuccess(midiAccess) {
    console.log(midiAccess);

    var inputs = midiAccess.inputs;
    var outputs = midiAccess.outputs;
    console.log(outputs);
}

function onMIDIFailure() {
    console.log('Could not access your MIDI devices.');
}


    </script>

  </head>

  <body>
    <h1>WebMidi</h1>
    <?php echo $song_id?>
  </body>

</html>