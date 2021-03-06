<?php
include("https://github.com/C108118230/LIFFform/blob/9b379a41c21df77766487301dd55b3c6a3d723ff/connect.php");
?>
<!DOCTYPE html>
<title>義大醫院病床</title>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    $query = "SELECT * FROM 義大醫院";
    $query_run = mysqli_query($db, $query);
    ?>
    <div class="container">
        <table class="table table-sm table-bordered" style="text-align:center;">
            <thead style="text-align:center;">
                <tr style="text-align:center;">
                    <th>病床名稱</th>
                    <th>病床數</th>
                    <th>現住床數</th>
                    <th>空床數</th>
                    <th>佔床率</th>
                </tr>
            </thead>
            <tbody>
                <!-- 大括號的上、下半部分 分別用 PHP 拆開 ，這樣中間就可以純用HTML語法-->
                <?php
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $row) {
                ?>
                        <tr>
                            <!-- $row['(輸入資料表的欄位名稱)'];  <<用雙引號也行 -->
                            <td><?php echo $row['病床名稱']; ?></td>
                            <td><?php echo $row['病床數']; ?></td>
                            <td><?php echo $row['現住床數']; ?></td>
                            <td><?php echo $row['空床數']; ?></td>
                            <td><?php echo $row['佔床率']; ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
    </div>

</body>
<!--BOOTSTRAP的東西------------------------------------------------------------------------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>
