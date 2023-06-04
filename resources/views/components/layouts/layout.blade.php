<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url('{{ asset('images/bg20.jpg') }}');
        }

        .active {
            font-size: 20px;
            color: rgb(169, 217, 244);
        }

        .inactive {
            font-size: 20px;
            color: rgb(242, 246, 240);
        }

        .error {
            color: red;
            font-family: 'Arial Narrow', Arial, sans-serif;
            font-size: 14px;
            border-radius: 5px;
        }

        .nav {
            background-color: #807e7e;
        }

        .nav ul {
            text-align: center;
            list-style: none;
        }

        .nav ul li {
            display: inline-block;
            padding: 10px 20px;

        }

        .nav ul li a {
            text-decoration: none;
            padding: 10px 20px;
        }


        .nav ul li a:hover {
            background-color: rgb(149, 153, 154);
            height: 100%;
        }

        .form-t {
            font-size: 20px;
            font-weight: bold;
            color: #355aa5;
        }

        .container {
            padding: 30px;
            width: 400px;
            margin: 0 auto;
            font-family: 'calibri';
            margin-top: 100px;
            border-radius: 5px;
            background-color: #e9ecf1;
            box-shadow: 7px 13px 14px rgb(166, 166, 166);
        }

        .form-l {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            color: #505050;
            margin: 10px 0;
        }

        .form-i,
        .form-ta {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
            margin-bottom: 10px;
            border: rgb(2, 156, 207) solid 1px;
        }

        /* .form-ta {
            width: 100%;
        } */

        .form-b {
            border: none;
            border-radius: 5px;
            background-color: rgb(2, 156, 207);
            color: white;
            padding: 10px;
            margin: 10px 0;
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            width: 100%;
        }

        .form-b:hover {
            background-color: rgb(2, 79, 105);
            color: white;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    @livewireStyles
</head>

<body>
    <x-layouts.nav />
    {{ $slot }}
    @livewireScripts
</body>

</html>
