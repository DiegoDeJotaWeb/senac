Algoritmo "semnome"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/10/2022
Var
// Se��o de Declara��es das vari�veis 
menu:inteiro
nome:caracter
disciplina:caracter
bimestre:inteiro
media:real
soma:inteiro
contador:inteiro

//procedimento  teste

//fimprocedimento

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
 repita
   escreval("Menu")
   escreval("1 - cadastro de aluno")
   escreval("2 - calculo de m�dia ")
   escreval("3 - sair")
   leia(menu)






escolha menu
caso 1
   escreva("cadastro de aluno")
   escreval("digite o nome do aluno")

   leia(nome)
   Limpatela
   escreval("O nome do aluno - ", nome)

   
caso 2
   escreval("calculo de m�dia")
   contador <- 1
   repita
   escreval("Digite a nota do bimestre" , contador, ":")
   leia(bimestre)
   soma<-bimestre + soma
   contador <- contador + 1
   ate contador >=5
   media<-soma/4
   escreval("M�dia: ", media)
   
   
caso 3
   escreval("Tchau :)")

fimescolha
   ate menu = 3



Fimalgoritmo


//Limpatela





