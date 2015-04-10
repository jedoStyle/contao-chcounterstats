<?php if (!$this->invisible): ?>

<div class="<?php echo $this->class; ?> ce_table listing block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>

<?php if ($this->headline): ?>
	<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
<?php endif; ?>

<?php
// *********** BEGIN: CHCOUNTER STATS MODULE ***********
if ( file_exists($this->chcounter_path.'/counter.php') ) {

	$chCounter_template = $this->show;

	include($this->chcounter_path.'/counter.php');
} else {
	echo $this->error;

}
// *********** END: CHCOUNTER STATS MODULE ***********

?>


</div>
<?php endif; ?>