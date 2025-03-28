<?php include "dtMahasiswa.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h2>Registrasi Mahasiswa Baru</h2>
    <form method="post" action="registrasi.php">
        <table border="0">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input name="nim" maxlength="11" size="20"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input name="namalengkap" maxlength="45" size="50"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jeniskelamin" value="L">Laki-Laki
                    <input type="radio" name="jeniskelamin" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>
                    <?php
                    $arrProdi = [
                        "SI" => "D3 Sistem Informasi",
                        "SIA" => "D3 Sistem Informasi Akuntasi",
						"TK" => "D3 Teknologi Komputer",
                        "RPLA" => "D3 Rekayasa Perangkat Lunak Aplikasi",
						"TT" => "D3 Teknologi Telokomunikasi",
						"MP" => "D3 Manajemen Pemasaran"
						];
					?>
					<select name="programstudi">
                        <?php
						foreach ($arrProdi as $key => $prodi) {
						?>
						<option value="<?= $key ?>"><?= $prodi ?></option>
						<?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td valign="top">Alamat Lengkap</td>
                <td valign="top">:</td>
                <td><textarea name="alamat" rows="3" cols="60"></textarea></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" value="Simpan" name="btnSubmit">
                    <input type="reset" value="Ulangi">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>