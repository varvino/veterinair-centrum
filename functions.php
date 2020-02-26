<?php
// Get title function
function the_title($post_type_url)
{
    $post_type = file_get_contents(ROOT . $post_type_url);
    @$doc = new DOMDocument();
    @$doc->loadHTML($post_type);
    $xpath = new DomXPath($doc);
    $nodeList = $xpath->query("//*[@class='blogpost__headline']");
    $node = $nodeList->item(0);
    $title = $node->nodeValue;

    if (isset($post_type)) :
        echo $title;
    endif;
}

// Get excerpt function
function the_excerpt($post_type_url)
{
    $post_type = file_get_contents(ROOT . $post_type_url);
    @$doc = new DOMDocument();
    @$doc->loadHTML($post_type);
    $xpath = new DomXPath($doc);
    $nodeList = $xpath->query("//*[@class='blogpost__content-lead']");
    $node = $nodeList->item(0);
    $excerpt = $node->nodeValue;

    if (isset($post_type)) :
        echo $excerpt;
    endif;
}

// Get date function
function the_date($post_type_url)
{
    $post_type = file_get_contents(ROOT . $post_type_url);
    @$doc = new DOMDocument();
    @$doc->loadHTML($post_type);
    $xpath = new DomXPath($doc);
    $nodeList = $xpath->query("//*[@class='blogpost__date']");
    $node = $nodeList->item(0);
    $excerpt = $node->nodeValue;

    if (isset($post_type)) :
        echo $excerpt;
    endif;
}
