<?php
session_start();
if ($_SESSION['valid'] != true)
    header("Location: login.php");

include ('db.php');
$owner_id = $_SESSION['id'];
$Vardas = $_GET['Vardas'];
$Pavarde = $_GET['Pavarde'];
$DaktaroId = $_GET['DaktaroId'];

$sql = "DELETE FROM pacientu_lentele WHERE pacient_id = $owner_id AND doctor_id = $DaktaroId";
echo $sql;
$result = mysqli_query($con, $sql);
header("Location: pacientouzsirasymai.php");

