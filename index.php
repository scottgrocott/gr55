<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="UTF-8">
    <title>GR-55 Navigator</title>

   

    <script>

function setSong(theid,el){
//alert(el.innerHTML);
    document.getElementById('theiframe').src = '/action.php?song_id=' + theid;
}

    </script>

  </head>
  
  <body>
    <h1>GR-55 Navigator</h1>
<input type="text" id="songnumber"><button onClick="setSong(document.getElementById('songnumber').value,this);">test</button>
<br/>
<ol id="songlist">
  <li onClick="setSong(11,this);">2 Tickets to Paradise - Eddie Money</li>
  <li onClick="setSong(11,this);">867-5309 (Jenny) - Tommy Tuetone</li>
  <li onClick="setSong(10,this);">Another One Bites the Dust - Queen</li>
  <li onClick="setSong(60,this);">Billy Jean - Michael Jackson</li>
  <li onClick="setSong(0,this);">Birthday - The Beatles</li>
  <li onClick="setSong(42,this);">Cars - Gary Newman</li>
  <li onClick="setSong(11,this);">Dancing with Myself - Billy Idol</li>
  <li onClick="setSong(46,this);">Don't Change - INXS</li>
  <li onClick="setSong(5,this);">Don't You Forget About Me - Simple Minds</li>
  <li onClick="setSong(45,this);">Enjoy the Silence - Depech Mode</li>
  <li onClick="setSong(41,this);">Everybody Wants to Rule the World - Tears for Fears</li>
  <li onClick="setSong(15,this);">Faith - George Michael</li>
  <li onClick="setSong(33,this);">Give it to me Baby - Rick James</li>
  <li onClick="setSong(0,this);">Hot,Hot,Hot - The Cure</li>
  <li onClick="setSong(5,this);">Hungry Like the Wolf - Duran Duran</li>
  <li onClick="setSong(10,this);">I Can't Go for That - Hall &amp; Oats</li>
  <li onClick="setSong(10,this);">Jessie's Girl - Rick Springfield</li>
  <li onClick="setSong(39,this);">Just Like Heaven - The Cure</li>
  <li onClick="setSong(18,this);">Just What I Needed - The Cars</li>
  <li onClick="setSong(34,this);">Kiss - Prince</li>
  <li onClick="setSong(1,this);">Let's Dance - David Bowie</li>
  <li onClick="setSong(29,this);">Let's Go Crazy - Prince</li>
  <li onClick="setSong(26,this);">Lovin,Touchin,Squeezin - Journey</li>
  <li onClick="setSong(27,this);">Melt With You - Modern English</li>
  <li onClick="setSong(10,this);">My Sharona - The Knack</li>
  <li onClick="setSong(10,this);">Need You Tonight - INXS</li>
  <li onClick="setSong(1,this);">New Sensation - INXS</li>
  <li onClick="setSong(11,this);">One Thing Leads to Another - The Fixx</li>
  <li onClick="setSong(9,this);">Policy of Truth - Depeche Mode</li>
  <li onClick="setSong(32,this);">Power of Love - Huey Lewis &amp; the News</li>
  <li onClick="setSong(2,this);">Pump it Up - Elvis Costello</li>
  <li onClick="setSong(10,this);">Rapper's Delight - Sugarhill Gang</li>
  <li onClick="setSong(9,this);">Relax - Frankie Goes..</li>
  <li onClick="setSong(1,this);">Save it for Later - English Beat</li>
  <li onClick="setSong(24,this);">She Drives Me Crazy - Fine Young Cannabals</li>
  <li onClick="setSong(117,this);">Should I Stay or Should I Go - The Clash</li>
  <li onClick="setSong(44,this);">Spin Me Round - Dead or Alive</li>
  <li onClick="setSong(8,this);">Summer of 69 - Bryan Adams</li>
  <li onClick="setSong(35,this);">Super Freak - Rick James</li>
  <li onClick="setSong(36,this);">Take On Me - AhHa</li>
  <li onClick="setSong(37,this);">Urgent - Foreigner</li>
  <li onClick="setSong(3,this);">What I like about you - The Romantics</li>
  <li onClick="setSong(4,this);">Whip it - Devo</li>
  <li onClick="setSong(121,this);">White Wedding - Billy Idol</li>
  <li onClick="setSong(28,this);">Working for the Weekend - Loverboy</li>
  <li onClick="setSong(43,this);">You're All I've Got Tonight - The Cars</li>
</ol>
<iframe src="/action.php?song_id=0" id="theiframe">

</body>

</html>