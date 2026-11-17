<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pelajaran</title>
</head>
<body>
    <h1>Data Pelajaran</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Pelajaran</th>
        </tr>

        @foreach ($pelajaran as $table_pelajaran_nabilla)
        <?php $no = 1; ?>     
        
        <tr>
            <td>{{$table_pelajaran_nabilla->No}}</td></td>
            <td>{{$table_pelajaran_nabilla->Kode}}</td>
            <td>{{$table_pelajaran_nabilla->Nama_Pelajaran}}</td>
        </tr>
        <?php $no++; ?>
        @endforeach
    </table>
</body>
</html>