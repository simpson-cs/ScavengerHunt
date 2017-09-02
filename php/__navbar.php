<!-- Initialize the nav bar -->
<script type="text/javascript">
	$( document ).ready(function(){
		$(".button-collapse").sideNav();
	})
</script>

<nav>
	<div class="nav-wrapper">
		<a href="#" class="brand-logo" style="margin-left: 10px"><?php echo $title; ?></a>
		<a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="hide-on-med-and-down right">
			<li class="<?php echo $index1; ?>"><a href="index.php"><i class="material-icons left">home</i>Home</a></li>
		</ul>
		<ul class="side-nav" id="mobile">
			<li class="<?php echo $index1; ?>"><a href="index.php"><i class="material-icons left">home</i>Home</a></li>

		</ul>
	</div>
</nav>
