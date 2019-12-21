<?php
include("6-koneksi.php");
    if(isset($_GET['id'])&&isset($_GET['vote'])){
        $id=($_GET['id']);
        $vote=(($_GET['vote'])+1);


        $query = "UPDATE tb_caleg SET earned_vote=$vote  WHERE id=$id ";
        $hasil = mysqli_query($koneksi, $query);
        if ($hasil) {
            header( "Location: 6.php");
        }

    }
?>

