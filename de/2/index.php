<?php include '../header.inc.php'; ?>
<div class="front" id="question">
	<h2><?php echo $question ?></h2>
	<p>Alle Sterne haben die gleiche Entfernung zur Erde</p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="back" id="answer">
	<h2><?php echo $answer ?></h2>
	<p>
		<strong class="yes">Falsch.</strong>
		<strong class="no">Richtig!</strong> 
Es gibt gro&szlig;e Unterschiede zwischen den Entfernungen der Sterne zur Erde. Ein heller Stern, welcher sehr weit entfernt ist, kann z.B. genauso erscheinen wie ein dunklerer Stern welcher n&auml;her ist. 
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://wiki.answers.com/Q/Are_all_the_stars_in_a_constellation_the_same_distance_away_from_us" id="more">Mehr davon!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>