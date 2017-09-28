<?php
	//muutujad
	$myName = "Katri";
	$myFamilyName = "Palo";

	$monthNamesEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", 
	"september", "oktoober", "november", "detsember"];
	//var_dump($monthNamesEt);
	//echo $monthNamesEt[9];
	$monthNow = $monthNamesEt[date("n")+1];
	
	//hindan päeva osa (võrdlemine   <  >   <=  >=   ==   !=   )
	$hourNow = date("H");
	$partOfDay = "";
	if ($hourNow < 8){
		$partOfDay = "varajane hommik";
	}
	if ($hourNow >= 8 and $hourNow < 16){
		$partOfDay = "koolipäev";
	}
	if ($hourNow > 16){
		$partOfDay = "vaba aeg";
	}
	//echo $partOfDay;

	$myBirthYear;
	$ageNotice = "";
	if ( isset($_POST["birthYear"]) and $_POST["birthYear"] != 0){
		$myBirthYear = $_POST["birthYear"];
		$myAge = date("Y") - $_POST["birthYear"];
		$ageNotice = "<p>Te olete umbkaudu " .$myAge ." aastat vana.</p>";
		
		$ageNotice .= "<p>Olete elanud j2rgnevatel aastatel:</p> <ol>";
		for ($i = $myBirthYear; $i <= date("Y"); $i ++){
			$ageNotice .= "<li>" .$i ."</li>";
		}
		$ageNotice .= "</ol>";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Katri programmeerib veebi
	</title>
</head>
<body>
	<h1><?php echo $myName ." " .$myFamilyName; ?>, veebiprogrammeerimine</h1>
	<p>See veebileht on loodud 6ppet66 raames ning ei sisalda mingisugust t6siseltv6etavat sisu!</p>
	<p>Meie õpime <a href="http://www.tlu.ee">Tallinna Ylikoolis</a>.</p>
	<p>Minu esimene php leht on <a href="../../../../~palokatr/veebiprogrammeerimine/esimene.php">siin</a>.</p>
		<?php
		echo "<p>Algas PHP 6ppimine.</p>";
		echo "<p>T2na on ";
		echo date("d. ") .$monthNow .date(" Y") .", kell oli lehe avamise hetkel " .date("H:i:s");
		echo ", hetkel on " .$partOfDay .".</p>";
	?>
	<h2>Natuke vanusest</h2>
	<form method="POST">
		<label>Teie synniaasta: </label>
		<input name="birthYear" id="birthYear" type="number" value="<?php echo $myBirthYear; ?>" min="1900" max="2017">
		<input name="submitBirthYear" type="submit" value="Sisesta">
	</form>
	<?php
		if ($ageNotice != ""){
			echo $ageNotice;
		}
	?>
	
</body>
</html>


