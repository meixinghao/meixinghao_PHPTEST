<?php

class read
{
    public function load()
    {
        $doc = new DOMDocument();
        $doc->load('person.xml');
        $humans = $doc->getElementsByTagName("humans");
        echo "<pre>";
        foreach ($humans as $human) {
            $names = $human->getElementsByTagName("name");
            echo $names->item(1)->nodeValue;
        }
    }
}

$read = new read();
$read->load();
