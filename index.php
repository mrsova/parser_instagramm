<?php
include('simple_html_dom.php');

$homepage = file_get_html("bloger/filippo_va.html");
$a = $homepage->find('a._4zhc5');

$b = $homepage->find('div._2uju6');

//foreach($b as $val){ if($val->innertext == ''){echo "_";}else{ echo $val->innertext;}echo "<br/>";}

/*
foreach($a as $val) {
    //echo $val->title . "<br/>";
    echo "https://www.instagram.com" . $val->href ."<br/>";

}*/


$string = file_get_contents("json.json");
$json_a = json_decode($string, true);

foreach($json_a['data']['user']['edge_followed_by']['edges'] as $val) {
    if($val['node']['full_name'] == ''){echo "_";}else{ echo $val['node']['full_name'];}

    //echo $val['node']['username'];
    //echo "https://www.instagram.com/" . $val['node']['username'];

    echo "<br/>";
}