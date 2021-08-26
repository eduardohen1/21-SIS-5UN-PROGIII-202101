const Soma = function(valor1, valor2){
    this.valor1 = valor1;
    this.valor2 = valor2;
    this.errors = [];
}

Soma.prototype.validateUserInput = function(){
    //testes:
    if(this.valor1 == ""){
        this.errors.push("Valor 1 em branco!");
    }
    if(this.valor2 == ""){
        this.errors.push("Valor 2 em branco!");
    }
};

module.exports = Soma;