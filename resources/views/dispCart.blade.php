<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>SHOP</title>
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js"></script> 
  </head>
  <body>
    <div class="container">
      <div class="flex-cart-main d-flex justify-content-center">
        @php $total=0 @endphp
        <div class="flex-cart-detail1">
          @if(Session::has('cart_data'))
            @foreach(Session::get('cart_data') as $cart)
              @php $total+=$cart['SessionProductPRICE'] @endphp
              <div class="flex-container-cart d-flex">
                <div class="flex-item-cart-image">
                  <img src="{{asset('images/' . $cart['SessionProductIMGFILE1'], false)}}" width="200px" height="auto" />
                </div>
                <div class="flex-item-cart-string"> 
                  <p>{{$cart['SessionProductNAME']}}</p>
                  <p>
                    <span class="cartPrice">@php echo "¥" . number_format($cart['SessionProductPRICE']); @endphp</span>
                    <span>Shipping</span> &nbsp;&nbsp; 
                    <a href="{{ route('delCartDetail',['detailID'=>$loop->index],false) }}"><span class="delcart">Delete</span></a>
                  </p>
                </div>
              </div>
            @endforeach
          @endif
        </div>
        <div clas="flex-cart-detail2 d-flex justify-content-between">
          <div class="buttonouter">
            <a href="{{ route('ProductList',[],false) }}">
              <button class="btn btn-primary">Continue Shopping</button>
            </a>
          </div>
          <div class="buttonouter">
            <a href="">
              <button class="btn btn-primary">To Products</button>
            </a>
          </div>
          <p><span class="cartTotalTitle">Total</span>
          <span class="cartTotalPrice">@php echo "¥" . number_format($total); @endphp</span></p>
          <a href="{{ route('delCartAll',[],false) }}">
            <button class="btn btn-danger">Delete Cart</button>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
