<!DOCTYPE html>
<head>
   <meta charset="utf-8">
    <title> Kursad Eren MADEN </title>
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="anasayfa.css"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="ilgialanları.css"/>
</head>

<body >
   
      <header  >  
     <div class = "ul1" >
      <li><a class ="hakkı" href="index.html">Hakkında</a></li>
         <li><a class = "giriş" href="giris.html">Giriş</a></li>
         <li><a class ="miras" href="Miras.html">Mirasımız</a></li>
         <li><a class = "şehir" href="sehrim.html">Şehrimiz</a></li>
         <li><a class ="oz" href="ozgecmisim.html">Özgeçmişim</a></li> 
         <li><a class ="ilet" href="iletisim.html">İletişim</a></li>  
         <li><a class ="ilgi" href="ilgialanlarım.php">ilgialanlarım</a></li>
     </div> 
    </header>  
    <nav class = "adım2">
     <th class="adım"> KÜRŞAD EREN MADEN </th>
    </nav>
    <?php
$public_key = "754a778eeb692387ab72f861d1ffba26"; // Bu kısmı kendi public key'inizle değiştirin
$private_key = "15733ab04d2f75ae1adf9d53f975f2bfe469cbf8"; // Bu kısmı kendi private key'inizle değiştirin
$timestamp = time();
$hash = md5($timestamp . $private_key . $public_key);

$url = "http://gateway.marvel.com/v1/public/characters?ts=$timestamp&apikey=$public_key&hash=$hash";
$response = file_get_contents($url);

if ($response === false) {
    echo "Hata: API'ye bağlanırken bir sorun oluştu.";
} else {
    $data = json_decode($response, true);

    // Tabloyu oluşturun ve sınıf ekle
    echo '<table class="characters-table">';

    // Başlık sırasını oluşturun ve sınıf ekle
    echo '<tr class="table-header"><th>Character Name</th><th>Description</th><th>Thumbnail</th></tr>';

    // Her karakter için bir tablo satırı oluşturun ve sınıf ekle
    foreach ($data["data"]["results"] as $character) {
        echo '<tr class="table-row">';

        // Karakter adı
        echo '<td class="name">' . $character["name"] . '</td>';

        // Karakter açıklaması
        echo '<td class="description">' . $character["description"] . '</td>';

        // Karakter küçük resmi
        echo '<td class="thumbnail"><img src="' . $character["thumbnail"]["path"] . '/standard_fantastic.' . $character["thumbnail"]["extension"] . '"></td>';

        echo '</tr>';
    }

    // Tabloyu kapatın
    echo '</table>';
}
?>

   
   
   

  
    
        
     <div class="fixed">
   <div class="footerItem">
      <ul class="socialLinks">
      <li id="ab"><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li id="ab"><a href="#"><i class="fa fa-instagram"></i></a></li>
      <li id="ab"><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li id="ab"><a href="#"><i class="fa fa-linkedin"></i></a></li>
     
    
    </ul>
 </div>
</div>    
          
    

       

</body>


</html>