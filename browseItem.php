<?php

defined('MY_INC_CODE') or die('Access to this file is restricted');

$query = "select user_ID, user_name from User";
    
if(!$db) 
   {
      echo $db->lastErrorMsg();
   } 
     else 
   { 
       $results = $db->query($query);
        
       if ( $results->numColumns() < 1 )
       {
           echo "The query has returned no data";
       }
       else
       {
           $theData = array();
         
           while($entry = $results->fetchArray(SQLITE3_ASSOC))
           { 
               array_push( $theData, $entry );          
           }
           
           
      
           echo '<div class="card card-container-fluid py-2 px-2">';
           
           echo '<table class="table table-bordered table-striped table-hover table-sm table-responsive" id="dbtable">
                <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col"> actions </th>
                </tr>
                </thead>
                <tbody>';
           
           foreach($theData as $row)
           {
                echo "<tr><td>" 
                  .$row["user_ID"]
                  ."</td><td>"
                  .$row["user_name"]
                  .'</td><td class="crud">'
                  .'<a href="'
                  .'deleteItem.php?iid='
                  .$row["user_ID"]
                  .'"><button type="button" class="btn btn-danger">delete</button></a>&nbsp;&nbsp;&nbsp;'
                  .'<a href="'
                  .'updateItem.php?iid='
                  .$row["user_ID"]
                  .'"><button type="button" class="btn btn-success">update</button></a>&nbsp;'
                  .'<a class="review" href=#'
                  .$row["user_ID"]
                  .'><button type="button" class="btn btn-info">more</button></a>&nbsp;'
                  ."</td></tr>";
           }
           
           echo "</tbody></table>";
           echo "</div>";

       }
   }
          
$db->close();
   