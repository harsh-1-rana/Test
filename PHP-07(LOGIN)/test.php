<?php
echo '<h1 align="center" >PHP Coding Questions</h1>';
echo '<h2>a. Convert an array into JSON.</h2>';

$user_details_1 = [['fname' => 'John','lname' => 'doe','mail' => 'John@abc.com',],['fname' => 'Andy','lname' => 'doe','mail' => 'andy@abc.com',]];
$user_details_2 = [['fname' => 'Alex','lname' => 'karev','mail' => 'alex@abc.com',],['fname' => 'Christina','lname' => 'Yang','mail'=> 'yang@abc.com',]];

$user_details=array_merge($user_details_1,$user_details_2);
    
echo '<h2><br>d.Find key using values in an array.</h2>';
echo "<br>";
    $details = array_column($user_details, 'mail');
    echo $details;
    echo "<br>";
    $index = array_search('alex@abc.com',$details);
    echo $index;
    echo "<br>";
    $data = $user_details[$index];
    print_r($data);

    ?>