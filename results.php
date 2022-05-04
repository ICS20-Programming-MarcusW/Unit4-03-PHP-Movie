<?php
// get the users age input
$age = $_POST['userAge'];
if ($age >= 0 && $age <= 10)
{
  	// if age is greater than or equal to 0 and less than or equal to 10, display that they can watch a G or PG rated movie but cannot go to the movies alone 
    echo "<h4>You can watch a G or PG rated movie but cannot go to the movies alone.</h4>";
}

elseif ($age > 10 && $age <= 12)
{
	// if age is less than or equal to 12 but greater than 10, display that they can watch a G or PG rated movie
    echo "<h4>You can watch a G or PG rated movie.</h4>";
}

elseif ($age > 12 && $age <= 17)
{
    	// if age is less than or equal to 17 but greater than 12, display that they can watch a G, PG, or PG-13 rated movie
    echo "<h4>You can watch a G, PG, or PG-13 rated movie.</h4>";
}

else
{
      // otherwise, display that they can watch any movie, including rated R
    echo "<h4>You can watch all movies, including rated R movies.</h4>";
}
?>
