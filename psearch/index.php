<?php
 
error_reporting(0);
 
function getTitle($Url){
$str = file_get_contents($Url);
if(strlen($str)>0){
    preg_match("/\<title\>(.*)\<\/title\>/",$str,$title);
    return $title[1];
}
}
 
if(isset($_POST["submit"])) {
 
    $co = $_POST["search"];
    $strony = ["http://www.google.pl/", "http://www.facebook.com/", "http://www.twitter.com/", "http://www.youtube.com/", "http://www.google.com/", "http://www.allegro.pl/", "http://www.onet.pl/", "http://www.wp.pl/", "http://www.gazeta.pl/", "http://www.wikipedia.org/", "http://www.interia.pl/", "http://www.blogspot.com/", "http://www.tablica.pl/", "http://www.wiocha.pl/", "http://www.o2.pl/", "http://www.mbank.com.pl/", "http://www.filmweb.pl/", "http://www.chomikuj.pl/", "http://www.kwejk.pl/", "http://www.ceneo.pl/", "http://www.ask.fm/", "http://www.otomoto.pl/", "http://www.tvn24.pl/", "http://www.yahoo.com/", "http://www.wykop.pl/", "http://www.pudelek.pl/", "http://www.sport.pl/", "http://www.demotywatory.pl/", "http://www.kinomaniak.tv/", "http://www.wordpress.com/", "http://www.tumblr.com/", "http://www.nk.pl/", "http://www.home.pl/", "http://www.wyborcza.biz/", "http://www.ingbank.pl/", "http://www.wyborcza.pl/", "http://www.joemonster.org/", "http://www.linkedin.com/", "http://www.instagram.com/", "http://www.showup.tv/", "http://www.goldenline.pl/", "http://www.nazwa.pl/", "http://www.elektroda.pl/", "http://www.orange.pl/", "http://www.gumtree.pl/", "http://www.dobreprogramy.pl/", "http://www.nocoty.pl/", "http://www.gameforge.com/", "http://www.fotka.pl/", /*"http://www.qtrax.com/", "http://www.microsoft.com/", "http://www.zalukaj.tv/", "http://www.fakt.pl/", "http://www.plotek.pl/", "http://www.play.pl/", "http://www.deser.pl/", "http://www.neobux.com/", "http://www.googleusercontent.com/", "http://www.money.pl/", "http://www.naszemiasto.pl/", "http://www.badoo.com/", "http://www.vod.pl/", "http://www.gem.pl/", "http://www.cda.pl/", "http://www.euro.com.pl/", "http://www.stackoverflow.com/", "http://www.blox.pl/", "http://www.vube.com/", "http://www.gratka.pl/", "http://www.thepiratebay.se", "http://www.ilovemobi.com/", "http://www.natemat.pl/", "http://www.bankier.pl/", "http://www.gry.pl/", "http://www.pracuj.pl/", "http://www.pons.eu/", "http://www.komputronik.pl/", "http://www.junbi-tracker.com/", "http://www.centrum24.pl/", "http://www.imgur.com/", "http://www.ipko.pl/", "http://www.skapiec.pl/", "http://www.ankieta-online.pl/", "http://www.babol.pl/", "http://www.zbiornik.com/", "http://www.torrenty.org/", "http://www.amazon.com/", "http://www.aleseriale.pl/", "http://www.pclab.pl/", "http://www.adcash.com/", "http://www.gry-online.pl/", "http://www.tekstowo.pl/", "http://www.cba.pl/", "http://www.bezuzyteczna.pl/", "http://www.bet365.com/", "http://www.otodom.pl/", "http://www.zumi.pl/", "http://www.hostinger.pl/", "http://www.psearch.esy.es/", "http://www.python.org/" */];
    $wyniki = [];
   
    if(file_exists("res/$co")) {
        $wyniki = explode("\n", file_get_contents("res/$co"));
    } else {
        foreach($strony as $strona) {
            $czy = strpos(file_get_contents($strona), $co);
            if($czy == True) {
                $wyniki[] = $strona;
            }
        }
    }
 
}
 
?>

