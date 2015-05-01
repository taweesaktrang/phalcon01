<table class="uk-table uk-table-hover uk-table-condensed">
	<thead>
		<th>ชื่อ</th>
		<th>นามสกุล</th>
		<th>ชื่อเล่น</th>
		<th>อีเมล์</th>
		<td></td>
	</thead>
	<?php foreach ($users as $user) { ?>
	<tr>
		<td><?php echo $user->firstname; ?></td>
		<td><?php echo $user->lastname; ?></td>
		<td><?php echo $user->name; ?></td>
		<td><?php echo $user->email; ?></td>
		<td>
			<a href="<?php echo $this->url->get('signup/editform'); ?>/<?php echo $user->id; ?>" class="uk-text-success">
				<i class="uk-icon-edit"></i> แก้ไข</a> | 
			<a href="<?php echo $this->url->get('signup/delete'); ?>/<?php echo $user->id; ?>" class="uk-text-danger">
				<i class="uk-icon-remove"></i> ลบ</a>
		</td>
	</tr>
	<?php } ?>
</table>