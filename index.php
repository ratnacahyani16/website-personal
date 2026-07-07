<?php

$produk = [

[
"nama"=>"Pashmina Ceruty",
"harga"=>"45.000",
"gambar"=>"gambar/Sheeka - IRIS PASHMINA VISCOSE MODAL SHAWL.jpg",
"rating"=>"⭐⭐⭐⭐⭐"
],

[
"nama"=>"Hijab Voal Premium",
"harga"=>"55.000",
"gambar"=>"gambar/Umama Scarf - Kerudung Polos Segi Empat Hijab Daily Voal Aura Crystal Icon Pouch.jpg",
"rating"=>"⭐⭐⭐⭐⭐"
],

[
"nama"=>"Hijab Paris",
"harga"=>"35.000",
"gambar"=>"gambar/Hijab Segi4 Katun Paris Varisa Jilbab Paris Jadul Hijab Kekinian Bahan Katun Lembut Ngak Mudah Kusut.jpg",
"rating"=>"⭐⭐⭐⭐⭐"
],

[
"nama"=>"Hijab Segi Empat",
"harga"=>"40.000",
"gambar"=>"gambar/segi empat.jpg",
"rating"=>"⭐⭐⭐⭐⭐"
],

[
"nama"=>"Hijab Malay",
"harga"=>"60.000",
"gambar"=>"gambar/Hijab Malay Dagu Karet Size S _ Bergo Dagu Karet Praktis Bahan Rayon Stretch By Akbar Scarves _ Bergo Sporty & Casual Style.jpg",
"rating"=>"⭐⭐⭐⭐⭐"
],

[
"nama"=>"Khimar Premium",
"harga"=>"75.000",
"gambar"=>"gambar/Modest Muslim Woman Khimar - Stone Beige.jpg",
"rating"=>"⭐⭐⭐⭐⭐"
],

[
"nama"=>"Bergo Sport",
"harga"=>"50.000",
"gambar"=>"gambar/(ORI) SIZE L HIJAB BERGO HAMIDAH ORI.jpg",
"rating"=>"⭐⭐⭐⭐"
],

[
"nama"=>"Hijab Motif Floral",
"harga"=>"65.000",
"gambar"=>"gambar/Hijab motif floral.jpg",
"rating"=>"⭐⭐⭐⭐⭐"
]

];

?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Ratna's Hijab Atilier</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,Helvetica,sans-serif;
}

body{
background:#f8f8f8;
}

header{
background:#d63384;
padding:20px 50px;
display:flex;
justify-content:space-between;
align-items:center;
color:white;
}

header h1{
font-size:32px;
}

nav a{
color:white;
text-decoration:none;
margin-left:20px;
font-weight:bold;
}

.banner{
height:350px;
background:linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,.4)),
url("gambar/20688479533559487.jpg");
background-size:cover;
background-position:center;
display:flex;
justify-content:center;
align-items:center;
}

.banner h2{
color:white;
background:rgba(0,0,0,.5);
padding:20px;
border-radius:10px;
font-size:42px;
}

.container{
width:90%;
margin:40px auto;
}

.judul{
text-align:center;
margin-bottom:30px;
font-size:34px;
}

.produk{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:25px;
}

.card{
background:white;
border-radius:15px;
overflow:hidden;
box-shadow:0 5px 15px rgba(0,0,0,.2);
transition:.3s;
}

.card:hover{
transform:translateY(-8px);
}

.card img{
width:100%;
height:280px;
object-fit:cover;
}

.card-body{
padding:15px;
text-align:center;
}

.card-body h3{
margin-bottom:10px;
}

.rating{
color:orange;
margin-bottom:10px;
}

.harga{
color:#d63384;
font-size:22px;
font-weight:bold;
margin-bottom:15px;
}

button{
padding:12px 25px;
background:#d63384;
color:white;
border:none;
border-radius:8px;
cursor:pointer;
font-size:16px;
}

button:hover{
background:#b0256d;
}

footer{
margin-top:50px;
background:#222;
color:white;
text-align:center;
padding:25px;
}

</style>

</head>

<body>

<header>

<h1>🧕 Hijab Elegance</h1>

<nav>

<a href="index.php">Home</a>
<a href="#">Produk</a>
<a href="#">Promo</a>
<a href="#">Kontak</a>

</nav>

</header>

<div class="banner">

<h2>Koleksi Hijab Modern</h2>

</div>

<div class="container">

<h2 class="judul">Produk Terlaris</h2>

<div class="produk">

<?php foreach($produk as $p){ ?>

<div class="card">

<img src="<?php echo $p['gambar']; ?>">

<div class="card-body">

<h3><?php echo $p['nama']; ?></h3>

<p class="rating"><?php echo $p['rating']; ?></p>

<p class="harga">Rp<?php echo $p['harga']; ?></p>

<form action="keranjang.php" method="post">

<input type="hidden" name="nama" value="<?php echo $p['nama']; ?>">

<input type="hidden" name="harga" value="<?php echo $p['harga']; ?>">

<input type="hidden" name="gambar" value="<?php echo $p['gambar']; ?>">

<button type="submit">

Tambah ke Keranjang

</button>

</form>

</div>

</div>

<?php } ?>

</div>

</div>

<footer>

<h2>Hijab Elegants

</h2>

<p>Koleksi Hijab Berkualitas dengan Harga Terjangkau</p>

<br>

<p>📍 Bandung, Indonesia</p>

<p>📞 0812-3456-7890</p>

<p>© 2026 Hijab Elegance</p>

</footer>

</body>

</html>