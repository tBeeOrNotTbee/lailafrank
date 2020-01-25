/* OCA con AJAX + JQUERY*/
let tarifar_envio_corporativo = function (pesoTotal, volumen, codigoPostalOrigen, codigoPostalDestino, cantidadPaquetes, valorDeclarado, cuit, operativa) {
    let url = "http://webservice.oca.com.ar/ePak_tracking/Oep_TrackEPak.asmx/Tarifar_Envio_Corporativo?"
    let params ='PesoTotal=' + pesoTotal + '&VolumenTotal=' + volumen + '&CodigoPostalOrigen=' + codigoPostalOrigen + '&CodigoPostalDestino=' + codigoPostalDestino + '&CantidadPaquetes=' + cantidadPaquetes+'&ValorDeclarado='+ valorDeclarado + '&Cuit=' + cuit + '&Operativa=' + operativa
    //console.log(params)

    //Send the proper header information along with the request
    //req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')

    $.ajax({
        url: url,
        type: 'POST',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        data:  params,
        success:  function(data){
            console.log(data)
        }
    })
}

tarifar_envio_corporativo(1.560, 10, 1128, 1900, 1, 0, '27-31879156-1', 298450)