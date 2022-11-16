<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir pendaftaran siswa baru</title>
    <link rel="stylesheet" href="css/form-formulir.css">
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

            <fieldset>

            <div>
                <label for="nama" class="label">Nama Anda </label><br>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </div>
            <div>
                <label for="alamat" class="label">Alamat </label><br>
                <textarea name="alamat" rows="4" cols="55px" style="border:none;border-radius:6px"></textarea>
            </div>
            <div>
                <label for="jenis_kelamin" class="label">Jenis Kelamin </label><br>
                <input id="kusus" type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
                <input id="kusus" type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
            </div>
            <div>
                <label for="agama" class="label">Agama </label><br>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </div>
            <div>
                <label for="sekolah_asal" class="label">Sekolah Asal </label><br>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
            </div>
            <div>
                <input class="submit" type="submit" value="Daftar" name="daftar" />
            </div>

            </fieldset>

        </form>

</body>
</html>