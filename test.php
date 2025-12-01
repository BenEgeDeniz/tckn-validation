<?php

/*
 * Test file for TCKN validation class
 * Tests the validation with specific user data
 */

require "tckn.class.php";

$tckn = new TCKN;

// Test data
$tcknNumber = "10388518554";
$name = "Ege Deniz";
$surname = "Kaçar";
$birthYear = "2005";

echo "Testing TCKN Validation Class\n";
echo "================================\n";
echo "Name: $name\n";
echo "Surname: $surname\n";
echo "TCKN: $tcknNumber\n";
echo "Birth Year: $birthYear\n";
echo "================================\n\n";

// First test the algorithm validation
echo "Testing tcknAlgo (algorithm validation):\n";
$algoResult = $tckn->tcknAlgo($tcknNumber);
echo "Result: $algoResult\n\n";

// Test the full validation (this will make an API call to the Turkish government service)
echo "Testing tcknValidate (full validation with API):\n";
$validateResult = $tckn->tcknValidate($tcknNumber, $name, $surname, $birthYear);
echo "Result: $validateResult\n\n";

// Summary
echo "================================\n";
echo "Test Summary:\n";
echo "Algorithm Check: $algoResult\n";
echo "Full Validation: $validateResult\n";
echo "================================\n";

?>
