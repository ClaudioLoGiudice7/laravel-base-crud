<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<div class="container">
    <form action="{{ route('songs.store') }}" method="POST">
        @csrf

        <label for="title" class="form-label mt-3">Title</label>
        <input type="text" class="form-control" id="title" name="title" />

        <label for="album" class="form-label mt-3">Album</label>
        <input type="text" class="form-control" id="album" name="album" />

        <label for="author" class="form-label mt-3">Author</label>
        <input type="text" class="form-control" id="author" name="author" />

        <label for="editor" class="form-label mt-3">Editor</label>
        <input type="text" class="form-control" id="editor" name="editor" />

        <label for="length" class="form-label mt-3">Length</label>
        <input type="text" class="form-control" id="length" name="length" />

        <label for="poster" class="form-label mt-3">Poster</label>
        <input type="text" class="form-control" id="poster" name="poster" />

        <label for="release_date" class="form-label mt-3">Release Date</label>
        <input type="text" class="form-control" id="release_date" name="release_date" />

        <label for="cover" class="form-label mt-3">Cover:
            <input type="checkbox" name="cover" value="1"> Yes
            <input type="checkbox" name="cover" value="0"> No
        </label>

        <br>

        <button type="submit" class="btn btn-outline-success mt-2">Save</button>
    </form>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <h4>Correggi i seguenti errori per proseguire: </h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
