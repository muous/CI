<h2>Create a news item</h2>

<?=validation_errors()?>
<?=form_open('news/create')?>

	<label for="title">Title</label>
	<input type="input" name="title" /><br />
	
	<label for="text">Text</label>
	<textarea name="text" cols="30" rows="10"></textarea><br />
	
	<input type="submit" name="submit" value="Create news item" />

</form>