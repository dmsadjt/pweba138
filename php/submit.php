<html>
    <head>
        <Title>Test</Title>
    </head>
    <body>
    <?php
    function binary($array, $n){
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
    $exarr = [1,2,3,4,5];
    $n = $_POST["index"];
    echo binary($exarr, $n);
    ?>
    </body>
</html>