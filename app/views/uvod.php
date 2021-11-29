
    <p></p>

<div class="container">

<table id="table_id" class="display">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Název</th>
      <th scope="col">Město</th> 
      <th scope="col">Úprava</th><th scope="col">Smazat</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach ($skoly as $row) { ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['skola']; ?></td>
<td><?php echo $row['nazev']; ?></td>
<td><a href="<?= base_url('uprava/'.$row['id'])?>" class="btn btn-primary btn-sm">Upravit</a></td>
<td><a href="<?= base_url('smazat/'.$row['id'])?>" class="btn btn-danger btn-sm">Smazat</a></td>


</tr>
<?php  } ?>
</tbody>
</table>
<a href="<?= base_url('pridat_skolu') ?>" class="btn btn-info btn-sm float-end">Přidat</a>
</div>

</body>
</html>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>