		<div class="container">
			<div class="table">
				<form action="add.php" method="post">
					<div class="row"> 
						<div class="key">
							<label for="long_url">Длинная ссылка:</label>
						</div>
						<div class="value">
							<input required type="text" id="long_url" name="long_url" placeholder="Ссылка которую хотите сократить ...">
						</div>
					</div>
					<div class="row"> 
						<div class="key">
							<label for="short_url">Короткая ссылка:</label>
						</div>
						<div class="value">
							<input type="text" id="short_url" name="short_url" placeholder="Желаемое короткое имя ...">
						</div>
					</div>
					<div class="row">
						<input type="submit" value="Добавить">
					</div>
				</form>
			</div>
		</div>
		