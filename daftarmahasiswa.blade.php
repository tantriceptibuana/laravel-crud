<table border="1px" width="100%">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Jenjang</th>
        <th>Jurusan</th>
        <th>Opsi</th>
    </tr>
        @foreach ($data as $p)
    <tr align="center">
        <td>{{ $p->id }}</td>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->tempat_lahir }}</td>
        <td>{{ $p->tgl_lahir }}</td>
        <td>{{ $p->jenis_kelamin }}</td>
        <td>{{ $p->alamat }}</td>
        <td>{{ $p->jenjang }}</td>
        <td>{{ $p->jurusan }}</td>
        <td>
            <a href="editdata/{{ $p->id}}">Edit</a>
            <a href="hapus/{{ $p->id}}">Delete</a></td>
           
    </tr>
        @endforeach
</table>