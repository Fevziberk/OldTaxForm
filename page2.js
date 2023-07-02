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
  
    document.getElementById("egitimAdet").innerHTML = egitimAdet.toString();
    document.getElementById("egitimTutar").innerHTML = egitimTutar.toString();
    document.getElementById("saglikAdet").innerHTML = saglikAdet.toString();
    document.getElementById("saglikTutar").innerHTML = saglikTutar.toString();
    document.getElementById("gidaAdet").innerHTML = gidaAdet.toString();
    document.getElementById("gidaTutar").innerHTML = gidaTutar.toString();
    document.getElementById("giyimAdet").innerHTML = giyimAdet.toString();
    document.getElementById("giyimTutar").innerHTML = giyimTutar.toString();
    document.getElementById("kiraAdet").innerHTML = kiraAdet.toString();
    document.getElementById("kiraTutar").innerHTML = kiraTutar.toString();
    document.getElementById("toplamBelgeAdet").innerHTML = toplamBelgeAdet.toString();
    document.getElementById("toplamBelgeTutar").innerHTML = toplamBelgeTutar.toString();  
  });
  