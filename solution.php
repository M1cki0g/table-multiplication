 <?php

    $i = 2;

    echo "<div style='border: 2px solid black; padding: 10px; width:230px;'>";
    echo "<table border='1'>";

    echo "<tr>";
    echo "<td style='width:20px;'></td>";
    for ($j = 2; $j <= 9; $j++) {
        echo "<td style='width:20px;
                         font-weight:bold;'>$j</td>";
    }

    while ($i <= 9) {

        echo "<tr>"; // ouvrir la ligne

        echo "<td style='width:20px;
                         font-weight:bold;'>$i</td>";

        for ($j = 2; $j <= 9; $j++) {
            $c = $i * $j;
            if ($i == $j) {
                echo "<td style='width:20px;
                font-weight:bold;'>$c</td>";
            } else
                echo "<td style='width:20px;'>$c</td>";
        }
        $i++;
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
    ?>
