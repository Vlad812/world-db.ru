
<? for ($i = 1; $i <= $total_pages; $i++): ?>

	<? if ($i == $current_page): ?>
		<li class="active"><a><strong><?= $i ?></strong></a></li>
	<? else: ?>
		<li><a><?= $i ?></a></li>
	<? endif ?>

<? endfor ?>


<!-- .pagination -->