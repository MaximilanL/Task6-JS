<?php
$autos=["BMW", "Mercedes", "Audi", "Volkswagen", "Peugeot", "Lada", "Geely", "Renault", "Mitsubishi"];

$q = $_REQUEST["q"];
$q--;

if ($q < count($autos) and !is_string($q)) {    
    for ($i=0; $i <= $q; $i++) {
        echo "<p style='color: green'>*$autos[$i]</p>";    	
    }
} else {
    echo "<span style='color: red'>Wrong number!</span>";
}
?>