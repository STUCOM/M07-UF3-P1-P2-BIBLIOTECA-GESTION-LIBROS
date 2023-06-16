<div>
    <div>
        <div>
            <h1>Lista de libros</h1>
        </div>
        <div>
            
        </div>
    </div>
    <div>
        <div>
            <table>
                <form action="{{route('books.store')}}" method="POST">
                    @csrf
                    titulo<input type="text" name="title"><br>
                    autor<input type="text" name="author"><br>
                    precio<input type="number" name="price"><br>
                    description<input type="text" name="description"><br>
                    fecha publicacion<input type="date" name="published_date"><br>
                    <button type="submit">Guardar</button><br>
                </form>
            </table>
        </div>
    </div>
</div>