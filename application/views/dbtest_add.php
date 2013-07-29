<h2>Create a news item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('test1/dbtest_add') ?>

  <label for="text">Text</label>
  <textarea name="text"></textarea><br />
  
  <input type="submit" name="submit" value="添加" /> 

</form>