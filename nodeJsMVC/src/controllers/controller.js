const Soma = require('../model/Soma');

exports.renderHomePage = (req, res) => {
    res.render('index');
};

exports.renderSobrePage = (req, res) => {
    res.render('sobre');
};

exports.getSoma = (req, res) => {
    //res.send('Você executou o submit');
    //res.send(`Os valores são: ${req.body.valor1} e ${req.body.valor2}`);
    const somar = new Soma(req.body.valor1, req.body.valor2);
    somar.validateUserInput();
    if(somar.errors.length > 0){
        //res.send(somar.errors.toString());
        res.render('index',{
            error: somar.errors.toString()
        });
    }else{
        const valor1 = parseInt(req.body.valor1);
        const valor2 = parseInt(req.body.valor2);
        const result = valor1 + valor2;

        //res.send(`Resultado: ${result}`);
        res.render('index',{
            results : result 
        });

    }
};