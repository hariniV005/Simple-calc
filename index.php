<?php
$a = "";
$b = "";
$r = "";
$error = "";
if (isset($_GET['operation'])) {
    $a = $_GET['n1'];
    $b = $_GET['n2'];
    $op = $_GET['operation'];

    if (is_numeric($a) && is_numeric($b)) {
        switch ($op) {
            case 'ADD':
                $r = $a + $b;
                break;
            case 'SUB':
                $r = $a - $b;
                break;
            case 'MULTIPLY':
                $r = $a * $b;
                break;
            case 'DIV':
                $r = $a / $b;
                break;
        }
    } else {
        $error = "enter numeric values in the input box";
    }
}







?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
    <div class="container">
        <div class=" d-flex justify-content-center ">

            <h1> Simple Calculator </h1>
        </div>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div>
                <label for="n1">Number 1</label>
                <input class="form-control" type="number" id="n1" name="n1" value="<?= $a ?>">
            </div>
            <div>
                <label for="n2">Number 2</label>
                <input class="form-control" type="number" id="n2" name="n2" value="<?= $b ?>">
            </div>
            <div>
                <label for="res">result</label>
                <input class="form-control " type="number" id="res" value="<?= $r ?>" disabled>
            </div>

            <div class=" d-flex justify-content-center mt-3">
                <input class="btn-outline-info mx-3" type="submit" value="ADD" name="operation">
                <input class="btn-outline-primary mx-3" type="submit" value="SUB" name="operation">
                <input class="btn-outline-warning mx-3" type="submit" value="MULTIPLY" name="operation">
                <input class="btn-outline-secondary mx-3" type="submit" value="DIV" name="operation">
            </div>
            <div class="text-danger d-flex justify-content-center mt-4">
                <h3><?= $error ?> </h3>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>