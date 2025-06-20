<?php

    $file = fopen("sample.txt", 'w');

    echo "Hai from file_creating file";

    fwrite($file, "LEARN PHP\n");

    echo "File written successfully";

    fclose($file);

