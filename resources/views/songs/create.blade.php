<form action="{{ route('songs.store') }}" method="POST">
    @csrf

    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" />

    <label for="album" class="form-label">Album</label>
    <input type="text" class="form-control" id="album" name="album" />

    <label for="author" class="form-label">Author</label>
    <input type="text" class="form-control" id="author" name="author" />

    <label for="editor" class="form-label">Editor</label>
    <input type="text" class="form-control" id="editor" name="editor" />

    <label for="length" class="form-label">Length</label>
    <input type="text" class="form-control" id="length" name="length" />

    <label for="poster" class="form-label">Poster</label>
    <input type="text" class="form-control" id="poster" name="poster" />

    <label for="release_date" class="form-label">Release Date</label>
    <input type="text" class="form-control" id="release_date" name="release_date" />

    {{-- <label for="cover" class="form-label">Cover</label>
    <select class="form-select" id="cover" name="cover">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select> --}}

    <label for="cover" class="form-label">Cover:
        <input type="checkbox" name="cover" value="1"> Yes
        <input type="checkbox" name="cover" value="0"> No
    </label>


    <button type="submit" class="btn btn-primary">Save</button>
</form>
