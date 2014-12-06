<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
if (isset($_GET["submit"])) {
    // process the form contents...

$nameErr = $addrErr = $emailErr = $howManyErr = $favFruitErr = "";
$name = $address = $email = $howMany = "";
$favFruit = array();
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Missing";
    }
    else {
        $name = $_POST["name"];
    }
 
    if (empty($_POST["address"])) {
        $addrErr = "Missing";
    }
    else {
        $address = $_POST["address"];
    }
 
    if (empty($_POST["email"]))  {
        $emailErr = "Missing";
    }
    else {
        $email = $_POST["email"];
    }
 
    if (!isset($_POST["howMany"])) {
        $howManyErr = "You must select 1 option";
    }
    else {
        $howMany = $_POST["howMany"];
    }
 
    if (empty($_POST["favFruit"])) {
        $favFruitErr = "You must select 1 or more";
    }
    else {
        $favFruit = $_POST["favFruit"];
    }
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name <input type="text" name="name" value=""><br />
Address <input type="text" name="address" value=""><br />
Email <input type="text" name="email" value=""><br />
<input type="radio" name="howMany" value="zero"> 0
<input type="radio" name="howMany" value="one"> 1
<input type="radio" name="howMany" value="two"> 2
<input type="radio" name="howMany" value="twoplus"> More than 2<br />

 <select name="favFruit[]" size="4">
 
 <option value="apple">Apple</option>
 <option value="banana">Banana</option>
 <option value="plum">Plum</option>
 <option value="pomegranate">Pomegranate</option>
 <option value="strawberry">Strawberry</option>
 <option value="watermelon">Watermelon</option>
</select>
<br />
<input type="checkbox" name="brochure" value="Yes"><br />
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>