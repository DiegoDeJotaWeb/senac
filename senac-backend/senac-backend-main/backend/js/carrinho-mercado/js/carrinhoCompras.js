let form = document.getElementById("form-carrinho");
let btn = document.getElementById("gerar");

let total = document.getElementById("total");

let produtos = [];
let valores = [];
let quantidade = [];


form.addEventListener('submit', function (event) {
    event.preventDefault();

    produtos.push(form.nomeProdruto.value);
    valores.push(Number(form.valorProdruto.value));
    quantidade.push(Number(form.quantidadeProdruto.value));

    let result = '';
    let totalCompra =0
   
    for (let i = 0; i < produtos.length; i++) {


        totalProduto = valores[i] * quantidade[i];

        // totalCompra = totalCompra  + totalProduto;
        totalCompra += totalProduto;
      


        // totalCompra += totalProduto;

        // console.log(totalProduto);
        console.log(totalCompra);

        result += `<tr>
        <td>${produtos[i]} </td>         
        <td> ${quantidade[i]}</td>
        <td>${valores[i]} </td> 
        <td> ${totalProduto}</td>
        </tr>
        
        
        `;

        total.innerHTML = "";
        total.innerHTML = result;

    }

    result += `<tr >
    <td colspan="3">Total</td>
    <td>${totalCompra}</td>
    </tr>`;
    total.innerHTML = result;
})

btn.addEventListener('click', function (event) {
    event.preventDefault();

    
    
  setTimeout(myGreeting, 5000);

   function myGreeting() {
   window.location.href = "carrinho.html";
   }
   
   
})