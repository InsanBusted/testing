<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <h2>{{ $tahun }}</h2>
    <table border="2">
            <thead> 
                <tr>
                    <th>Prodi</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_mhs as $data)
                    <tr>
                        <td>{{ $data ['prodi'] }}</td>
                        <td>{{ $data ['jumlah'] }}</td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</body>
</html>