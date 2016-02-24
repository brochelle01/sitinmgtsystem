<?php
	$viewWorking = view_working(); 
?>
<html>
<body>
	<div class="container">
		<div class="row col-md-12">
		<h4>View All Working Student</h4>
		<?php if(count($viewWorking) > 0): ?>	
		<hr/>
		<table border="0" class="table table-striped table-condensed table-bordered">
			<thead>
				<tr>
					<th width="60"></th>
					<th width="80"><center>Working ID</center></th>
					<th width="100"><center>Name</center></th>
					<th width="60"><center>Course</center></th>
					<th width="40"><center>Year</center></th>
					<th width="40"><center>Assigned laboratory</center></th>
					<th width="50"><center>Date</center></th>
					<th width="80"><center>Schedule</center></th>
					<th width="60"><center>Status</center></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($viewWorking as $v): ?>
				<tr>
					<td><center>
						<a href="?p=updateWorking&id=<?php echo htmlentities($v['WORKINGID']);?>">
							<i class="glyphicon glyphicon-pencil"> </i>
						</a>&nbsp;&nbsp;
						<a href="?p=deleteWorking&id=<?php echo htmlentities($v['WORKINGID']);?>&name=<?php echo htmlentities($v['WORKINGFNAME']).' '.htmlentities($v['WORKINGMNAME']).' '.htmlentities($v['WORKINGLNAME']); ?>" onclick="return confirm('Are you sure?');">
							<i class="glyphicon glyphicon-trash"> </i>
						</a>
					</center></td>
					<td><center><a href="?p=viewProfileWorking&id=<?php echo htmlentities($v['WORKINGID']); ?>">
						<?php echo htmlentities($v['WORKINGID']); ?>
					</a>
					</center></td>
					<td><center>
						<?php echo htmlentities($v['WORKINGLNAME']).' , '.htmlentities($v['WORKINGFNAME']).' '.htmlentities($v['WORKINGMNAME']); ?>
					</center></td>
					<td><center><?php echo htmlentities($v['WORKINGCOURSE']); ?></center></td>
					<td><center><?php echo htmlentities($v['WORKINGYR']); ?></center></td>
					<td><center><?php echo htmlentities($v['ASSIGNEDLAB']); ?></center></td>
					<td><center><?php echo htmlentities($v['TIME'])." - ".htmlentities($v['DAYS']) ?></center></td>
					<td><center><?php echo htmlentities($v['DATE']); ?></center></td>
					<td><center>
					<?php if($v['WORKINGSTAT'] == 1)
							echo "ACTIVE";
						else
							echo "INACTIVE";
					?>
					</center></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php else: ?>
		<div class="text-warning">You do not have working student records yet.</div>
		<?php endif; ?>
	</div>
</div>
</body>
</html>