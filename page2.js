document.addEventListener("DOMContentLoaded", function () {
    var egitimAdet = localStorage.getItem("egitimAdetTransfer");
    var egitimTutar = localStorage.getItem("egitimTutarTransfer");
    var saglikAdet = localStorage.getItem("saglikAdetTransfer");
    var saglikTutar = localStorage.getItem("saglikTutarTransfer");
    var gidaAdet = localStorage.getItem("gidaAdetTransfer");
    var gidaTutar = localStorage.getItem("gidaTutarTransfer");
    var giyimAdet = localStorage.getItem("giyimAdetTransfer");
    var giyimTutar = localStorage.getItem("giyimTutarTransfer");
    var kiraAdet = localStorage.getItem("kiraAdetTransfer");
    var kiraTutar = localStorage.getItem("kiraTutarTransfer");
    var toplamBelgeAdet = localStorage.getItem("toplamBelgeAdetTransfer");
    var toplamBelgeTutar = localStorage.getItem("toplamBelgeTutarTransfer");
  
    document.getElementById("typeEduFileCell").innerHTML = egitimAdet.toString();
    document.getElementById("typeEduPriceCell").innerHTML = egitimTutar.toString();
    document.getElementById("typeMedFileCell").innerHTML = saglikAdet.toString();
    document.getElementById("typeMedPriceCell").innerHTML = saglikTutar.toString();
    document.getElementById("typeNutrFileCell").innerHTML = gidaAdet.toString();
    document.getElementById("typeNutrPriceCell").innerHTML = gidaTutar.toString();
    document.getElementById("typeClothing").innerHTML = giyimAdet.toString();
    document.getElementById("typeClothingPriceCell").innerHTML = giyimTutar.toString();
    document.getElementById("typeRentFileCell").innerHTML = kiraAdet.toString();
    document.getElementById("typeRentPriceCell").innerHTML = kiraTutar.toString();
    document.getElementById("totalFile").innerHTML = toplamBelgeAdet.toString();
    document.getElementById("totalPrice").innerHTML = toplamBelgeTutar.toString();  
  });
  