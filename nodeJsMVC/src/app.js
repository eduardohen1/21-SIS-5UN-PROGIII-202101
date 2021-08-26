const express = require('express');
const app     = express();
const router  = require('./router');

app.use(express.urlencoded({extended:false}));
app.use(express.static('public'));
app.set('views','views');

app.set('view engine', 'hbs');

/*
colocado em router.js:
app.get('/',(req, res)=>{
    //res.send('Index!!!!');
    res.render('index');
});

app.get('/sobre',(req, res)=>{
    //res.send('Sobre<<<<<<<<<<<<<');
    res.render('sobre');
});
*/
app.use('/', router);

app.listen(3000, ()=>{
    console.log("Servidor rodando na porta 3000");
});