{{result}}
<?php foreach ($results as $post): ?>
	<div class="post">
		<div class="post-date pull-right"><?php echo $post['date']; ?></div>
		<h1 class="post-title"><?php echo $post['title']; ?></h1>
		<div class="post-body"><?php echo Markdown::parse($post['body']); ?></div>
		
	</div>
<?php endforeach; ?>
<?php echo Html::anchor('welcome/add', '新規投稿', array('class' => 'btn btn-primary')); ?>