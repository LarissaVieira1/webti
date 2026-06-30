let buttonComecar = document.querySelector("#botaoC");
let buttonPausar = document.querySelector("#botaoP");
let buttonZerar = document.querySelector("#botaoZ");
let ol = document.getElementById("listaParadas");
let intervalo = null;

const rodando = true;
let iniciou = false; 
let TempoPausado = null; 
let cronometro = 0;

buttonComecar.addEventListener("click", () => {
 
    if (buttonComecar.innerHTML === "Começar") {
        
        iniciou = true;
        let inicio = new Date() - TempoPausado; 
        intervalo = setInterval(() => {
            let tempo = new Date();
            cronometro = (tempo - inicio);
    
            let segundos = Math.floor((cronometro / 1000) % 60);
            let minutos = Math.floor((cronometro / (1000 * 60)) % 60);
            let horas = Math.floor((cronometro / (1000 * 3600)));

            let h = String(horas).padStart(2, '0');
            let m = String(minutos).padStart(2, '0');
            let s = String(segundos).padStart(2, '0');

            document.getElementById("crono").innerHTML = `${h}:${m}:${s}`;

        }, 1);
        
        buttonComecar.innerHTML = "Parar";

    } else {
        TempoPausado = cronometro; 
        clearInterval(intervalo); 
        buttonComecar.innerHTML = "Começar";
        rodando = false; 

    }

});

buttonPausar.addEventListener("click", () => {
  
    if (iniciou) {

        let pausa = document.querySelector("#crono").innerHTML;
    
        let li = document.createElement("li");  

        li.innerHTML = pausa; 
        ol.appendChild(li); 
      

    }

});

buttonZerar.addEventListener("click", () => {
   
    if (buttonComecar.innerHTML === "Começar" && iniciou) {

        ol.replaceChildren(); 
        document.querySelector("#crono").innerHTML = "00:00:00"; 
        TempoPausado = null; 
        iniciou = false; 

    }

});