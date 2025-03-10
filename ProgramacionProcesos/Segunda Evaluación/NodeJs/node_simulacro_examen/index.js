const express = require('express')
const cors = require('cors')
const fs = require('fs'); //Este import es filesystem, para poder guardar el libro
const books = require('./books.json');
const { measureMemory } = require('vm');

app = express()
//Recordar que express.json me parsea el Json a req.body como objeto
app.use(express.json())
app.use(cors())

// Funciona
app.post('/books', (req, res) => {
    // Recojo el array de todos los libros en un objeto
    const books = JSON.parse(fs.readFileSync('./books.json', 'utf-8'));

    // Esto debería recoger el libro en formatoJson
    // que paso en la operación POST con el espacio y el JSON
    const newBook = req.body;

    // Mete el libro en el aray del Json de los libros
    books.push(newBook);

    // Uso filesystem para escribir en el archivo local
    fs.writeFileSync('./books.json', JSON.stringify(books, null, 2));

    res.status(201).json({
        message: 'Libro enviado',
        book: newBook
    });
});

//Funciona
const getJsonByAuthor = (req, res) => {
    const { autor } = req.query

    if (!autor) {
        return res.status(400).json({ error: 'No se ha pasado el autor' });
    }
    const filteredBooks = books.filter(book => book.autor === autor)
  
    res.status(200).json(filteredBooks);

}  
app.get("/books", getJsonByAuthor)


//Funciona
const getBookInfoByISBN = (req, res) => {
    const { isbn } = req.params;
    const filteredBooks = books.filter(book => book.ISBN === isbn);

    let bookDetailsResponse = "<ul>";
    filteredBooks.forEach(book => {
        bookDetailsResponse += `
        <li><strong>Título:</strong> ${book.titulo}</li>
        <li><strong>Autor:</strong> ${book.autor}</li>
        <li><strong>Año de publicación:</strong> ${book.ano_publicacion}</li>
        <li><strong>Géneros:</strong> ${book.generos}</li>
        <li><strong>Personajes:</strong> ${book.personajes}</li>
        <li><strong>Número de páginas:</strong> ${book.numero_paginas}</li>
        <li><strong>Editoriales:</strong> ${book.editoriales}</li>
        <li><strong>ISBN:</strong> ${book.ISBN}</li>
        <li><strong>Portada:</strong> <img style="display: block" src="${book.imagen_portada}" alt="Portada del libro ${book.titulo}" width="100"></li>
        `;
    });
    bookDetailsResponse += "</ul>";

    res.status(200).send(bookDetailsResponse);
};
app.get("/:isbn", getBookInfoByISBN);




const getBookInfoByISBNJson = (req, res) => {
    const {isbn} = req.params
    const filteredBooks = books.filter(
        book => book.ISBN.match(isbn)
    )
    res.status(200).json(filteredBooks);

}  
app.get("/:isbn/json", getBookInfoByISBNJson)


const getAllTitlesList = (req, res) => {
    var MessageToSend = "<ul>"
    books.forEach(bookElement => {
        MessageToSend += `<li> <a href="${bookElement.imagen_portada}">  ${bookElement.titulo} </a> </li>`
    });
    MessageToSend += "</ul>"
    res.status(200).send(MessageToSend);
}  
app.get("/", getAllTitlesList)



const PORT = process.env.PORT ?? 1234
app.listen(PORT, () => {
console.log(`server listening on port http://localhost:${PORT}`)
})

