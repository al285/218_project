<?php

class files {
	
public $csvFiles;
public columnHeading;


//Function
         
         public funtion readcsv($csvFiles , $columnHeading){
         public static function readCSV($fname,$heading) {
		$first_row = TRUE;
		ini_set('auto_detect_line_endings',TRUE);
		if (($handle = fopen($fname, "r")) !== FALSE) {
    		while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
     		if($first_row == TRUE) {
       		$column_heading = $row;
       		$first_row = FALSE;
      				    
  	} else {     
        $record = array_combine($column_heading, $row);
         $records[] = $record;
    				                    }
   		}
    		fclose($handle);
	  }
	  return $records;

//creating new array 
require 'ReadCSV.php';
$collID = new readingFile();
$collID->readCSV('hd2013.csv',TRUE);
$collD = new readingFile();
$collD->readCSV('varlist.csv',TRUE);
 foreach($collD as $record)
 {
 		$Collegedict [$record['varname']] = $record['varTitle']; 
 		 
 }
 for($i=0;$i<count($collID); $i++)
 {
 	
	$collID[i] = array_combine($Collegedict,$collID[i]);	
 }
 
	
	}

//calling csv to read

    class newClass{
            function csvcallfile()  {

                 $csvfile= new csvfile();
                 $newcsvFil= $csvfile->readcsv();
                 echo $newcsvFil;
      
      
      
                 }
                 
                 else{
		//echoing the key and value
		$record = $records[$_GET['record']];
		echo "<table border = 1 bordercolor= blue cellspacing=0 cellpadding=3 >";
		echo "<tr>";
		foreach($record as $key =>  $value) {
			
			echo "<th>$key</th>";
			echo "<td>$value</td>";
			
		echo "</tr>";
		
	
			
		}
		
		echo "</table>";
	
	
	}
	}

}

//calling files 
   $NF=new csvfile();
   $NF->readCSV("hd2013.csv", TRUE);
   





                          }




               }





             }





         







         }






}


