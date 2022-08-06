// without using recursion concept
let arr = [];

function replicate(x, y) {
    if (x <= 0) {
        return arr;
    }
    for (i = 0; i < x; i++) {
        arr.push(y);
    }
    return arr;
}
console.log(replicate(3, 5))


// using recursion

let arr = [];

function replicate(x, y) {
    if (x <= 0) {
        return arr;
    }

    return [y].concat(replicate(x - 1, y));
}
console.log(replicate(3, 5))