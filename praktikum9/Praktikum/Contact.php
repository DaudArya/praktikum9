<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: Center; padding: 20px 40px; }
    </style>
    </head>

<body>
    <header>
        <h3>PERSONAL WEB</h3>
    </header>
    <form action="Save.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" placeholder="Masukkan Nama">
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin : </label>
                <input type="text" name="jenis_kelamin" placeholder="Laki-laki atau Perempuan">
            </p>
            <p>
                <label for="email">Email : </label>
                <input type="text" name="email" placeholder="Email">
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <input name="alamat" placeholder="Alamat lengkap"></input>
            </p>
            <p>
                <label for="kota">Kota : </label>
                <input name="kota" placeholder="Masukkan Kotamu"></input>
            </p>
            <p>
                <label for="pesan">Pesan : </label>
                <textarea type="text" name="pesan" placeholder="Pesan"></textarea>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan">
                
            </p>
        </fieldset>
    </form>
</body>
</html>