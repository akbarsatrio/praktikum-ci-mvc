<div class="p-3">
	<h3>Daftar Pasien</h3>
	<table class="table tableKu">
		<thead>
			<tr>
				<th>#</th>
				<th>Kode</th>
				<th>Nama</th>
				<th>Gender</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; foreach($list_pasien as $pasien): ?>
			<tr>
			<td><?= $nomor ?></td>
			<td><?= $pasien->kode ?></td>
			<td><?= $pasien->nama ?></td>
			<td><?= $pasien->gender ?></td>
			</tr>
			<?php $nomor++; endforeach;?>
		</tbody>
	</table>
</div>