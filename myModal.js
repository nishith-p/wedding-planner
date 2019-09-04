//Modal Element
var modal = document.getElementById('myModal');
//Button that open the modal. 
var btn = document.getElementById("log-bag");
//Button that closes the modal. 
var span = document.getElementsByClassName("close")[0];
//Open function
function openthis() {
    modal.style.display = "block";
}
//Close function
span.onclick = function() {
    modal.style.display = "none";
}
//Close function (no button)
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}