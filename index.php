<?php

$file = fopen("worldcities.csv", "r");

$i = 0;
$db = mysqli_connect("localhost", "root", "");
mysqli_select_db($db, "dating_site");
while(($c = fgetcsv($file, 100000, ',')) != false) {
    echo $c[0]; echo "<br/>";
    if ($i >= 1)
        echo "<hr/>";
    mysqli_query($db, "insert into country_list (city, city_ascii, lat, lng, country, iso2, iso3, population)
    values('" . remove_none_utf_char($c[0]). "', '" . remove_none_utf_char($c[1]) ."', '" . remove_none_utf_char($c[2]) . "', '" . remove_none_utf_char($c[3]) . "', '" . remove_none_utf_char($c[4]) . "', '" . remove_none_utf_char($c[5]) . "', '" . remove_none_utf_char($c[6]) . "', '" .remove_none_utf_char($c[7]) . "')")
        or die(mysqli_error($db));
    $i++;
}

function remove_none_utf_char($string) {
        $utf8 = array(
            '/[áàâãªä]/u'   =>   'a',
            '/[ÁÀÂÃÄ]/u'    =>   'A',
            '/[ÍÌÎÏ]/u'     =>   'I',
            '/[íìîï]/u'     =>   'i',
            '/[éèêë]/u'     =>   'e',
            '/[ÉÈÊË]/u'     =>   'E',
            '/[óòôõºö]/u'   =>   'o',
            '/[ÓÒÔÕÖ]/u'    =>   'O',
            '/[úùûü]/u'     =>   'u',
            '/[ÚÙÛÜ]/u'     =>   'U',
            '/ç/'           =>   'c',
            '/Ç/'           =>   'C',
            '/ñ/'           =>   'n',
            '/Ñ/'           =>   'N',
            '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
            '/[’‘‹›‚]/u'    =>   ' ', // Literally a single quote
            '/[“”«»„]/u'    =>   ' ', // Double quote
            '/ /'           =>   ' ', // nonbreaking space (equiv. to 0x160)
        );
        return remove_special_chars(preg_replace(array_keys($utf8), array_values($utf8), $string));
    }
	
	 function remove_special_chars($string) {
        $string = strip_tags($string);
        $string = preg_replace('/[^A-Za-z0-9. -]/', ' ', $string);
        // Replace sequences of spaces with hyphen
        $string = preg_replace('/  */', '-', $string);
        return $string;
    }

	
	
	delete from basic_info where 1;
delete from appearance where 1;
DELETE from general_information where 1;
DELETE from life_style where 1;
DELETE from user_logins where 1;