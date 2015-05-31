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

var alertCallback = function (n) {
    alert(n);
}

var consoleLogCallBack = function (n) {
    console.log(n);
}


var customGet =  function (n, callback) {
    get(‘data’, {num: 10}, function(res){
	n = n * res;
	customSetTimeOut(n, callback);  
    });
}


var customSetTimeOut =  function (n, callback) {
	setTimeout(function(){
		n = n * 2;
                customAdd2(n, callback);  
	    }, 2000);
}

var customAdd2 =  function (n, callback) {
	n = n + 2;
	callback(n);
}

function myCustomFunction(n, callback){   
    customGet(n, callback);   
};

myCustomFunction(3, alertCallback);
*/
