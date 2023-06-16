<div>
    <div>
        <div>
            <h1>modificarLibro</h1>
        </div>
        <div>
            
        </div>
    </div>
    <div>
        <div>
            <table>
                <form action="{{route('books.update', $book->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    isbn<input type="text" name="isbn"  value="{{$book->isbn}}"><br>
                    
                    titulo<input type="text" name="title"  value="{{$book->title}}"><br>
                    autor<input type="text" name="author"  value="{{$book->author}}"><br>
                    precio<input type="number" name="price"  value="{{$book->price}}"><br>
                    description<input type="text" name="description"  value="{{$book->description}}"><br>
                    fecha publicacion<input type="date" name="published_date"  value="{{$book->published_date}}"><br>
                    <button type="submit">Guardar</button><br>
                </form>
            </table>
        </div>
    </div>
</div>