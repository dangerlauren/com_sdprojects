<?php defined('_JEXEC') or die('Restricted access'); ?>
<h1>Senior Design Projects</h1>

<div id="sdprojects">

<div class="sdprojectslist">

<?php 
foreach($this->items as $row):
?>

<div class="sdp">
	<p class="sdp-id"><?php echo $row->id ?></p>
	<p class="sdp-title"><?php echo $row->title ?></p>
	<p class="sdp-year"><?php echo $row->year ?></p>
</div>
<?php endforeach; ?>
</div>
<div class="pagination">
<p class="counter"><?php echo $this->pagination->getPagesCounter(); ?></p>
<?php echo $this->pagination->getPagesLinks(); ?>
</div>
</div>

