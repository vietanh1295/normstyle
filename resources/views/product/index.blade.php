<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
    	.product-grid4,.product-grid4 .product-image4{position:relative}
.product-grid4{font-family:Poppins,sans-serif;text-align:center;border-radius:5px;overflow:hidden;z-index:1;transition:all .3s ease 0s}
.product-grid4:hover{box-shadow:0 0 10px rgba(0,0,0,.2)}
.product-grid4 .product-image4 a{display:block}
.product-grid4 .product-image4 img{width:100%;height:auto}
.product-grid4 .pic-1{opacity:1;transition:all .5s ease-out 0s}
.product-grid4:hover .pic-1{opacity:0}
.product-grid4 .pic-2{position:absolute;top:0;left:0;opacity:0;transition:all .5s ease-out 0s}
.product-grid4:hover .pic-2{opacity:1}
.product-grid4 .social{width:180px;padding:0;margin:0 auto;list-style:none;position:absolute;right:0;left:0;top:50%;transform:translateY(-50%);transition:all .3s ease 0s}
.product-grid4 .social li{display:inline-block;opacity:0;transition:all .7s}
.product-grid4 .social li:nth-child(1){transition-delay:.15s}
.product-grid4 .social li:nth-child(2){transition-delay:.3s}
.product-grid4 .social li:nth-child(3){transition-delay:.45s}
.product-grid4:hover .social li{opacity:1}
.product-grid4 .social li a{color:#222;background:#fff;font-size:17px;line-height:36px;width:40px;height:36px;border-radius:2px;margin:0 5px;display:block;transition:all .3s ease 0s}
.product-grid4 .social li a:hover{color:#fff;background:#16a085}
.product-grid4 .social li a:after,.product-grid4 .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;line-height:20px;border-radius:3px;padding:0 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
.product-grid4 .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-22px;z-index:-1}
.product-grid4 .social li a:hover:after,.product-grid4 .social li a:hover:before{opacity:1}
.product-grid4 .product-discount-label,.product-grid4 .product-new-label{color:#fff;background-color:#16a085;font-size:13px;font-weight:800;text-transform:uppercase;line-height:45px;height:45px;width:45px;border-radius:50%;position:absolute;left:10px;top:15px;transition:all .3s}
.product-grid4 .product-discount-label{left:auto;right:10px;background-color:#d7292a}
.product-grid4:hover .product-new-label{opacity:0}
.product-grid4 .product-content{padding:25px}
.product-grid4 .title{font-size:15px;font-weight:400;text-transform:capitalize;margin:0 0 7px;transition:all .3s ease 0s}
.product-grid4 .title a{color:#222}
.product-grid4 .title a:hover{color:#16a085}
.product-grid4 .price{color:#16a085;font-size:17px;font-weight:700;margin:0 2px 15px 0;display:block}
.product-grid4 .price span{color:#909090;font-size:13px;font-weight:400;letter-spacing:0;text-decoration:line-through;text-align:left;vertical-align:middle;display:inline-block}
.product-grid4 .add-to-cart{border:1px solid #e5e5e5;display:inline-block;padding:10px 20px;color:#888;font-weight:600;font-size:14px;border-radius:4px;transition:all .3s}
.product-grid4:hover .add-to-cart{border:1px solid transparent;background:#16a085;color:#fff}
.product-grid4 .add-to-cart:hover{background-color:#505050;box-shadow:0 0 10px rgba(0,0,0,.5)}
@media only screen and (max-width:990px){.product-grid4{margin-bottom:30px}
}
    </style>
</head>
<body>
	<div class="container">
    <h2>Loại</h2>
    @foreach($types as $type)
    @php 
    $typeName = str_replace('nam', '', $type->name); 
    @endphp
    <h3 class="h3"><a href="/product/trang-suc-nam/{{$type->slug}}">{{$typeName}}</a></h3>
    @endforeach
    <h2>Chất liệu</h2>
    @foreach($materials as $material)
    <h3 class="h3"><a href="/product/trang-suc-nam-{{$material->slug}}">{{$material->name}}</a></h3>
    @endforeach
    <h2>Style</h2>
    @foreach($styles as $style)
    <h3 class="h3"><a href="/product/trang-suc-nam/style/{{$style->slug}}">{{$style->name}}</a></h3>
    @endforeach
    <h2>material-type</h2>
    <h3 class="h3"><a href="/product/trang-suc-nam-{{$materials[0]->slug}}/{{$types[0]->slug}}">nhan nam bac</a></h3>
    <h2>material-style</h2>
    <h3 class="h3"><a href="/product/trang-suc-nam-{{$materials[0]->slug}}/style/{{$styles[0]->slug}}">bac-phuong dong style</a></h3>
    <h2>type-style</h2>
    <h3 class="h3"><a href="/product/trang-suc-nam/{{$types[0]->slug}}/style/{{$styles[0]->slug}}">nhan nam/phuong dong</a></h3>
    <h2>material-type-style</h2>
    <h3 class="h3"><a href="/product/trang-suc-nam-{{$materials[0]->slug}}/{{$types[0]->slug}}/style/{{$styles[0]->slug}}">nhan nam bac/phuong dong</a></h3>
    <div id="filter">
        <h2>filter</h2>
        <div class="row">
            <div class="col-md-4">
                <h3>Loại</h3>
                @foreach($types as $type)
                <input type="checkbox" id="{{$type->slug}}"  name="" value="{{$type->id}}">  {{$type->name}}<br>
                @endforeach
            </div>
            <div class="col-md-4">
                <h3>Chất liệu</h3>
                @foreach($materials as $material)
                <input type="checkbox" id="{{$material->slug}}"  name="" value="">  {{$material->name}}<br>
                @endforeach
            </div>
            <div class="col-md-4">
                <h3>Style</h3>
                @foreach($styles as $style)
                <input type="checkbox" id="{{$style->slug}}"  name="" value="">  {{$style->name}}<br>
                @endforeach
            </div>
        </div>
        <input type="checkbox" id="checkbox1" onchange="check(this)" name="" value="">check box<br>
        <a href="#" class="btn btn-success">search</a>
    </div>
    
 
    <div class="row">
        @if(count($products)>0)
        @foreach($products as $product)
        <div class="col-md-3 col-sm-6">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="{{$product->link}}" target="_blank">
                        <img class="pic-1" src="{{$product->img1}}">
                        <img class="pic-2" src="{{$product->img2}}">
                    </a>
                   <!--  <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul> -->
                    <!-- <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span> -->
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{$product->link}}" target="_blank">{{$product->name}}</a></h3>
                    <div class="price">
                        {{$product->price}}                       
                    </div>
                    <a class="add-to-cart" href="{{$product->link}}" target="_blank">To the shop</a>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <h2>nothing</h2>
        @endif
    </div>
</div>
<script type="text/javascript">
    // $('#checkbox1').change(function() {
    //     if(this.checked) {           
    //         alert("checked!");
    //     }
    //     else if(!(this.checked)){
    //         alert("unchecked!");
    //     }
                
    // });
    function check(x){
        if(this.checked) {           
            alert("checked!");
        }
        else if(!(this.checked)){
            alert("unchecked!");
        }
        // alert(x);
    }
</script>
</body>
</html>