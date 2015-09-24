<div class="genresMovies form">
<?php echo $this->Form->create('GenresMovie'); ?>
	<fieldset>
		<legend><?php echo __('Edit Genres Movie'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('genre_id');
		echo $this->Form->input('movie_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GenresMovie.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('GenresMovie.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Genres Movies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
