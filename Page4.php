<!DOCTYPE html>

<head>
<link rel="stylesheet" href="styles.css">
    <script src="script.js" type="text/javascript"></script>

</head>

<body background="Img Project\dj wall 2.jpg">
    <div>
        <p style="color: aliceblue;font-size: xx-large; text-align: center;">
            Tabel Clienti
        </p>
        <br>
    </div>
    <div>
        <table style="width: 100%;text-align: center;text-align: left;padding-top: 0%; border-spacing:0px">
            <tr style="font-size:large;color: white;">
                <td>Nume</td>
                <td>Prenume</td>
                <td>Locatie</td>
                <td>Numar Persoane</td>
                <td>Tipul Evenimentului</td>
                <td>Cerinte Extra</td>
                <td>Data</td>
                <td>Sex</td>
                <td>Email</td>
            </tr>
           
           
            
            <?php 
               
               include 'connect_database.php';
         
        $sql = "SELECT nume, Prenume, Locatie, Nrpersoane, tipeveniment, cerinteextra, Data, Sex, Email FROM servicii ORDER BY nume";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while( $row = $result->fetch_assoc())
        {
            echo "<tr style='color: white;'><td>". $row["nume"]. " </td><td> ". $row["Prenume"]. " </td><td> ". $row["Locatie"]."</td><td> ". $row["Nrpersoane"]. "</td><td> ". $row["tipeveniment"]. "</td><td>". $row["cerinteextra"]. " </td><td>". $row["Data"]." </td><td> ". $row["Sex"]." </td><td> ". $row["Email"]." </td></tr>";
        }
        } else {
            echo "0 results";
        }
        $conn->close();
        
       
        ?>
        </table> 
    </div>
</div>
        <div class="footer">
            <button class="button onLeft" type="button" onclick="navigateTo('Page 3.php')">
                     Back
        </button>
        </div>

</body>