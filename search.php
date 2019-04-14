<?php
  require_once 'header.php';
  ?>
  <hr>
  <div style="width: auto;height:auto;padding: 40;">
 <h3>Search Page</h3>
<div style="width: 85%;height: 100%">
<?Php 
    if (isset($_POST['submit-search'])) {
    	$search = mysqli_real_escape_string($conn, $_POST['search']);
    	$sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_date LIKE '%$search%'";
    	$result = mysqli_query($conn, $sql);
    	$queryResults = mysqli_num_rows($result);
       
       echo "There are ".$queryResults." results!</br>";

      if ($queryResults > 0 ) {
      	 while ($row = mysqli_fetch_assoc($result)) {
      	 	echo "<a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'><div>
                  <h1>".$row['a_title']."</h1>
                  <p>".$row['a_text']."</p>
                  <div>".$row['a_text']."</div>
                  <p>".$row['a_date']."</p>
                  </div></a>";
                }
            }else{
            	echo"There are no result matching your search!";
            }
      	 }

 ?>
</div>
</div>
<?php
    include_once 'footer.php';
    ?>