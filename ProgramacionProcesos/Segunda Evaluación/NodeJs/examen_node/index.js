
const express = require('express')
const crud = require('./node_modules/crud/package.json')//Probando
const app = express()
const port = 1234
var fs = require('fs');
app.use(express())
app.use(express.json()) //Probando

//estoy bastante seguro de que me he dejado un import, del crud o de algo parecido

//Se me ha olvidado como hacer unas cosas esenciales y no puedo avanzar, lo siento
//básicamente necesito que el middleware me parsee el objeto a json para poder usarlo como objeto que creo que es lo que no he hecho bien, con eso hecho en principio debería
//poder acceder al objeto y trabajar con el en arrays y usando filters para acceder a cada elemento concreto de dentro del json, luego montar dependiendo del 
// get que haya, un html o devolver el objeto como json 

var lang;

const languages = fs.readFile('languages.json', (err, data) => {
  if (err) return console.error(err);
  console.log(data.toString());
    lang = data // he probado con data y con languages pero obviamente me falta algo
});


//me sale languages como undefined


app.get('/', (req, res) => {
    var finalMessage = "<ul>"
    lang.map(element => {
        finalMessage += element
    })

    finalMessage += "</ul>"
  res.send(finalMessage)
})


app.get('/lang/:id', (req, res) => {
    const {id} = req.params
    languages.find(element =>{

    })
  res.send(req.params.id)
})



app.post('/lang', function(req, res) {
  const {fileEntrante} = req.body;

    
});



app.listen(port, () => console.log(`Escuchando en el puerto ${port}!`))


