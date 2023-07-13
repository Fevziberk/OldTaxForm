row = [
  {
    Date: "",
    No: "",
    WhoFrom: "",
    Type: "",
    Price: "",
  },
];

function storeInput() {
  var eduAmount = 0,
    medAmount = 0,
    nutrAmount = 0,
    clothAmount = 0,
    rentAmount = 0;
  var eduPrice = 0,
    medPrice = 0,
    nutrPrice = 0,
    clothPrice = 0,
    rentPrice = 0;
  var totalFileAmount = 0,
    totalFilePrice = 0;

  for (var i = 1; i <= 11; i++) {
    var dateValue = document.getElementsByName("date" + i)[0].value;
    var noValue = document.getElementsByName("no" + i)[0].value;
    var whoFromValue = document.getElementsByName("whoFrom" + i)[0].value;
    var typeValue = document.getElementsByName("type" + i)[0].options[
      document.getElementsByName("type" + i)[0].selectedIndex
    ].value;
    var priceValue = document.getElementsByName("price" + i)[0].value;
    if (isNaN(priceValue)) {
      alert(
        "Lütfen " +
          i +
          " sıra numaralı satırdaki Tutar YTL sütununa sayısal değer giriniz."
      );
      return;
    }

    var emptyInput = 0;
    if (dateValue === "") {
      emptyInput++;
    }
    if (noValue === "") {
      emptyInput++;
    }
    if (whoFromValue === "") {
      emptyInput++;
    }
    if (typeValue === "Bos") {
      emptyInput++;
    }
    if (priceValue === "") {
      emptyInput++;
    }
    if (emptyInput != 0 && emptyInput != 5) {
      alert(
        i + " numaralı satırda eksik bilgileriniz var, lütfen kontrol ediniz."
      );
      emptyInput = 0;
      return;
    }

    var row = {
      rowNo: i.toString(),
      Date: dateValue,
      No: noValue,
      WhoFrom: whoFromValue,
      type: typeValue,
      price: parseFloat(priceValue),
    };

    switch (row.type) {
      case "Egitim":
        eduAmount++;
        eduPrice += row.price;
        break;
      case "Saglik":
        medAmount++;
        medPrice += row.price;
        break;
      case "Gida":
        nutrAmount++;
        nutrPrice += row.price;
        break;
      case "Giyim":
        clothAmount++;
        clothPrice += row.price;
        break;
      case "Kira":
        rentAmount++;
        rentPrice += row.price;
        break;
    }

    totalFileAmount =
      eduAmount + medAmount + nutrAmount + clothAmount + rentAmount;
    totalFilePrice = eduPrice + medPrice + nutrPrice + clothPrice + rentPrice;
    if (i == 6) {
      document.getElementById("finalPriceLeft").innerHTML = totalFilePrice;
      document.getElementById("transferredPriceRight").innerHTML =
        totalFilePrice;
    } else if ((i > 6) & (i <= 11)) {
      document.getElementById("finalPriceRight").innerHTML = totalFilePrice;
    }
  }

  localStorage.setItem("eduAmountTransfer", eduAmount);
  localStorage.setItem("eduPriceTransfer", eduPrice);
  localStorage.setItem("medAmountTransfer", medAmount);
  localStorage.setItem("medPriceTransfer", medPrice);
  localStorage.setItem("nutrAmountTransfer", nutrAmount);
  localStorage.setItem("nutrPriceTransfer", nutrPrice);
  localStorage.setItem("clothAmountTransfer", clothAmount);
  localStorage.setItem("clothPriceTransfer", clothPrice);
  localStorage.setItem("rentAmountTransfer", rentAmount);
  localStorage.setItem("rentPriceTransfer", rentPrice);
}

function openNewPage() {
  window.open("./page2.html", "_blank");
}
