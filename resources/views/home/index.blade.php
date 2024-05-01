<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホーム画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BIZ+UDGothic&family=M+PLUS+Rounded+1c&family=Murecho:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
@include('parts.nav')

<h1 class=title>ホーム</h1>

<div class = "containaer text-center">
    <div class = row>
    <div class = "col-4"> 
        <a href="/items/lip">
            <img src="/lip.png" alt="" class="lip">
            <div class=text><p class="plip">リップ</p></div>
        </a>
    </div>

    <div class = "col-4"> 
    <a href="/items/eye">
            <img src="/eyemake.png" alt="" class="eye">
            <div class=text><p>アイメイク</p></div>
        </a>
    </div>

    <div class = "col-4"> 
    <a href="/items/base">
            <img src="/foundation.png" alt="" class="base">
            <div class=text><p class="pbase">ベース</p></div>
        </a>
    </div>

    <div class = "col-4"> 
    <a href="/items/skin">
            <img src="/skin.png" alt="" class="skin">
            <div class=text><p class="pskin">スキンケア</p></div>
        </a>
    </div>

    <div class = "col-4"> 
    <a href="/items/tool">
            <img src="/tool.png" alt="" class="tool">
            <div class=text><p>ツール</p></div>
        </a>
    </div>

    <div class = "col-4"> 
    <a href="/items/all">
            <img src="/all.png" alt="" class="all">
            <div class=text><p class="pall">すべて</p></div>
        </a>
    </div>
    </div>
</div>
    
</body>
</html>