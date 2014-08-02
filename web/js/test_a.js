"use strict";
/*
function dump(arr,level) {
    var dumped_text = "";
    if(!level) level = 0;

    //The padding given at the beginning of the line.
    var level_padding = "";
    for(var j=0;j<level+1;j++) level_padding += "    ";

    if(typeof(arr) == 'object') { //Array/Hashes/Objects
        for(var item in arr) {
            var value = arr[item];

            if(typeof(value) == 'object') { //If it is an array,
                dumped_text += level_padding + "'" + item + "' ...\n";
                dumped_text += dump(value,level+1);
            } else {
                dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
            }
        }
    } else { //Stings/Chars/Numbers etc.
        dumped_text = "===>"+arr+"<===("+typeof(arr)+")";
    }

    return dumped_text;
}
*/
function fillContent( indexCount) {
    var content = [];
    for (var i = 1; i <= indexCount; i++) {
        //array( array( ‘nombre’,’apellidos’,’dni’) ) ;
        //As an object
        var temp = [{
            'nombre': 'nombre_' + i,
            'apellidos': 'apellidos_' + i,
            'dni': 'dni_' + i
        }];
        //As an array
        //var temp = [['nombre_' + i, 'apellido_' + i, 'dni_' + i]];
        content.push(temp);
    }

    return content;
}

function getTBodyHtml(content) {
    var tbody_html = '';
    for (var i = 0; i < content.length; i++) {
        //As an object
        tbody_html = tbody_html + '<tr><td>' + content[i][0].nombre + '</td><td>' + content[i][0].apellidos + '</td><td>' + content[i][0].dni + '</td></tr>';
        //As an array
        //tbody_html = tbody_html + '<tr><td>' + content[i][0][0] + '</td><td>' + content[i][0][1] + '</td><td>' + content[i][0][2] + '</td></tr>';
    }

    return tbody_html;
}

//Calling the function...
function init(tableId) {
    var indexCount = 20;
    var content = fillContent(indexCount);
    //alert(dump(content));
    var newTbody = document.createElement("tbody");
    newTbody.innerHTML = getTBodyHtml(content);

    document.getElementById(tableId).appendChild(newTbody);
}

window.onload = init('myTable');

