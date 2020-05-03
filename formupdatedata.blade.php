@foreach ($data as $p)
<form method="post" action="/update">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{ $p->id }}">
    <input type="text" name="xnama" sixe="50" value="{{ $p->nama }}" placeholder="Input Nama" /><br> 
    <input type="text" name="xtempat" sixe="50" value="{{ $p->tempat_lahir }}" placeholder="Input Tempat Lahir" /><br>
    <input type="text" name="xtanggal" sixe="50" value="{{ $p->tgl_lahir }}" placeholder="Input Tanggal Lahir" /><br>
    <input type="text" name="xjeniskelamin" sixe="50" value="{{ $p->jenis_kelamin }}" placeholder="Input Jenis Kelamin" /><br>
    <input type="text" name="xalamat" sixe="50" value="{{ $p->alamat }}" placeholder="Input Alamat" /><br>
    <input type="text" name="xjenjang" sixe="50" value="{{ $p->jenjang }}" placeholder="Input Jenjang" /><br>
    <input type="text" name="xjurusan" sixe="50" value="{{ $p->jurusan }}" placeholder="Input Jurusan" /><br>
    <input type="submit" name="asal" value="update" />
</form>
@endforeach