var formBimestre = document.getElementById('form-bimestre');

formBimestre.addEventListener('submit', function(event){
    event.preventDefault();

    var nome = formBimestre.nome.value;
    var disciplina = formBimestre.disciplina.value;
    var nota1 = Number(formBimestre.nota1.value);
    var nota2 = Number(formBimestre.nota2.value)
    var nota3 = Number(formBimestre.nota3.value);
    var nota4 = Number(formBimestre.nota4.value);
    media = (nota1+nota2+nota3+nota4) / 4;

    resultado = document.getElementById('res');

    if(nome == ""){
        resultado.style.background = '#dd5c5c';
        resultado.innerHTML = "Digite o nome";
    }else if(disciplina == ""){
        resultado.style.background = '#dd5c5c';
       
        resultado.innerHTML = "Digite a disciplina";
    }else if(nota1 == ""){
        resultado.style.background = '#dd5c5c';
     
        resultado.innerHTML = "Digite a nota 1";
    }else if(nota2 == ""){
        resultado.style.background = '#dd5c5c';
    
        resultado.innerHTML = "Digite a nota 2";
    }else if(nota3 == ""){
        resultado.style.background = '#dd5c5c';
     
        resultado.innerHTML = "Digite a nota 3";
    }else if(nota4 == ""){
        resultado.style.background = '#dd5c5c';
       
        resultado.innerHTML = "Digite a nota 4";
    }else{

        if (media >= 7 ) {
            resultado.style.background = '#dd5c5c';
            resultado.innerHTML = `O aluno ${nome} foi aprovado - sua media é ${media}`;
            
        } 
        else if(media >= 4 && media < 6 ){
            resultado.innerHTML = `O aluno ${nome} esta de recuperação - sua media é ${media}`;
        }
        else {
            resultado.innerHTML = `O aluno ${nome} foi aprovado - sua media é ${media}`;
        }
        // console.log(formBimestre.nome.value);
        // console.log(media);
    }

   
});

