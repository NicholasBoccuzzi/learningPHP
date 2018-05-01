<html>
  <head>
    <meta charset="utf-8">
    <title>Information Gathered</title>
  </head>
  <body>
    <?php
      $usersName = ucfirst($_POST['username']);
      $streetAddress = $_POST['streetaddress'];
      $cityAddress = $_POST['city'];
     ?>
    <?php


// ARRAYS

  $bestFriends = array('Julia', 'Willow', "Ivy");

  // echo 'My Wife ' . $bestFriends[0];
  //
  // $bestFriends[4] = 'AJ';
  // echo $bestFriends[4];

  // foreach($bestFriends as $friend) {
  //   echo $friend . ", ";
  // }

  $customer = array('Name' => $usersName, 'Street' => $streetAddress, 'City'=> $cityAddress);

  foreach($customer as $key => $value) {
    echo $key . " : " . $value . "</br>";
  }




// FOR AND WHILE LOOPS
    // $num = 0;
    // while($num < 20) {
    //   echo ++$num . ', ';
    // }
    //
    //
    // for($num = 1; $num <= 20; $num++) {
    //   echo $num;
    //
    //   if($num != 20) {
    //     echo ', ';
    //   } else{
    //     break;
    //   }
    // }



// SWITCH STATEMENTS
    // $biggestNum = (15 > 10) ? 15 : 10;
    // echo $biggestNum;

    // switch ($userName) {
    //   case "Nicky" :
    //     echo "Hello Nicky";
    //     break;
    //
    //   case "Sally" :
    //     echo "Hello Sally";
    //     break;
    //
    //   default :
    //     echo "Hello Valued Customer";
    //     break;
    // }


// IF STATEMENTS

// executes if statement if whatever is in question is true
    //
    // if(5 === 10){
    //   echo '5 = 10';
    // } else {
    //   echo '5 != 10';
    // }

    // $numOfOranges = 12;
    // $numOfBananas = 36;
    //
    //
    // if (($numOfOranges > 25) && ($numOfBananas > 30)) {
    //   echo '25% discount';
    // } elseif (($numOfOranges > 25) && ($numOfBananas > 30)) {
    //   echo '15% discount';
    // } elseif (!(($numOfOranges >  25) || ($numOfBananas > 30))) {
    //   echo '5% discount';
    // } else {
    //   echo 'no discount';
    // }

     // echo $usersName . "</br>";
     // echo $streetAddress . "</br>";
     // echo $cityAddress . "</br>";


     // WRITING A LONG STRING
     // use $ + variable name to define variable. anything with $ in front of it will be treated as variable;
//      $str = <<<EOD
//      The customers name is $usersName and they live at $streetAddress in $cityAddress</br>
// EOD;

      // DECLARING A CONSTANT
      // define('PI', 3.1459);
      // echo PI;

      // echo "</br>";

      // echo $str;

      // $randNum = 5;
      // $refToNum  = $randNum;
      // $randNum = 100;
      // echo $refToNum . "</br>";
      // echo $randNum;

      // vs (note the '&' symbol before the $randNum when defining $refToNum)

      // $randNum = 5;
      // $refToNum  = &$randNum;
      // $randNum = 100;
      // echo $refToNum . "</br>";
      // echo $randNum;



      //
      // echo "++randNum = " . ++$randNum . "</br>";
      // echo $randNum . "</br>";
      // echo "randNum++ = " . $randNum++ . "</br>";

      // echo $randNum += 10;
      // += -= works the same

      // echo "</br>";
      // echo "</br>5 + 2 = " . (5 + 2);
      // echo "</br>5 - 2 = " . (5 - 2);
      // echo "</br>5 * 2 = " . (5 * 2);
      // echo "</br>5 / 2 = " . (integer) (5 / 2);
      // echo "</br>5 % 2 = " . (5 % 2) . "</br>";

     ?>

  </body>
</html>

<!--

To test PHP, make sure you are in the directory of your files (html and PHP work so far)
in terminal post:

php -S localhost:8000


 -->
