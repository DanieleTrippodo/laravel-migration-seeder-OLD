<!DOCTYPE html>
<html>
<head>
    <title>Treni in Partenza</title>
</head>
<body>
    <h1>Treni in Partenza</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Azienda</th>
                <th>Stazione di Partenza</th>
                <th>Stazione di Arrivo</th>
                <th>Orario di Partenza</th>
                <th>Orario di Arrivo</th>
                <th>Codice Treno</th>
                <th>Numero Carrozze</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
                <tr>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->carriage_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
