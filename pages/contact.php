<h2>Contact Us</h2>

<hr/>

<div class="col-md-8">
	<form id="contact-form">
		<table width="100%">
			<tbody>
				<tr>
					<td colspan="2">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam adipiscing sagittis mauris, eget aliquet dui malesuada ac.
						Integer tincidunt nulla orci, in rutrum lacus adipiscing sed. Aenean eu sapien tempus, lacinia erat et, faucibus lorem.
						Sed tempus dapibus diam non pellentesque. Maecenas sollicitudin leo non interdum consequat.
						<hr/>
					</td>
				</tr>
				<tr>
					<td class="align-right" width="15%"><label for="name">Name:</label></td>
					<td width="85%">
						<input type="text" name="name" id="name" maxlength="100" />
					</td>
				</tr>
				<tr>
					<td class="align-right"><label for="email">Email:</label></td>
					<td>
						<input type="email" name="email" id="email" maxlength="100" />
					</td>
				</tr>
				<tr>
					<td class="align-right"><label for="interest">Interested In:</label></td>
					<td>
						<select name="">
							<option value="Lorem">Lorem</option>
							<option value="Ipsum">Ipsum</option>
							<option value="Dolor">Dolor</option>
							<option value="Amet">Amet</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="align-right"><label for="comments">Comments:</label></td>
					<td>
						<textarea name="comments" id="comments" rows="10"></textarea>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td class="center">
						<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info"/>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>

<div class="col-md-4">
	<img src="<?php echo $base_url; ?>public/images/contact2.jpg" class="img-thumbnail" />
	<div class="clear"></div>
	<img src="<?php echo $base_url; ?>public/images/contact.jpg" class="img-thumbnail" />
</div>