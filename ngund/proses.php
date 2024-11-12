<?php
//$conn = new mysqli("localhost", "root", "", "wedding_khansa_aziz");
$conn = new mysqli("127.0.0.1", "khdbdneq_aziz", "khansacantik", "khdbdneq_wedding_khansa_aziz");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $ucapan = $_POST["ucapan"];
    $konfirmasi = $_POST["konfirmasi"];

    $sql = "INSERT INTO kehadiran (nama, ucapan, konfirmasi) VALUES ('$nama', '$ucapan', '$konfirmasi')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to index.php after form submission
        header("Location: index.php?nama=$nama#gift");
        exit();
    } else {
        echo "Terjadi kesalahan: " . $sql . "<br>" . $conn->error;
    }
    

}

$conn->close();
?>
