Algoritmo "semnome"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/10/2022
Var
// Se��o de Declara��es das vari�veis 
nome:caracter
disciplina:caracter
bimestre:inteiro
media:real
soma:inteiro
contador:inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
escreval("Digite o nome do aluno")
leia(nome)
escreval("Digite a disciplina")
leia(disciplina)


contador <- 1
repita
escreval("Digite a nota do bimestre" , contador, ":")
leia(bimestre)
soma<-bimestre + soma
contador <- contador + 1
ate contador >=5

media<-soma/4

escreval("M�dia: ", media)


Fimalgoritmo