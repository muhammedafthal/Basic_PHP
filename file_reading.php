<?php

    $file = fopen("sample.txt", "r");

    $data = fread($file, filesize("sample.txt"));

    echo "<pre>$data</pre>";

    fclose($file);