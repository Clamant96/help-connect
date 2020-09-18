const menu1 = document.getElementById("imagem1");
const menu2 = document.getElementById("imagem2");
const menu3 = document.getElementById("imagem3");

document.getElementById("botaoMenu").onclick = function() {ativarMenu()};
document.getElementById("botaoMenu").onmouseout = function() {animacaoVoltarBotao()};

menu1.style.transition = '.5s';
menu2.style.transition = '.5s';
menu3.style.transition = '.5s';

function ativarMenu() {
  document.getElementById("menu").style.marginLeft = "0%";

  menu1.style.width = '100px';
  menu2.style.width = '100px';
  menu3.style.width = '100px';

}

function animacaoVoltarBotao() {
  menu1.style.width = '85px';
  menu2.style.width = '75px';
  menu3.style.width = '55px';

}

// RESPONSIVIDADE

const responsividade = window.matchMedia("(max-width: 1023px)");
metodoResponsivo(responsividade);

function metodoResponsivo() {
  document.getElementById("menu").onclick = function() {desativarMenu()}
  
  function desativarMenu() {
    document.getElementById("menu").style.marginLeft = "-51%";
  
  }

}