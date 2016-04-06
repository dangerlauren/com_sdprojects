<?php defined('_JEXEC') or die('Restricted access'); ?>
<div id="sdprojects">
	<h1><?php echo $this->sdp->title ?></h1>
	<div class="sdpdetails">
		<p class="sdpsemester"><?php echo $this->sdp->semester ?><?php echo $this->sdp->year ?></p>
		<p class="sdpstudents"><?php echo $this->sdp->students ?></p>
		<p class="sdpproblem"><?php echo $this->sdp->problem ?></p>
		<p class="sdpsolution"><?php echo $this->sdp->solution ?></p>
		<p class="sdpreqs"><?php echo $this->sdp->reqs ?></p>
		<p class="sdpgraphic1"><?php echo $this->sdp->graphic1 ?></p>
		<p class="sdpgraphic2"><?php echo $this->sdp->graphic2 ?></p>
		<p class="sdpwebcast"><?php echo $this->sdp->webcast ?></p>
		<p class="sdpteam"><?php echo $this->sdp->team_photo ?></p>
	</div>
</div>

