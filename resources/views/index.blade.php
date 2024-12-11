<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/porto.css') }}">
    
     </script>
</head>
<body>
    <!--navbar-->
    
    <header>
        <div class="logo">
            MY PORTOPOLIO
        </div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/prjct">My Project</a></li>
                <li><a href="/cntc">Contact</a></li>  
            </ul>
        </nav>
    </header>
   <main>
<div class="pc">
    <article>
        <h1>About My Self</h1>
        <p>Perkenalkan nama saya Farrel Muhammad Bintang saya seorang siswa di sekolah SMK Wikrama Bogor, umur saya 16 tahun dan saya belajar di jurusan PPLG
            (Pengembangan Perangkat Lunak dan Gim), sudah banyak project yang saya buat selama di jurusan PPLG ini contoh nya yaitu membuat kalkulator, data siswa, rental motor, dll </p>
    </article>
</div>
<br>
<div class="bhs">
   <h2> BAHASA YANG SUDAH SAYA PELAJARI</h2>
</div>
   <article>
<div class="sejajar">
    <div class="hcj">
      <h3>HTML, CSS, JS</h3>  
    <img src="{{ asset('img/hcj.png') }}" style="width: 250px" >
    </div>
    <div class="php">
        <h3>PHP</h3>
    <img src="{{ asset('img/php.png') }}" style="width: 250px">       
    </div>
</div>
   </article>
   </main>
   <footer>&copy;Farrel Muhammad Bintang</footer>
</body>
</html>