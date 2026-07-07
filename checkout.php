<?php

$nama_produk = $_POST['nama_produk'] ?? '';
$harga = $_POST['harga'] ?? 0;
$gambar = $_POST['gambar'] ?? '';

?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout | Hijab Elegance</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
background:#f8f4f8;
}

header{
background:linear-gradient(90deg,#c2185b,#8e24aa);
padding:20px;
text-align:center;
color:white;
box-shadow:0 3px 8px rgba(0,0,0,.2);
}

.container{
width:90%;
max-width:800px;
margin:40px auto;
background:white;
padding:35px;
border-radius:15px;
box-shadow:0 8px 20px rgba(0,0,0,.15);
}

h2{
text-align:center;
color:#8e24aa;
margin-bottom:25px;
}

label{
display:block;
margin-top:15px;
font-weight:bold;
color:#444;
}

input,
textarea,
select{
width:100%;
padding:12px;
margin-top:8px;
border:1px solid #ccc;
border-radius:8px;
font-size:15px;
}

textarea{
height:90px;
resize:none;
}

.total{
margin-top:25px;
padding:15px;
background:#f3e5f5;
border-left:6px solid #8e24aa;
font-size:22px;
font-weight:bold;
color:#8e24aa;
text-align:center;
border-radius:8px;
}

.button{
display:flex;
justify-content:space-between;
margin-top:30px;
}

button{
padding:13px 28px;
border:none;
border-radius:8px;
cursor:pointer;
font-size:16px;
}

.kembali{
background:#757575;
color:white;
}

.pesan{
background:#8e24aa;
color:white;
}

footer{
margin-top:40px;
background:#4a148c;
color:white;
text-align:center;
padding:20px;
}

</style>

</head>

<body>

<header>

<h1>🧕 Hijab Elegance</h1>

<p>Koleksi Hijab Modern & Berkualitas</p>

</header>

<div class="container">

<h2>Form Checkout</h2>

<form action="sukses.php" method="post">

<input type="hidden" name="nama_produk" value="<?php echo $nama_produk; ?>">

<input type="hidden" name="harga" value="<?php echo $harga; ?>">

<input type="hidden" name="gambar" value="<?php echo $gambar; ?>">

<label>Produk</label>

<input type="text" value="<?php echo $nama_produk; ?>" readonly>

<label>Nama Lengkap</label>

<input type="text" name="nama" required>

<label>Alamat Lengkap</label>

<textarea name="alamat" required></textarea>

<label>Nomor WhatsApp</label>

<input type="text" name="nohp" required>

<label>Jasa Pengiriman</label>

<select name="kurir">

<option>JNE</option>
<option>J&T Express</option>
<option>SiCepat</option>
<option>POS Indonesia</option>
<option>AnterAja</option>

</select>

<label>Metode Pembayaran</label>

<select name="pembayaran">

<option>Transfer Bank</option>
<option>DANA</option>
<option>OVO</option>
<option>GoPay</option>
<option>ShopeePay</option>
<option>COD</option>

</select>

<label>Catatan</label>

<textarea name="catatan"></textarea>

<div class="total">

Total Pembayaran :
Rp<?php echo $harga; ?>

</div>

<div class="button">

<a href="keranjang.php">

<button type="button" class="kembali">

⬅ Kembali

</button>

</a>

<button type="submit" class="pesan">

🛍 Buat Pesanan

</button>

</div>

</form>

</div>

<footer>

<h3>Hijab Elegance</h3>

<p>✨ Tampil Cantik & Syar'i Setiap Hari ✨</p>

<br>

<p>📍 Bandung, Jawa Barat</p>

<p>📞 0812-3456-7890</p>

<p>© 2026 Hijab Elegance</p>

</footer>

</body>
</html>