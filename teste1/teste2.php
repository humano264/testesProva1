<?php
while (true) {
    fscanf(STDIN, "%d", $n);
    if ($n == 0) {
        break;
    }
    fscanf(STDIN, "%d %d", $p1, $p2);

    for ($i = 0; $i < $n; $i++) {
        fscanf(STDIN, "%d %d", $x, $y);
        $s = "";
        if ($y < $p2) {
            $s = "S";
        } elseif ($y > $p2) {
            $s = "N";
        }
        if ($x < $p1) {
            $s .= "O";
        } elseif ($x > $p1) {
            $s .= "E";
        }
        if (($x == $p1) || ($y == $p2)) {
            $s = "divisa";
        }
        echo trim($s) . PHP_EOL;
    }
}
?>