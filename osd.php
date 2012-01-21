<?php

header('Content-Type: application/opensearchdescription+xml');

echo '<?xml version="1.0" encoding="UTF-8" ?>' . "\n";
?>
<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/"  
                       xmlns:moz="http://www.mozilla.org/2006/browser/search/">

    <ShortName>RFC search</ShortName>
    <Description>Quickly look up RFC's</Description>
    <InputEncoding>UTF-8</InputEncoding>
	<AdultContent>false</AdultContent>
	<Developer>Evert Pot</Developer>
    <Contact>evert@rooftosolutions.nl</Contact>
    <SyndicationRight>open</SyndicationRight>
    <Image width="16" height="16">http://tools.ietf.org/images/rfc.png</Image>
    <Url type="text/html" method="GET" template="http://rfcsearch.phpfogapp.com/search.php">  
        <Param name="q" value="{searchTerms}"/>
    </Url> 
    <!-- <Url type="application/x-suggestions+json" method="GET" template="http://rfcsearch.phpfogapp.com/suggest.php?q={searchTerms}"/>-->
    <moz:SearchForm>http://rfcsearch.phpfogapp.com/search.php</moz:SearchForm> 
</OpenSearchDescription>
