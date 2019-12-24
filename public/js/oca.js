let tarifar_envio_corporativo = function (pesoTotal, volumen, codigoPostalOrigen, codigoPostalDestino, cantidadPaquetes, valorDeclarado, cuit, operativa) {
    
    /* var params = {
        PesoTotal: pesoTotal,
        CodigoPostalOrigen: codigoPostalOrigen,
        CodigoPostalDestino: codigoPostalDestino,
        CantidadPaquetes: cantidadPaquetes,
        ValorDeclarado: valorDeclarado,
        CUIT: cuit,
        Operativa: operativa
    } */


    let param = '<?xml version="1.0" encoding="utf-8"?>'
    param += '<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">'
    param += '<soap12:Body>'
    param += '<Tarifar_Envio_Corporativo xmlns="#Oca_e_Pak"> <cabecera ver="2.0" nrocuenta="9980700" />'
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

    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'SOAPAction': "#Oca_Express_Pak/Tarifar_Envio_Corporativo",
            'Content-Length': length
        },
        body: 'PesoTotal=' + pesoTotal + '&VolumenTotal=' + volumen + '&CodigoPostalOrigen=' + codigoPostalOrigen + '&CodigoPostalDestino=' + codigoPostalDestino + '&CantidadPaquetes=' + cantidadPaquetes + '&Cuit=' + cuit + '&Operativa=' + operativa
    }).then((res) => {
        return $.parseXML(res)
    }).then((res) => {
        console.log(res)
    })
        .catch(error => console.error('Error:', error))
        .then(response => console.log('Success:', response));
}

tarifar_envio_corporativo(1.560, 10, 1128, 1900, 1, 0, '27-31879156-1', 294536)

/*             'Content-Length': param.length, */

/* 
POST /oep_tracking/Oep_Track.asmx/Tarifar_Envio_Corporativo HTTP/1.1
Host: webservice.oca.com.ar
Content-Type: application/x-www-form-urlencoded
Content-Length: length

PesoTotal=string&VolumenTotal=string&CodigoPostalOrigen=string&CodigoPostalDestino=string&CantidadPaquetes=string&Cuit=string&Operativa=string
*/

/* PRIMER INTENTO
fetch(url, {
        method: 'POST',
        body: param,
        headers: {
            'Content-Type': 'application/soap+xml; charset=utf-8',
            'SOAPAction': "#Oca_Express_Pak/Tarifar_Envio_Corporativo",
            'Content-Length': param.length
        }
*/