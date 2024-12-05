<h1>24-25 Meet Schedule</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Meet Name</th>
      <th>Location</th>
      <th>Day & Time</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($meet = $meets->fetch_assoc()) {
    ?>
        <tr>
          <td><?php echo $meet['meet_id']; ?></td>
          <td><?php echo $meet['meet_name']; ?></td>
          <td><?php echo $meet['meet_location']; ?></td>
          <td><?php echo $meet['meet_daytime']; ?></td>
        </tr>
      <?php
      }
      ?>
  </tbody>
</table>
