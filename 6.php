<?php
include("6-koneksi.php");
$koneksi -> close();
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
                        include("6-koneksi.php");
                        $query = "SELECT * FROM tb_caleg ";
                        $result = mysqli_query($koneksi, $query);
                        if($result === FALSE) {
                            return printf('Data Erorr');
                            exit();
                        }
                        while($data = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <th class="text-left font-weight-bold" scope="row" colspan="2">
                                <i class="fas fa-user mr-2"></i><?php echo $data['name']; ?>
                            </th>
                            <th scope="row" colspan="2" rowspan="2">
                                <a class="btn btn-danger" href="6-update.php?id=<?php echo $data['id']; ?>&vote=<?php echo $data['earned_vote']; ?>">
                                TOMBOL TAMBAH
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th class="text-left" scope="row" colspan="2">
                                <i class="fas fa-vote-yea mr-2"></i>Perolehan suara : <?php echo $data['earned_vote']; ?>
                            </th>
                        </tr>
                        <?php
                        } 
                        $koneksi -> close();
                        ?>
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