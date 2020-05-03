<form method="post" action="savecreate">
    {{csrf_field()}}
    <input type="text" name="xnama" sixe="50" placeholder="Input Nama" /><br> 
    <input type="text" name="xtempat" sixe="50" placeholder="Input Tempat Lahir" /><br>
    <input type="text" name="xtanggal" sixe="50" placeholder="Input Tanggal Lahir" /><br>
    <input type="text" name="xjeniskelamin" sixe="50" placeholder="Input Jenis Kelamin" /><br>
    <input type="text" name="xalamat" sixe="50" placeholder="Input Alamat" /><br>
    <input type="text" name="xjenjang" sixe="50" placeholder="Input Jenjang" /><br>
    <input type="text" name="xjurusan" sixe="50" placeholder="Input Jurusan" /><br>
    <input type="submit" name="asal" value="Save" />
</form>