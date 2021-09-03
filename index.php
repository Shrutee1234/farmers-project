<?php include 'includes/header.php'; ?>
<!-- Main -->
                <div id="main">
						<div class="inner">
							<header></header>
							<section class="tiles">
								<?php
									include("includes/changeme.php");
									$sql="SELECT * FROM CATEGORY";
									$result = $conn->query($sql);
									$cnts=1;
									$stlcnt=1;
									while($row = $result -> fetch_assoc())
									{
										$cname=$row["CNAME"];
										$cards="<article class='style$stlcnt'>
										<span class='image'>
											<img src='images/$cnts.jpg' alt='' />
										</span>
										<a href='generic.php?id=$cname'>
											<h2>$cname</h2></a>
										</article>";
										echo "$cards";
										if($stlcnt<6){
											$stlcnt+=1;
										}
										else{
											$stlcnt=1;
										}
										if($cnts<12){
											$cnts+=1;
										}
										else{
											$cnts=1;
										}
									}
								?>
							</section>
						</div>
					</div>
<?php include 'includes/footer.php'; ?>