<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<img src="/assets/img/img-night.png" alt="View from space of North America's lights.">
	<p>We see because light brightens things.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
		<img src="/assets/img/img-night-2.png" alt="View from space of Europe's lights.">
	<p>
		<strong class="yes">Falsch.</strong>
		<strong class="no">Richtig!</strong> 
		You can see light because light is reflected of particles.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://wiki.answers.com/Q/You_can_see_because_light_is" id="more">I want to learn more about light!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>