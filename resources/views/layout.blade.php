<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta name="description" content="Vtuber、音楽有償依頼、MIX、楽曲依頼、配信">
        <link rel="stylesheet" href="/destyle.css">
        <link rel="stylesheet" href="/app.css">
        <link rel="icon" href="favicon.ico">
    </head>
<body>
    <header class="page-header wrapper">
        <a href={{'/'}}>
        <img class="logo" src="images/newrogo.svg" alt="logo">
        </a>
        <nav>
            <ul class="main-nav">
                <li><a href={{'about'}}>about</a></li>
                <li><a href={{'works'}}>works</a></li>
                <li><a href="https://twitter.com/shibata_taichi">SNS</a></li>
                <li><a href="https://forms.gle/HTwPa2MV13L497d77">contact</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>