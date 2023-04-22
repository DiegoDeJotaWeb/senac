Algoritmo "pedidosRestaurante"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 24/11/2022
Var
   // Seção de Declarações das variáveis
   numeroPedido:inteiro
   mesa:inteiro
   horaChegada:caracter
   horaSaida:caracter
   data:caracter
   pedido: vetor [1..10] de caracter
   numeroRegistroGracom:inteiro
   valor: vetor [1..10] de real
   somaValor: real
   valorTotal:real
   statusFechamento:caracter
   formaPagamento:caracter
   contador:inteiro
   contadorPedido:inteiro
   menu:inteiro
   cardapio:inteiro
   produto:inteiro

Inicio
   contador<-1
   contadorPedido<-1
   // Seção de Comandos, procedimento, funções, operadores, etc...
   Repita

      escreval("Menu")
      escreval("1 - Pedido")
      escreval("2 - Fechar pedido ")
      escreval("3 - sair")
      leia(menu)

      escolha menu
      caso 1
         escreval("Novo pedido")
         escreval("Digite a mesa")
         leia(mesa)

         escreval("Digite a hora da entrada")
         leia(horaChegada)

         escreval("Digite a data")
         leia(data)


         escreval("Digite a numero de registro do graçom")
         leia(numeroRegistroGracom)



         Repita

            escreval("Cardapio")
            escreval("1 - escolha prato")
            escreval("2 - Continuar o pedido")
            leia(cardapio)

            escolha cardapio
            caso 1

               Repita
               contador<-contador + 1
                  escreval("Produtos")
                  escreval("1 - Prato 1")
                  escreval("2 - Prato 2")
                  escreval("3 - Sair")
                  leia(produto)

                  escolha produto
                  caso 1
                     pedido[contador]<-"Prato 1"
                     valor[contador]<-10
                  caso 2
                     pedido[contador]<-"Prato 2"
                      valor[contador]<-20
                      caso 3
                     pedido[contador]<-"Prato 3"
                      valor[contador]<-30
                  caso 3

                  fimescolha
               ate produto = 3

               //Limpatela

            fimescolha
         ate cardapio = 2

      caso 2

         enquanto (contadorPedido <= 10) faca
            escreval(pedido[contadorPedido],valor[contadorPedido])
            //somaValor<-valor[contadorPedido]
            //valorTotal<-somaValor+somaValor/
            contadorPedido<-contadorPedido + 1
            
         fimenquanto
         escreval(valorTotal)

      caso 3
         escreval("Tchau :)")

      fimescolha
   ate menu = 3


Fimalgoritmo