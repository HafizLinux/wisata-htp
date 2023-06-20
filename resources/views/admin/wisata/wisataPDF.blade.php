<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Wisata</title>
</head>
<body>
    <h3 align="center">Data Wisata</h3>
    <table border="1" cellpadding="10" align="center">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Deskripsi</td>
                <td>Alamat</td>
                <td>Foto</td>
            </tr>
        </thead>
        <tbody>
    @php $no = 1; @endphp
    @foreach($wisata as $data)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->deksripsi }}</td>
        <td>{{ $data->alamat }}</td>
        <td><img height="50" width="100" src="admin/image/{{$data->foto}}"></td>
    </tr>
    @endforeach
</tbody>

    </table>
</body>
</html>
