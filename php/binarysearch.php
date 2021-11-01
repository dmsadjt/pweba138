<html>

<head>
    <Title>Halo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container p-5">
        <form method="post" action="binarysearch.php">
            <label for="index">Masukkan angka</label>
            <input type="number" id="index" name="index">
            <input type="submit">
        </form>
        <?php
        function binary($array, $n)
        {
            $l = 0;
            $r = count($array) - 1;
            while ($l <= $r) {
                $m = (floor(($l + $r) / 2));
                if ($array[$m] == $n) {
                    return $m;
                }

                if ($array[$m] < $n) {
                    $l = $m + 1;
                }

                if ($array[$m] > $n) {
                    $r = $m - 1;
                }
            }
            return -1;
        }
        $exarr = [1, 2, 3, 4, 5];
        $n = $_POST["index"];
        $result = binary($exarr, $n);
        echo $result;
        ?>
    </div>

</body>

</html>