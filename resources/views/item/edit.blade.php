<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BIZ+UDGothic&family=M+PLUS+Rounded+1c&family=Murecho:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/table.css">
    <title>商品編集画面</title>
</head>

<body>
<h1 class=title>商品編集</h1>

    <div class="edit">
        <div class="card card-primary">

                <form method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">名前</label>
                                @if($errors->has('name'))
                                @foreach($errors->get('name') as $message)
                                <small class ="text-danger">{{$message}}</small>
                                @endforeach
                                @endif
                            <input type="text" class="form-control" id="name" name="name" placeholder="名前" value="{{$item->name}}">
                        </div>

                        <div class="form-group">
                            <label for="type">種別</label>
                            @if($errors->has('type'))
                                @foreach($errors->get('type') as $message)
                                <small class ="text-danger">{{$message}}</small>
                                @endforeach
                                @endif
                                <select name="type" class="select">
                                    <option value="">選択してください</option>
                                    <option value="リップ" @if($item->type=='リップ') selected @endif >リップ</option>
                                    <option value="アイメイク" @if($item->type=='アイメイク') selected @endif >アイメイク</option>
                                    <option value="ベース" @if($item->type=='ベース') selected @endif >ベース</option>
                                    <option value="スキンケア" @if($item->type=='スキンケア') selected @endif >スキンケア</option>
                                    <option value="ツール" @if($item->type=='ツール') selected @endif >ツール</option>
                                </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="detail">詳細</label>
                            @if($errors->has('detail'))
                                @foreach($errors->get('detail') as $message)
                                <small class ="text-danger">{{$message}}</small>
                                @endforeach
                                @endif
                            <textarea name="detail" id="detail" cols="30" rows="10" class="form-control">{{$item->detail}}</textarea>
                        </div>
                    
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">登録</button>
                        </div>
                    </div>
                </form>

                <form action="/items/destroy/{{$item->id}}" method="post">
                    @csrf
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-danger ">削除</button>
                    </div>
                </form>
        </div>
    </div>
</body>
</html>