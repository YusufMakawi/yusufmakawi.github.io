<form method="POST" action="array_siswa.php">
Nama : <input type="text" name="nama[]" value="" size="30"/><br/>
Mata Kuliah :
<select name="matkul[]">
<option value="BI">Bahasa Indonesia</option>
<option value="SO">Sistem Operasi</option>
<option value="DDP">Dasar Dasar Pemrograman</option>
</select><br/>
Nilai UTS : <input type="text" name="nilai_uts[]" value="" size="6"/><br/>
Nilai UAS : <input type="text" name="nilai_uas[]" value="" size="6"/><br/>
Nilai Tugas/Praktikum : <input type="text" name="nilai_tugas[]" value="" size="6"/><br/>
<input type="submit" value="Simpan" name="proses[]"/>
</form>
<?php
