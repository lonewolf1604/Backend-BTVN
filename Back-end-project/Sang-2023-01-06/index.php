<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .ex01 .multiplication{
            display: flex;
            flex-wrap: wrap;
        }
        
        .ex01 .multiplication .multiplication__item{
            border: 1px solid;
            padding: 10px 20px;
            max-width: 15%;
            flex-basis: 15%;
        }
    </style>
</head>
<body>
    <div class="ex01">
        <h2>Bảng cửu chương</h2>
        <div class="multiplication">
            <?php include('algorithm/multiplication-table.php');?>
        </div>
    </div>
    <hr>
    <div class="ex02">
        <h2>Tổng từ 1 đến N</h2>
        <?php include('algorithm/sum-1-to-n.php');?>
    </div>
    <hr>
    <div class="ex02">
        <h2>Dãy Fibonaci</h2>
        <?php include('algorithm/fibonaci.php');?>
    </div>
</body>
</html>