<div>
    <div>
        <div>
            <h1>Lista de libros</h1>
        </div>
        <div>
        </div>
    </div>
    <a href="{{ route('books.create') }}"><button>NUEVO LIBRO</button></a>
    <div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Fecha de Publicación</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->published_date }}</td>
                            <td><a href="{{ route('books.show', $book->isbn) }}">detalle</a></td>
                            <td><a href="{{ route('books.edit', $book->id) }}">editar</a></td>
                            <td>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
