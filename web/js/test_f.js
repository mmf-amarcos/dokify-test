/*

Planteamiento:

Transforma el código necesario con el objetivo de definir un callback que se ejecute al final de todo el
proceso y nos devuelva el valor de n. Suponemos que data responderá el valor del parámetro num.
Asumimos que la función “get” existe y funciona como se espera.

function(){
    var n = 0;
    get(‘data’, {num: 10}, function(res){
        n = n * res;
    });
    setTimeout(function(){
        n = n * 2;
    }, 0);
    n = n + 2;
};
*/

/*
Para la solución asumimos que la función get es similar a un jquery $.get(url, params, success_funciont(res))
Aunque para la solución nos es indiferencte las transformaciones que sufra n.
Entiendo que sólo hay que hacer el callback que devuelva el valor
*/

// possible callback functions
var returnValueCallBackFunction = function(value){
    return value;
};

var alertCallBackFunction = function(value){
    alert(value);
    return value;
};

var consoleLogCallBackFunction = function(value){
    console.log(value);
    return value;
};


// our customized functions
var myFunction = function(myCallBack, n){


    function get(fakeUrl, params, functionToEval) {
        functionToEval(params.num);
        return params.num;
    };


    get('data', {num: 10}, function(res){
        n = n * res;
    });
    setTimeout(function(){
        n = n * 2;

    }, 0);

    n = n + 2;

    return myCallBack(n);
};

document.write(myFunction(returnValueCallBackFunction, 3));
myFunction(alertCallBackFunction, 3);
myFunction(consoleLogCallBackFunction, 3);


