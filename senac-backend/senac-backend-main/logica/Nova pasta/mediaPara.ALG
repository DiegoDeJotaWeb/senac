Algoritmo "semnome"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 21/10/2022
Var
// Se��o de Declara��es das vari�veis 
contador:inteiro
nome:caracter
bimestre:inteiro
soma:real
media:real

Inicio
escreval("Digite o nome do aluno")
 leia(nome)
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
para contador de 1 ate 4 faca

 escreval("nota do bimestre ", contador)
 leia(bimestre)
 //(bimestre)
 soma<-bimestre+soma
fimpara
 media<-(soma/4)
 escreval("M�dia ", media)
 
se (media >= 6) entao
   escreval("Aprovado")

senao
se (media >= 4) e (media <6)  entao
   escreval("Recupera��o")

senao
     escreval("Reprovado")
fimse
fimse

 
Fimalgoritmo