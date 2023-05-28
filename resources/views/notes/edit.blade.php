@include('template.top')
<div class="container p-5 mt-5 ">
        
  <form action={{ route('notes.update', $note->id) }} method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <div class="form-floating">
        <input name="title" class="form-control" placeholder="Judul Catatan" id="title.note" value={{ $note->title }}>
        <label for="title.note">Judul Catatan</label>
      </div>
    </div>
    <div class="mb-3">
      <div class="form-floating">
        <textarea name="body" class="form-control" placeholder="Catatanmu" name="body" id="body" style="height: 100px">{{ $note->body }}</textarea>
        <label for="floatingTextarea2">Catatanmu</label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@include('template.bottom')