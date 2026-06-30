let buttonSalvar = document.getElementById("salvar");
let buttonExcluir = document.getElementById("excluir");
let titulo = document.getElementById("titulo");
let texto = document.getElementById("texto");
let lista = document.getElementById("listaNotas");

let textos = JSON.parse(localStorage.getItem("Notas")) || []; 

let nota = { titulo: "", nota: "" }; 

let iSelecionado = -1; 

let notaExistente = false;

function listarNotas() {
    lista.innerHTML = "";
    
    for (let i = 0; i < textos.length; i++) {
        
        let li = document.createElement("li");
        li.innerHTML = textos[i].titulo;
        li.style.cursor = "pointer"; 

        li.addEventListener("click", () => {
            
            iSelecionado = i;
            titulo.value = textos[i].titulo;
            texto.value = textos[i].nota;
            notaExistente = true;
        });

        lista.appendChild(li); 
    }
}

listarNotas();
/*Evento ao clicar no botao Salvar*/
buttonSalvar.addEventListener("click", () => {
    
    if (titulo.value === "" && texto.value === "") {
        alert("Digite um titulo e/ou conteúdo para salvar a nota");
    } else {
        
        if (notaExistente) {
            
            textos[iSelecionado].titulo = titulo.value;
            textos[iSelecionado].nota = texto.value;

            localStorage.setItem("Notas", JSON.stringify(textos));
            notaExistente = false;

            document.getElementById("titulo").value = "";
            document.getElementById("texto").value = "";

            listarNotas();

        } else {
            
            nota = {
                titulo: titulo.value,
                nota: texto.value
            };
          
            textos.push(nota);
           
            let txtJSON = JSON.stringify(textos);
            localStorage.setItem("Notas", txtJSON);

            document.getElementById("titulo").value = "";
            document.getElementById("texto").value = "";

            listarNotas();
        }
    }

});

buttonExcluir.addEventListener("click", () => {
    
    if (
        (titulo.value === "" && texto.value === "") ||
        iSelecionado === -1
    ) {

        alert("Selecione uma nota para excluir");

    } else {
      
        let r = confirm("Deseja realmente excluir esta nota?");
        
        if (r) {
           
            textos.splice(iSelecionado, 1); 
            
            localStorage.setItem("Notas", JSON.stringify(textos));

            listarNotas();
       
            titulo.value = "";
            texto.value = "";
            iSelecionado = -1;
        }
    }

});