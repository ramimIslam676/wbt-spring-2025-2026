let a = 9;
let b = 5;

console.log(`before swap: a: ${a}, b: ${b}`);

a = a - b;
b = b + a;
a = b - a;

console.log(`after swap: a: ${a}, b: ${b}`);


function square(x) {
    return x * x;
}

console.log(square(5));

const numbers = [1, 2, 3, 4, 5];

let temp = 0;

for (const num of numbers) {
    if (num > temp) {
        temp = num;
    }
}
console.log(temp);
