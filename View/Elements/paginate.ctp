<nav class="pagination">
<?php	if ($this->Paginator->numbers()) : ?>
	<div class="pagination__body">
	<?php // first
		$options = array(
			'tag' => 'span',
			'class' => first,
		);
		if($this->Paginator->params()["page"] != $start && $this->Paginator->params()["page"] > 4){
			echo $this->Common->pager_link_replace($metas['slug'], $this->Paginator->first("最初へ", $options));
		}
	?>
	<?php // prev
		$options = array(
			'tag' => 'span',
			'class' => prev,
		);
		if(!empty($this->Paginator->params()["prevPage"]) && $this->Paginator->params()["page"] > 4)
			echo $this->Common->pager_link_replace($metas['slug'], $this->Paginator->prev("前へ", $options));
	?>
	<?php // numbers
		$options = array(
			'separator' => false,
			'modulus' => 6,
			'tag' => 'span',
			'class' => false,
		);
		echo $this->Common->pager_link_replace($metas['slug'], $this->Paginator->numbers($options));
	?>
	<?php // next
		$options = array(
			'tag' => 'span',
			'class' => next,
		);
		if(!empty($this->Paginator->params()["nextPage"]))
			echo $this->Common->pager_link_replace($metas['slug'], $this->Paginator->next("次へ", $options));
	?>
	<?php // last
		$options = array(
			'tag' => 'span',
			'class' => last,
		);
		if($this->Paginator->params()["page"] != $end){
			echo $this->Common->pager_link_replace($metas['slug'], $this->Paginator->last("最後へ", $options));
		}
	?>
	</div>
<?php	endif; ?>
	<p class="pagination__count"><?php echo $this->Paginator->counter(array("format" => "全 %count% 件中 %start%～%end% 件")); ?></p>
</nav>
