<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <title>Document</title>
</head>

<body>
                      <!----------------------------------------NavBar-------------------------->
<!--navbar1 start--------------------------------------------------->
<!---header----------------------->
@include('frontend.layout.nav1')
<!-- navbar1 end---------------------------------------------->

<!--navbar2 start--------------------------------------------------->
@include('frontend.layout.nav2')
<!-- navbar2 end---------------------------------------------->

<!---navbar3 start-------------------------------------------->

@include('frontend.layout.nav3')
<!---navbar3 end-------------------------------------------->

<!--body start-------------------------------------------------------------------------------->
@yield('container')
<!------BodyEnds------------------------------------------------------------------------------------>
<!------Footer-------------------------------------------------------------------------------------->
 @include('frontend.layout.footer')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>