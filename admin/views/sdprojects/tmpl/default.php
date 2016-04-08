<?php defined('_JEXEC') or die('Restricted access'); ?>

<form action="index.php?option=com_sdprojects&view=sdprojects" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="1%"><?php echo JText::_('#'); ?></th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>
			<th width="15%">
				<?php echo JHtml::_('grid.sort', 'Year', 'year', $this->sortDirection, $this->sortColumn); ?>
			</th>
			<th width="40%">
				<?php echo JHtml::_('grid.sort', 'Title', 'title', $this->sortDirection, $this->sortColumn); ?>
			</th>
			<th width="40%">
				<?php echo JHtml::_('grid.sort', 'Company', 'coname', $this->sortDirection, $this->sortColumn); ?>
			</th>
			<th width="2%">
				<?php echo JHtml::_('grid.sort', 'ID', 'id', $this->sortDirection, $this->sortColumn); ?>
			</th>
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) : 
				$link = JRoute::_('index.php?option=com_sdprojects&task=sdp.edit&id=' . $row->id);
				?>
 
					<tr>
						<td><?php echo $this->pagination->getRowOffset($i); ?></td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
								<?php echo $row->year; ?>
						</td>
						<td align="center">
								<?php echo $row->title; ?></a>
						</td>
						<td align="center">
								<?php echo $row->coname; ?></a>
						</td>
						<td align="center">
							<?php echo $row->id; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="boxchecked" value="0"/>
	<input type="hidden" name="filter_order" value="<?php echo $this->sortColumn; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->sortDirection; ?>" />
	<?php echo JHtml::_('form.token'); ?>
</form>