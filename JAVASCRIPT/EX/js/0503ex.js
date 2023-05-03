let num =10;

// 1. 1~ 입력값의 요소를 가지는 배열
let arr=[];
for(let i=1; i<=num; i++){
    arr.push(i);
}

// 2. 소수만 찾아서 새로운 배열
let re = arr.filter(
    function ( val ){
            let c =0;
            for(let b=1; b<=val; b++){
                if(val%b === 0){
                    c++;
                }
            }
            if (c === 2){
                return true;
            }
            else{
                return false;
            }
        }
    )

console.log(re);
alert(re);
// 3. alert 출력

