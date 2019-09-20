<!-- 

HADER PAGE 
----------
specify active tab with $active='' before inclusion

Home -> 'home'
Queue -> 'queue'
Submit -> 'submit'
SSH -> 'ssh'

-->

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand titolo_brand" href="#"><?php echo $world['ClusterName']; ?></a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li <?php if ($active === 'home') { echo 'class="active"'; } ?>>
						<a href="mainmenu.php" class="titolo_nav">
							<i class="icon-home icon-white image-nav"></i> 
							Home
						</a>
					</li>
					<li <?php if ($active === 'queue') { echo 'class="active"'; } ?>>
						<a href="queue_status.php" class="titolo_nav">
							<i class="icon-th-list icon-white image-nav"></i>
							Queue
						</a>
					</li>
					<li <?php if ($active === 'submit') { echo 'class="active"'; } ?>>
						<a href="jsubmit.php#FormCreate" class="titolo_nav">
							<i class="icon-download-alt icon-white image-nav"></i>
							Submit
						</a>
					</li>
					<li <?php if ($active === 'ssh') { echo 'class="active"'; } ?>>
						<a href="sshinterf.php" class="titolo_nav">
							<i class="icon-tasks icon-white image-nav"></i>
							SSH
						</a>
					</li>
				</ul> 
			</div>
			<div class="nav-collapse pull-right">
				<ul class="nav">
					<li>
						<?php echo $world['GangliaURL2']; ?>
					</li>
					<li>
						<a href="logout.php" class="titolo_nav">
							<i class="icon-user icon-white image-nav"></i>
							Logout <?php echo $_SESSION['username'].'@'.$_SESSION['sshserver']; ?>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div> <!-- .navbar-inner -->
</div> <!-- .navbar -->
