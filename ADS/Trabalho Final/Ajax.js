const api_key = "f77bfada";

button.addEventListener("click", () => {

    let txtBusca = document.getElementById("busca").value;

    fetch(`http://www.omdbapi.com/?apikey=${api_key}&s=${txtBusca}`)
        .then((respostaAPI) => {
            return respostaAPI.json();
        })
        .then((dados) => {
            const filmes = dados.Search;
          
            exibirFilme(filmes);
        });

});

function exibirFilme(filmes) {


    let htmlfilme = "";

    filmes.forEach((filme) => {
      
        htmlfilme += `
            <div class="filme" style="width: 200px; heigth: 400px; display: grid; grid-template-rows: 90px 50px 300px;">
                <h2>${filme.Title}</h2>
                <p>${filme.Year}</p>
                <img src="${filme.Poster}" alt="${filme.Title}" style="width: 200px; heigth: 300px;">
            </div>
        `;

    });
 document.querySelector(".resultado").innerHTML = htmlfilme;
    
}