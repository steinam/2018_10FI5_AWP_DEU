<html>
<head>
    <style>
        div:first-child{
            background-color: yellowgreen;
            width: 33%;
            padding: 80px;

        }
        div input{
            margin-top: 20px;
            display: block;
            padding: 4px;
            width: 46%;

        }
        .butt{
            margin-top: 20px;
            display: block;

        }
        .butt button{
            font-size: 15px;
            width: 113px;
            display: inline-block;
            height: 30px;
            background: slateblue;
            color: white;
        }
        select {
            padding: 15px;
        }
        input:focus{
            background: #7B7B88;
        }



    </style>
</head>
<body>
<?php
if (isset($_POST['submit'])){

    $Vorname = $_POST['Vorname'];
    $Nachname = $_POST['Nachname'];
    $Email = $_POST['Email'];
    $Karten = $_POST['Karten'];
    $result = 8 * $Karten;
    if (isset($_POST['Vorname'])&&isset($_POST['Nachname'])&& isset($_POST['Email'])){
        echo "Hallo $Vorname $Nachname<br>
        Sie haben $Karten bestellt<br> das macht $result Euro
        ";





    }
}else{
    echo'<div>
    <form action="yazan.php" method="post">
        <input type="text" placeholder="Willkommen zur Kartenreservierung" style=" display: block;
    width: 80%;">
        <input type="text" placeholder="Name"  name="Vorname">
        <input type="text" placeholder="Nachnahme"  name="Nachname">
        <input type="email" placeholder="Email" name="Email" style="display: inline-block;margin-right: 15px">
        <select name="Karten">
            <option value="1">
                1
            </option>
            <option value="2">
                2
            </option>
            <option value="3">
                3
            </option>
            <option value="4">
                4
            </option>
        </select>
    <div class="butt">
        <button type="submit" name="submit">Absenden</button>
        <button type="Rest">rest</button>

    </div>
        </form>



</div>
';
}














?>


</body>
</html>