<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
		<img src="/assets/img/img-sun.png" alt="A closeup of the Sun.">
	<p>The Earth's revolution around the sun causes night and day.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<img src="/assets/img/img-solar-system-2.png" alt="Our solar system with all the planets.">	
	<p>
		<strong class="yes">Falsch.</strong>
		<strong class="no">Richtig!</strong> 
		The Earth rotates on an axis, making one full rotation every 24 hours. Different sides of the Earth are exposed to the sun during the course of these 24 hours, with half of the planet being exposed to sun while the other half is deprived of light. It is this rotation that causes day and night.
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.astronomy.org/astronomy/misconceptions.html#3" id="more">I want to learn more about the earth and sun!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>