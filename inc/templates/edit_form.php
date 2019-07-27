		<div class="container">
			<div class="table">
				<form action="edit.php" method="post">
					<div class="row"> 
						<div class="key">
							<label for="long_url">Длинная ссылка:</label>
						</div>
						<div class="value">
							<input required type="text" id="long_url" name="long_url" value="<?php echo($long_url) ?>" placeholder="Ссылка которую хотите сократить ...">
						</div>
					</div>
					<div class="row"> 
						<div class="key">
							<label for="short_url">Короткая ссылка:</label>
						</div>
						<div class="value">
							<input type="text" id="short_url" name="short_url" value="<?php echo($short_url) ?>" placeholder="Желаемое короткое имя ...">
							<input type="text" id="id" name="id" value="<?php echo($id) ?>" hidden>

						</div>
					</div>
					<div class="row">
						<input type="submit" value="Добавить">
					</div>
				</form>
			</div>
		</div>
		