<div class="card card-primary">
	<!-- form start -->
	<form action="<?php echo base_url('input_tamu/input_aksi'); ?>" method="POST">
		<div class="card-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Nama</label>
				<input
					type="text"
					name="nama"
					class="form-control"
					id="InputNama"
					placeholder="Enter email"
				/>
				<?php echo form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<textarea name="alamat" class="form-control" id="InputAlamat" rows="3" placeholder="Alamat"></textarea>
				<?php echo form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">No. Telepon</label>
				<input
					type="text"
					name="no_telp"
					class="form-control"
					id="InputTelepon"
					placeholder="No. Telepon"
				/>
				<?php echo form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
			</div>
		</div>
		<!-- /.card-body -->

		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
</div>
