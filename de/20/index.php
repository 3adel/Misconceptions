<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>The surface of the Sun has visible layers.</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<p>
		<strong class="no">Falsch.</strong>
		<strong class="yes">Richtig!</strong> 
The Sun's visible surface shows a variety of features. Most conspicuous are the sunspots, great dark disturbances which can be many times larger than the earth. Observations of sunspots from day to day show that the Sun rotates. 
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.uwgb.edu/dutchs/planets/sun.htm" id="more">I want to learn more about sun!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>