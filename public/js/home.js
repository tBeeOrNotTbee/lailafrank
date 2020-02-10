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
    location.reload();
    alert("Subscripción exitosa");
};
/* const unsubscribeForm = document.getElementById("unsubscribe");
unsubscribeForm.onsubmit = alert("Ya no estás en nuestra lista"); */




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
