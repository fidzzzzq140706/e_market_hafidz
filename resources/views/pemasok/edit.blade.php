
<div class="modal fade" id="formPemasokModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="" class="form-edit">
                @csrf
                @method('PUT')
                <div class="form-group row">
                  <label for="nama_pemasok" class="col-sm-4 col-form-label">Nama Pemasok</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_pemasok_edit" name="nama_pemasok" placeholder="Nama Pemasok">
                  </div>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
