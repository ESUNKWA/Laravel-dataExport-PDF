<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
       <link rel="stylesheet" href="/assets/style.css">
       <style>
            body {
                margin-top: 3cm;
                margin-left: 2cm;
                margin-right: 2cm;
                margin-bottom: 2cm;
            }

            /** Define the header rules **/
            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 3cm;
            }

            /** Define the footer rules **/
            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                margin-bottom: 10px;
            }
           table, th, td {
            border: 1px solid black;
            }
            table {
            width: 100%;
            border-collapse: collapse;
            }
       </style>
    </head>
    <body class="antialiased">

        <header>
            <img src="{{ public_path('/assets/img/drapeau-rci-768x768.jpg') }}" width="100px" height="100px"/>
        </header>

        <div class="container mt-10">

            <h3>Liste des utilisateurs</h3>

            <div class="row">
                <div class="col-12">
                    <table class="">
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

        <footer>
            @Copie right 2021<img style="float: right;" src="{{ public_path('/assets/img/drapeau-rci-768x768.jpg') }}" width="40px" height="40px"/>
        </footer>

    </body>
</html>
