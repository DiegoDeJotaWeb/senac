Algoritmo "mediaNotas"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 18/10/2022
Var
// Se��o de Declara��es das vari�veis 
nome:caracter
disciplina:caracter
nota1:inteiro
nota2:inteiro
nota3:inteiro
nota4:inteiro
media:real

//media: (nota1+nota2+nota3+nota4) / 4


Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 

escreva("Digite seu nome")
leia(nome)
escreva("Digite a disciplina")
leia(disciplina)
escreval("Digita a primeira nota de 0 a 10")
leia(nota1)
escreval("Digita a segunda nota de 0 a 10")
leia(nota2)
escreval("Digita a terceira nota de 0 a 10")
leia(nota3)
escreval("Digita a quarto nota de 0 a 10")
leia(nota4)
media<- (nota1+nota2+nota3+nota4) / 4
   se media  >= 7 entao
      escreval("Nome: ", nome)
      escreval("Disciplina: ", disciplina)
      escreval("M�dia: ", media)
      escreval("Situa��o: Aprovado")
   senao se media < 7 entao
      escreval("Nome: ", nome)
      escreval("Disciplina: ", disciplina)
      escreval("M�dia: ", media)
      escreval("Situa��o: Reprovado")
   senao
      escreval("Erro no processamento")
fimse

Fimalgoritmo