<html>
<body>
<h1>IS218 Project 1</h1>

<?php

   class files

   public $csvfiles;
   public $columnHeading;
   
   //reading file

   public function readcsv($csvfiles,$columnHeading){
   
      if(($handle = fopen($csv,"r")) !== FALSE){
         while(($row=fgetcsv($handle,",")) !== FALSE){
	    if($column == TRUE){
	       $column = $row;
	       $column = FALSE;
	    }
	    else{
	       $record = array_combine($column,$row);
	       $records[] = $record;
	       $university[] = $row[1]; 
	       
	    }
	 }
      fclose($handle);
      }
      
    //getting the record
      if(empty($_GET)){
      foreach($records as $record){
      	$i++;
        $data= $i;
      
	 echo '<a href='.'"http://web.njit.edu/~al285/218project/index.php?record=' . $i . '"'. '>'.$record='.$data.'"'.'>'.$university[$data].'</a>';	 
       }
    }
    $record = $records[$_GET['record']];
    echo "<table border = 1 bordercolor= blue cellspacing=0 cellpadding=3 >";
    echo "<tr>";
    foreach($record as $key =>  $value) {
      
      echo "<th>$key</th>";
      echo "<td>$value</td>";
      
    echo "</tr>";
    
  
      
    }
    
    echo "</table>";
  
  
//calling file
$NF=new csvfile();
$NF->readCSV("hd2013.csv", TRUE);
?>




</body>

</html>

