
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
<td><?php echo $row['id']; ?>
<div class="filter"></div>
</td>
<td><?php echo $row['obor']; ?>
<div class="filter"></div>
</td>
<td><?php echo $row['skola']; ?>
<div class="filter"></div>
</td>
<td><?php echo $row['pocet']; ?>
<div class="filter"></div>
</td>
<td><?php echo $row['rok']; ?>
<div class="filter"></div>
</td>

</tr>
<?php  } ?>
</tbody>
</table>
</div>
</body>
</html>
