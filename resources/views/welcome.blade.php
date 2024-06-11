<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- including vite assets --}}
    @vite('resources/js/app.js')
</head>

<body class="p-5">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Company</th>
                <th scope="col">Departure station</th>
                <th scope="col">Departure time</th>
                <th scope="col">Arrival station</th>
                <th scope="col">Arrival time</th>
                <th scope="col">price</th>
                <th scope="col">Train Code</th>                
                <th scope="col">Carriages</th>
                <th scope="col">Status</th>                
            </tr>
        </thead>
        <tbody>
            @foreach ($trainList as $train)
                <tr>
                    <th scope="row">{{ $train->id }}</th>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->price . '€' }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->carriages }}</td>
                    <td>{{ $train->is_cancelled ? 'Cancelled' : ($train->is_on_time ? 'On time' : 'Delay: ' . rand(5, 30) . " min") }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
