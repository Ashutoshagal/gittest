<?php
include_once 'check.php';
class Rank
{

    function RankGenerator($doc, $url)
    {

       /* $Language = new Check;

       $countL = $Language->LanguageTest($doc);
       */

        $Img = new Check;
        $label = new Check;
        $link = new Check();
        $Table =new Check();

        list($countlabel,$countl,$no1) = $label->Label($doc);

       list($countImg,$countI,$no2) = $Img->ImageTest($doc);

        list($countlink,$countL,$no3) = $link->LinkTest($doc);

        list($countTable,$countT,$no4) = $Table->TableCaption($doc);

        $Access = array($url=>array($countlabel,$countImg,$countlink,$countTable));

        $no = $no1 + $no2 + $no3 + $no4;

        $result = ($countI + $countl + $countL + $countT)/$no;

        foreach($Access as $x => $x_value) {
            foreach($x_value as $y_value)
            {
            print  "$y_value for ". "$x";
            echo "<br>";
            }
        }

        echo "<br><br><br>"."Total Accessibility of this site is $result% ";
    }
}