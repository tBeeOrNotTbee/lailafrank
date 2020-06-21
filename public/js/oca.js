let tarifar_envio_corporativo = function (pesoTotal, volumen, codigoPostalOrigen, codigoPostalDestino, cantidadPaquetes, valorDeclarado, cuit, operativa) {


    let param = '<?xml version="1.0" encoding="utf-8"?>'
    param += '<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">'
    param += '<soap12:Body>'
    param += '<Tarifar_Envio_Corporativo xmlns="#Oca_e_Pak"> <cabecera ver="2.0" nrocuenta="163729/000" />'
    param += '<PesoTotal>'+pesoTotal+'</PesoTotal>'
    param += '<VolumenTotal>'+volumen+'</VolumenTotal>'
    param += '<CodigoPostalOrigen>'+codigoPostalOrigen+'</CodigoPostalOrigen>'
    param += '<CodigoPostalDestino>'+codigoPostalDestino+'</CodigoPostalDestino>'
    param += '<CantidadPaquetes>'+cantidadPaquetes+'</CantidadPaquetes>'
    param += '<ValorDeclarado>'+valorDeclarado+'</ValorDeclarado>'
    param += '<Cuit>'+cuit+'</Cuit>'
    param += '<Operativa>'+operativa+'</Operativa>'
    param += '</Tarifar_Envio_Corporativo>'
    param += '</soap12:Body>'
    param += '</soap12:Envelope>'


    let url = "http://webservice.oca.com.ar/ePak_tracking/Oep_TrackEPak.asmx/Tarifar_Envio_Corporativo"
    //console.log(param)
    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: param
    }).then((res) => {
        /*ACA UTILIZO UNA FUNCION DE JQUERY PARA PARSEAR EL XML, PERO LO DEJO COMENTADO PARA QUE IMPRIMA EL ERROR COMO VIENE*/
        /* return $.parseXML(res) */
        return res
    }).then((res) => {
        console.log(res)
    })
        .catch(error => console.error('Error:', error))
        .then(response => console.log('Success:', response));
}

tarifar_envio_corporativo(1.560, 10, 'C1428AHD', 1900, 1, 0, '27-31879156-1', 298450)