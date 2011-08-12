<!-- File: /app/views/posts/index.ctp -->

<h1>Add Post</h1>
<?php
echo $this->Form->create('Post', array('action' => 'add'));
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Post');
?>

<h1>Posts</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Text</th>
	</tr>

	<!-- Here is where we loop through our $posts array, printing out post info -->

	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td>
			<?php echo $post['Post']['body']; ?>
		</td>
	</tr>
    <?php endforeach; ?>

</table>