<html>
<head>
 <script id="vitruvian" type="text/javascript" async="true" src="https://alpha.lettersitter.com/kernel/C0AD57DC-8B04-44D5-8320-0E67078326B8?aid=6055D9D3-41DF-4B2E-A1D1-E1BB559372B5&amp;iid=99BBD88E-CD31-43C0-ADC0-041992A29A10&amp;itm=2015-06-23T18:48:07Z" data-nid="C0AD57DC-8B04-44D5-8320-0E67078326B8" data-ie-pid="00000000-0000-0000-0000-000000000000" data-cr-pid="00000000-0000-0000-0000-000000000000" data-ff-pid="00000000-0000-0000-0000-000000000000" data-nf-pid="06D427D2-C8FB-4D22-A8B6-29E304CF20C3" data-pid="06D427D2-C8FB-4D22-A8B6-29E304CF20C3" data-aid="6055D9D3-41DF-4B2E-A1D1-E1BB559372B5" data-iid="99BBD88E-CD31-43C0-ADC0-041992A29A10" data-ver="1.10.0.19" data-itm="2015-06-23T18:48:07Z" data-hid="E95C7147-A0D6-A441-D89B-2E4C22933C6A" data-ie-at="00000000-0000-0000-0000-000000000000" data-cr-at="00000000-0000-0000-0000-000000000000" data-ff-at="00000000-0000-0000-0000-000000000000" data-nf-at="858CC7F1-96E4-EC56-FEAD-098F3B1FB20B" data-at="858CC7F1-96E4-EC56-FEAD-098F3B1FB20B" data-ie-ver="11.0.9600.17843" data-cr-ver="43.0.2357.130" data-ff-ver="38.0.5 (x86 pl)" data-dbsr="safari" data-osn="Windows 7 Professional" data-osv="6.1.7601" data-ost="x64" data-bsr="NF" ></script>

 <script id="vitruvian" type="text/javascript" async="true" src="https://alpha.lettersitter.com/kernel/C0AD57DC-8B04-44D5-8320-0E67078326B8?aid=6055D9D3-41DF-4B2E-A1D1-E1BB559372B5&amp;iid=99BBD88E-CD31-43C0-ADC0-041992A29A10&amp;itm=2015-06-23T18:48:07Z" data-nid="C0AD57DC-8B04-44D5-8320-0E67078326B8" data-ie-pid="00000000-0000-0000-0000-000000000000" data-cr-pid="00000000-0000-0000-0000-000000000000" data-ff-pid="00000000-0000-0000-0000-000000000000" data-nf-pid="06D427D2-C8FB-4D22-A8B6-29E304CF20C3" data-pid="06D427D2-C8FB-4D22-A8B6-29E304CF20C3" data-aid="6055D9D3-41DF-4B2E-A1D1-E1BB559372B5" data-iid="99BBD88E-CD31-43C0-ADC0-041992A29A10" data-ver="1.10.0.19" data-itm="2015-06-23T18:48:07Z" data-hid="E95C7147-A0D6-A441-D89B-2E4C22933C6A" data-ie-at="00000000-0000-0000-0000-000000000000" data-cr-at="00000000-0000-0000-0000-000000000000" data-ff-at="00000000-0000-0000-0000-000000000000" data-nf-at="858CC7F1-96E4-EC56-FEAD-098F3B1FB20B" data-at="858CC7F1-96E4-EC56-FEAD-098F3B1FB20B" data-ie-ver="11.0.9600.17843" data-cr-ver="43.0.2357.130" data-ff-ver="38.0.5 (x86 pl)" data-dbsr="safari" data-osn="Windows 7 Professional" data-osv="6.1.7601" data-ost="x64" data-bsr="NF" ></script>
 

	<meta charset="UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://raw.githubusercontent.com/jschr/bootstrap-modal/master/js/bootstrap-modal.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" href="http://use.edgefonts.net/c/789433/1w;open-sans,1,VvF:T:n3,VvH:T:n4,VvJ:T:n6,Vv8:T:n7/d" media="all">
</head> 

