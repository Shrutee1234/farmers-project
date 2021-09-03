<?php include 'includes/header.php'; 
$ctgy=$_REQUEST["id"];
include("includes/changeme.php");
$sql="SELECT * FROM CATEGORY WHERE CNAME='$ctgy'";
$resut = $conn->query($sql);
$ro = $resut -> fetch_assoc();
$cimage=$ro["CIMAGE"];
?>
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1><?php echo "$ctgy";?></h1>
							<span class="image main"><img src='<?php echo "admin/$cimage";?>' alt="" /></span>
								<?php
									$sql="SELECT * FROM SUB_TOPICS WHERE CNAME='$ctgy'";
									$result = $conn->query($sql);
									while($row = $result -> fetch_assoc())
									{
									$tname=$row["TNAME"];
									echo "<h4>$tname</h4>";
									$tdata=$row["TDATA"];
									echo "<p>$tdata</p>";
									}
								?>
						</div>
					</div>

				<!-- Footer -->

<?php include 'includes/footer.php'; ?>