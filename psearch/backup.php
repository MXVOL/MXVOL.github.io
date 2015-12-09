<?php

require "html_simple_dom.php";
 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
 
function getTitle($Url){
$str = file_get_contents($Url);
if(strlen($str)>0){
    preg_match("/\<title\>(.*)\<\/title\>/",$str,$title);
    return $title[1];
}
}
 
if(isset($_POST["submit"])) {
 
    $co = $_POST["search"];
    $strony = ["http://www.otomoto.pl","http://www.zumi.pl", "http://www.bloog.pl", "http://www.plejada.pl", "http://www.blox.pl", "http://www.gadu-gadu.pl", "http://www.pf.pl", "http://www.money.pl", "http://www.demotywatory.pl", "http://www.home.pl", "http://www.nocoty.pl", "http://www.pudelek.pl", "http://www.nokaut.pl", "http://www.sciaga.pl", "http://www.pkt.pl", "http://www.gratka.pl", "http://www.republika.pl", "http://www.aleseriale.pl", "http://www.wyborcza.pl", "http://www.elektroda.pl", "http://www.era.pl", "http://www.tvn24.pl", "http://www.plotek.pl", "http://www.wizaz.pl", "http://www.teleshow.pl", "http://www.plus.pl", "http://www.edarling.pl", "http://www.fora.pl", "http://www.mbank.pl", "http://www.niewiarygodne.pl", "http://www.pkobp.pl", "http://www.tekstowo.pl", "http://www.playmobile.pl", "http://www.skapiec.pl", "http://www.ingbank.pl", "http://www.gazetapraca.pl", "http://www.sport.pl", "http://www.rozklad-pkp.pl", "http://www.tvp.pl", "http://www.platnosci.pl", "http://www.nazwa.pl", "http://www.akazoo.pl", "http://www.fotka.pl", "http://www.fakt.pl", "http://www.naszemiasto.pl", "http://www.tosiewytnie.pl", "http://www.pekao24.pl", "http://www.cylex.pl", "http://www.sympatia.pl", "http://www.forumogrodnicze.info/", "http://www.fotka.pl/"];
    $wyniki = [];
   
    foreach($strony as $strona) {
        $czy = strpos(file_get_contents($strona), $co);
        if($czy == True) {
            $wyniki[] = $strona;
        }
    }
 
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/960_12_col.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>P-Search</title>
</head>
<body background="5.png">
<div style="display: block; text-align:center; width: 100%; height: 100px;">
<div style="z-index: 99999; text-align:center; margin: 0 auto; padding: 0; width: 728px; height: 0px; display: block; position: relative;">
</div>
        <div class="container_12 clearfix">
            <div class="grid_2 logo">
			<a href="http://www.psearch.esy.es/">
                <img src="logo3.png">
			</a>
            </div>
            <div class="grid_10 bar">
                <nav>
                    <ul>
                        <li><a href="http://www.psearch.esy.es/Publikuj.html">Dodaj do swojej strony</a></li>
						<li><a href="http://www.psearch.esy.es/Dlaczego.html">Dlaczego P-Search</a></li>
                    </ul>
                </nav>
<div style="display: block; text-align:center; width: 100%; height: 100px;">
<div style="z-index: 99999; text-align:center; margin: 0 auto; padding: 0; width: 728px; height: 90px; display: block; position: relative;">
</div>
<img src="logo.png">
    <form action="#" method="post">
        <input type="text" name="search" placeholder="...">
        <input type="submit" name="submit" value=""><br><br>
    </form>
    <?php
 
    if(isset($wyniki)) {
        foreach($wyniki as $wynik) {
            echo "<b><a href='$wynik'>" . getTitle($wynik) . "</a></b><br>";
        }
    }
 
    ?>
<?php if(isset($wyniki)) { echo "<p><b>Znaleziono " . strval(count($wyniki)) . " wyników</b></p>"; } ?>
</body>
</html>
