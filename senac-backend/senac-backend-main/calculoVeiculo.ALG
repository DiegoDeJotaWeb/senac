Algoritmo "calculoVeiculo"

// Autor(a)    : Diego Rodrigues
// Data atual  : 25/11/2022

Var
valorFabrica: real
percentualDistribuidor: real
imposto:real
calculoImposto:real
calculoDistribuidor:real
valorFinal:real

Inicio

escreval("Digite o valor de fabrica do veiculo")
leia(valorFabrica)

escreval("Digite a porcentagem do distribuidor")
leia(percentualDistribuidor)

escreval("Digite o imposto aplicado ao custo de fábrica em porcentagem")
leia(imposto)

calculoDistribuidor<-((percentualDistribuidor/100)*valorFabrica)
calculoImposto<-((imposto/100)*valorFabrica)

valorFinal<-valorFabrica+calculoDistribuidor+calculoImposto

escreval("Valor final para o consulmidor: R$", valorFinal)



Fimalgoritmo