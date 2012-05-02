<?php include '../header.inc.php'; ?>
<div class="front" id="question">
	<h2><?php echo $question ?></h2>
	<img src="/assets/img/img-sun.png" alt="A closeup of the Sun.">
	<p>The Earth goes around the Sun in exactly one year</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="back" id="answer">
	<h2><?php echo $answer ?></h2>
	<img src="/assets/img/img-solar-system-2.png" alt="Our solar system with all the planets.">
	<p>
		<strong class="no">Correct!</strong>
		<strong class="yes">Wrong.</strong> 
		The Earth goes around the Sun in 365.24 days. Most of the time our calendar is 365 days and every 4th year it is 366 days. That's why we have a leap year!
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.astronomy.org/astronomy/misconceptions.html#3" id="more">I want to learn more about the earth and sun!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>