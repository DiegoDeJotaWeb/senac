// Vetores constante

const frutas = ['Banana','Abacaxi','Maça','Uva'];

const fruta= "Goiaba";


// Vetores

let nomes = [];


for (let posicao = 0; posicao < frutas.length; posicao++){
    console.log(frutas[posicao]);
}

frutas.map(item =>{
    console.log(item);
})

frutas.forEach(item =>{
    console.log(item);
})