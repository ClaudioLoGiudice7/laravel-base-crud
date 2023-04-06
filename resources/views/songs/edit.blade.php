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

<input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
    value="{{ old('title') ?? $song->title }}">
@error('title')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

<input type="text" class="form-control @error('album') is-invalid @enderror" id="album" name="album"
    value="{{ old('album') ?? $song->album }}">
@error('album')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

<input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author"
    value="{{ old('author') ?? $song->author }}">
@error('author')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

<input type="text" class="form-control @error('editor') is-invalid @enderror" id="editor" name="editor"
    value="{{ old('editor') ?? $song->editor }}">
@error('editor')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

<input type="text" class="form-control @error('length') is-invalid @enderror" id="length" name="length"
    value="{{ old('length') ?? $song->length }}">
@error('length')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

<input type="text" class="form-control @error('poster') is-invalid @enderror" id="poster" name="poster"
    value="{{ old('poster') ?? $song->poster }}">
@error('poster')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

<input type="text" class="form-control @error('release_date') is-invalid @enderror" id="release_date"
    name="release_date" value="{{ old('release_date') ?? $song->release_date }}">
@error('release_date')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

<input type="text" class="form-control @error('cover') is-invalid @enderror" id="cover" name="cover"
    value="{{ old('cover') ?? $song->cover }}">
@error('cover')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
