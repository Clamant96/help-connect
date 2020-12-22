document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
document.body.scrollTop = 0; // For Safari

window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}

document.getElementById("img").onclick = function() {ativarMenu()};

function ativarMenu() {
  document.getElementById("sideBar").style.marginLeft = "0%";

}

// RESPONSIVIDADE

const responsividade = window.matchMedia("(max-width: 1023px)");
metodoResponsivo(responsividade);

function metodoResponsivo() {
  document.getElementById("sideBar").onclick = function() {desativarMenu()}
  
  function desativarMenu() {
    document.getElementById("sideBar").style.marginLeft = "-22%";
  
  }

}

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

/*MODAL - CADASTRO / LOGIN*/
var modal = document.getElementById("modal-login-cadastro");
var person = document.getElementById("person");
var span = document.getElementsByClassName("close")[0];

person.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
}