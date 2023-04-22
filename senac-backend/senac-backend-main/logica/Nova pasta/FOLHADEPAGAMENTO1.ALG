Algoritmo "folhaDePagamento"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 18/10/2022
Var
// Seção de Declarações das variáveis 
salarioBruto:real
nomeFuncionario:caracter
ganhoEmPorcentagem:real
ganhoEmReal:real
valeTransporte:real  //%0.6
valeRefeicao:real //%12
totalDesconto:real
inss:real
novoSalario:real

// caso o valor final da 0 sera descontado 150

//condição para aumento (salario bruto  > 1500 + 10%)
//condição para aumento (salario bruto  < 1500 + 50)

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreval("Digite o nome do funcionario")
leia(nomeFuncionario)
escreval("Digite  salarioBruto")
leia(salarioBruto)







valeTransporte<- salarioBruto*0.06
valeRefeicao<- salarioBruto*0.12




se salarioBruto  >  1500 entao

ganhoEmPorcentagem<-salarioBruto*0.10
novoSalario<- (salarioBruto + ganhoEmPorcentagem) - totalDesconto

se novoSalario<1212 entao
inss<- 0.0075
escreval(inss)

senao
se (novoSalario > 1212) e (novoSalario <= 2427.35) entao
inss<- 0.06
escreval(inss)

senao
se (novoSalario > 2427.35) e (novoSalario <= 3000) entao
inss<- 0.12
escreval(inss)

senao
inss<- 0.14
escreval(inss)

fimse
fimse
fimse

totalDesconto<- valeTransporte + valeRefeicao + inss
escreval(novoSalario)

   
   //escreval(totalDesconto)
 //  escreval("Nome do funcionario: ", nomeFuncionario)
  // escreval("O salario teve um aumento de R$", ganhoEmPorcentagem, " e assim passara a ser de R$",salarioBruto + ganhoEmPorcentagem, "com desconto de ", totalDesconto, "Salario Liquido de", totalDesconto - salarioBruto)


senao se salarioBruto  <  1500 entao

ganhoEmReal<-50
novoSalario<- (salarioBruto + ganhoEmReal) - totalDesconto

se novoSalario<1212 entao
inss<- 0.0075
escreval(inss)

senao
se (novoSalario > 1212) e (novoSalario <= 2427.35) entao
inss<- 0.06
escreval(inss)

senao
se (novoSalario > 2427.35) e (novoSalario <= 3000) entao
inss<- 0.12
escreval(inss)

senao
inss<- 0.14
escreval(inss)

fimse
fimse
fimse

totalDesconto<- valeTransporte + valeRefeicao + inss
escreval(novoSalario)

 //  escreval(inss)
 //  escreval("Nome do funcionario: ", nomeFuncionario)
  // escreval("O salario teve um aumento de R$", ganhoEmReal, " e assim passara a ser de R$",salarioBruto + ganhoEmReal, "com desconto de ", totalDesconto, "Salario Liquido de", totalDesconto - salarioBruto)

fimse
Fimalgoritmo