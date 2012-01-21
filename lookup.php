<?php

function search($keyword) {

    $keyword = trim($keyword);

    // Numeric keywords are easy
    if (is_numeric($keyword)) {

        return 'http://tools.ietf.org/html/rfc' . $keyword;

    }

    // This file contains a list of known keywords, or keywords that yield 
    // incorrect results from google.
    $keywordList = include 'keywordlist.php';

    if (isset($keywordList[strtolower($keyword)])) {

        return 'http://tools.ietf.org/html/rfc ' . $keywordList[strtolower($keyword)];

    }

    // Using google as a fallback
    return 'http://google.com/search?sourceid=navclient&btnI=1&q=site:tools.ietf.org+' . urlencode($keyword);

}

?>
