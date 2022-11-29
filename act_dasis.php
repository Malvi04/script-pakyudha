<?php 

// menghubungkan koneksi ke database
$koneksi = mysqli_connect('localhost','root','','db_dasis');


$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$jenkel = $_POST['jenkel'];
$kelas = $_POST['kelas'];
$hobi = implode(",",$_POST['hobi']);

$allowed = array('png','jpg','jpeg');
$lokasi_file = $_FILES['foto']['tmp_name'];
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// tentukan folder gambar
$folder = "img/$filename";

// jika tidak memilih atau memasukkan gambar (gambar kosong)
if($filename == ""){
    // echo    "NISN $nisn <br>
    // Nama : $nama <br>
    // Jenkel : $jenkel <br>
    // Kelas : $kelas <br>
    // Hobi : <br>";

    // foreach($hobi as $index){
    //     echo "- $index <br>";
    // }

    $query = "INSERT INTO tbl_siswa(nisn,nama,jenkel,kelas,hobi,foto) VALUES('$nisn','$nama','$jenkel',
    '$kelas','$hobi','$filename')";
    mysqli_query($koneksi, $query);
    echo "<script>
            alert('Simpan Data Berhasil!');
            window.location='read.php';
        </script>";

} else {
    // jika memilih gambar (ada gambar)
    // uji gambar apakah sesuai ekstensi yang dipilih
    if(!in_array($ext, $allowed)){
        echo "<script>
                alert('Ekstensi tidak diperbolehkan')
            </script>";
    } else {
        // jika gambar sesuai dengan ekstensi yang dipilih 
        move_uploaded_file($lokasi_file, "$folder");
        // echo "NISN $nisn <br>
        //     Nama : $nama <br>
        //     Jenkel : $jenkel <br>
        //     Kelas : $kelas <br>
        //     Hobi : <br>";

        // foreach($hobi as $index){
        //     echo "- $index <br>";
        // }

        // echo "<img src='img/$filename' width='250'>";

        $query = "INSERT INTO tbl_siswa(nisn,nama,jenkel,kelas,hobi,foto) VALUES('$nisn','$nama','$jenkel',
        '$kelas','$hobi','$filename')";
        mysqli_query($koneksi, $query);
        echo "<script>
                alert('Simpan Data Berhasil!');
                window.location='read.php';
            </script>";
    }
}
