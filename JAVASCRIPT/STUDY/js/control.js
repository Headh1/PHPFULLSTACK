// if(1>0){
//     console.log("1은 0보다 크다");
// } 
// else if(1<0){
//     console.log("1은 0보다 작다");
// }
// else{
//     console.log("기타등등");
// } 

// let a = 30;
// switch (a) {
//     case 20:
//         console.log("20살");
//         break;

//     default:
//         console.log(a+"살");
//         break;
// }

// let num = 0;
// while( num <=3 ){
//     console.log(num);
//     num++;
// }

// let n1=1;
// let n2=2;
// do {
//     console.log(n2+" * "+n1+" = "+n2*n1);
//     n1++;
// } 
// while ( n1<10);


// for (let i=2; i <10; i++) {
//     console.log(i+"단")
//     for(let j=1; j <10; j++){
//     console.log(i+" * "+j+" = "+i*j)};
// console.log("\n");
// }


// let arr = [1,2,3,4];
// arr.forEach(function (val) {
//     console.log(val);
// })

// arr={
//     u_name:"k"
//     ,u_age:30
//     ,u_gen:"f"
// }
// for( let i in arr ){
//     console.log(i+" : "+arr[i]);
// }

// arr = [1,2,3,4];
// arr.num= 0;
// for ( let i of arr) {
//     console.log(i);
// }

for( let i=1; i<6; i+=2){
    for(let j=5; i<j; j-=2){
        var star = " ";
    }
    for(let j=0; i>j; j++){
        star += "*";
    }
    star += "\n";
}
console.log(star);
