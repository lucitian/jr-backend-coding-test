<head>
    <link href="/css/index.css" rel="stylesheet">
    <link href="/css/header.css" rel="stylesheet">
    <link href="/css/content.css" rel="stylesheet">
    <link href="/css/product.css" rel="stylesheet">
    <link href="/css/store.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Shoptronics</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="navbar_title">
                <a href="{{ route('index') }}"><h1>SHOPTRONICS</h1></a>
            </div>
            <div class="navbar_options">
                <ul>
                    <li><a>Category 1</a></li>
                    <li><a>Category 2</a></li>
                    <li><a>Category 3</a></li>
                    <li><a>Category 4</a></li>
                </ul>
            </div>
        </div>
    </header>
    @yield('content')
    @yield('product')
    @yield('store')
</body>


