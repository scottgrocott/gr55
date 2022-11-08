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
    <title>jzz.js</title>

    

    <script src="/JZZ-master/javascript/JZZ.js"></script>

  </head>

  <body>
    <h1>jzz.js</h1>
    <?php echo $song_id?>

    <script>
JZZ().or('Cannot start MIDI engine!')
     .openMidiOut().or('MIDI-Out: Cannot open!')
     .and(function(){ console.log('MIDI-Out:', this.name()); });
     //bank(c, kk);
     port = JZZ().openMidiOut('GR-55');
     port2 = JZZ().openMidiOut('2- GR-55');

     msg = port.bank(0,0);
     msg = port.program(0,<?php echo $song_id?>);

     msg2 = port2.bank(0,0);
     msg2 = port2.program(0,<?php echo $song_id?>);

        </script>
  </body>

</html>