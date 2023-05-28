@include('template.top')

<div class="container bg-secondary-subtle d-flex flex-column justify-content-center item-content-start mh-100 pt-5 mt-5 min-viewport-height-100">

  <!-- Button trigger modal -->
  <div>
    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Tambah Catatan
    </button>
  </div>
<!-- Modal -->
@include('notes.create')

<div>
  @if (count($notes) == 0)
  <div class="alert alert-danger" role="alert">
    Belum ada Note
  </div>
    
  @else
  <div class="w-100 p-3 ">
    <div class="d-flex flex-row">
    @foreach ($notes as $note)
      <div class="card" style="width: 18rem; margin:5px; display:relative;">
        <div class="card-body">
          <h5 class="card-title" style="height:40px">{{ $note->title }}</h5>
          <div class="overflow-auto" style="height:160px">
            <p class="card-text">{{ $note->body }}</p>
          </div>
          <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#aditional{{ $note->id }}">
            Catatan Tambahan
          </button>
          @include('notes.aditionalnote')
          <div class="d-flex justify-content-between">
            <a class="btn btn-primary mr-2" href={{ route('notes.edit', $note->id) }}>edit</a>
            <form action={{ route('notes.destroy', $note->id) }}>
              @csrf
              @method("DELETE")
              <button type="submit" class="btn btn-danger ml-2" >hapus</button>
            </form>
          </div>
        </div>

      </div>
    @endforeach
    </div>
  </div>
  @endif
</div>

</div>

@include('template.bottom')
