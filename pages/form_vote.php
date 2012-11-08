<form class="form-horizontal" action="actions/vote.php" method="post">
	
	<div class="control-group">
		<label class="control-label" for="ssn">SSN</label>
		<div class="controls">
			<input type="password" name="ssn" placeholder="social security number" />
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="vote">Vote</label>
		<div class="controls inline">
			<label><input type="radio" name="vote" value="obama" /> Obama/Biden</label>
			<label><input type="radio" name="vote" value="romney" /> Romney/Ryan</label>
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-primary">Vote</button>
		<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
	</div>
</form>