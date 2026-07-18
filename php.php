<?php
// Proses form jika disubmit
if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $jk = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
    $kota = $_POST['kota'];
    $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : '';
    $pesan = $_POST['pesan'];
    
    echo "<h2>DATA YANG DIKIRIM:</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Telepon: " . $telepon . "<br>";
    echo "Jenis Kelamin: " . $jk . "<br>";
    echo "Kota: " . $kota . "<br>";
    echo "Hobi: " . $hobi . "<br>";
    echo "Pesan: " . $pesan . "<br><br>";
    echo "<a href='form_tugas12.php'>Kembali ke Form</a>";
} else {
?>

<!-- TAMPILAN FORM -->
<html>
<head>
    <title>Form Tugas 12</title>
</head>
<body>
    <h2>FORM PENDAFTARAN</h2>
    
    <form method="POST" action="">
        <table border="0" cellpadding="5">
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telepon"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>
                    <select name="kota">
                        <option value="">-- Pilih --</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Yogyakarta">Yogyakarta</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>
                    <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
                    <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga<br>
                    <input type="checkbox" name="hobi[]" value="Musik"> Musik<br>
                    <input type="checkbox" name="hobi[]" value="Gaming"> Gaming
                </td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><textarea name="pesan" rows="4" cols="30"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Kirim"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php } ?>