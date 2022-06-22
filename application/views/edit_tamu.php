<div class="card card-primary">
	<!-- form start -->
   <?php foreach($tamu as $row){ ?>
      <form action="<?php echo base_url('daftar_tamu/update'); ?>" method="POST">
         <div class="card-body">
            <div class="form-group">
               <label for="exampleInputEmail1">Id</label>
               <input
                  type="text"
                  name="id_tamu"
                  class="form-control"
                  id="InputNama"
                  value="<?php echo $row->id_tamu ?>"
                  readonly
               />
               <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1">Nama</label>
               <input
                  type="text"
                  name="nama"
                  class="form-control"
                  id="InputNama"
                  value="<?php echo $row->nama ?>"
               />
               <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
               <label>Alamat</label>
               <textarea name="alamat" class="form-control" id="InputAlamat" rows="3"><?php echo $row->alamat ?></textarea>
               <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">No. Telepon</label>
               <input
                  type="text"
                  name="no_telp"
                  class="form-control"
                  id="InputTelepon"
                  value="<?php echo $row->no_telp ?>"
               />
               <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
            </div>
         </div>
         <!-- /.card-body -->

         <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
         </div>
      </form>
   <?php } ?>
</div>