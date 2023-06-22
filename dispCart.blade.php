<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>SHOP</title>
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>        
        @foreach(Session::get('cart_data') as $cart)
            <p>{{$cart['SessionProductID']}}</p>
            <p>{{$cart['SessionProductNAME']}}</p>
            <p>{{$cart['SessionProductPRICE']}}</p>
            <p>{{$cart['SessionProductIMGFILE1']}}</p>
            <br>
        @endforeach
    </body>
</html>