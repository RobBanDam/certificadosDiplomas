const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

/* Inicializamos la img */
const image = new Image();
/* Ruta de la img */
image.src = '../../public/certificado.png';
/* Se dimensiona y se selecciona la img */
ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
/* Tanaño de la fuente */
ctx.font = '45px Arial';
ctx.textAlign = "center";
ctx.textBaseline = 'middle';
let x = canvas.width / 2;
ctx.fillText('Nombre', x, 100);
ctx.fillText('Calabaza', x, 230);

$(document).ready(function(){
    let curd_id = getUrlParameter("curd_id");
    
    $.post("../../controllers/usuario.php?op=mostrar_curso_detalle", {curd_id : curd_id}, function(data){
        data = JSON.parse(data);
        $('#cur_descrip').html(data.cur_descrip);
    });
})

let getUrlParameter = function getUrlParameter(sParam){
    let sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++){
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam){
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
}