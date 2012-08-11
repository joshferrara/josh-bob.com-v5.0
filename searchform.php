<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
	<div>
		<label class="hidden" for="s">Search for:</label>
		<input onblur="addInput(this);" onfocus="clearInput(this);" type="text" value="Enter Keywords" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="Search" />
	</div>
</form>