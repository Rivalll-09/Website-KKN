<?php
include "koneksi.php";

// Tentukan nilai $id sesuai kebutuhan
$id = $_GET['id_umkm']; // Misalnya menggunakan nilai dari parameter URL

$Q = mysqli_query($koneksi, "SELECT * FROM umkm WHERE id_umkm=" . $id) or die(mysqli_error($koneksi));
if ($Q) {
    $posts = array();
    if (mysqli_num_rows($Q)) {
        while ($post = mysqli_fetch_assoc($Q)) {
            $posts[] = $post;
        }
    }
    $data = json_encode(array('results' => $posts));
}
?>
