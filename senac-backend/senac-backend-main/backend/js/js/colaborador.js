let form = document.getElementById("form-colaborador");
let btn = document.getElementById("gerar");

let text = document.getElementById("text");


let nomes = [];
let cargos = [];
let salarios = [];


form.addEventListener('submit',function(event){
    event.preventDefault();


// push - adciona novos dados dentro de um array

nomes.push(form.nomeCompleto.value);
cargos.push(form.cargo.value);
salarios.push(Number(form.salario.value));

console.log(nomes);
console.log(cargos);
console.log(salarios);

})

btn.addEventListener('click',function(event){
    event.preventDefault();


    let descVt = 0;
    let descVr = 0;
    let salarioLiquido = 0;
    let result = '';

    for(let i = 0; i < nomes.length; i++){
        descVr = salarios[i] * 0.09;
        descVt = salarios[i] * 0.06;
        salarioLiquido = salarios[i] - descVt - descVr;

        result += `<p>Nome: ${nomes[i]} | Cargo: ${cargos[i]} | Salario Bruto: ${salarios[i]} | Salario liquido: ${salarioLiquido}</p>`;

  
        text.innerHTML = "";
        text.innerHTML = result;
    
    }
})