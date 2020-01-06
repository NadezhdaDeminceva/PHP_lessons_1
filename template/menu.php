
<div class="clearfix">
	<ul class="<?=$cssClass?>">
		<?php 
		foreach ($menu as $menuItem) {?>
	    <li <?=$menuItem['path'] == parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ? 'class="active"' : ''?>><a href="<?=$menuItem['path']?>"><?=cropString($menuItem['title'], 12)?></a></li>
	 	<?}?>
	</ul>
</div>	




