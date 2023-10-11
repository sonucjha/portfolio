<template>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Introduction</h5>

        <!-- Vertical Form -->
        <form class="row g-3">
          <div class="col-12">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" />
          </div>
          <div class="col-12">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" id="position" />
          </div>
          <div class="col-12">
            <label for="Facebook" class="form-label">Facebook <i class="bi bi-facebook"></i></label>
            <input type="text" class="form-control" id="facebook" />
          </div>
          <div class="col-12">
            <label for="twitter" class="form-label">Twitter <i class="bi bi-twitter"></i></label>
            <input type="text" class="form-control" id="twitter" />
          </div>
          <div class="col-12">
            <label for="instagram" class="form-label">Instagram <i class="bi bi-instagram"></i></label>
            <input type="text" class="form-control" id="instagram" />
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </form>
        <!-- Vertical Form -->
      </div>
    </div>
  </div>
</template>
