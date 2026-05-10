<?php
// Formdan gelen verileri alıyoruz
$email = $_POST['email'] ?? '';
$pass = $_POST['password'] ?? '';

 

$dogru_email = "b251210007@sakarya.edu.tr"; 
$dogru_pass = "b251210007";

// Karşılaştırma yapıyoruz
if ($email == $dogru_email && $pass == $dogru_pass) {
    echo "<div style='text-align:center; margin-top:50px;'>";
    echo "<h1>Hoşgeldiniz " . $dogru_pass . "</h1>"; // Başarı mesajı 
    echo "<a href='index.html'>Ana Sayfaya Dön</a>";
    echo "</div>";
} else {
    // Hatalıysa login sayfasına yönlendir 
    header("Location: login.html?hata=1");
    exit();
}
?>