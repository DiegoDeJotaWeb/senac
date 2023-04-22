Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/10/2022
Var
// Seção de Declarações das variáveis 
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
// Seção de Comandos, procedimento, funções, operadores, etc... 
 repita
   escreval("Menu")
   escreval("1 - cadastro de aluno")
   escreval("2 - calculo de média ")
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
   escreval("calculo de média")
   contador <- 1
   repita
   escreval("Digite a nota do bimestre" , contador, ":")
   leia(bimestre)
   soma<-bimestre + soma
   contador <- contador + 1
   ate contador >=5
   media<-soma/4
   escreval("Média: ", media)
   
   
caso 3
   escreval("Tchau :)")

fimescolha
   ate menu = 3



Fimalgoritmo


//Limpatela





