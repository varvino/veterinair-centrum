<?php
// Get title function
function the_title($url)
{
    $blogpost = file_get_contents(ROOT . $url);
    @$doc = new DOMDocument();
    @$doc->loadHTML($blogpost);
    $xpath = new DomXPath($doc);
    $nodeList = $xpath->query("//*[@class='blogpost__headline']");
    $node = $nodeList->item(0);
    $blogpost_title = $node->nodeValue;

    if (isset($blogpost)) :
        echo $blogpost_title;
    endif;
}

// Get excerpt function
function the_excerpt($url)
{
    $blogpost = file_get_contents(ROOT . $url);
    @$doc = new DOMDocument();
    @$doc->loadHTML($blogpost);
    $xpath = new DomXPath($doc);
    $nodeList = $xpath->query("//*[@class='blogpost__content-lead']");
    $node = $nodeList->item(0);
    $blogpost_excerpt = $node->nodeValue;

    if (isset($blogpost)) :
        echo $blogpost_excerpt;
    endif;
}

// Get date function
function the_date($url)
{
    $blogpost = file_get_contents(ROOT . $url);
    @$doc = new DOMDocument();
    @$doc->loadHTML($blogpost);
    $xpath = new DomXPath($doc);
    $nodeList = $xpath->query("//*[@class='blogpost__date']");
    $node = $nodeList->item(0);
    $blogpost_date = $node->nodeValue;

    if (isset($blogpost)) :
        echo $blogpost_date;
    endif;
}
