Algoritmo "mediaNotas"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 18/10/2022
Var
// Seção de Declarações das variáveis 
nome:caracter
disciplina:caracter
nota1:inteiro
nota2:inteiro
nota3:inteiro
nota4:inteiro
media:real

//media: (nota1+nota2+nota3+nota4) / 4


Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 

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
      escreval("Média: ", media)
      escreval("Situação: Aprovado")
   senao se media < 7 entao
      escreval("Nome: ", nome)
      escreval("Disciplina: ", disciplina)
      escreval("Média: ", media)
      escreval("Situação: Reprovado")
   senao
      escreval("Erro no processamento")
fimse

Fimalgoritmo