<?php
include("database.php");


session_start();

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page 1</title>

  <link rel="stylesheet" href="page1.css" />
  <script src="page1.js"></script>


  </style>
</head>

<body>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <div class="container">
      <div class="taxTable">
        <div class="TableHead">
          <div class="queueNoFirst">
            Sıra <br />
            No
          </div>
          <div class="headTextFirst">VERGİ İNDİRİMİNE ESAS BELGENİN</div>
          <div class="queueNoSecond">
            Sıra <br />
            No
          </div>
          <div class="headTextSecond">VERGİ İNDİRİMİNE ESAS BELGENİN</div>
          <div class="dateHead">Tarih</div>
          <div class="noHead">Nosu</div>
          <div class="whoFromHead">Kimden Aldığı</div>
          <div class="typeHead">Cinsi</div>
          <div class="priceHead">Tutar TL</div>
          <div class="dateHeadSecond">Tarih</div>
          <div class="noHeadSecond">Nosu</div>
          <div class="whoFromHeadSecond">Kimden Aldığı</div>
          <div class="typeHeadSecond">Cinsi</div>
          <div class="priceHeadSecond">Tutar TL</div>
          <div class="rowNumberOne">1</div>
          <div class="dateInput1">
            <input type="text" name="date1" class="dateInputField" />
          </div>
          <div class="noInput1">
            <input type="text" name="no1" class="noInputField" />
          </div>
          <div class="whoFromInput1">
            <input type="text" name="whoFrom1" class="whoFromInputField" />
          </div>
          <div class="typeInputs">
            <select name="type1" class="typeInputField">
              <option value="Bos">Seç</option>
              <option value="Egitim">Eğitim</option>
              <option value="Saglik">Sağlık</option>
              <option value="Gida">Gıda</option>
              <option value="Giyim">Giyim</option>
              <option value="Kira">Kira</option>
            </select>
          </div>
          <div class="priceInput1">
            <input type="text" name="price1" class="priceInputField" />
          </div>
          <div class="transferredPriceText">NAKLEDİLEN TOPLAM</div>
          <div class="transferredPrice" id="transferredPriceRight">0</div>
        </div>

        <div class="tableInputArea">
          <div class="rowNum">2</div>
          <div class="dateInputs">
            <input type="text" name="date2" class="dateInputField" />
          </div>
          <div class="noInputs">
            <input type="text" name="no2" class="noInputField" />
          </div>
          <div class="whoFromInputs">
            <input type="text" name="whoFrom2" class="whoFromInputField" />
          </div>
          <div class="typeInputs">
            <select name="type2" class="typeInputField">
              <option value="Bos">Seç</option>
              <option value="Egitim">Eğitim</option>
              <option value="Saglik">Sağlık</option>
              <option value="Gida">Gıda</option>
              <option value="Giyim">Giyim</option>
              <option value="Kira">Kira</option>
            </select>
          </div>
          <div class="priceInputs">
            <input type="text" name="price2" class="priceInputField" />
          </div>
          <div class="rowNum">7</div>
          <div class="dateInputs">
            <input type="text" name="date7" class="dateInputField" />
          </div>
          <div class="noInputs">
            <input type="text" name="no7" class="noInputField" />
          </div>
          <div class="whoFromInputs">
            <input type="text" name="whoFrom7" class="whoFromInputField" />
          </div>
          <div class="typeInputs">
            <select name="type7" class="typeInputField">
              <option value="Bos">Seç</option>
              <option value="Egitim">Eğitim</option>
              <option value="Saglik">Sağlık</option>
              <option value="Gida">Gıda</option>
              <option value="Giyim">Giyim</option>
              <option value="Kira">Kira</option>
            </select>
          </div>
          <div class="priceInputs">
            <input type="text" name="price7" class="priceInputField" />
          </div>
          <div class="rowNum">3</div>
          <div class="dateInputs">
            <input type="text" name="date3" class="dateInputField" />
          </div>
          <div class="noInputs">
            <input type="text" name="no3" class="noInputField" />
          </div>
          <div class="whoFromInputs">
            <input type="text" name="whoFrom3" class="whoFromInputField" />
          </div>
          <div class="typeInputs">
            <select name="type3" class="typeInputField">
              <option value="Bos">Seç</option>
              <option value="Egitim">Eğitim</option>
              <option value="Saglik">Sağlık</option>
              <option value="Gida">Gıda</option>
              <option value="Giyim">Giyim</option>
              <option value="Kira">Kira</option>
            </select>
          </div>
          <div class="priceInputs">
            <input type="text" name="price3" class="priceInputField" />
          </div>
          <div class="rowNum">8</div>
          <div class="dateInputs">
            <input type="text" name="date8" class="dateInputField" />
          </div>
          <div class="noInputs">
            <input type="text" name="no8" class="noInputField" />
          </div>
          <div class="whoFromInputs">
            <input type="text" name="whoFrom8" class="whoFromInputField" />
          </div>
          <div class="typeInputs">
            <select name="type8" class="typeInputField">
              <option value="Bos">Seç</option>
              <option value="Egitim">Eğitim</option>
              <option value="Saglik">Sağlık</option>
              <option value="Gida">Gıda</option>
              <option value="Giyim">Giyim</option>
              <option value="Kira">Kira</option>
            </select>
          </div>
          <div class="priceInputs">
            <input type="text" name="price8" class="priceInputField" />
          </div>
          <div class="rowNum">4</div>
          <div class="dateInputs">
            <input type="text" name="date4" class="dateInputField" />
          </div>
          <div class="noInputs">
            <input type="text" name="no4" class="noInputField" />
          </div>
          <div class="whoFromInputs">
            <input type="text" name="whoFrom4" class="whoFromInputField" />
          </div>
          <div class="typeInputs">
            <select name="type4" class="typeInputField">
              <option value="Bos">Seç</option>
              <option value="Egitim">Eğitim</option>
              <option value="Saglik">Sağlık</option>
              <option value="Gida">Gıda</option>
              <option value="Giyim">Giyim</option>
              <option value="Kira">Kira</option>
            </select>
          </div>
          <div class="priceInputs">
            <input type="text" name="price4" class="priceInputField" />
          </div>
          <div class="rowNum">9</div>
          <div class="dateInputs">
            <input type="text" name="date9" class="dateInputField" />
          </div>
          <div class="noInputs">
            <input type="text" name="no9" class="noInputField" />
          </div>
          <div class="whoFromInputs">
            <input type="text" name="whoFrom9" class="whoFromInputField" />
          </div>
          <div class="typeInputs">
            <select name="type9" class="typeInputField">
              <option value="Bos">Seç</option>
              <option value="Egitim">Eğitim</option>
              <option value="Saglik">Sağlık</option>
              <option value="Gida">Gıda</option>
              <option value="Giyim">Giyim</option>
              <option value="Kira">Kira</option>
            </select>
          </div>
          <div class="priceInputs">
            <input type="text" name="price9" class="priceInputField" />
          </div>
          <div class="rowNum">5</div>
          <div class="dateInputs">
            <input type="text" name="date5" class="dateInputField" />
          </div>
          <div class="noInputs">
            <input type="text" name="no5" class="noInputField" />
          </div>
          <div class="whoFromInputs">
            <input type="text" name="whoFrom5" class="whoFromInputField" />
          </div>
          <div class="typeInputs">
            <select name="type5" class="typeInputField">
              <option value="Bos">Seç</option>
              <option value="Egitim">Eğitim</option>
              <option value="Saglik">Sağlık</option>
              <option value="Gida">Gıda</option>
              <option value="Giyim">Giyim</option>
              <option value="Kira">Kira</option>
            </select>
          </div>
          <div class="priceInputs">
            <input type="text" name="price5" class="priceInputField" />
          </div>
          <div class="rowNum">10</div>
          <div class="dateInputs">
            <input type="text" name="date10" class="dateInputField" />
          </div>
          <div class="noInputs">
            <input type="text" name="no10" class="noInputField" />
          </div>
          <div class="whoFromInputs">
            <input type="text" name="whoFrom10" class="whoFromInputField" />
          </div>
          <div class="typeInputs">
            <select name="type10" class="typeInputField">
              <option value="Bos">Seç</option>
              <option value="Egitim">Eğitim</option>
              <option value="Saglik">Sağlık</option>
              <option value="Gida">Gıda</option>
              <option value="Giyim">Giyim</option>
              <option value="Kira">Kira</option>
            </select>
          </div>
          <div class="priceInputs">
            <input type="text" name="price10" class="priceInputField" />
          </div>
          <div class="rowNum">6</div>
          <div class="dateInputs">
            <input type="text" name="date6" class="dateInputField" />
          </div>
          <div class="noInputs">
            <input type="text" name="no6" class="noInputField" />
          </div>
          <div class="whoFromInputs">
            <input type="text" name="whoFrom6" class="whoFromInputField" />
          </div>
          <div class="typeInputs">
            <select name="type6" class="typeInputField">
              <option value="Bos">Seç</option>
              <option value="Egitim">Eğitim</option>
              <option value="Saglik">Sağlık</option>
              <option value="Gida">Gıda</option>
              <option value="Giyim">Giyim</option>
              <option value="Kira">Kira</option>
            </select>
          </div>
          <div class="priceInputs">
            <input type="text" name="price6" class="priceInputField" />
          </div>
          <div class="rowNum">11</div>
          <div class="dateInputs">
            <input type="text" name="date11" class="dateInputField" />
          </div>
          <div class="noInputs">
            <input type="text" name="no11" class="noInputField" />
          </div>
          <div class="whoFromInputs">
            <input type="text" name="whoFrom11" class="whoFromInputField" />
          </div>
          <div class="typeInputs">
            <select name="type11" class="typeInputField">
              <option value="Bos">Seç</option>
              <option value="Egitim">Eğitim</option>
              <option value="Saglik">Sağlık</option>
              <option value="Gida">Gıda</option>
              <option value="Giyim">Giyim</option>
              <option value="Kira">Kira</option>
            </select>
          </div>
          <div class="priceInputs">
            <input type="text" name="price11" class="priceInputField" />
          </div>
        </div>

        <div class="tableFoot">
          <div class="finalPriceText">TOPLAM..:</div>
          <div class="finalPrice" id="finalPriceLeft">0</div>
          <div class="finalPriceText">TOPLAM..:</div>
          <div class="finalPrice" id="finalPriceRight">0</div>
        </div>
      </div>
    </div>
    <button onclick="storeInput()" class="kaydet">Kaydet</button>
    <button onclick="openNewPage()" class="bitir">Bitir</button>
  </form>
</body>

</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $sql_check = "SELECT * FROM userinfo WHERE username = '$username'";
  $result_check = mysqli_query($conn, $sql_check);
  if (mysqli_num_rows($result_check) > 0) {
      
   

    
  } 
}
mysqli_close($conn);

?>