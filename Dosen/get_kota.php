<?php
require('../Config/koneksi.php');

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['provinsi_id'])) {
    $provinsiId = $_POST['provinsi_id'];

    $query = "SELECT * FROM kota WHERE id_provinsi = $provinsiId ORDER BY kota ASC";
    $result = mysqli_query($koneksi, $query);

    $kotaData = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $kotaData[] = $row;
    }

    echo json_encode($kotaData);
} else {
    echo json_encode(['error' => 'Invalid request']);
}

mysqli_close($koneksi);
