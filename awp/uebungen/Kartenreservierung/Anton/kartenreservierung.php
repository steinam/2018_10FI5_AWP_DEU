<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kartenreservierung</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div>
    <h2>
        Wilkommen zur Kartenreservierung
    </h2>
            <form action="kartenreservierung.php" method="POST">
                    <label for="vname"><p>Vorname:</p>
                        <input type="text" id="vname" name="vname">
                    </label>
                    <br>
                    <br>
                    <label for ="nname"><p>Nachname:</p>
                        <input type="text" id="nname" name="nname">
                    </label><br><br>
                    <label for ="email"> <p>E-Mail:</p>
                        <input type="email" id="emailadresse" name="emailadresse">
                    </label> <br>
                    <label for ="kanzahl"><p>Kartenanzahl:</p>
                    <select> Kartenanzahl
                        <option value="volvo">1</option>
                        <option value="saab">2</option>
                        <option value="mercedes">3</option>
                        <option value="audi">4</option>
                    </select>
                    <br>
                    <button type="submit">Absenden</button>
                
            
                </form>
    </div>

    
</body>
</html>