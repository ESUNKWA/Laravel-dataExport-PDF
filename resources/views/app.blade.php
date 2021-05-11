<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
       
    </head>
    <body class="antialiased">
        <div class="container mt-5">
            <a class="btn btn-primary mt-2" href="{{ URL::to('/employee') }}">Exporter au format PDF</a>

            
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nom </th>
                                <th>Prénoms </th>
                                <th>Contact </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $value)
                            <tr>
                                <td>{{ $value->r_nom }}</td>
                                <td>{{ $value->r_prenoms }}</td>
                                <td>{{ (!$value->r_phone)?'Pas de contact':$value->r_phone }}</td>
                            </tr>
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

<script src="/assets/js/bootstrap.min.js"></script>
    </body>
</html>
