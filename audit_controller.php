<?php
include_once 'rank.php';
class Load
{
    public function Content()
    {

$url= "http://www.w3schools.com/";

    $page = file_get_contents($url);
    $doc= new DOMDocument();
    @$doc->loadHTML($page);


        $a = new Rank();
        $a->RankGenerator($doc,$url);

    }

}

?>

