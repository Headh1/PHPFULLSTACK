// const t = setTimeout(() => console.log('a'),10000);

// clearTimeout(t);

// const i = setInterval(() => console.log('a'),1000);

// clearInterval( i );

// const i = setTimeout(function(){for(let a=1; a<6; a++){console.log(a)}},1000);

// setTimeout(() => console.log(2),2000);
// setTimeout(() => console.log(1),1000);
// setTimeout(() => console.log(5),5000);
// setTimeout(() => console.log(3),3000);
// setTimeout(() => console.log(4),4000);

// let a=1;
// const i = setInterval(function (){
//     if(a<6){console.log(a++)}},1000);

// const j = setInterval(()=>{
//     console.log(a);
//     if(a++ === 5){
//         clearInterval(j);
//     }
// },1000)

// const i = setInterval(() => console.log('a'),1000);
function getTime(){
const date = new Date();
const hour = date.getHours();
const minutes = date.getMinutes();
const seconds = date.getSeconds();
// clock.innerHTML = hour +":" + minutes + ":"+seconds;
document.write('현재 시각 : ' + date.toLocaleTimeString('ko-kr'));
};

setInterval(getTime,1000);
// function 