document.addEventListener("DOMContentLoaded", function () {
  var eduAmount = parseInt(localStorage.getItem("eduAmountTransfer"));
  var eduPrice = parseFloat(localStorage.getItem("eduPriceTransfer"));
  var medAmount = parseInt(localStorage.getItem("medAmountTransfer"));
  var medPrice = parseFloat(localStorage.getItem("medPriceTransfer"));
  var nutrAmount = parseInt(localStorage.getItem("nutrAmountTransfer"));
  var nutrPrice = parseFloat(localStorage.getItem("nutrPriceTransfer"));
  var clothAmount = parseInt(localStorage.getItem("clothAmountTransfer"));
  var clothPrice = parseFloat(localStorage.getItem("clothPriceTransfer"));
  var rentAmount = parseInt(localStorage.getItem("rentAmountTransfer"));
  var rentPrice = parseFloat(localStorage.getItem("rentPriceTransfer"));

  var totalFileAmount =
    eduAmount + medAmount + nutrAmount + clothAmount + rentAmount;
  var totalFilePrice = eduPrice + medPrice + nutrPrice + clothPrice + rentPrice;

  document.getElementById("typeEduFileCell").innerHTML = eduAmount.toString();
  document.getElementById("typeEduPriceCell").innerHTML = eduPrice.toString();
  document.getElementById("typeMedFileCell").innerHTML = medAmount.toString();
  document.getElementById("typeMedPriceCell").innerHTML = medPrice.toString();
  document.getElementById("typeNutrFileCell").innerHTML = nutrAmount.toString();
  document.getElementById("typeNutrPriceCell").innerHTML = nutrPrice.toString();
  document.getElementById("typeClothingFileCell").innerHTML =
    clothAmount.toString();
  document.getElementById("typeClothingPriceCell").innerHTML =
    clothPrice.toString();
  document.getElementById("typeRentFileCell").innerHTML = rentAmount.toString();
  document.getElementById("typeRentPriceCell").innerHTML = rentPrice.toString();
  document.getElementById("totalFile").innerHTML = totalFileAmount.toString();
  document.getElementById("totalPrice").innerHTML = totalFilePrice.toString();
});
