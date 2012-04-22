<?php include '../header.inc.php'; ?>
<div class="face" id="question">
	<h2><?php echo $question ?></h2>
	<p>Alle Sterne einer Konstellation befinden sich in der Nähe zueinander. </p>
	<div class="cta">
		<button id="yes"><?php echo $yes ?></button>
		<button id="no"><?php echo $no ?></button>
	</div>
</div>
<div class="face" id="answer">
	<h2><?php echo $answer ?></h2>
	<p>
		<strong class="yes">Falsch.</strong>
		<strong class="no">Richtig!</strong> 
Jede Konstellation ist eine Konstellation aus Sternen welche in drei Dimensionen im Weltraum verteilt sind. Die Sterne haben alle eine andere Entfernung zur Erde auch wenn es für uns so aussieht, als seien diejenigen einer Konstellation alle am selben Ort. Das liegt daran, dass wir sie von sehr sehr weit entfernt betrachten. Sterne unterscheiden sich nicht nur in der Distanz zur Erde von einander, sondern auch in Größe und Temperatur. Schwächere Sterne können kleiner, weiter entfernt und kühler sein als hellere Sterne. Das bedeutet aber auch, dass der hellste Stern nicht unbedingt der nähste sein muss. 
	</p>
	<div class="cta">
		<a target="_blank" class="button" href="http://www.lpi.usra.edu/education/skytellers/constellations/about.shtml" id="more">Mehr davon!</a>
		<a class="button" href="<?php echo $link_to_next ?>" id="next"><?php echo $next ?></a>
	<div>
</div>
<?php include '../footer.inc.php'; ?>