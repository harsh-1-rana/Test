<?php
    // converting an array toi json.
    echo '<h1 align="center">PHP COADING QUESTIONS</h1>';
    echo'<h2>a.convert an array to JSON</h2>';

    $user_details = [[
        'fname' => 'John',
        'lname' => 'doe',
        'mail' => 'John@abc.com',],
        [
        'fname' => 'Andy',
        'lname' => 'doe',
        'mail' => 'andy@abc.com',]
        ];

        $ConverttoJSON=json_encode($user_details);
        echo $ConverttoJSON;
        // converting a json to array.
        echo '<h2>b.convert a JSON to array</h2>';
        $ConverttoArray=json_decode($ConverttoJSON,true);
        var_dump($ConverttoArray);


        //merging arrays
    echo '<h2>c.Merge 2 Arrays </h2>';
        $user_details_1 = [[
            'fname' => 'John',
            'lname' => 'doe',
            'mail' => 'John@abc.com',],
            [
            'fname' => 'Andy',
            'lname' => 'doe',
            'mail' => 'andy@abc.com',]
            ];
        $user_details_2 = [[
            'fname' => 'Alex',
            'lname' => 'karev',
            'mail' => 'alex@abc.com',],
            [
            'fname' => 'Christina',
            'lname' => 'Yang',
            'mail' => 'yang@abc.com',]
            ];
        $user_details=array_merge($user_details_1,$user_details_2);
            
                print_r($user_details);
                echo '<br>';


        // find keys using values in an array

                echo '<h2><br>d.Find key using values in an array.</h2>';
                echo "<br>";
                $details=array_column($user_details,'mail');
                echo $details;
                echo '<br>';
                $index=array_search('alex@abc.com',$details);
                echo $index;
                echo '<br>';
                $value=$user_details[$index];
                print_r($value);



        // foreach and for loop

        echo '<h2>e.foreach and for loop</h2>';
        echo '<br>';

        //part 1
        echo 'i. Print these values in a table using foreach loop.';
        echo '<table style="border:1px solid black;border-collapse:collapse;">';
         
        foreach($user_details as $value){
        echo '<tr style="border:1px solid black;">';
        echo '<td style="border:1px solid black;">'.$value['fname'].'</td>';
        echo '<td style="border:1px solid black;">'.$value['lname'].'</td>';
        echo '<td style="border:1px solid black;">'.$value['mail'].'</td>';
        }

        echo '</tr>';
        echo '</table>';
        echo '<br>';
        //part 2

        echo 'ii. Create a user for each array of data using for loop';
        echo '<table style="border: 1px solid black;border-collapse:collapse;">';

        for($i=0;$i<sizeof($user_details);$i++){
        echo '<tr style="border: 1px solid black;">';
        echo '<td style="border: 1px solid black;">'.$user_details[$i]['fname'].'</td>';
        echo '<td style="border: 1px solid black;">'.$user_details[$i]['lname'].'</td>';
        echo '<td style="border: 1px solid black;">'.$user_details[$i]['mail'].'</td>';
  
        }
        echo "</tr>";
        echo "</table>";
        echo '<br><br>';

        //Try catch/ if-else conditions (use Assignment 1)

        echo '<h2>f. Try catch/ if-else conditions (use Assignment 1)</h2>';
        echo '<br>';
        echo 'i. If the user mail is yang@abc.com do not create the user in the database,
        else create one:';
        echo '<br><br><br>';
        echo "Please check the assignments at:<a href='index1.php'>here</a>";
        echo '<br><br>';
        echo 'The Screenshots are attached below:';
        echo '<br><br>';
        echo "<img src='yang.png'>";
        echo '<br><br>';
        echo "<img src='error.png'>";
        echo '<br><br>';
        echo "<img src='insert.png'>";
        echo '<br><br>';
        echo "<img src='welcome.png'>";
        echo '<br><br>';
        echo "<img src='DB.png'>";
        
?>

