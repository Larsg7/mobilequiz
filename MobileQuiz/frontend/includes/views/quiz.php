<?php render('_header',array('title'=>$title))?>


	<form action="index.php" method="post" id="form1">
		<fieldset>
			<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="c">
		        <?php render($questions) ?>
		        <li class="question">
		        	<input type="hidden" id="round_id" name="round_id" value="<?php echo $_GET[round_id];?>" />
		        	<input type="hidden" id="quiz_id" name="quiz_id" value="<?php echo $_GET[quiz_id];?>" />
					<button type="submit" data-theme="b" name="submit" value="submitAnswers">Submit</button>
				</li>
			</ul>
		</fieldset>
	</form>


<?php render('_footer')?>