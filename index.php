<?php
echo"<center><h2>PHP CLASS HW-2</h2></center>";
// Creating Dynamic functions using Billing System 
echo"<h2>Billing System Output</h2>";
function totalBill($fan=0,$AC=0,$fridge=0,$W_1= 14){
    /* fan 20w
     /* ac 100w
     /* fridge 150 w
     /* fan 2 ac 5 fridge 2
     /*1w = 14 tk
     */
    //(20*2)+(100*5)+(150*2)  
    //40+500+300= 840W
    //840*14=11,760 tk
    $total_w = ($fan*2)+($AC*5)+($fridge*2);
    echo "<b>Total power is $total_w W.</b><br><br>";
    $total_tk = $total_w * $W_1;
    echo "<b>Total amount is $total_tk Taka.</b><br>";
}
totalBill(20,100,150);

// Creating Dynamic functions using Login forms
echo"<h2>Login forms Output</h2>";
function login_form($user_mail,$password){
if($user_mail && $password == "tabassum@gmail.com" && "1234"){
    echo "Login Successfully <br>";
}
else{
    echo "Failed <br>";
}
} 
login_form("ajkghjsf",76543);

// Creating Dynamic functions using if conditions
echo"<h2>Product buying system  Output</h2>";
function product_buy($price){

    if($price >= 100){
        echo "Buying this Product .<br>";
    }
    else{
        echo "No Buying this Product <br>";
    }
    }
product_buy(1200,);

// Creating Even Odd Dynamic functions using if conditions 
echo"<h2>Even Odd Number  Output</h2>";
function even_odd_checker($num){
    if($num %2 ==0){
        echo "This is Even Number <br>";
    }
    else{
        echo "This is Odd Number <br>";
    }
    }
even_odd_checker(68);

// Creating positive negative number Dynamic functions using f-else-if conditions
echo"<h2>positive negative number Output</h2>";
function positive_negative_checker($value=0){
    if($value > 0){
        echo "$value is Positive <br>";
    }
    else if ($value < 0){
        echo "$value is Negative <br>";
    }
    else{
        echo "$value is Nuteral <br>";
    }
    }
positive_negative_checker(-69);

// Dynamic Function creating
echo"<h2>Result checking Output</h2>";
function get_result($ban=0,$eng=0,$math=0,$python=0,$user_name="Somaya"){

    $total_result = $ban+$eng+$math+$python;
    echo "$user_name Your total marks is : $total_result <br>";
    }
    get_result(60,70,80,90,"Tabassum");
    
// If condition
echo"<h2>If condition Output</h2>";
$total_marks= 900;
if($total_marks>= 900){
    echo "Grade is A+ <br>";
    }
else{
    echo "Grade is A <br>";
    }
// Different ways of output
echo"<h2>Different ways of output</h2>";
echo strtoupper ("This is my Second HW <br><br>");
printf ("Using %s. ", strtoupper ("printf <br><br>"));
var_dump("using var_dump");
print_r (" <br><br> Using print_r <br>");

// Increment and Decrement Operators 
echo"<h2>Increment and Decrement Operators output</h2>";
$x = 20;//Increment operator
echo ++$x, "<br><br>";

$y =10;//Decrement operator
echo --$y,"<br><br>";


