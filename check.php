<?php

class Check
{
   /* function LanguageTest($doc)
    {

        for ($i=0; $i <4 ; $i++)
        {
            $count[$i] = 0;
            $tags= $doc[$i]->getElementsByTagName('html');

            foreach ($tags as $tag)
            {
                if($tag->getAttribute('lang'))
                {
                    $count[$i]++;
                }

            }
            $countL[$i] = $count[$i];
            #echo $count[$i]."<br/>";
        }


        return $countL;

    }
*/
    function ImageTest($doc)
    {

            $counti=0;
            $counta=0;
            $tags = $doc->getElementsByTagName('img');
            foreach ($tags as $tag)
            {
                if($tag->getAttribute('src'))
                {
                    $counti++;
                }
            }
                foreach ($tags as $tag)
                {
                if($tag->getAttribute('alt'))
                {
                    $counta++;

                }
            }

        echo "Total no. of Images is $counti"."<br>";
        echo "Total no. of Alt Tag is $counta"."<br><br>";
            $countI= ($counta/$counti)*100;

        if($counta == $countI){

            if (empty($countI)) {

                $no1 = 0;
                $countImg = "No Accessibility of Image";

            }
            else{
                $no1 = 1;
                $countImg = "Accessibility of Image is $countI%";
            }
        }
        else{
            $no1 = 1;
            $countImg = "Accessibility of Image is $countI%";
        }

        return array($countImg,$countI,$no1);
    }


    function Label($doc)
    {
        $tags = $doc->getElementsByTagName('form');

        foreach ($tags as $tag) {

            $tag = $doc->getElementsByTagName('input');

        }
        $cinput = $tag->length;

        if (empty($cinput)) {
            echo '0 Input Tags'."<br>";
            $cinput = 0;
        }
        else
        {

        echo "<br/>".$cinput ."\n"." are input tags "."<br>" ;

        }

        foreach ($tags as $tagv)
        {

            $tagv = $doc->getElementsByTagName('label');

        }
        $clabel = $tagv->length;

        if (empty($clabel)) {
            echo '0 label Tags'."<br><br>";
            $clabel = 0;
        }
        else
        {

            echo "<br/>".$clabel."\n"." are label tags  "."<br>" ;

        }



        $countl = ($clabel/$cinput)*100;


        if($clabel == $cinput){

            if (empty($countl)) {

                $no2 = 0;
                $countlabel ="No Accessibility of Label Tag ";
            }
            else{
                $no2 = 1;
                $countlabel ="Accessibility of Label Tag is $countl%";
            }
        }
        else{
            $no2 = 1;
            $countlabel ="Accessibility of Label Tag is $countl%";
        }


        return array($countlabel,$countl,$no2);

    }

    function LinkTest($doc)
    {

        $counta=0;
        $countalt=0;
        $tags = $doc->getElementsByTagName('a');
        foreach ($tags as $tag)
        {
            if($tag->getAttribute('href'))
            {
                $counta++;
            }
        }
        foreach ($tags as $tag)
        {
            if($tag->getAttribute('alt'))
            {
                $countalt++;

            }
        }

        echo "Total no. of link is $counta"."<br>";
        echo "Total no. of Alt Tag is $countalt"."<br><br>";

        $countL= ($countalt/$counta)*100;

        if($countalt == $counta){

            if (empty($countL)) {

                $no3 = 0;
                $countlink = "No Accessibility of link";

            }
            else{
                $no3 = 1;
                $countlink = "Accessibility of link is $countL%";
            }
        }
        else{
            $no3 = 1;
            $countlink = "Accessibility of link is $countL%";
        }


        return array($countlink,$countL,$no3);
    }

    function TableCaption($doc)
    {
        $tags = $doc->getElementsByTagName('body');


        foreach ($tags as $tag) {

            $tag = $doc->getElementsByTagName('table');

        }

        $ctable =$tag->length;

        if (empty($ctable)) {
            echo '0 Table Tags'."<br>";
            $ctable = 0;
        }
        else
        {

            echo "<br/>".$ctable ."\n"." are table tags "."<br>" ;

        }

        foreach ($tags as $tagv)
        {

            $tagv = $doc->getElementsByTagName('caption');

        }
        $ccaption =$tagv->length ;

        if (empty($ccaption)) {
            echo '0 Caption Tags'."<br><br>";
            $ccaption = 0;
        }
        else
        {

            echo "<br/>".$ccaption ."\n"." are cation tags "."<br>" ;

        }

        $countT = ($ccaption/$ctable)*100;

        if($ccaption == $ctable){

            if (empty($countT)) {

                $no4 = 0;
                $countTable ="No Accessibility of Tabel Tag";
            }
            else{
                $no4 = 1;
                $countTable ="Accessibility of Tabel Tag is $countT%";
            }
        }
        else{
            $no4 = 1;
            $countTable ="Accessibility of Tabel Tag is $countT%";
        }

        return array($countTable,$countT,$no4);

    }

    }

?>