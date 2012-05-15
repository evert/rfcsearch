<?php

/*
 * The fallback for search providers is to use google, but google doesn't 
 * always get it right, and is slower.
 *
 * This is a simple default list of keywords and what rfc they should map to. 
 * Feel free to submit pull requests for more.
 */
return array(

    'atom'           => 4287,
    'atompub'        => 5023,

    'basic'          => 2617,
    'basic auth'     => 2617,

    'caldav'         => 4791,
    'carddav'        => 6352,

    'cookie'         => 2965,

    'digest'         => 2617,
    'digest auth'    => 2617,

    'http'           => 2616,
    'http auth'      => 2617,

    'icalendar'      => 5545,
    'imip'           => 6047,
    'itip'           => 5546,

    'mkcol'          => 5689,

    'smtp'           => 2821,

    'vcard'          => 6350,

    'websocket'      => 6455,
    'webdav acl'     => 3744,
    'webdav deltav'  => 3253,
    'webdav sync'    => 6578,

);

?>
