<?php
// config
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "count";
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// mengecek koneksi
if (!$koneksi) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}else{
    $query = "SELECT * FROM tb_caleg ";
    $result = mysqli_query($koneksi, $query);
    if($result === FALSE) {
        return printf('Data Erorr');
        exit();
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap-4.3.1/css/bootstrap.min.css">
    <!-- Fontawalsome CSS -->
    <link rel="stylesheet" href="assets/fontawesome-5.11.2/css/all.css">
    <!-- style -->
    <link rel="stylesheet" href="assets/style.css">

    <title>Hello, world!</title>
</head>

<body>
    <div class="wrapper m-4">
        <div class="header">
            <div class="container-fluid text-center shadow-sm">
                <h1 class="border-bottom text-dark">Pemilihan Kadidat</h1>
            </div>
        </div>
        <div class="content mt-4">
            <div class="container">
                <table class="table table-bordered text-center align-middle shadow-lg">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">Caleg</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($data = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <th class="text-left" scope="row" colspan="2">
                                nama<?php echo $data['name']; ?>
                            </th>
                            <th scope="row" colspan="2" rowspan="2">
                                <button type="button" class="btn btn-danger">TOMBOL TAMBAH</button>
                            </th>
                        </tr>
                        <tr>
                            <th class="text-left" scope="row" colspan="2">
                                Perolehan suara: <?php echo $data['earned_vote']; ?>
                            </th>
                        </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jquery-3.4.1.slim.min.js"></script>
    <script src="assets/popper.min.js"></script>
    <script src="assets/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/main.js"></script>
</body>

</html>