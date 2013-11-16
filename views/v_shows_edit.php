<form method='POST' action='/shows/p_edit/<?=$show['show_id']?>'>

   <label for='show_date'>Show date (YYYY-MM-DD):</label><br>
	<textarea name='show_date' id='show_date'><?=$show['show_date']?></textarea>
	<br><br>
	<label for='host_dj_name'>Host DJ:</label><br>
	<textarea name='host_dj_name' id='host_dj_name'><?=$show['host_dj_name']?></textarea>
	<br><br>
	<label for='guest_dj_name'>Guest DJ:</label><br>
	<textarea name='guest_dj_name' id='guest_dj_name'><?=$show['guest_dj_home']?></textarea>
	<br><br>
   <label for='station_id'>Station (ie: glitch.fm):</label><br>
	<textarea name='station_id' id='station_id'><?=$show['station_id']?></textarea>
	<br><br>
   <label for='show_url'>Link to show in the cloud:</label><br>
	<textarea name='show_url' id='show_url'><?=$show['show_url']?></textarea>
	<br><br>
    <br><br>
    <input type='submit' value='Edit show'>

</form> 