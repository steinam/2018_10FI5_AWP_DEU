<!DOCTYPE html>
<html>
<head>
<title>Kartenreservierung</title>
<style>
body{
  font-weight: bold;
}
h1{
  color: blue;
  border: 2px solid grey;
  padding: 3px;
  border-radius: 5px;
}
table{
  border: 1px solid grey;
  border-radius: 10px;
  padding: 10px
}
tr{
  line-height: 30px;
}
.label{
  border: 2px solid grey;
  padding: 0px 3px 0px 3px;
  width:100px;
}
.button{
  padding: 10px 15px 10px 15px;
  font-weight: bold;
  border-radius: 5px;
  margin-left: 45%;
  margin-top: 30%;
}
.result{
  text-align: center;
  font-size: 1.5em;
}
.error{
  text-align: center;
  font-size: 1.2em;
  color:red;

}

</style>
</head>
<body>
<?php
if(isset($_POST['submit'])){
  if(isset($_POST['vorname']) && isset($_POST['nachname']) && isset($_POST['email']) && isset($_POST['kartenzahl'])){
    if(empty($_POST['vorname']) || empty($_POST['nachname']) || empty($_POST['email']) || $_POST['kartenzahl'] == "MAX 4 Karten"){

      echo "<div class='error'>Bitte alle Felder ausfüllen</div>";
    }else{
      $vorname = $_POST['vorname'];
      $nachname = $_POST['nachname'];
      $kartenzahl = $_POST['kartenzahl'];
      $result = 8 * $kartenzahl ;

      echo "<div class='result'>Hallo $vorname $nachname<br> Sie haben $kartenzahl Karten bestellt<br> Das macht $result Euro
      </div>";
    }

  }
}else{
?>
<form action="alcharabati.php" method="POST">
  <table>
    <tr>
      <td colspan="2">
        <h1>Wilkommen zur Kartenreservierung</h1>
      </td>
    </tr>
    <tr>
      <td class="label">
        <label>Vorname :</label>
      </td>
      <td>
        <input type="text" name="vorname" placeholder="Vorname">
      </td>
    </tr>
    <tr>
      <td class="label">
        <label>Nachname :</label>
      </td>
      <td>
        <input type="text" name="nachname" placeholder="Nachname">
      </td>
    </tr>
    <tr>
      <td class="label">
        <label>Email :</label>
      </td>
      <td>
        <input type="email" name="email" placeholder="Email">
      </td>
    </tr>
    <tr>
      <td class="label">
        <label>Kartenzahl :</label>
      </td>
      <td>
        <select name="kartenzahl">
          <option>MAX 4 Karten</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" value="Absended" class="button"></td>
    </tr>
</table>
</form>
<?php
  }

?>
</body>
</html>
