<p>
  <?php include('tambah.php') ?>
</p>

<?php
// Notifikasi
if($this->session->flashdata('sukses')) {
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<tr>
    <th>#</th>
    <th>Nama kategori</th>
    <th>Slug</th>
    <th>Urutan</th>
    <th>Action</th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($kategori as $kategori) { ?>

<tr class="odd gradeX">
    <td><?php echo $i ?></td>
    <td><?php echo $kategori->nama_kategori ?></td>
    <td><?php echo $kategori->slug_kategori ?></td>
    <td><?php echo $kategori->urutan ?></td>
    <td>
      
      <a href="<?php echo base_url('admin/kategori/edit/'.$kategori->id_kategori) ?>" 
      class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

      <?php include('delete.php'); ?>

    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>