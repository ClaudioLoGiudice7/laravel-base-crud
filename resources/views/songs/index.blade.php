@extends('layouts.app')

<div class="container my-4">
    <h1 class="my-4">Lista delle canzoni</h1>

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
            </tr>
        </thead>
        <tbody>
            @foreach ($songs as $song)
                <tr>
                    <th scope="row">{{ $song->id }}</th>
                    <td>{{ $song->title }}</td>
                    <td>{{ $song->album }}</td>
                    <td>{{ $song->author }}</td>
                    <td>{{ $song->editor }}</td>
                    <td>{{ $song->length }}</td>
                    <td>{{ $song->poster }}</td>
                    <td>{{ $song->release_date }}</td>
                    <td>{{ $song->cover }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
