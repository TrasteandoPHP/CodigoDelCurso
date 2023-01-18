<?php
$col="black";
$flag=1;
for($i=1;$i<=20;$i++)
{  
    if($flag==6) 
        {
        $col="red";
            }
	if($flag==7){
	    $col="blue";
		$flag=0;
	}
		$col="black";
		$flag++;		  
		echo "<font color=$col>$i </font>";
		echo $flag;
}				  
				  
				  
				  
				  
//        else
  //      {

			
        //    if($flag==7)
        //    {
			
        //        $col="blue";
        //        $flag=0;
        //        echo "<br>";
        //    }
        //    else
        //    {
        //    $col="black";
        //    }
			
		//	}
           
         // echo $flag;
       // }



?>