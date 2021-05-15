<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TrendSetterGods</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>



</head>

<body>
    @include('dashboard.product-errors')

    <header class="header bg-light">
        <a href="/"> <img class="brand" src="{{ asset('storage/images/logos/TSG_fulllogo_noborder.png') }}" /></a>
        <div style="font-size:30px;cursor:pointer" id="openMenu" onclick="openNav()">&#9776; menu</div>
    </header>

    <main class="container-fluid w-100 main d-flex justify-content-between align-items-stretch px-0 ">
        <aside class=" aside bg-dark  text-white ">
            <span class="pb-2 inner-aside">
                <ul class="nav flex-column text-center">
                    <h3 class="">TrendSetterGods</h3>
                    <hr class="bg-light" />
                    <li class="nav-item">
                        <a class="nav-link active" href="/men">Men Shoes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/women">Women Shoes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/youth">Youth Shoes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/apparel">Apparel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/used">Used</a>
                    </li>
                </ul>
                <ul class="nav flex-column">
                    <li class="my-2">
                        <a class="btn btn-primary btn-block" href="{{ url('/products/create') }}" role="button">create
                            product</a>
                    </li>
                    <li class="my-2">
                        <form role="form" method="POST" action="{{ url('/cache-products') }}">
                            @csrf
                            <button type="submit" class="btn btn-secondary btn-block">update website</button>
                        </form>
                    </li>
                </ul>
                <ul class="nav flex-column ">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-block">logout</button>
                    </form>
                </ul>
            </span>

        </aside>

        <div class="mt-3 content ">
            @yield('content')
        </div>



    </main>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <ul class="nav flex-column text-center">
                <h3 class="">TrendSetterGods</h3>
                <hr class="bg-light" />
                <li class="nav-item">
                    <a class="nav-link active" href="/men">Men Shoes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/women">Women Shoes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/youth">Youth Shoes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/apparel">Apparel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/used">Used</a>
                </li>
            </ul>
            <ul class="nav flex-column">
                <li class="my-2">
                    <a class="btn btn-primary btn-block" href="{{ url('/products/create') }}" role="button">create
                        product</a>
                </li>
                <li class="my-2">
                    <form role="form" method="POST" action="{{ url('/cache-products') }}">
                        @csrf
                        <button type="submit" class="btn btn-secondary btn-block">update website</button>
                    </form>
                </li>
            </ul>
            <ul class="nav flex-column ">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-block">logout</button>
                </form>
            </ul>
        </div>
    </div>
</body>

<script>
     function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    $(document).ready(function() {
        $('.toast').toast('show');

        $('.toast').on('shown.bs.toast', function() {
            setTimeout(() => {
                $('.toast').toast('hide');
            }, 4000);
        })


       

    })

</script>

</html>
