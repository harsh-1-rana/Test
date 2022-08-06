let arr;

function product(arr) {
    if (arr.length < 1) {
        return 1;
    }
    return arr.shift() * product(arr);
}
console.log(product([1, 2, 3, 4, 5]));