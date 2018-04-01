<div class="container">
	<table border="1">
		<tr>
			<th>name</th>
			<th>day</th>
			<th>month</th>
      <th>year</th>
			<th colspan="2">aanpassen</th>
		</tr>

		<?php foreach ($birthdays as $birthday) {
			echo "<tr>";
//			echo "<td>" . $birthday['birthday_id'] . "</td>";
			echo "<td>" . $birthday['birthday_name'] . "</td>";
			echo "<td>" . $birthday['birthday_day'] . "</td>";
			echo "<td>" . $birthday['birthday_month'] . "</td>";
      echo "<td>" . $birthday['birthday_year'] . "</td>";
			echo "<td><a href=\"" . URL . "birthday/edit/" . $birthday['birthday_id'] . "\">Wijzigen</a></td>";
			echo "<td><a href=\"" . URL . "birthday/delete/" . $birthday['birthday_id'] . "\">Verwijderen</a></td>";
			echo "</tr>";
		}
		?>
	</table>
	<a id="a1" href="<?= URL ?>birthday/create">Nieuwe verjaardag toevoegen</a>
</div>
