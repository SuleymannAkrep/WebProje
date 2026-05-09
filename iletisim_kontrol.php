<?php
// iletisim_kontrol.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri değişkenlere atıyoruz
    $ad_soyad = isset($_POST['ad_soyad']) ? $_POST['ad_soyad'] : "Girilmedi";
    $email    = isset($_POST['email'])    ? $_POST['email']    : "Girilmedi";
    $telefon  = isset($_POST['telefon'])  ? $_POST['telefon']  : "Girilmedi";
    $konu     = isset($_POST['konu'])     ? $_POST['konu']     : "Girilmedi";
    $cinsiyet = isset($_POST['cinsiyet']) ? $_POST['cinsiyet'] : "Girilmedi";
    $onay     = isset($_POST['onay'])     ? "Onaylandı"        : "Onaylanmadı";

    // Ödev gereği verileri düzenli bir şekilde ekrana yazdırıyoruz 
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
        <title>Form Verileri</title>
    </head>
    <body class='p-5'>
        <div class='container border p-4 bg-light shadow-sm'>
            <h2 class='text-primary'>Gönderilen Form Bilgileri</h2>
            <hr>
            <p><strong>Ad Soyad:</strong> $ad_soyad</p>
            <p><strong>E-posta:</strong> $email</p>
            <p><strong>Telefon:</strong> $telefon</p>
            <p><strong>Konu:</strong> $konu</p>
            <p><strong>Cinsiyet:</strong> $cinsiyet</p>
            <p><strong>Onay Durumu:</strong> $onay</p>
            <br>
            <a href='iletisim.html' class='btn btn-secondary'>Geri Dön</a>
        </div>
    </body>
    </html>";
} else {
    // Form dışı erişimi engellemek için yönlendirme
    header("Location: iletisim.html");
    exit();
}
?>