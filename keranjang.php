<?php

$nama = $_POST['nama'] ?? '';
$harga = $_POST['harga'] ?? 0;
$gambar = $_POST['gambar'] ?? '';

?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Keranjang Belanja | Hijab Elegance</title>

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
color:white;
padding:20px;
text-align:center;
box-shadow:0 3px 10px rgba(0,0,0,.2);
}

.container{
width:90%;
max-width:1000px;
margin:40px auto;
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 8px 20px rgba(0,0,0,.15);
}

h2{
text-align:center;
margin-bottom:25px;
color:#8e24aa;
}

table{
width:100%;
border-collapse:collapse;
margin-bottom:20px;
}

table th{
background:#8e24aa;
color:white;
padding:15px;
}

table td{
padding:15px;
text-align:center;
border-bottom:1px solid #ddd;
}

img{
width:90px;
height:90px;
object-fit:cover;
border-radius:10px;
}

input[type=number]{
width:60px;
padding:5px;
text-align:center;
}

.total{
text-align:right;
font-size:22px;
font-weight:bold;
color:#8e24aa;
margin-top:20px;
}

.button{
display:flex;
justify-content:space-between;
margin-top:30px;
}

button{
padding:13px 28px;
font-size:16px;
border:none;
border-radius:8px;
cursor:pointer;
transition:.3s;
}

.kembali{
background:#757575;
color:white;
}

.checkout{
background:#8e24aa;
color:white;
}

button:hover{
opacity:.9;
}

footer{
margin-top:50px;
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
<p>Keranjang Belanja Anda</p>

</header>

<div class="container">

<h2>Produk yang Dipilih</h2>

<table>

<tr>

<th>Gambar</th>
<th>Produk</th>
<th>Harga</th>
<th>Jumlah</th>
<th>Subtotal</th>

</tr>

<tr>

<td>
<img src="<?php echo $gambar; ?>">
</td>

<td><?php echo $nama; ?></td>

<td>Rp<?php echo $harga; ?></td>

<td>1</td>

<td>Rp<?php echo $harga; ?></td>

</tr>

</table>

<div class="total">

Total Belanja :
<strong>Rp<?php echo $harga; ?></strong>

</div>

<div class="button">

<a href="index.php">

<button type="button" class="kembali">

⬅ Lanjut Belanja

</button>

</a>

<form action="checkout.php" method="post">

<input type="hidden" name="nama_produk" value="<?php echo $nama; ?>">

<input type="hidden" name="harga" value="<?php echo $harga; ?>">

<input type="hidden" name="gambar" value="<?php echo $gambar; ?>">

<button type="submit" class="checkout">

🛍 Checkout

</button>

</form>

</div>

</div>

<footer>

<h3>Hijab Elegance</h3>

<p>✨ Hijab Berkualitas untuk Tampil Cantik & Syar'i ✨</p>

<br>

<p>📍 Bandung, Jawa Barat</p>

<p>📞 0812-3456-7890</p>

<p>© 2026 Hijab Elegance. All Rights Reserved.</p>

</footer>

</body>
</html>