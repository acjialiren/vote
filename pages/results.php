<?php

$votes_obama = 0;
$votes_romney = 0;

// Open votes.txt file to count votes
$lines = file('data/votes.txt',FILE_IGNORE_NEW_LINES);
foreach($lines as $line) {
	$data = explode(',',$line);
	if($data[1] == 'obama') {
		$votes_obama++;
	} elseif($data[1] == 'romney') {
		$votes_romney++;
	}
}

$votes_total = $votes_obama + $votes_romney;

if($votes_total != 0) {
	$percent_obama = 100*$votes_obama/$votes_total;
	$percent_romney = 100 - $percent_obama;
}

?>

<div class="candidates row">
	<div class="candidate span6">
		<h3><span class="party dem badge badge-info">D</span> Barack Obama <span class="pull-right">44th President of the United States</span></h3>
		<div class="frame">
			<img src="http://i.cdn.turner.com/cnn/.e/img/3.0/election/2012/03_candidates/general/Obama_460x180.jpg" alt="Obama" />
			<p>from <a href="http://www.cnn.com/election/2012/candidates.html">cnn.com</a></p>
		</div>
	</div>

	<div class="candidate span6">
		<h3><span class="party rep badge badge-important">R</span> Mitt Romney <span class="pull-right">Former Governor of Massachusetts</span></h3>
		<div class="frame">
			<img src="http://i.cdn.turner.com/cnn/.e/img/3.0/election/2012/03_candidates/general/Romney_460x180.jpg" alt="Romney" />
			<p>from <a href="http://www.cnn.com/election/2012/candidates.html">cnn.com</a></p>
		</div>
	</div>
</div>
<div class="results">
	<h2>Live Results</h2>
	<div class="row votes">
		<div class="span2">
			<span class="candidate-name">Obama</span><span class="pull-right badge badge-inverse"><?php echo $votes_obama ?></span>
		</div>
		<div class="span9">
			<div class="progress">
				<div class="bar" style="width:<?php echo $percent_obama; ?>%"></div>
			</div>
		</div>
	</div>
	<div class="row votes">
		<div class="span2">
			<span class="candidate-name">Romney</span><span class="pull-right badge badge-inverse"><?php echo $votes_romney ?></span>
		</div>
		<div class="span9">
			<div class="progress">
				<div class="bar bar-danger" style="width:<?php echo $percent_romney; ?>%"></div>
			</div>
		</div>
	</div>
</div>