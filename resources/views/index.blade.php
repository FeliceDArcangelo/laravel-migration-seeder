<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Orari Treni</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <h1 class="text-center">ORARI TRENI</h1>
        <div class="container p-4">
            <table class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di Partenza</th>
                    <th scope="col">Stazione di Arrivo</th>
                    <th scope="col">Orario di Partenza</th>
                    <th scope="col">Orario di Arrivo</th>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">Nummero Carrozze</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <th scope="row">{{$train->Azienda}}</th>
                        <td>{{$train->Stazione_di_partenza}}</td>
                        <td>{{$train->Stazione_di_arrivo}}</td>
                        <td>{{$train->Orario_di_partenza}}</td>
                        <td>{{$train->Orario_di_arrivo}}</td>
                        <td>{{$train->Codice_Treno}}</td>
                        <td>{{$train->Numero_Carrozze}}</td>
                        <td>@if ($train->In_orario == true)
                            <span class="badge text-bg-warning">In Ritardo</span>
                            @else
                            <span class="badge text-bg-success">In Orario</span>
                            @endif</td>
                        <td>@if ($train->In_orario == true)
                            <span class="badge text-bg-danger">CANCELLATO</span>
                            @else
                            <span class="badge text-bg-info">No</span>
                            @endif</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
