let form = document.getElementById("form-aluno");
let btn = document.getElementById("gerar");

let media = document.getElementById("media");

let nomes = [];
let materias = [];
let notas1 = [];
let notas2 = [];
let notas3 = [];
let notas4 = [];


form.addEventListener('submit', function (event) {
    event.preventDefault();

    nomes.push(form.nomeAluno.value);
    materias.push(form.materia.value);
    notas1.push(Number(form.nota1.value));
    notas2.push(Number(form.nota1.value));
    notas3.push(Number(form.nota1.value));
    notas4.push(Number(form.nota1.value));
})

btn.addEventListener('click', function (event) {
    event.preventDefault();



    let result = '';
    
   
    for (let i = 0; i < nomes.length; i++) {

        mediaTotal = ((notas1[i] + notas2[i] + notas3[i] + notas4[i]) / 4);

        result += `<tr>
        <td>${nomes[i]} </td>  
        <td>${materias[i]} </td> 
        <td> ${mediaTotal}</td>
        </tr>`;

        media.innerHTML = "";
        media.innerHTML = result;

    }

   
})