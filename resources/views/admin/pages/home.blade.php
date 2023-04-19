<html>
 <head>
     <link rel="stylesheet" href="{{asset("assets/admin/css")}}/style.css">
 </head>
<body>
<h1>HELLO WORLasdasdasdD FROM HOME PAGE</h1>
@include("admin.components.product-list")
<ul>
@for($i=0;$i<11;$i++)
    @if($i==5)
            <li>{{$i}} . Ürün yüklenmedi</li>
   @else
            <li>{{$i}} . Ürün Yüklendi</li>
   @endif
@endfor
</ul>

</body>
</html>
