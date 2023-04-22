var soma = 0;
var media = 0;



for (let contator = 1; contator <= 4; contator++) {
    bimestre = prompt(`Digite a nota ${contator}`);
    var soma = +  bimestre + soma
}
media = soma / 4;

if (media >= 7) {

    alert (`Aprovado - sua media é ${media}`);

}
else if (media >= 4 && media < 6) {
    alert (`Recuperação - sua media é ${media}`);
}
else {
    alert (`Reprovado - sua media é ${media}`);
}





