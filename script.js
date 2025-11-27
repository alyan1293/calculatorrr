let calculate = document.getElementById("calculate");

calculate.addEventListener("click", function () {
  // e.preventDefault();

  let number1 = Number(document.getElementById("number1").value);
  let number2 = Number(document.getElementById("number2").value);
  let operator = document.getElementById("operator").value;
  let result;
  let jsresult = document.getElementById("jsresult");

  if (operator == "*") {
    result = number1 * number2;
    console.log(result);
  } else if (operator == "-") {
    result = number1 - number2;
    console.log(result);
  } else if (operator == "+") {
    result = number1 + number2;
  } else if (operator == "/") {
    result = number1 / number2;
  }

  jsresult.innerHTML = "<h5>Js result : " + result + "</h5>";



});

