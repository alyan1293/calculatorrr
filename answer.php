 <?php
include 'index.php';
 
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