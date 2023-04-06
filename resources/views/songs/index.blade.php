@extends('layouts.app')

<body>
    <div class="container my-4">
        <h1 class="my-4">Lista delle canzoni</h1>

        <a href="{{ route('songs.create') }}" role="button" class="btn btn-primary mb-4">Create a song!</a>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Album</th>
                    <th scope="col">Author</th>
                    <th scope="col">Editor</th>
                    <th scope="col">Length</th>
                    <th scope="col">Poster</th>
                    <th scope="col">Release Date</th>
                    <th scope="col">Cover</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($songs as $song)
                    <tr>
                        <th scope="row">{{ $song->id }}</th>
                        <td> {{ $song->title }}</td>
                        <td> {{ $song->album }}</td>
                        <td> {{ $song->author }}</td>
                        <td> {{ $song->editor }}</td>
                        <td> {{ $song->length }}</td>
                        <td> {{ $song->poster }}</td>
                        <td> {{ $song->release_date }}</td>
                        <td> {{ $song->cover }}</td>

                        <td>
                            <a href="{{ route('songs.show', $song) }}">
                                Details
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('songs.edit', $song) }}">
                                Edit
                            </a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#delete-modal-{{ $song->id }}">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @foreach ($songs as $song)
        <!-- Modal -->
        <div class="modal fade" id="delete-modal-{{ $song->id }}" tabindex="-1"
            aria-labelledby="delete-modal-{{ $song->id }}-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="delete-modal-{{ $song->id }}-label">
                            Confirm the action
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body text-start">
                        Are you sure you want to delete the song{{ $song->name }}? <br>
                        The operation is not reversible
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                        <form action="{{ route('songs.destroy', $song) }}" method="POST" class="">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</body>
