
<?php 
include 'database.php';
    echo "Salutare ... datele pe care dorim sa le salvam sunt: <br>Nume: ".$_POST['nume']."<br>Prenume:".$_POST["prenume"]."<br>";
$sql = "INSERT INTO servicii (nume, prenume, locatie, nrpersoane, tipeveniment, cerinteextra, data, sex, email)
			VALUES ('".$_POST['nume']."','".$_POST["prenume"]."','".$_POST["locatie"]."','".$_POST["numar_persoane"]."','".$_POST["tip_eveniment"]."','".$_POST["cerinte"]."','".$_POST["data"]."','".$_POST["gender"]."','".$_POST["email"]."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<script> window.location.href='page4.php'; </script>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
