<div class='container'>
		<legend>Data Jurusan : </legend>
	<table class='table table-striped' width='100%'>
		<tr>
			<th width='20%' align='center'>Kode Jurusan</th>
			<th width='60%' align='center'>Nama Jurusan</th>
			<th width='20%' colspan='2'></th>
		</tr>
		<tr>
			<?php foreach($data as $row): ?>
			<td align='center'><?php echo $row->kd_jurusan; ?></td>
			<td align='center'><?php echo $row->nama_jurusan; ?></td>
			<td align='center'><a href='<?php base_url(); ?>jurusan/edit/
				<?php echo $row->kd_jurusan; ?>' class='btn btn-primary'><i class='icon icon-retweet'></i> Edit </a>
			<a href='<?php base_url(); ?>jurusan/delete/
				<?php echo $row->kd_jurusan; ?>' class='btn btn-success'><i class='icon icon-ok'></i> Delete </a></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>