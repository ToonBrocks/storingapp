<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$group = $_POST['group'];
$capaciteit = $_POST['capaciteit']; 
$melder = $_POST['melder'];

echo $attractie . " / " . $capaciteit . " / " . $melder;

//1. Verbinding
require_once 'conn.php';

//2. Query
$query = "INSERT INTO meldingen (attractie, group, capaciteit, melder) VALUES (:attractie, :group, :capaciteit, :melder)";

//3. Prepare
$statement = $conn ->prepare($query);

//4. Execute
$statement->execute([
    ":attractie" => $attractie,
    ":group" => $group,
    ":capaciteit" => $capaciteit,
    ":melder" => $melder
]);

header("../meldignen/index.php?msg=Melding Opgeslagen");