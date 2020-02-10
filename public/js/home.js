/* function closeAdvert(){
    document.getElementById('advert').style.display = "none";
} */

document.getElementById("equis").onclick = function() { 
    document.getElementById("advert").style.display = "none"; 
} 

const newsletterForm = document.getElementById("newsletterForm");
newsletterForm.onsubmit = async (e) => {
    e.preventDefault();
    let dataVars = new FormData(newsletterForm);    

    let response = await fetch('/backend/newsletter', {
        method: 'POST',
        body: dataVars
    });

    alert("Subscripción exitosa");
};




/* Envío de FORM con Jquery y AJAX
//AJAX post con JQuery. Mandar la data del Newsletter via POST a una ruta del backend sin actualizar.

// Attach a submit handler to the form
function suscribirNewsletter() {

    $("#newsletterForm").submit(function (event) {
        
        // Stop form from submitting normally
        event.preventDefault();
        
        // Get some values from elements on the page:
        var $form = $(this),
        term = $form.find("input[name='email']").val(),
        url = $form.attr("action");
        
        // Send the data using post
        var posting = $.post(url, { s: term });
        
        // Put the results in a div
        posting.done( () => {
            alert("Te suscribiste con éxito");

        });
        posting.fail( () =>{
            console.error();
            alert("Hubo un error");
        });
    });
} */


/* FAVORITOS */
function favoriteAction(shoeId){
    let icoID = 'indicatorFav'+shoeId;   

    let icoTrue = document.getElementById('heartShoeTrue'+shoeId);
    let icoFalse =document.getElementById('heartShoeFalse'+shoeId)

    let url = '/favorites/change/'+shoeId;

    fetch(url, {
        method:"GET"
    }).then((response)=>{
        return response.json()
    }).then((response)=>{
        console.log(response);
        
        if (response == true) {
            console.log('state=true');
            icoTrue.classList="d-block";
            icoFalse.classList="d-none";
            //ico.className = "fas fa-heart rosa";
        }else{
            console.log('state=false');
            icoTrue.classList="d-none";
            icoFalse.classList="d-block";
            //ico.className = "far fa-heart";
        }
    }
    )
}