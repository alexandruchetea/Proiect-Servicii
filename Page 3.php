<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" type="text/javascript"></script>

</head>

<body background="Img Project\dj wall 2.jpg">

    <h1 style="color: white;">Formular cerere oferta</h1>
    <form method="post" action="insert_table_form.php" class="form-container">
        <div class="form-box">
            <label for="nume">Nume:</label>
            <input type="text" id="nume" name="nume" required placeholder="Introduceti numele">

            <label for="prenume">Prenume:</label>
            <input type="text" id="prenume" name="prenume" required placeholder="Introduceti prenumele">

            <label for="locatie">Locatie:</label>
            <input type="text" id="locatie" name="locatie" required placeholder="Introduceti locatia">

            <label for="numar persoane">Numar Persoane  la Eveniment:</label>
            <input type="number" id="numar_persoane" name="numar_persoane" required placeholder="Numar persoane">

            <label for="tip_eveniment">Tipul Evenimentului: </label>
            <select name="tip_eveniment" id="tip_eveniment">
                <option value="majorat">Majorat</option>
                <option value="botez">Botez</option>
                <option value="nunta">Nunta</option>
                <option value="corporate">Corporate</option>
                
              </select>

        </div>

        <div class="form-box">
            <label for="cerinte">Cerinte extra:</label>
            <textarea rows="4" cols="50" id="cerinte" name="cerinte" required placeholder="Cerintele Dumneavoastra Legate de eveniment"></textarea >

            <label for="data">Data:</label>
            <input type="date" id="data" name="data">

            <p style="margin-bottom: 5px;">Sex</p>

            <input type="radio" id="male" name="gender" value="male">

            <label style="display: inline-block; margin-bottom: 10px;" for="male">Masculin</label>
            <input type="radio" id="female" name="gender" value="female">

            <label style="display: inline-block;" for="female">Feminin</label>

            <label for="email">Email</label>
            <input id="email" type="email" name="email" required placeholder="Enter your email">
        </div>
        
        <div>
        <button class="button" type="button" onclick="verificaDateIntroduse()" >
            Verifica date introduse</button>
        <input class="button" type="submit" value="Adauga cerere"><br>
        
        </div> 
        <!--<input type="button" value="Salvati Datele" onclick="if (checkform()) this.form.submit();"> -->

    </form>
    
        <div class="footer">
        <button class="button onLeft" type="button" onclick="navigateTo('Page 2.php')">
             Back
        </button> 


        <div class="facebook-button">
            <span style="max-width: 40%; color:firebrick; text-align: center;">
                Va rugam sa completati toate campurile existente <br> 
                pentru a putea primi o oferta exacta pentru evenimentul dumneavoastra ! 
        </div>

       
        <button class="button onRight" type="button" onclick="navigateTo('Page4.php')">
            Next Page
        </button>
    </div>
    </div>
</body>