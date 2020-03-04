<?php
$smg = "";
if(isset($_POST['btn'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $calc = $_POST['calc'];

    if ($calc == "1") {
        $smg = '<h1>'.$result = $num1 + $num2.'</h1>';
    } elseif ($calc == "2") {
        $smg =  'h1'.$result = $num1 - $num2.'</h1>';
    } elseif ($calc == "3") {
        $smg = '<h1>'.$result = $num1 * $num2.'</h1>';
    } elseif ($calc == "4") {
        $smg = '<h1>'.$result = $num1 / $num2.'</h1>';
    }
}
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<form>
    <?php echo $smg; ?>
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">

    <select name="operator" title="khang">
        <option> * </option>
        <option> - </option>
        <option> + </option>
        <option> / </option>
        <option>Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>

<?php
if(isset($_GET['submit'])){
    switch($operator) {
        case "None":
            echo "Select Operator";
            break;
        case  "Add":
            echo $result1 + $result2;
            break;
        case "Subtract":
            echo "$result1" - $result2;
            break;
        case "Multiply":
            echo $result1 * $result2;
            break;
        case "Divide":
            echo $result1 / $result2;
            break;
    }
}
?>
</body>
</html>