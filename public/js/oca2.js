/* OCA con AJAX */
let tarifar_envio_corporativo = function (pesoTotal, volumen, codigoPostalOrigen, codigoPostalDestino, cantidadPaquetes, valorDeclarado, cuit, operativa) {
    let url = "http://webservice.oca.com.ar/ePak_tracking/Oep_TrackEPak.asmx/Tarifar_Envio_Corporativo"
    let params ='PesoTotal=' + pesoTotal + '&VolumenTotal=' + volumen + '&CodigoPostalOrigen=' + codigoPostalOrigen + '&CodigoPostalDestino=' + codigoPostalDestino + '&CantidadPaquetes=' + cantidadPaquetes+'&ValorDeclarado='+ valorDeclarado + '&Cuit=' + cuit + '&Operativa=' + operativa
    //url = url + params
    //console.log(params)
    let req = new XMLHttpRequest()
    req.open('POST', url)
    //req.withCredentials = true
    
    //Send the proper header information along with the request
    //req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8')
    //req.setRequestHeader('ver', '2.0')
    //req.setRequestHeader('nrocuenta', '111757/001')
    //req.setRequestHeader("Set-Cookie", "HttpOnly;Secure;SameSite=Strict");
    
    //req.withCredentials = true
    
    req.onreadystatechange = function() {
        // Check if the request is compete and was successful
        if(this.readyState === 4 && this.status === 200) {
            // Inserting the response from server into an HTML element
            //document.getElementById("result").innerHTML = this.responseText;
            console.log('ingreso')
            //console.log(this.responseText)
        }
        console.log(this.status)
    }
    //console.log(req.send(params))
    //console.log(url)
    //console.log(req)
    //req.send({ 'request': "authentication token" }, params);
    req.send(params)
}

tarifar_envio_corporativo(1.560, 10, 1128, 1900, 1, 0, '27-31879156-1', 298450)