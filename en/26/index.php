<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>The Earth is the center of the solar system. The planets, Sun and Moon revolve around the Earth.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<?php include ($_SERVER['DOCUMENT_ROOT'].'/solar-system-anim.inc.php'); ?>
	<p>
		<strong class="yes">Wrong.</strong>
		<strong class="no">Correct!</strong> 
		The Sun is at the center of the solar system, and the planets (Earth is one of them), asteroids, moons, and comets orbit the Sun. The Earth is the third planet from the Sun.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://amazing-space.stsci.edu/resources/myths/solar_system.php.p=Capture+the+cosmos@,capture,%3ESolar+system@,capture,solarsyst," id="more">I want to learn more about stars!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>