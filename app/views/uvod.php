

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Název</th>
      <th scope="col">Město</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach ($skoly as $row) { ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['skola']; ?></td>
<td><?php echo $row['nazev']; ?></td>

</tr>
<?php  } ?>
</tbody>
</table>
</div>
</body>
</html>