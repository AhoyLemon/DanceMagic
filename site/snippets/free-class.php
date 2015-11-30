<div class="form-holder">
  <form action="<?php echo $site->url(); ?>/contactmail.php" id="FreeClassForm" class="form free-class-form" role="form" method="post">
    <div class="form-group half">
      <label for="StudentName">Student Name</label>
      <input type="text" id="StudentName" name="StudentName" required>
    </div>
    <div class="form-group half">
      <label for="StudentBirthdate">Student Birthdate</label>
      <input type="date" id="StudentBirthdate" name="StudentBirthdate" required>
    </div>
    <h3 class="form-group full">Contact Info</h3>
    <div class="form-group full">
      <label for="ContactName">Contact Name</label>
      <input type="text" id="ContactName" name="ContactName" required>
    </div>
    <div class="form-group half">
      <label for="ContactEmail">Contact Email</label>
      <input type="email" id="ContactEmail" name="ContactEmail" required>
    </div>
    <div class="form-group half">
      <label for="ContactPhone">Contact Phone #</label>
      <input type="tel" id="ContactPhone" name="ContactPhone" required>
    </div>
    <div class="form-group full">
      <label for="ContactStreetAddress">Street Address</label>
      <input type="text" id="ContactStreetAddress" name="ContactStreetAddress">
    </div>
    <div class="form-group third">
      <label for="ContactCity">City</label>
      <input type="text" id="ContactCity" name="ContactCity">
    </div>
    <div class="form-group third state">
      <label for="ContactState">State</label>
      <input type="text" id="ContactState" name="ContactState" maxlength="2">
    </div>
    <div class="form-group third zip">
      <label for="ContactZIP">ZIP</label>
      <input type="text" id="ContactZIP" name="ContactZIP" maxlength="5">
    </div>
	<div class="form-group full">
      <button type="submit" class="button">SUBMIT</button>
    </div>
  </form>
</div>