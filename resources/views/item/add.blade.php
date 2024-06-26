@extends('adminlte::page')

@section('title', '商品登録')

@section('content_header')
    <h1>商品登録</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                       @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                </div>
            @endif

            <div class="card card-primary">
                <form method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">名前</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="名前">
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
                                    <option value="リップ" >リップ</option>
                                    <option value="アイメイク">アイメイク</option>
                                    <option value="ベース">ベース</option>
                                    <option value="スキンケア">スキンケア</option>
                                    <option value="ツール">ツール</option>
                                </select>
                        </div>
                        

                        <div class="form-group">
                            <label for="detail">詳細</label>
                                @if($errors->has('detail'))
                                @foreach($errors->get('detail') as $message)
                                <small class ="text-danger">{{$message}}</small>
                                @endforeach
                                @endif
                            <input type="text" class="form-control" id="detail" name="detail" placeholder="詳細説明">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
