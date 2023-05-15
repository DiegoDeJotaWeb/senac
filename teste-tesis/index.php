<script>
    // program to generate fibonacci series up to a certain number

// take input from the user
const number = 16;
let n1 = 1, n2 = 1, nextTerm;

console.log('Fibonacci Series:');


nextTerm = n1 + n2;

while (nextTerm <= number) {

    // print the next term
    console.log(nextTerm);

    n1 = n2;
    n2 = nextTerm;
    nextTerm = n1 + n2;
}
</script>