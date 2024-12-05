<h1>24-25 Meet Schedule</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>IDth>
      <th>Meet Name</th>
      <th>Location</th>
      <th>Day & Time</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($swimmer = $swimmers->fetch_assoc()) {
    ?>
        <tr>
          <td><?php echo $swimmer['meet_id']; ?></td>
          <td><?php echo $swimmer['meet_name']; ?></td>
          <td><?php echo $swimmer['meet_location']; ?></td>
          <td><?php echo $swimmer['meet_daytime']; ?></td>
        </tr>
      <?php
      }
      ?>
  </tbody>
</table>
