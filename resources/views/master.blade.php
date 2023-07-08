<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wmart</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>
{{ View::make('header') }}
@yield('content')
{{ View::make('footer') }}

<style>
    .custom-login {
        height: 630px;
        padding-top: 100px;
    }

    .custom-product {
        height: 630px;
        padding-top: 20px;
    }

    img.slider-img {
        height: 400px !important;
    }

    .slider-text{
        background-color: #0000009e !important;
    }

    .trending-image{
        height: 100px;
    }

    .trending-wrapper{
        margin: 30px;
    }

    .trending-item{
        float: left;
        width: 20%;
    }

    .detail-img{
        height: 200px;
    }

    .custom-details{
        height: 630px;
        padding-top: 20px;
    }

    .search-box{
        width: 500px;
    }

    .container2 {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

</html>
