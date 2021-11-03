<html>

<head>
    <Title>Test</Title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    $exarr = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14, 20, 22, 45, 58, 90, 101, 200, 1099, 2011, 7000, 12333];
    $n = $_POST["index"];
    ?>
</head>

<body>
    <div class="container p-5">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col">
                <div class="card" style="width: 25rem;">
                    <div class="card-header">
                        Cool binary search
                    </div>
                    <div class="card-body">
                        <h1><?php echo binary($exarr, $n);?></h1>
                        <form class="form ps-3 pe-3" method="post" action="binarysearch.php">
                            <input type="submit" class="btn btn-primary" value="Go Back">
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </div>


    </div>

</body>

</html>