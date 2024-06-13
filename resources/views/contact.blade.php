<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/porto.css') }}">
</head>
<body>
    <!--navbar-->
 
    <header>
        <div class="logo">
            MY PORTOPOLIO
        </div>
        <nav>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/prjct">My Project</a></li>
                <li><a href="/cntc">Contact</a></li>  
            </ul>
        </nav>
    </header>
    <main class="main-f">
        <div class="jjr">
        <div class="ig">
            <article>
                <h3>INSTAGRAM</h3>
                <aside><img src="{{ asset('img/ig2.png') }}" style="width: 200px"></aside>
            </article>
            <a href="https://www.instagram.com/farrelbintang1/" target="_blank">informasi untuk ig saya</a>
            </div>
            
            <div class="wa">
                <article>
                    <h3>WHATSAPP</h3>
                    <aside><img src="{{ asset('img/wa.png') }}" style="width: 290px"></aside>
                    </article>
            <a href="https://wa.me/+6285697715481" target="_blank">no saya</a>
        </div>
    </div>
    </main>
    <footer>&copy;Farrel Muhammad Bintang</footer>
   
</body>
</html>