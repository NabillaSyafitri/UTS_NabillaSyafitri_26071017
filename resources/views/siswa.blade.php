<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
        </tr>

        @foreach ($siswa as $table_siswa)
        <?php $no = 1; ?>     
        
        <tr>
            <td>{{$table_siswa->No}}</td></td>
            <td>{{$table_siswa->NIS}}</td>
            <td>{{$table_siswa->Nama_Siswa}}</td>
        </tr>
        <?php $no++; ?>
        @endforeach
    </table>
</body>
</html>
