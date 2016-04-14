<?php defined('_JEXEC') or die('Restricted access'); ?>

<div id="sdprojects">
	<h1><?php echo $this->sdp->title ?></h1>
	<div class="sdpdetails">
		<p class="sdpstudents"><b>Students:</b><br /><?php echo $this->sdp->students ?></p>
		<p class="sdpsponsors"><b>Sponsor:</b><br /><a href="<?php echo $row->url ?>"><?php echo $this->sdp->name ?></a></p>
		<p class="sdpsemester"><b>Date:</b><br /><?php echo $this->sdp->semester ?> <?php echo $this->sdp->year ?></p>
		<p class="sdpreqs"><b>Requirements:</b><br /><?php echo $this->sdp->reqs ?></p>
		<p class="sdpproblem"><b>Problem:</b><br /><?php echo $this->sdp->problem ?></p>
		<p class="sdpsolution"><b>Solution:</b><br /><?php echo $this->sdp->solution ?></p>

		<?php if ($this->sdp->webcast == !NULL): ?> 
		<p class="sdpwebcast"><a href="<?php echo $this->sdp->webcast ?>">Watch the Webcast</a></p>
		<?php endif ?>

		<div class="sdpimg">
			<img src="<?php echo $this->sdp->graphic1 ?>">
		</div>

		<div class="sdpimg">
			<img src="<?php echo $this->sdp->graphic2 ?>">
		</div>

		<div class="sdpimg">
			<img src="<?php echo $this->sdp->team_photo ?>">
		</div>

		
	</div>
</div>

