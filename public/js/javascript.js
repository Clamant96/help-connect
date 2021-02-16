document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
document.body.scrollTop = 0; // For Safari

window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}

/*document.getElementById("img").onclick = function() {ativarMenu()};

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

}*/

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
/*var modal = document.getElementById("modal-login-cadastro");
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
}*/

// RESPONSIVIDADE
var width = window.innerWidth;

if(width >= 1024) {
  document.getElementById("img").onclick = function() {
    document.getElementById("sideBar").style.marginLeft = "0%";
  };

  document.getElementById("sideBar").onclick = function() {
    document.getElementById("sideBar").style.marginLeft = "-22%";
  };

}else if(width >= 768 && width <= 1023) {
  document.getElementById("img").onclick = function() {
    document.getElementById("sideBar").style.marginLeft = "0%";
  };

  document.getElementById("sideBar").onclick = function() {
    document.getElementById("sideBar").style.marginLeft = "-22%";
  };

}else if(width >= 361 && width <= 767) {
  document.getElementById("sideBar").style.marginTop = "-500%";

  document.getElementById("img").onclick = function() {
    document.getElementById("sideBar").style.borderTop = "3rem solid var(--text-blue-cart)";
    document.getElementById("sideBar").style.marginLeft = "0%";
    document.getElementById("sideBar").style.marginTop = "0%";
    document.getElementById("sideBar").style.width = "100%";
    document.getElementById("sideBar").style.display = "block";

    document.querySelector("ul").style.listStyle = "none";
  };

  document.getElementById("sideBar").onclick = function() {
    document.getElementById("sideBar").style.marginLeft = "-22%";
  };
  
}else if(width <= 360) {
  document.getElementById("sideBar").style.marginTop = "-5  00%";

  document.getElementById("img").onclick = function() {
    document.getElementById("sideBar").style.borderTop = "3rem solid var(--text-blue-cart)";
    document.getElementById("sideBar").style.marginLeft = "0%";
    document.getElementById("sideBar").style.marginTop = "0%";
    document.getElementById("sideBar").style.width = "100%";
    document.getElementById("sideBar").style.display = "block";

    document.querySelector("ul").style.listStyle = "none";
  };

  document.getElementById("sideBar").onclick = function() {
    document.getElementById("sideBar").style.marginLeft = "-22%";
  };
  
}