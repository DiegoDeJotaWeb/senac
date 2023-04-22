var formMercado = document.getElementById("form-carrinho");
var cupomFiscal = document.getElementById("cupom");
var produtoImagem = document.getElementById("produto-imagem");
var totalAPagar = document.getElementById("total-pagar");
var codigoProduto = document.getElementById("codigo-produto");



let produtosCompra = [];
let precoCompra = [];
let qtdCompra = [];

let total = document.getElementById("total");

const mercadorias =[
    [100,"Arroz",21.90,"img/arroz.png"],
    [101,"Feijão",7.90,"img/feijao.jpg"],
    [102,"Biscoito",7.90,"img/biscoito.jpg"],
    [103,"Suco",1.29,"img/suco.jpg"],
    [104,"Leite",7.99,"img/leite.jpg"]
]


formMercado.addEventListener('keyup', function() {
  console.log(codigoProduto.value);

  mercadorias.forEach(produtos => {
      if(codigoProduto.value == produtos[0]){
        formMercado.nome_produto.value =produtos[1];
        formMercado.preco_produto.value =produtos[2];
        formMercado.qtd_produto.focus();
        produtoImagem.src = produtos[3];
      }
      
  })

})


formMercado.addEventListener('submit', function (event) {
    event.preventDefault();

    produtosCompra.push(formMercado.nome_produto.value);
    precoCompra.push(Number(formMercado.preco_produto.value));
    qtdCompra.push(Number(formMercado.qtd_produto.value));

    gerarCupomFiscal();

    // console.log(produtosCompra);

    
// console.log(btnExcluir);

/* 
for (let i = 0; i < btnExcluir.length; i++) {

    console.log(i);

    

    btnExcluir.addEventListener('click', function (event) {
        event.preventDefault();
    
    
    console.log("teste"+[i]);
    
    // for (let i = 0; i < produtosCompra.length; i++) {
    
    // produtosCompra.splice(produtosCompra.indexOf(produtosCompra[i]), 1);
    
    // }
    
    })
} */
})

function gerarCupomFiscal(){
    let result = '';
    let totalCompra =0
   
    for (let i = 0; i < produtosCompra.length; i++) {


     

        // console.log(produtosCompra[i]);

        totalProduto = precoCompra[i] * qtdCompra[i];
        
        totalCompra += totalProduto;
        // console.log(totalCompra);

        result += `<tr>
        <td>${produtosCompra[i]} </td>         
        <td> ${qtdCompra[i]}</td>
        <td>R$ ${precoCompra[i].toFixed(2)} </td> 
        <td>R$ ${totalProduto.toFixed(2)}</td>
        <td><button class="btnExcluir" onclick="excluir(${[i]})">X</button></td>
        </tr>
        
        
        `;

        total.innerHTML = "";
        total.innerHTML = result;

    }

    result += `<tr style="background:#ccc">
    <td colspan="3">Total</td>
    <td>R$ ${totalCompra.toFixed(2)}</td>
    </tr>`;
    total.innerHTML = result;

}

function excluir(posicao){
    console.log(posicao);

    produtosCompra.splice(posicao, 1) 
    precoCompra.splice(posicao, 1) 
    qtdCompra.splice(posicao, 1) 
    gerarCupomFiscal();
}