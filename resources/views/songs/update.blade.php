{{-- resources/views/pastas/update.blade.php --}}

<form action="{{ route('songs.update') }}" method="POST">
    @method('PUT') @csrf

    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ song->title }}" />

    <label for="album" class="form-label">Album</label>
    <input type="text" class="form-control" id="album" name="album" value="{{ song->album }}" />

    <label for="author" class="form-label">Author</label>
    <input type="text" class="form-control" id="author" name="author" value="{{ song->author }}" />

    <label for="editor" class="form-label">Editor</label>
    <input type="text" class="form-control" id="editor" name="editor" value="{{ song->editor }}" />

    <label for="length" class="form-label">Length</label>
    <input type="text" class="form-control" id="length" name="length" value="{{ song->length }}" />

    <label for="poster" class="form-label">Poster</label>
    <input type="text" class="form-control" id="poster" name="poster" value="{{ song->poster }}" />

    <label for="release_date" class="form-label">Release Date</label>
    <input type="text" class="form-control" id="release_date" name="release_date" value="{{ song->release_date }}" />

    <label for="cover" class="form-label">Cover</label>
    <select class="form-select" id="cover" name="cover" value="{{ song->cover }}">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
