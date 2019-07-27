				<div class="container">
					<div class="table">
						<form action="delete.php" id="cform" method="post">											
						<div class="row">
							<div class="key">
								<label for="question">Вы действительно хотите удалить <br>
									<?php 
									$rb = $db->read_query("SELECT * FROM  `shorturls` WHERE  `id` LIKE  '".$_GET["rel"]."'");
									echo($rb[0]["short_view"]);	
									?></label>
							</div>
							<div class="value">
								<select name="question" id="question">
									<option value="no">Нет</option>
									<option value="yes">Да</option>
								</select>
								<input type="text" id="id" name="id" value="<?php echo($_GET["rel"])?>" hidden="true">
							</div>				
						</div>
						<div class="row">
								<input type="submit" value="Отправить">
						</div>
					</form>
					</div>
				</div>
				<link rel="stylesheet" href="inc/css/form_style.css">