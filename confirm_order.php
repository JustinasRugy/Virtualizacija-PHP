<?php
session_start();
if ($_SESSION['valid'] != true)
    header("Location: login.php");

include ('db.php');
$id = $_GET['id'];
$Vardas = $_GET['Vardas'];
$Pavarde = $_GET['Pavarde'];
$owner_id = $_SESSION['id'];
$DaktaroVardas = $_GET['DaktaroVardas'];
$DaktaroPavarde = $_GET['DaktaroPavarde'];
$DaktaroTipas = $_GET['DaktaroTipas'];
$query = "SELECT pacient_id, doctor_id FROM pacientu_lentele WHERE pacient_id = $owner_id AND doctor_id =  $id";
$result = mysqli_query($con, $query);
$rows = mysqli_num_rows($result);
if($rows >= 1)
{
    header("Location: pacientdoctortable.php");
}
else{
    $sql = "INSERT INTO pacientu_lentele (pacient_id, doctor_id, Vardar_paciento, Pavarde_paciento, Vardas, Pavarde, DaktaroTipas) VALUES ('$owner_id', '$id', '$Vardas', '$Pavarde','$DaktaroVardas','$DaktaroPavarde','$DaktaroTipas')";
    $result = mysqli_query($con, $sql);
    header("Location: pacientdoctortable.php");

}

