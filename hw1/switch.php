<?php
$grade = 'F';
$a = 80;
switch( $grade ){
    case 'A' : 
        echo "คุณจะต้องได้คะแนนตั้งแต่ 79 คะแนนขึ้นไป";
        break;
    case 'B' : 
        echo "คุณจะต้องได้คะแนน 69 - 80 คะแนน";
        break;
    case 'C' : 
        echo "คุณจะต้องได้คะแนน 59 - 70 คะแนน";
        break;
    case 'D' : 
        echo "คุณจะต้องได้คะแนน 49 - 60 คะแนน";
        break;
    case 'F' : 
            echo "คุณจะต้องได้คะแนน 59 คะแนน";
            break;    
    default : 
        echo "ถ้าคุณไม่ส่งงานให้ครบ ก็จะติด 0 ไปเอง ^^";
        break;
}
