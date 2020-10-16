<?php
// the message

// use wordwrap() if lines are longer than 70 characters
$my="ujwaldesh17it@student.mes.ac.in";
$r=" Thank you for your feedback";
$n="hi";
//send email
$sent=mail($my,$n,$r);
if($sent==true)
{
  echo " All mail sent succesfully";
}
?>