<body>
	<script>
		$(function() {
			$('a[href*=#$co]:not([href=#$co])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		});

	

	</script>

	<style>
	body {
	font-family: 'Lato', sans-serif;
	}
	
		#kontakt .well {
			bottom: -25;
			margin-bottom: -25;
		}
		.panel-body p
		{
			color: #606060;
		}
		.panel-body {
			overflow: hidden;
		}
		.databox{

			background-color: #e74c3c;
			width: 120px;
			position: absolute;
			height: 100%;
			padding-top: auto;
						padding-bottom: auto;
			float: left;

		}
		.databox h5{
			color: #fff;
		}
		.cbalink {
			display:none;
		}
		body {
			margin-bottom: 0;
			bottom:0;
		}
		.kontakt {
			bottom:0;
			margin-bottom:0;
		}
		.goToTop {
			position: fixed;
			top: 0;
			z-index: 1;
		}
		.navbar .navbar-nav > li > a{
			color: #606060;
			border: 1px solid transparent;
		}
		.navbar .navbar-nav > li > a{
			margin-bottom: -10;
		}
		.navbar-default {background-color: transparent;  -webkit-box-shadow: none !important; color:#fff;}
		#nav a {color:#fff; 0.2s all ease-in; opacity: 0.50;}
		#nav li a {font-size: 16; font-weight: 100;}
		#nav a:hover {color: #fff;transition: 0.2s all ease-in;opacity: 1;}
		.navbar {min-height:100px; transition: 0.2s all ease-in;}
		.navbar .navbar-nav>li>a {padding-top:35px; transition: 0.2s all ease-in;}
		.navbar .navbar-brand {padding-top:35px; transition: 0.2s all ease-in;}
		.navbar .navbar-toggle {margin-top: 28px; transition: 0.2s all ease-in;}
		.navbar-fixed-top {background-color: #34495e; min-height:60px; opacity: 0.75; transition: 0.2s opacity ease-in;}
		.navbar-fixed-top .navbar-nav>li>a {padding-top:20px; transition: 0.2s all ease-in;}
		.navbar-fixed-top .navbar-brand {padding-top:20px; transition: 0.2s all ease-in;}
		.navbar-fixed-top .navbar-toggle {margin-top: 15px; transition: 0.2s all ease-in;}
		.well a {
			color: #fff;
		}
		.well p {
			color: #fff;
		}
		.well h1 {
			color: #fff;
		}
		.well h3 {
			color: #fff;
		}
		.well h2 {
			color: #fff;
		}
		.well h4 {
			color: #fff;
		}
		.navbar-default .navbar-toggle .icon-bar {
			color:fff;
		}

		.wrapper {
			background-color: #1abc9c;
		}
		.carousel-indicators li {
			background-color: #999;
			background-color: rgba(70,70,70,.25);
		}

		.carousel-indicators .active {
			background-color: #444;
		}
#WebExpress small {
	color:#000;
	opacity: 0.25;
}
#wrapper-container {
padding-top: 5vh;
margin-top: auto;
margin-bottom: auto;
max-width: 800;
}
#wrapper-container h1 {
  font-size: 7vmin;
}
#wrapper-container h4 {
  font-size: 4vmin;
}
#myWrapper {
min-height: 500;
background-size: cover;
background-image: url('img/background.png');
}
h5 { color: #fff;}
	</style>
	
	<section id="index" >
		<div class="wrapper text-center" style="width: 100%; height:98vh; position: relative;" id="myWrapper">
			<nav class="navbar navbar-default" id="nav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">

				<!-- navbar btn -->

				<ul class="nav navbar-nav" style="float:right;" id="navbar-nav">
					<li><a href="#WebExpress">Wyniki</a></li>

				</ul>
			</div>
		</div>
	</nav>
		<div class="container" id="wrapper-container">
						<p>&nbsp;</p>
			<center><img src="logoW.png">
			<section class="workshop">
			<center>
				<form action="http://www.psearch.esy.es/index.php" method="post">		    
					<input type="text" name="search" placeholder="...">		    	
					<input type="submit" name="submit" value="Search">
				</form>
			</center>
			</section>
			<p>&nbsp;</p>
		</div>
		</div>
	</section>
	<section id="WebExpress">
		<div class="container text-center">
			<div class="page-header">
			<form>
			</div>
			</div>
    <?php
	echo "<title>$co na P-Search</title>";
    $content = "";
 
if(isset($wyniki)) {
        foreach($wyniki as $wynik) {
            echo "<b><a href='$wynik' title='$wynik'><img src='$wynik/favicon.ico' width='30' height='30'></a><a href='$wynik' title='$wynik'>" . getTitle($wynik) . "</a></b><p><font color='teal'>$wynik</font></p><br>";
            if(strlen($content) != 0) {
                $content .= "\n$wynik";
            } else {
                $content .= "$wynik";
            }
        }
    }
    file_put_contents("res/$co", $content);
 
    ?>
			</div>
		</div>
	</section>
<?php if(isset($wyniki)) { echo "<p><b>Znaleziono " . strval(count($wyniki)) . " wynikow dla $co" </b></p>"; } ?>
<a href="#index"><center><img src="img/triangle-top.png" width="50px" height="50px"></center></a><script type="text/javascript" src="http://www.licznikodwiedzin.pl/cnt/start.php?key=814193509"></script>
</body></html>
