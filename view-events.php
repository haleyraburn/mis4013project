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
          <td>
            <form mehtod="post" action="swimmers-by-event.php">
              <input type="hidden" name="id" value="<?php echo $event['event_id']; ?>">
              <button type="submit" class="btn btn-primary">Swimmers</button>
            </form>
          </td>
        </tr>
      <?php
      }
      ?>
  </tbody>
</table>
