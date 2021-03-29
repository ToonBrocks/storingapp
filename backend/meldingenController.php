<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
<<<<<<< Updated upstream
$group = $_POST['group'];
$capaciteit = $_POST['capaciteit']; 
=======
if (empty($attractie)) {
    $errors[] = "Vul de attractie-naam in.";
}
$group = $_POST['group'];
if (empty($group)) {
    $errors[] = "Vul de groep in.";
}
$capaciteit = $_POST['capaciteit'];
if (!is_numeric($capaciteit)) {
    $errors[] = "Vulvoorcapaciteiteengeldiggetalin.";
}
>>>>>>> Stashed changes
$melder = $_POST['melder'];
if (empty($attractie)) {
    $errors[] = "Vul de melder in.";
}

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

<<<<<<< Updated upstream
header("../meldignen/index.php?msg=Melding Opgeslagen");
=======
header("../meldingen/index.php");
?>
>>>>>>> Stashed changes
