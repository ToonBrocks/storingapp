<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
if(empty($attractie))
{
    $errors[] = "Vul de attractie-naam in.";
}
$group = $_POST['group'];
if(empty($group))
{
    $errors[] = "Vul de attractie-groep in.";
}
$capaciteit = $_POST['capaciteit'];
if(!is_numeric($capaciteit))
{
    $errors[] = "Vul voor de capaciteit een geldig getal in.";
}
if(isset($_POST['prio']))
{
    $prio = true;
}
else
{
    $prio = false;
}
$melder = $_POST['melder'];
if(empty($melder))
{
    $errors[] = "Vul de melder in.";
}
$overig = $_POST['overig'];

if(isset($errors))
{
    var_dump($errors);
    die;
}

//1. Verbinding
require_once 'conn.php';

//2. Query
$query = "INSERT INTO meldingen (attractie, group, capaciteit, prio, melder, overig) VALUES (:attractie, :group, :capaciteit, :prio, :melder, :overig)";

//3. Prepare
$statement = $conn ->prepare($query);

//4. Execute
$statement->execute([
    ":attractie" => $attractie,
    ":group" => $group,
    ":capaciteit" => $capaciteit,
    ":prio" => $prio,
    ":melder" => $melder,
    ":overig" => $overig,
]);


header("location:../meldignen/index.php?msg=Melding Opgeslagen");
