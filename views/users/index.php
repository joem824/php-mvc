<section class="content-header">
<h1>User Lists</h1>
</section>

<section class="content">
	<div class="box box-default">
		<div class="box-body">
			<table class="table no-border">
				<thead>
					<tr>
						<th>Employee #</th>
						<th>Employee Name</th>
						<th>Department</th>
						<th>Job Code</th>
						<th>Job Description</th>
					</tr>
				</thead>
				<tbody>
					<?php  foreach ($users as $user) { ?>
						<tr>
							<td><?php echo $user->num ?></td>
							<td><?php echo $user->name ?></td>
							<td><?php echo $user->dept ?></td>
							<td><?php echo $user->code ?></td>
							<td><?php echo $user->desc ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</section>