<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
        <!-- Navbar content -->
    </nav>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">
                <h1>Player Route</h1>
            </a>
        </div>
    </nav>

    <br>

    <?php
    // print_r($summonerName); prueba
    //print json_encode($summonerName);
    ?>

    <!-- Se muestran los datos aquí  -->

    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col"># </th>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">profileIconId</th>
                    <th scope="col">summonerLevel</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>{{$summonerName['id']}}</td>
                    <td>{{$summonerName['name']}}</td>
                    <td>{{$summonerName['profileIconId']}}</td>
                    <td>{{$summonerName['summonerLevel']}}</td>
                </tr>
            </tbody>
        </table>

    </div>







</body>

</html>