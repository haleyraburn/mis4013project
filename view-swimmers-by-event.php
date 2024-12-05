<h1>Swimmers in this Event</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Age</th>
      <th>Gender</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($swimmer = $swimmers->fetch_assoc()) {
    ?>
        <tr>
          <td><?php echo $swimmer['swimmer_id']; ?></td>
          <td><?php echo $swimmer['swimmer_name']; ?></td>
          <td><?php echo $swimmer['swimmer_age']; ?></td>
          <td><?php echo $swimmer['swimmer_gender']; ?></td>
        </tr>
      <?php
      }
      ?>
  </tbody>
</table>
