// let arr=[1,2,3,4,5];

// arr.push(6);
// delete arr[5];

// arr.splice(2,1);
// arr.splice(2,1,3);]
// arr.splice(0,0,0);
// arr.splice(arr.length,0,arr.length);
// arr.splice(arr.length,0,7,8,9);

// index
// arr.indexOf(2);

// arr = [1,2,3,4,3,5,6,6,1];
// arr.lastIndexOf(1);

// concat
// let arr1 = [1,2,3];
// let arr2 = [4,5,6];
// let arr3 = [7,8,9]
// let re = arr1.concat(arr2,arr3);
// console.log(re);

// includes
// let arr = [1,2,3,4];
// console.log(arr.includes(5));

// sort
// let arr = [5,23,7,10,32,8,1,4];
// arr.sort();
// arr.sort( (a,b) => a - b );

// join
// let arr=["안녕","하세요."];
// let re=arr.join();
// let re1=arr.join('');
// let re2=arr.join('/')
// console.log(re);
// console.log(re1);
// console.log(re2);

// every
// const arr=[1,2,3,4,5];
// let re = arr.every(
//     function ( val ){
//         return val <=5 ;
//     }
// );
// console.log(re);
// let re1 = arr.every(
//     function ( val ){
//         return val % 2 === 0 ;
//     }
// );
// console.log(re1);
// const arr1=[2,4,6,8];
// let re2 = arr1.every( val  => val % 2===0 );
// console.log(re2);

// some
// const arr = [1,2,3,4,5];
// let re = arr.some(
//     function(val){
//         return val <=6;
//     }
// )
// let re2 = arr.some(val => val%2===0);
// console.log(re);
// console.log(re2);

// filter
const arr=[1,2,3,4,5,6];
let re = arr.filter(val => val>=3);
console.log(re);