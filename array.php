<?php

//
//$data=[];
//
//
//$data[0]=10;
//$data[1]=20;
//$data[3]=30;
//
//$data['name']='Mehedi';
//$data['city']='Narayanganj';
//$data['country']='Bangladesh';
//
//echo $data[0];
//echo '<br/>';
//echo $data[1];
//echo '<br/>';
//echo $data[3];
//
//echo '<hr/>';
//
//echo $data['name'];
//echo '<br/>';
//echo $data['city'];
//echo '<br/>';
//echo $data['country'];

//$data =[
//  'name'=> 'Maruf',
//  'city'=> 'Narayanganj',
//  'country'=> 'Bangladesh',
//  'phone' => '01677109107',
//  'gender' => 'Male'
//];
//
////echo $data['name'];
//
//foreach ($data as $value){
//    echo $value.'<br/>';
//echo '<pre>';
////    print_r($data);
//
//    var_dump($data);
//}


//$data=[];
//$data[0][0]=10;
//$data[0][1]=20;
//$data[0][2]=30;
//
//$data[1][0]=40;
//$data[1][1]=50;
//$data[1][2]=60;
//
//$data[2][0]=70;
//$data[2][1]=80;
//$data[2][2]=90;
//
//$data[3][0]=100;
//$data[3][1]=110;
//$data[3][2]=120;
//
//
//
//foreach ($data as $value){
////    echo $value[0].' '.$value[1].' '.$value[2].'<br/>';
////  echo '<pre>';
////    print_r($data);
//
//    foreach ($value as $v_value) {
//        echo $v_value.' ';
//    }
//    echo '<br/>';
//}

function demo( $firstName, $lastName=null){
//    $firstName="mehedi";
//    $lastName="hasan";
    $fullName=$firstName.' '.$lastName;
//    echo $fullName;
    return $fullName;

}
echo '<br/>........................<br/>';
 echo demo('sakib', 'hasan');
echo '<br/>........................<br/>';
$res= demo('Maruf','Apu biswas');
echo 'full name is: '.$res;
echo '<br/>........................<br/>';
$res= demo('Raifur','Apu biswas');
echo '<h1>'.$res.'</h1>';

?>