<html>
    <head>
        <title> @yield('title') - page</title>
        <style>
            .header{
                color:'green'
            }
            .content{
                background : pink;
                color:#fff;
                padding: 20px;
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <div class="header">
        @section('header')
            <h1>Header is common </h1>
        @show
        <div>
        <div class="content">
        @section('content')
        @show
        </div>
        </div>
    </body>
</html>