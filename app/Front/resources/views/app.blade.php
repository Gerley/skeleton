<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>rdehnhardt :: skeleton</title>
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .quote {
            font-size: 24px;
            color: #6bb0d3;
        }

        a {
            text-decoration: none;
            font-weight: bold;
            font-size: 24px;
            color: #6bb0d3;
        }

        a:hover {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>
</body>
</html>