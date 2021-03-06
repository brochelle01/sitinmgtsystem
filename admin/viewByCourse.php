<?php
	$course = trim($_GET['course']);
	$viewByCourse = view_byCourse($course); 
?>
<html>
<body>
	<div class="container">
		<div class="row col-md-12">
		<h4>View All Student</h4>
		<?php if($viewByCourse): ?>	
		<hr/>
		<div class="text-info"><?php echo htmlentities(count($viewByCourse));?>&nbsp;result(s)...</div>
		<table border="0" class="table table-striped table-condensed table-bordered">
			<thead>
				<tr>
					<th width="80"><center>Course</center></th>
					<th width="80"><center>Student ID</center></th>
					<th width="80"><center>Name</center></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($viewByCourse as $v): ?>
				<tr>
					<td><center>
						<?php echo htmlentities($v['STUDCOURSE']); ?>
					</center></td>
					<td><center>
						<a href="?p=viewProfileStudent&id=<?php echo htmlentities($v['STUDID']);?>">
							<?php echo htmlentities($v['STUDID']); ?>
						</a>
					</center></td>
					<td><center>
						<?php echo htmlentities($v['STUDLNAME']).' ,'.htmlentities($v['STUDMNAME']).' '.htmlentities($v['STUDFNAME']); ?>
					</center></td>
				</tr>
				
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php else: ?>
		<div class="text-warning">You do not have student record yet.</div>
		<?php endif; ?>
	</div>
</div>
</body>
</html>