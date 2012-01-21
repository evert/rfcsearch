<?php

include 'lookup.php';

if (isset($_GET['q'])) {
    $result = search($_GET['q']);
    if ($result) {
        header('Location: ' . $result);
        exit();
    } else {
        include 'noresults.php';
        exit();
    }
}
include 'index.html';

