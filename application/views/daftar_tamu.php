<?php echo $this->session->flashdata('pesan');
 ?>
<div class="card">
   <div class="card-header">
      <h3 class="card-title"><?php echo $title ?></h3>
   </div>
   <!-- /.card-header -->
   <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
         <thead>
            <tr>
               <th>Id</th>
               <th>Nama Tamu</th>
               <th>Alamat</th>
               <th>No. Telp</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
         <?php 
            $no = 1;
            foreach($tamu as $row): 
         ?>
            <tr>
               <td><?php echo $no++ ?></td>
               <td><?php echo $row->nama ?></td>
               <td><?php echo $row->alamat ?></td>
               <td><?php echo $row->no_telp ?></td>
               <td class="text-center d-flex justify-content-center">
                  <div>
                     <?php echo anchor('daftar_tamu/edit/'.$row->id_tamu, '<div class="btn btn-warning btn-sm">Edit</div>') ?>
                  </div>
                  <div class="ml-1" onclick="javascript: return confirm('Anda yakin ingin menghapus data?')">
                     <?php echo anchor('daftar_tamu/hapus/'.$row->id_tamu, '<div class="btn btn-danger btn-sm">Hapus</div>') ?>
                  </div>
               </td>
            </tr>
         <?php endforeach ?>
         </tbody>
      </table> 
   </div>   
</div>   