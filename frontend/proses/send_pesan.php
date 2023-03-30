<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personal_profile";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Mengirim email menggunakan PHPMailer
if (isset($_POST['submit'])) {

    // ambil data dari form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ihot849@gmail.com';
    $mail->Password = 'rhfaipxeqeubbrou';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($email, $name);

    $mail->addAddress('ihot849@gmail.com');

    $mail->isHTML(true);

    $mail->FromName = $_POST["name"];
    $mail->Subject = $_POST["subject"];
    $bodyMessage = "____________________________<br>";
    $bodyMessage .= "Nama : " . $_POST['name'] . "<br>";
    $bodyMessage .= "Email : " . $_POST['email'] . "<br>";
    $bodyMessage .= "Pesan : " . $_POST['message'] . "<br>";
    $bodyMessage .= "____________________________";

    $mail->Body = $bodyMessage;

    if ($mail->send()) {
        // Jika email berhasil dikirim, simpan informasi ke database
        $name = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["name"])) ;
        $email = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["email"])) ;
        $subject = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["subject"])) ;
        $message = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["message"])) ;

        $sql = "INSERT INTO pesan (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

        // pengecekan session untuk sweet alert
        if (mysqli_query($conn, $sql)) {
            session_start();

            $_SESSION['message'] = "Pesan anda telah terkirim";
            echo "
            <script>
            document.location.href='../index.php#contact-section';
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Pesan gagal dikirim');</script>";
    }
}

mysqli_close($conn);
?>

