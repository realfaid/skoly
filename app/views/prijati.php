
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Obor</th>
      <th scope="col">Škola</th>
      <th scope="col">Počet</th>
      <th scope="col">Rok</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach ($pocet_prijatych as $row) { ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['obor']; ?></td>
<td><?php echo $row['skola']; ?></td>
<td><?php echo $row['pocet']; ?></td>
<td><?php echo $row['rok']; ?></td>

</tr>
<?php  } ?>
</tbody>
</table>
</div>
</body>
</html>