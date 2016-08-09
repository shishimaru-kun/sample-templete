<?php	if (!empty($breadcrumb)) : ?>
<nav class="path">
	<ul>
<?php		if (is_array($breadcrumb)) : ?>
		<li class="home" itemtype="http://data-vocabulary.org/Breadcrumb" itemscope>
			<a href="/" itemprop="url"><span itemprop="title">ED治療ナビ</span></a>
		</li>
<?php			foreach ($breadcrumb as $_i => $_breadcrumb) : ?>
<?php				if (!empty($_breadcrumb['link'])) : ?>
		<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope>
			<a href="<?php echo $_breadcrumb['link'] ; ?>" title="<?php echo $_breadcrumb['name'] ; ?>" itemprop="url"><span itemprop="title"><?php echo $_breadcrumb['name'] ; ?></span></a>
		</li>
<?php				else: ?>
		<li><em><?php echo $_breadcrumb['name']; ?></em></li>
<?php				endif; ?>
<?php			endforeach; ?>
<?php		endif; ?>
	</ul>
</nav>
<?php	endif; ?>
