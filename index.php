<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>

 <?php
// include 'index.php';
 
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$result ;
$operator =$_POST['operator'];
 $calculate =$_POST['calculate'];


if(isset($_POST['calculate'])){

if($operator == "+"){
    $result = $number1 + $number2 ;
    echo "Php result :" . $result;
 }

 if($operator == "-"){
    $result = $number1 - $number2 ;
    echo "Php result :" . $result;
}

 if($operator == "/"){
    $result = $number1 / $number2 ;
    echo "Php result :" . $result;
}

 if($operator == "*"){
    $result = $number1 * $number2 ;
    echo "Php result :" . $result;
}

// echo "<script>document.get</script>";

}

?>

<form method="post" id="calcForm">
    <input type="number" id="number1" name="number1" required>
    <select name="operator" id="operator">
        <option>-</option>
        <option>+</option>
        <option>/</option>
        <option>*</option>
    </select>
    <input type="number" id="number2" name="number2" required>

    <button type="submit" id="calculate" name="calculate">Calculate</button>

    <p id="jsresult"></p>

    <p id="phpresult">
     </p>
</form>

<script>

// let calculate = document.getElementById("calculate");

// calculate.addEventListener("click", function () {
  
//    let number1 = Number(document.getElementById("number1").value);
//   let number2 = Number(document.getElementById("number2").value);
//   let operator = document.getElementById("operator").value;
//   let jsresult =  document.getElementById("jsresult") ;


//   let result;
//   if (operator == "*") {
//     result = number1 * number2;
// jsresult.innerHTML ="<h5>JS Result : " + result + "</h5>" 


//   } else if (operator == "-") {
//     result = number1 - number2;
//   } else if (operator == "+") {
//     result = number1 + number2;
//   } else if (operator == "/") {
//     result = number1 / number2;
//   }

  

  

});

</script>

</body>
</html>
