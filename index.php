<?php
include 'APCStats.php';
$stats = new APCStats;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
			Alternative PHP Cache Statistics
		</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="header">
			Alternative PHP Cache Statistics
		</div>
		<ul>
			<li>
				<span class='gray'>Total :</span> <?php echo $stats->formatBytes($stats->getTotalMemory()) ?> <span class='gray'>Used :</span> <?php echo $stats->formatBytes($stats->getUsedMemory()) ?> <span class='gray'>Available :</span> <?php echo $stats->formatBytes($stats->getAvailableMemory()) ?> <span class='right'>Memory Usage</span>
			</li>
				<?php $stats->makeBar($stats->getUsedMemory(), $stats->getTotalMemory()) ?>
		</ul>
		<div class="box">
			<ul>
				<li>
					<h3>
						&nbsp;
					</h3>
				</li>
				<li>Piece of cache
				</li>
				<li>Size of cache
				</li>
				<li>Hits
				</li>
				<li>Misses
				</li>
				<li>Request Rate
				</li>
				<li>Hit Rate
				</li>
				<li>Miss Rate
				</li>
				<li>Insert Rate
				</li>
			</ul>
		</div>
		<div class="box">
			<ul>
				<li>
					<h3>
						File Cache Information
					</h3>
				</li>
				<li>
					<?php echo $stats->getNumberOfFiles() ?>
				</li>
				<li>
					<?php echo $stats->formatBytes($stats->getSizeOfFiles()) ?>
				</li>
				<li>
					<?php echo $stats->getFileHits() ?>
				</li>
				<li>
					<?php echo $stats->getFileMisses() ?>
				</li>
				<li>
					<?php echo $stats->formatNumbers($stats->getFileRequestRate()) ?>/ sn
				</li>
				<li>
					<?php echo $stats->formatNumbers($stats->getFileHitRate()) ?>/ sn
				</li>
				<li>
					<?php echo $stats->formatNumbers($stats->getFileMissRate()) ?>/ sn
				</li>
				<li>
					<?php echo $stats->formatNumbers($stats->getFileInsertRate()) ?>/ sn
				</li>
			</ul>
		</div>
		<div class="box">
			<ul>
				<li>
					<h3>
						User Cache Information
					</h3>
				</li>
				<li>
					<?php echo $stats->getNumberOfVariables() ?>
				</li>
				<li>
					<?php echo $stats->formatBytes($stats->getSizeOfVariables()) ?>
				</li>
				<li>
					<?php echo $stats->getUserHits() ?>
				</li>
				<li>
					<?php echo $stats->getUserMisses() ?>
				</li>
				<li>
					<?php echo $stats->formatNumbers($stats->getUserRequestRate()) ?>/ sn
				</li>
				<li>
					<?php echo $stats->formatNumbers($stats->getUserHitRate()) ?>/ sn
				</li>
				<li>
					<?php echo $stats->formatNumbers($stats->getUserMissRate()) ?>/ sn
				</li>
				<li>
					<?php echo $stats->formatNumbers($stats->getUserInsertRate()) ?>/ sn
				</li>
			</ul>
		</div>
	</body>
</html>
