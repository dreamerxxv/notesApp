<div class="modal fade" id="aditional{{ $note->id }}" tabindex="-1" aria-labelledby="aditional{{ $note->id }}label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="aditional{{ $note->id }}label">Tambah Catatan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action={{ route('aditional.note.store', $note->id) }} method="post">
          @csrf
          @method('POST')
          <div class="mb-3">
            <div class="form-floating">
              <textarea name="note" class="form-control" placeholder="Judul Catatan" id="title.note"></textarea>
              <label for="title.note">Catatan Tambahan</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <ul class="list-group mt-3 mb-3">
        @foreach ($note->aditionalNote as $item)
          <li class="list-group-item">{{ $item->note }}</li>
        @endforeach
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>