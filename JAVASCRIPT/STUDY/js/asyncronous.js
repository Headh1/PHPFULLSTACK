// console.log('a');
// setTimeout( () => {
//     console.log('b');
// },1000);
// console.log('c');

// const a = 2;
// const b = 3;
// const sum = function() {
//     setTimeout( () => {
//     return a+b;},1000);
// }
// console.log(sum());

// setTimeout(() => {
//     console.log('a');
//     setTimeout(() => {
//         console.log('b');
//         setTimeout(() => {
//             console.log('c');
//         }, 1000);
//     }, 2000);
// }, 3000);

const Login = {
    chkInput(id,pw,t,f){
        setTimeout(() => {
            if(id !==''&& pw !==''){
                t({chkid : id, chkpw : pw})
            } else{
                f(new Error('다시 입력해주세요'));
            }
        },500);
    }
    ,loUser(id,pw,t,f){
        setTimeout(() => {
            if(id ==='php506'&& pw ==='506'){
                t(id)
            } else{
                f(new Error('없는 유저입니다.'));
            }
        },500);
    }
    ,chkAuth(id,t,f){
        setTimeout(() => {
            if(id ==='php506'){
                t({authId : id, auth : 'admin'})
            } else{
                f(new Error('권한이 없습니다.'));
            }
        },500);
    }
}

const id = '';
const pw = '';

Login.chkInput(id ,pw 
    ,chkData => {
        Login.loUser(
            chkData.chkid
            ,chkData.chkpw
            , loginId => {
                Login.chkAuth(
                    loginId
                    ,authData => {console.log(`${authData.authId}유저님, 권한은 ${authData.auth}입니다`)}
                    , authError => {console.log(authError.message)}
                    )
            }
            , loginError => {console.log(loginError.messge)}
        )
    } 
    ,chkError =>{ console.log(chkError.message);}
    );

function myCallback(i){
    return i+1;
}

function printNum(fn){
    console.log(fn(6));
}

printNum(myCallback);