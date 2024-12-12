

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newSwimmerModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
  </svg>
</button>


<div class="modal fade" id="newSwimmerModal" tabindex="-1" aria-labelledby="newSwimmerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newSwimmerModalLabel">New Swimmer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method ="post" action="">
          <div class="mb-3">
            <label for="sName" class="form-label">Name</label>
            <input type="text" class="form-control" id="sName" name="sName">
          </div>
          <div class="mb-3">
            <label for="sAge" class="form-label">Age</label>
            <input type="text" class="form-control" id="sAge" name="sAge">
          </div>
          <div class="mb-3">
            <label for="sGender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="sGender" name="sGender">
          </div>
          <button type="submit" class="btn btn-primary">Add Swimmer</button>
        </form>
      </div>
    </div>
  </div>
</div>
