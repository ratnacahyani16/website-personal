<?php

$nama = $_POST['nama'] ?? '';
$alamat = $_POST['alamat'] ?? '';
$nohp = $_POST['nohp'] ?? '';
$kurir = $_POST['kurir'] ?? '';
$pembayaran = $_POST['pembayaran'] ?? '';
$catatan = $_POST['catatan'] ?? '';
$nama_produk = $_POST['nama_produk'] ?? '';
$harga = $_POST['harga'] ?? 0;

$nomor_pesanan = "HE" . rand(100000,999999);

?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pesanan Berhasil | Hijab Elegance</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
background:#f7f2f8;
}

.container{
width:90%;
max-width:750px;
margin:50px auto;
background:white;
padding:40px;
border-radius:20px;
box-shadow:0 10px 25px rgba(0,0,0,.15);
text-align:center;
}

.check{
font-size:90px;
}

h1{
color:#8e24aa;
margin-top:10px;
margin-bottom:10px;
}

.subtitle{
font-size:18px;
color:#666;
}

.nomor{
margin-top:25px;
font-size:22px;
font-weight:bold;
color:#c2185b;
}

.box{
margin-top:30px;
background:#faf5ff;
padding:25px;
border-radius:15px;
text-align:left;
}

.box p{
margin:12px 0;
font-size:17px;
}

.total{
margin-top:25px;
font-size:25px;
font-weight:bold;
color:#8e24aa;
}

.estimasi{
margin-top:20px;
font-size:17px;
color:#666;
}

button{
margin-top:35px;
padding:15px 35px;
border:none;
border-radius:10px;
background:#8e24aa;
color:white;
font-size:18px;
cursor:pointer;
transition:.3s;
}

button:hover{
background:#6a1b9a;
}

footer{
margin-top:35px;
padding:20px;
background:#4a148c;
color:white;
text-align:center;
}

</style>

</head>

<body>

<div class="container">

<div class="check">
🧕💜
</div>

<h1>Pesanan Berhasil!</h1>

<p class="subtitle">
Terima kasih telah berbelanja di <b>Hijab Elegance</b>.
</p>

<div class="nomor">

Nomor Pesanan :
<b><?php echo $nomor_pesanan; ?></b>

</div>

<div class="box">

<p><b>Nama Pembeli :</b> <?php echo $nama; ?></p>

<p><b>Alamat :</b> <?php echo $alamat; ?></p>

<p><b>No. WhatsApp :</b> <?php echo $nohp; ?></p>

<p><b>Jasa Pengiriman :</b> <?php echo $kurir; ?></p>

<p><b>Metode Pembayaran :</b> <?php echo $pembayaran; ?></p>

<p><b>Produk :</b> <?php echo $nama_produk; ?></p>

<p><b>Jumlah :</b> 1 pcs</p>

<p><b>Catatan :</b> <?php echo $catatan; ?></p>

</div>

<div class="total">

Total Pembayaran :
Rp<?php echo $harga; ?>

</div>

<p class="estimasi">

📦 Estimasi pesanan akan tiba dalam 2–4 hari kerja.

</p>

<a href="index.php">

<button>

🛍 Kembali Belanja

</button>

</a>

</div>

<footer>

<h3>Hijab Elegance</h3>

<p>✨ Cantik, Anggun, dan Syar'i Setiap Hari ✨</p>

<br>

<p>📍 Bandung, Jawa Barat</p>

<p>📞 0812-3456-7890</p>

<p>© 2026 Hijab Elegance. All Rights Reserved.</p>

</footer>

</body>
</html>