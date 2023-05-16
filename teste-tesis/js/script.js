var str =
"AcaRQoYjlSlByityzQhvjnCNVpsaLeQPtGajQHVzbgabJuAiMHDxwfkcCwIGmZCTInlSiKvRKxAGzJsgmPeUBAReDamLzqgJgrXobzfoWiwvRPdFgJzIkSoJscWtVdEbuIRYhXOdHkayBdFIbHSyzIJtmGMhJTiFBaDIzrngCngdSnngUHFWpQpCwElHxunYWsiXKvFOkntcAHiXopTgIKkeovoLrBlPTtMfqTTAgrejUPgKeBsolCtAAjNtKBjfcAHiXopTgIKkeovoLrBlPTtMfqTTAgrejUPgKeBsolCtAAjNtKBjfcAHiXopTgIKkeovoLrBlPTtMfqTTAgrejUPgKeBsolCtAAjNtKBjfcAHiXopTgIKkeoviLrBlPTtMfqTTAgrejUPgKeBsolCtAAjNtKBjfcAHiXopTgIKkeovoLrBlPTtMfqTTAgrejUPgKeBsolCtAAjNtKBjfcAHiXopTgIKkeovoLrBlPTtMfqTTAgrejUPgKeBsolCtAAjNtKBjfcAHiXopTgIKkeovoLrBlPTtMfqTTAgrejUPgKeBsolCtAAjNtKBjfcAHiXopTgIlkeovoLrBlPTtMfqTTlgrejUPgleBsolCtAAjNtKBjfcAHiXopTgIKkeovoLrBlPTtMfqTTAgrejUPgKeBsolCtAAjNtKBjfcAHiXopTgIKkeovoLrBlPTtMfqTTAgrejUPgKeBsolCtAAjNtKBjf"
.toLowerCase();

var arr = str.split('');

const qtd = 610;
let n1 = 0,
n2 = 1,
proximo;


proximo = n1 + n2;
let texto = [];
while (proximo <= qtd) {
texto.push(arr[proximo])
// console.log(texto.push(arr[proximo]));
n1 = n2;
n2 = proximo;
proximo = n1 + n2;
}

//console.log(texto);

texto.splice(8, 0, ".");

//console.log(texto);

let tirarVirgulas = texto.join("");

//console.log(tirarVirgulas);

var email = tirarVirgulas + "@tesis.com.br";

console.log(email);

document.getElementById('email').innerHTML = email;
