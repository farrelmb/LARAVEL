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
    <main class="main2">
        <div class="jajar">
            <div class="kalku" alt="jpg">
                <article>
                    <h3>KALKULATOR</h3>
                    
                </article>
                <div class="kal">
                    <aside><img src="{{ asset('img/Ss.png') }}" height="200" width="300"></aside>
                </div>
                <a href="http://farrelmbntg.42web.io/projectatsfmb/" target="_blank">informasi lebih lanjut</a>


            </div>
            <div class="dasi">
                <article>
                    <h3>DATA SISWA</h3>
                    
                </article>
                <aside><img src="{{ asset('img/Sd.png') }}" height="150" width="300"></aside>
                <a href="http://farrelmbntg.42web.io/CRUD/" target="_blank">informasi lebih lanjut</a>
            </div>

            <div class="remot">
                <article>
                    <h3>RENTAL MOTOR</h3>
                    
                </article>
                <aside><img src="{{ asset('img/Sc.png') }}"  height="150" width="300"></aside>
                <a href="http://farrelmb.infinityfreeapp.com/rental/?i=1" target="_blank">informasi lebih lanjut</a>
            </div>

        </div>
    </main>
    <footer>&copy;Farrel Muhammad Bintang</footer>


</body>

</html>