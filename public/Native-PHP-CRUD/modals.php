<!-- Modal Update -->
<div class="modal fade" id="modalUpdate<?php echo $data['id']?>" data-bs-backdrop="static" data-bs-keyboard="false"
  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #303952">
        <h5 class="modal-title text-white text-uppercase" id="staticBackdropLabel">Modal Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="POST">
          <input type="hidden" name="update_id" value="<?= $data['id']?>">

          <div class="form-group mb-3">
            <label for="" class="form-label">Fullname:</label>
            <input type="text" name="update_fname" value="<?= $data['info_fname']?>" class="form-control inputField"
              id="fullname">
          </div>

          <div class="form-group mb-3">
            <label for="" class="form-label">Address:</label>
            <input type="text" name="update_address" value="<?= $data['info_address']?>" class="form-control inputField"
              id="position">
          </div>

          <div class="form-group mb-3">
            <label for="" class="form-label">Email:</label>
            <input type="email" name="update_email" value="<?= $data['info_email']?>" class="form-control inputField"
              id="position">
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-info text-dark" data-bs-dismiss="modal">
          <i class="fas fa-times"></i> Cancel
        </button>
        <button type="submit" name="btn-update-save" class="btn btn-sm btn-success">
          <i class="fas fa-check"></i> Update
        </button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="modalDelete<?php echo $data['id']?>" data-bs-backdrop="static" data-bs-keyboard="false"
  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #303952">
        <h5 class="modal-title text-white text-uppercase" id="staticBackdropLabel">Modal Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <p class="h3">Are you Sure...?</p>

      </div>
      <div class="modal-footer">
        <form action="index.php" method="post">
          <input type="hidden" name="deleteID" value="<?php echo $data['id']?>">
          <button type="button" class="btn btn-sm btn-info text-dark" data-bs-dismiss="modal">
            <i class="fas fa-times"></i> Cancel
          </button>

          <button type="submit" name="btn-delete-info" class="btn btn-sm btn-danger">
            <i class="fas fa-trash"></i> Delete
          </button>
        </form>

      </div>
    </div>
  </div>
</div>