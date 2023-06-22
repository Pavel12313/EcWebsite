<!DOCTYPE html>
<html lang="ja">
    <head>
        <title> Shop</title>
        <meta charset="UTF-8">
        <link href="./css/style.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Stoke&display=swap" rel="stylesheet"> 
        <link href="/css/app.css" rel="stylesheet">
        <script src="/js/app.js'"></script> 
    </head>
    <body>
        <header>
            <div>
                <span class="logo">Best Shop</span>
            </div>
            <div class="main-picture"></div>
            <div class="search-container">
                <form action="{{ route('search',[],false) }}" method="GET">
                    @csrf
                    @method('GET')
                    <input type="text" placeholder="Search.." name="search" value="@if(isset($search)) {{$search}} @endif">
                    <button type="submit">Search</button>
                </form>
            </div>
            <div class="cart">
                <a href="{{ route('viewCart', [],false) }}">View cart</a>
            </div>

        </header>

        <main role="main">
            <div class="selectionTitle"><p>All items</p></div>
            <div class="flex-container">
                @foreach($result as $value)
                    <div class="flex-item">
                        <div class="img-price-container">
                            <a href="{{ route('ProductDetail', ['detailID'=>$value->id]) }}">
                            <img class="item-img" src="{{asset('images/' . $value->imgfile1, false)}}" />
                            <p class="item-price">￥{{ number_format ($value->price) }}</p>
                        </div>
                        <p>{{$value->name}}</p>
                    </div>
                @endforeach
            </div>
            {{ $result->appends(request()->query())->links() }}

            <form>
                <button type="submit" class="btn btn-primary">Button</button>
            </form>
        </main>

    </body>
</html>