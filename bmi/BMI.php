<?php
$gewicht = $_GET["gewicht"];
$lengte = $_GET["lengte_cm"];
BMIcalc($gewicht,$lengte);

function BMIcalc($gewicht,$lengte){

		$lengte = $lengte / 100;

		$BMI = $gewicht  / ($lengte * $lengte) ;
		$BMI = round($BMI, +1);
		echo "<br>Uw BMI is: " . $BMI;
		if($BMI < 18.5){
		    echo '<br><p style="color: #FA1212;">Ondergewicht';
		}
		elseif (($BMI > 18.5 ) && ($BMI < 25)){
			echo '<br><p style="color: #00D714;">Normaal/Gezond</p>';
		}
		elseif (($BMI > 25 ) && ($BMI < 27)){
			echo '<br><p style="color: #FA1212;">Licht overgewicht</p>';
		}
		elseif (($BMI > 27 ) && ($BMI < 30)){
			echo '<br><p style="color: #FA1212;"Matig overgewicht</p>';
		}
		elseif (($BMI > 30) && ($BMI < 40)){
			echo '<br><p style="color: #FA1212;">Obesitas</p>';
		}
		elseif ($BMI > 40) {
			echo '<br><p style="color: red;">Morbide obesitas</p>';
		}
		else {
			echo "Er is een foute input!";
		}
}

?>
