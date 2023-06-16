<div>
    <div>
        <div>
            <h1>Detalle libro</h1>
        </div>
        <div>
            
        </div>
    </div>
    <div>
        <div>
            
            <p>Titulo: {{$book->title}}</p>
            {{-- tambien quiero author, price, published_date--}}
            <p>Autor: {{$book->author}}</p>
            <p>Precio: {{$book->price}}</p>
            <p>Fecha de publicación: {{$book->published_date}}</p>
            <p>ISBN: {{$book->isbn}}</p>

        </div>
    </div>
</div>