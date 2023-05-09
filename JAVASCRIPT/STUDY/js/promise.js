// const pro1 = new Promise((resolve, reject)=>{
//     const data = true;

//     if(data){
//         resolve('성공');
//     }
//     else{
//         reject('error');
//     }
// });

// pro1
// .then(data => {console.log(data);})
// .catch(error => {console.log(error);})
// .finally(() => {console.log('fin.');})

function myPro() {
    return new Promise((resolve , reject)=> {
        const data = true;

    if(data){
        resolve('성공');
    }
    else{
        reject('error');
    }
    });
}

myPro()
.then(data => {console.log(data);})
.catch(error => {console.log(error);})
.finally(() => {console.log('fin.');})

const Login = {
    chkInput(id,pw){
        return new Promise((resolve , reject)=> {
        setTimeout(() => {
            if(id !==''&& pw !==''){
                resolve({chkId : id, chkPw : pw})
            } else{
                reject(new Error('다시 입력해주세요'));
            }
        },500);
    });
    }
    ,loUser(id,pw){
        return new Promise((resolve , reject)=> {
        setTimeout(() => {
            if(id ==='php506'&& pw ==='506'){
                resolve(id);
            } else{
                reject(new Error('없는 유저입니다.'));
            }
        },500);
    });
    }
    ,chkAuth(id){
        return new Promise((resolve , reject)=> {
        setTimeout(() => {
            if(id ==='php506'){
                resolve({authId : id, auth : 'admin'})
            } else{
                reject(new Error('권한이 없습니다.'));
            }
        },500);
    });
}
};
const id = 'php506';
const pw = '506';

Login.chkInput(id,pw)
.then(chkData => Login.loUser(chkData.chkId,chkData.chkPw))
.then(loginId => Login.chkAuth(loginId))
.then(authData => console.log(`${authData.authId}유저님, 권한은 ${authData.auth}입니다`))
.catch(error => console.log(error.message))