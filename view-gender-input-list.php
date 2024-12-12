<select class="form-select" id="sGender" name="sGender">
<?php
while ($genderItem = $genderList->fetch_assoc()) {
?>
  <option value="<?php echo $genderItem['swimmer_gender']; ?>"><?php echo $genderItem['swimmer_gender']; ?></option>
<?php
}
?>
</select>
