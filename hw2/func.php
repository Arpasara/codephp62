<?php
// myFunction();

//function myFunction()
//{
//    echo "my1";
//}
//$srt = functon2();

//$srt += 1;
//echo $srt;
//function functon2()
//{
//    echo "my"."<br>";

//    return "you call me";
//}
//$str = functon2();
//echo $str;
//$calFunc = functon2();

//$calFunc;

//function calnumber(&$num1, $num2 = 7)
//{
//    $a = $num1;
//    $b = $num2;
//    $c = $a + $b;
//    $num1 = 6;
//    return $c;
//}
//$num1 = 1;
//echo "<br>";
//$num1 = 1;
//$num2 = 6; 
// echo calnumber(num1, $num2);
// echo "<br>";


function GPA($score = 56)
{
switch ($score) 
{

    case ($score < 50):
        echo "F";
       break;
    case ($score <55):
        echo "D";
        break;
    case ($score <60):
        echo "D+";
        break;
    case ($score <65):
        echo "C";
        break;
    case ($score <70):
        echo "C+";
        break; 
    case ($score <75):
        echo "B";
        break;   
        
    case ($score < 80):
        echo "B+";
        break;
    default:
        echo "A";
        break;
    }
    echo "<br>";
    return $score;

}
echo "<br>";
echo GPA()

?>


//{ 
//    if ($num == 0 || $num == 1) {
//        return 1;
//    } else {
//       return $num * fatorail($num - 1);
        
//    }
//}
//echo fatorail(5) . "<br>";
// echo fatorail(5) . "<br>";

// $Fullname = "Mr.Suradet Petcharanon";
// $lastname = substr($Fullname,11,3);
// echo $lastname;
// echo strlen($lastname);
// echo "<br>";
// echo max(1,4.33,45);
// echo round(19.987777,2);

//echo date("d/m/Y", "1579737600");
//echo "<br>";
// echo getdate();
//$currentdate = getdate();
//echo $currentdate["mday"];
//echo time();
