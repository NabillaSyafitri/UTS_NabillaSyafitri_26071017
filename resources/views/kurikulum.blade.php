<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kurikulum</title>
</head>
<body>
    <h1>Data Kurikulum</h1>
    <table border="1">
         <tr>
            <th>No</th>
            <th>Kode_MK</th>
            <th>Nama Matkul</th>
        </tr>

        @foreach ($kurikulum as $table_kurikulum)
        <?php $no = 1; ?>     
        
        <tr>
            <td>{{$table_kurikulum->No}}</td></td>
            <td>{{$table_kurikulum->Kode_MK}}</td>
            <td>{{$table_kurikulum->Nama_Matkul}}</td>
        </tr>
        <?php $no++; ?>
        @endforeach
    </table>
</body>
</html>