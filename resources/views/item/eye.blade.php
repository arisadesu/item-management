<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アイメイク一覧画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BIZ+UDGothic&family=M+PLUS+Rounded+1c&family=Murecho:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/table.css">
</head>
<body>
    @include('parts.nav')
    <header>
        <h1 class=title>アイメイク一覧</h1>
    </header>

    
<div class="container">
    <table class="table table-bordered" width="100%">
        <tr class="tr">
            <th width="10%">ID</th>
            <th width="20%">商品名</th>
            <th width="20%">種別</th>
            <th width="40%">詳細</th>
            <th width="10%"></th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->type}}</td>
            <td>{{$item->detail}}</td>
            <td>
                <div class="btn">
                    <a href="/items/edit/{{$item->id}}">
                        <button type="button" class="btn btn-success">編集</button>
                    </a>
                </div>
            </td>
        </tr>
        @endforeach
        
    </table>
</div>
</body>
</html>