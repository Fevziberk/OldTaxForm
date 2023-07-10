row = [
    {
      Tarih: "",
      Nosu: "",
      KimdenAld: "",
      Cins: "",
      TutarYTL: "",
    },
  ];
  
  function storeInput() {
    var egitimAdet = 0,
      saglikAdet = 0,
      gidaAdet = 0,
      giyimAdet = 0,
      kiraAdet = 0;
    var egitimTutar = 0,
      saglikTutar = 0,
      gidaTutar = 0,
      giyimTutar = 0,
      kiraTutar = 0;
    var toplamBelgeAdet = 0,
      toplamBelgeTutar = 0;
  
    for (var i = 1; i <= 19; i++) {
      var TarihValue = document.getElementsByName("TARIH" + i)[0].value;
      var NosuValue = document.getElementsByName("NO" + i)[0].value;
      var KimdenAldValue = document.getElementsByName("KIMDEN" + i)[0].value;
      var CinsValue = document.getElementsByName("Combo" + i)[0].options[
        document.getElementsByName("Combo" + i)[0].selectedIndex
      ].value;
      var TutarYTLValue = document.getElementsByName("TUTAR" + i)[0].value;
      if (isNaN(TutarYTLValue)) {
        alert(
          "Lütfen " +
            i +
            " sıra numaralı satırdaki Tutar YTL sütununa sayısal değer giriniz."
        );
        return;
      }
  
      if ((CinsValue == "Bos") & !(TutarYTLValue == "")) {
        alert("Lütfen " + i + " sıra numaralı satırdaki Cinsi seçiniz.");
        return;
      } else if ((CinsValue != "Bos") & (TutarYTLValue == "")) {
        alert(
          "Lütfen " +
            i +
            " sıra numaralı Cins seçtiğiniz satırda Tutar YTL sütununa sayısal değer giriniz."
        );
        return;
      }
  
      var row = {
        SıraNo: i.toString(),
        Tarih: TarihValue,
        Nosu: NosuValue,
        KimdenAld: KimdenAldValue,
        Cins: CinsValue,
        TutarYTL: parseFloat(TutarYTLValue),
      };
  
      switch (row.Cins) {
        case "Egitim":
          egitimAdet++;
          egitimTutar += row.TutarYTL;
          break;
        case "Saglik":
          saglikAdet++;
          saglikTutar += row.TutarYTL;
          break;
        case "Gida":
          gidaAdet++;
          gidaTutar += row.TutarYTL;
          break;
        case "Giyim":
          giyimAdet++;
          giyimTutar += row.TutarYTL;
          break;
        case "Kira":
          kiraAdet++;
          kiraTutar += row.TutarYTL;
          break;
      }
  
      toplamBelgeAdet = egitimAdet + saglikAdet + gidaAdet + giyimAdet + kiraAdet;
      toplamBelgeTutar =
        egitimTutar + saglikTutar + gidaTutar + giyimTutar + kiraTutar;
      if (i == 10) {
        document.getElementById("TOPLAM1").innerHTML = toplamBelgeTutar;
        document.getElementById("nakledilen").innerHTML = toplamBelgeTutar;
      } else if ((i > 10) & (i < 20)) {
        document.getElementById("TOPLAM2").innerHTML = toplamBelgeTutar;
      }
    }
  
    localStorage.setItem("egitimAdetTransfer", egitimAdet);
    localStorage.setItem("egitimTutarTransfer", egitimTutar);
    localStorage.setItem("saglikAdetTransfer", saglikAdet);
    localStorage.setItem("saglikTutarTransfer", saglikTutar);
    localStorage.setItem("gidaAdetTransfer", gidaAdet);
    localStorage.setItem("gidaTutarTransfer", gidaTutar);
    localStorage.setItem("giyimAdetTransfer", giyimAdet);
    localStorage.setItem("giyimTutarTransfer", giyimTutar);
    localStorage.setItem("kiraAdetTransfer", kiraAdet);
    localStorage.setItem("kiraTutarTransfer", kiraTutar);
    localStorage.setItem("toplamBelgeAdetTransfer", toplamBelgeAdet);
    localStorage.setItem("toplamBelgeTutarTransfer", toplamBelgeTutar);
  }
  
  function openNewPage() {
    window.open("./page2.html", "_blank");
  }
  