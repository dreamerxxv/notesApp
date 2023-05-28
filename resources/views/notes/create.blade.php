<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Catatan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action={{ route('notes.store') }} method="post">
          @csrf
          @method('POST')
          <div class="mb-3">
            <div class="form-floating">
              <textarea name="title" class="form-control" placeholder="Judul Catatan" id="title.note"></textarea>
              <label for="title.note">Judul Catatan</label>
            </div>
          </div>
          <div class="mb-3">
            <div class="form-floating">
              <textarea name="body" class="form-control" placeholder="Catatanmu" name="body" id="body" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Catatanmu</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>