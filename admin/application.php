<?php
SESSION_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="css/default.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
<?php
// tar bort all form av felrapportering
// defined('THE_ERROR') || define('THE_ERROR', TRUE);
// require_once('include/no_error.php');

// koppla upp mot databas
// defined('THE_DB') || define('THE_DB', TRUE);
// define('THE_DB', TRUE);
// require_once('../db.php');
defined('THE_SESSION') || define('THE_SESSION', TRUE);
require_once('include/checksession.php');
defined('THE_HEAD') || define('THE_HEAD', TRUE);
include_once("include/head.php");
?>
</head>
<body>
<?php
defined('THE_HEADER') || define('THE_HEADER', TRUE);
require_once("include/header.php");
?>
<div id="main-wrapper">
<?php
defined('THE_MENUE') || define('THE_MENUE', TRUE);
require_once("include/menuebar.php");
defined('THE_DB') || define('THE_DB', TRUE);
require_once(__DIR__ .'./../../db.php');

?>

<div id="infoframe">
	   <fieldset>
		<legend><b>Sökande</b></legend>	

		<label for="namn">Namn: </label>
		<input required type="text" value id ="namn" id = "infotextframe"/>
				
		<label for="adress">Personnummer/organisationsnummer: </label>
		<input required type="text" value id ="adress" id = "infotextframe"/>
		
		<label for="adress">Gatuadress: </label>
		<input type="text" id = "infotextframe"/>
			
		<label for="pnummer">Postnummer: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="port">Postort: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="teledag">Telefon dagtid(inklusive riktnummer): </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="alttele">Alternativt telefonnummer(inklusive riktnummer): </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="epost">E-postadress: </label>
		<input type="text" id = "infotextframe"/>
		</fieldset>	

		<fieldset>		
		<legend><b>Borrfirma</b></legend>	
		<label for="sitac">SITACS certifieringsnummer: </label>
	    <input type="text" id = "infotextframe"/>
		
		<label for="fnamn">Företagsnamn: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="namn">Namn: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="adress">Gatuadress: </label>
		<input type="text" id = "infotextframe"/>
			
		<label for="pnummer">Postnummer: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="port">Postort: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="teledag">Telefon dagtid(inklusive riktnummer): </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="alttele">Alternativt telefonnummer(inklusive riktnummer): </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="epost">E-postadress: </label>
		<input type="text" id = "infotextframe"/>
		</fieldset>	
		
		<fieldset>		
		<legend><b>Installatör</b></legend>	
		<label for="namn">Namn: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="adress">Gatuadress: </label>
		<input type="text" id = "infotextframe"/>
			
		<label for="pnummer">Postnummer: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="port">Postort: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="teledag">Telefon dagtid(inklusive riktnummer): </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="alttele">Alternativt telefonnummer(inklusive riktnummer): </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="epost">E-postadress: </label>
		<input type="text" id = "infotextframe"/>
		</fieldset>	
		
		<fieldset>		
		<legend><b>Uppgifter om värmepump</b></legend>	
		<label for="fab">Fabrikat: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="mod">Modell: </label>
		<input type="text" id = "infotextframe"/>
			
		<label for="eff">Effekt, kW: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="port">Typ av köldmedium: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="kmed">Mängd köldmedium, kg: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="kollvol">Total volym köldbärarvätska i kollektorn, liter: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="frostskyddnamn">Frostskyddsmedel i köldbärarvätskan namn: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="frostskyddfabrikat">Frostskyddsmedel i köldbärarvätskan fabrikat: </label>
		<input type="text" id = "infotextframe"/>
		
		<label for="frostskyddandel">Andel frostskyddsmedel i köldbärarvätskan, %: </label>
		<input type="text" id = "infotextframe"/>
		</fieldset>	
		
		<fieldset>		
		<legend><b>Karta</b></legend>
		
		<label for="alttele">Jag skickar kartan via post </label>
		<input type="text" id = "infotextframe"/>
		
	<div class="upload_pdf" >
    <form id="upload_form" enctype="multipart/form-data" method="post" action="">
<ul>
<li class="center"><label for="pdf_fil">Ladda upp en Faktura</label>
	<input required type="file" name="pdf_fil" id="pdf_fil"/></li>
        <li class="center"><input type="reset" name="rst" id="rst" value="Återställ" />
	<input type="submit" id="upfak" name="upfak" accept="application/pdf" value="Ladda upp Faktura" /></li></ul>
    </fieldset></form>
</div></fieldset>';	

	?>	
</div>
 </form>
</div><!--main-wrapper-->
<?php
defined('THE_FOOTER') || define('THE_FOOTER', TRUE);
require_once("include/footer.php");
?>


</body>
</html>



