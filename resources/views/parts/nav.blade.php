<nav class="navbar navbar-expand-lg bg-body-secondary py-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">ホーム</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/items/all">商品一覧</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            種別一覧
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/items/lip">リップ</a></li>
            <li><a class="dropdown-item" href="/items/eye">アイメイク</a></li>
            <li><a class="dropdown-item" href="/items/base">ベース</a></li>
            <li><a class="dropdown-item" href="/items/skin">スキンケア</a></li>
            <li><a class="dropdown-item" href="/items/tool">ツール</a></li>
        </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/items/add">商品登録</a>
        </li>
        <li class="nav-item">
            <form  action="/logout" method="post">@csrf<input class="btn btn-sm btn-primary" type="submit" value="logout"></form>
        </li>
        </ul>
    </div>
    </div>
</nav>
