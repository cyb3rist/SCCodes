<?php     
$conn=mysqli_connect('localhost', 'root', '', 'databasesc');

$sql = "SELECT * FROM category LIMIT 5 OFFSET 5";
$result = mysqli_query($conn,$sql);
                                                
while($row = mysqli_fetch_assoc($result)) {    
?>
                                                    
<a href="itandweb.html?cat=<?php echo $row["id"]; ?>"><div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
<img class="img-fluid" alt="Choctaw Casino" src="flaticon/browser.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal"><?php echo $row["name"]; ?></h6></span> </div></a>
                                                    
<?php
                                                    
}
?>
