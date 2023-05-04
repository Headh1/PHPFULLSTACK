const title = document.getElementById('title');
title.style.color = "salmon";

const div1 = document.querySelector('#div1');

const li = document.getElementsByTagName('li');

const w = document.getElementsByClassName('www');
w[0].style.color = "green";

const title2 = document.querySelector('#title');
const li2 = document.querySelector('.none');
const li3 = document.querySelectorAll('.none');
li2.style.color = "#ccc";

// title.textContent = '<span>연어</span>';
title.innerHTML = '<span>연어</span>';

const it = document.getElementById('it');
// it.setAttribute('placeholder','글자를 입력해주세요');
// it.removeAttribute('placeholder');

const aa = document.getElementById('aa');
// aa.setAttribute('href','http://www.naver.com');

it.addEventListener('mouseenter', function(){
    it.setAttribute('placeholder','글자를 입력해주세요');
})
it.addEventListener('mouseleave',function(){
    it.removeAttribute('placeholder');
})


// aa.style.textDecoration = 'none';

aa.classList.add('aa');

const cli = document.createElement('li');
cli.innerHTML = '연어스테이크';

const ul = document.getElementsByTagName('ul');
// ul[0].appendChild(cli);

// cli.remove();

const z = document.querySelector('li:nth-child(3)');
ul[0].insertBefore(cli,z);


// 5,6 사이에 훈제연어 , 연어김밥
const c = document.createElement('li');
c.innerHTML = '훈제연어';
const cc = document.createElement('li');
cc.innerHTML = '연어김밥';
const o = document.querySelector('li:nth-child(5)');
ul[0].insertBefore(c,o);
ul[0].insertBefore(cc,o);

for(let i = 0; i<li.length; i++){
    if(i%2 === 0){
        li[i].style.backgroundColor = "#f7773b";
    }
    else{
        li[i].style.backgroundColor = "#ffddda";
    }
}

