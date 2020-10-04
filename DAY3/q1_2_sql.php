<?php
// $conn = new mysqli('localhost','root','','result');
// if($conn->connect_error){
//     die('connection failed : '.$connection_error);
// }

$conn= new mysqli('localhost','root','','result');
 if($conn->connect_error){
     die('connection failed: '.$connection_error);

 }
else{

    $extract = mysqli_query($conn,"SELECT * FROM class1 WHERE name='Rohan'");
    while ($row = mysqli_fetch_assoc($extract)) {

        $sub1 = $row["subject1"];
        $sub2 = $row["subject2"];
        $sub3 = $row["subject3"];
        $sub4 = $row["subject4"];
        $sub5 = 99;
        $name1 = $row["name"];
        $newtotal = $sub1+$sub2+$sub3+$sub4+$sub5;
        $newpercent = ($newtotal / 500 ) * 100 ;
        
        mysqli_query($conn,"UPDATE class1  SET subject5='$sub5' , totalmarks = '$newtotal' , percentage = '$newpercent' WHERE name='$name1'");
       }
       echo "<h2><b>Marks updated succesfully</b></h2>";
       mysqli_close($conn); 
}











?>