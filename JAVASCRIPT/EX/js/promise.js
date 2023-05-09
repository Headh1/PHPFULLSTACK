// setTimeout( function() {
//     console.log('A');
//     },3000);
// setTimeout( function() {
//     console.log('B');
//     },2000);
// setTimeout( function() {
//     console.log('C');
//     },1000);

// 1. 콜백함수 이용 abc 순

// function myCallback(i){
//     return i+1;
// }
// function printNum(fn){
//     console.log(fn(6));
// }
// printNum(myCallback);

// setTimeout(() => {
//     console.log('a');
//     setTimeout(() => {
//         console.log('b');
//         setTimeout(() => {
//             console.log('c');
//         }, 1000);
//     }, 2000);
// }, 3000);


// 2. promise 이용 abc 순
function myPro(s,m) {
    return new Promise(resolve => {
    setTimeout(() => {
        console.log(s);
        resolve();
    }, m);
    });
}

myPro('a',3000)
    .then(() => myPro('b',2000))
    .then(() => myPro('c',1000));