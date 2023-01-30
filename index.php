<?php

    echo "<br>";
    echo "!-- File create / write --!" . "<br>";

    $myfile3 = fopen("newfile.txt", "a") or die ("Unable to open file!");
    $txt = "Ilja Lifshic\n";
    fwrite($myfile3, $txt);
    $txt = "Lambert Lambert\n";
    fwrite($myfile3, $txt);
    fclose($myfile3);



























?>