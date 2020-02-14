/* function closeAdvert(){
    document.getElementById('advert').style.display = "none";
} */
/* 
document.getElementById("equis").onclick = function() { 
    document.getElementById("advert").style.display = "none"; 
}  */
const video = document.getElementById("video");
video.load();
video.play();
video.onplay = (event) =>{
    $('.carousel').carousel('pause'); 
    console.log('anda')
}
video.onended = (e) => {
    console.log('paro')
    $('.carousel').carousel();
}
/* $(document).ready(function() {
    $("#video").autoplay = true;
    $("#video").load();

    $("#video").on('play', function(e){
        setTimeout(function () {
            $('.carousel').carousel('pause');
        }, 500);
       
    });
    $('#video').on('stop ended', function(e){
        $('carousel').carousel();
    });
}); */
const newsletterForm = document.getElementById("newsletterForm");
newsletterForm.onsubmit = async (e) => {
    e.preventDefault();
    let dataVars = new FormData(newsletterForm);

    let response = await fetch('/backend/newsletter', {
        method: 'POST',
        body: dataVars
    });
    location.reload();
    alert("Subscripción exitosa");
};

/* FAVORITOS */
function favoriteAction(shoeId) {
    let icoID = 'indicatorFav' + shoeId;

    let icoTrue = document.getElementById('heartShoeTrue' + shoeId);
    let icoFalse = document.getElementById('heartShoeFalse' + shoeId)

    let url = '/favorites/change/' + shoeId;

    console.log(url);
    
    
    fetch(url, {
        method: "GET"
    }).then((response) => {
        return response.json()
    }).then((response) => {
        console.log(response);

        if (response.state == true) {
            console.log('state=true');
            icoTrue.classList = "d-block";
            icoFalse.classList = "d-none";
            //ico.className = "fas fa-heart rosa";
        } else if (response.state == false) {
            console.log('state=false');
            icoTrue.classList = "d-none";
            icoFalse.classList = "d-block";
            //ico.className = "far fa-heart";
        } else if (response.state == 'notLogged'){
            window.location.href='/login'
        }
    });
}

/* Agregar al carrito product-detail */

function addToCar() {
    let sizeform = document.getElementById('sizeform');
    event.preventDefault();
    let sizeData = new FormData(sizeform);

    
    let nostock = document.getElementById('nostock');
    nostock.classList = "d-none"
    let added = document.getElementById('added');
    added.classList = "d-none"
    let spinner = document.getElementById('spinner');
    spinner.classList = "spinner-border spinner-border-sm text-light"

    console.log(sizeData);
    
    fetch('/shop/shopcar/add', {
        method: 'POST',
        body: sizeData
    }).then((response) => {  
        return response.json()
    }).then((response) => {
        console.log(response);
        if (response.state == true) {
            console.log('state=true');
            added.classList = "alert alert-success noBk my-3 p-3 border rounded-0 cero7em"
            spinner.classList = "d-none"
            
        } else if (response.state == false) {
            console.log('state=false');
            nostock.classList="d-block text-center monserrat my-3 p-3 border rounded-0 cero8em"
            spinner.classList = "d-none"
            
        } else if (response.state == 'notLogged'){
            window.location.href='/login'
        }
    });

}


/** Comprobar cupon de descuento */
function checkDiscount() {
    let discountForm = document.getElementById('discountForm');
    event.preventDefault();
    let discountData = new FormData(discountForm);

    
    let dValid = document.getElementById('dValid');
    dValid.classList = "d-none"
    let dInvalid = document.getElementById('dInvalid');
    dInvalid.classList = "d-none"
    let shopcarForm = document.getElementById('shopcarForm')
    
    fetch('/shop/discount', {
        method: 'POST',
        body: discountData
    }).then((response) => {  
        return response.json()
    }).then((response) => {
        console.log(response);

        if (response.discount == true) {
            console.log('Existe cupon')
            discountForm.classList="d-none"
            dValid.classList="alert alert-success noBk rounded-0"
            //rellenar formulario
            shopcarForm.discount_type.value = response.type
            shopcarForm.discount_quantity.value = response.quantity
            
        } else if (response.discount == false) {
            console.log('No existe cupon')
            //mostrar fallo
            dInvalid.classList="alert alert-warning noBk rounded-0"
        }
    });

}