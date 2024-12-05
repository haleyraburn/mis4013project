<h1>Event List</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Event Name</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($event = $events->fetch_assoc()) {
    ?>
        <tr>
          <td><?php echo $event['event_id']; ?></td>
          <td><?php echo $event['event_name']; ?></td>
          <td><a href="swimmers-by-event.php?id=<td><?php echo $event['event_id']; ?></td>">Swimmers</a></td>
        </tr>
      <?php
      }
      ?>
  </tbody>
</table>
