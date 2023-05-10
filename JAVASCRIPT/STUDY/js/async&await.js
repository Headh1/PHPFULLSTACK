// function delay() {
//     const delayTime = Date.now()+2000;
//     while(Date.now()< delayTime){}
//     console.log('B');
// }

// function delay2() {
//     return new Promise(function(resolve){
//         const delayTime = Date.now()+2000;
//         while(Date.now()< delayTime){}
//         resolve('B');
//     });
// }

// async function delay3() {
//     const delayTime = Date.now()+2000;
//     while(Date.now()< delayTime){}
//     return 'B';
// }

// console.log('A');
// delay3()
// .then( function(b) { 
//     console.log(b)}
//     );
// console.log('C');

function myDelay(s) {
    return new Promise( resolve => setTimeout(resolve,s));
    // setTimeout((()=>{}),s)
}

async function getA(){
    await myDelay(1000);
    return 'a';
}
async function getB(){
    await myDelay(2000);
    return 'b';
}
function getC(){
    myDelay(3000);
    return 'c';
}

console.log(getA()+getB());

// getA()
// .then(strA => {return getB().then(strB => console.log(`${strA} : ${strB}`))});

// async function getAll() {
//     const strA = await getA();
//     const strB = await getB();

//     console.log(`${strA} : ${strB}`);
// }

// getAll();

async function getAll2() {
    Promise.all([getA(),getB()])
    .then(all => console.log(all.join(' : ')));

    // console.log(`${strA} : ${strB}`);
}
getAll2();
