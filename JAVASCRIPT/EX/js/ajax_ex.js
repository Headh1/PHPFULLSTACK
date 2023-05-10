function uu(){
let url = ii.value;
fetch(url)
.then(res => {return res.json()})
.then(data => makeList(data))
.catch(console.log);
};

const bb = document.querySelector('#bb');
const dd = document.querySelector('#dd');
const ib = document.querySelector('#ib');
const ii = document.getElementById('ii');

function makeList(data){
    data.forEach(item => {
        console.log(item);
        const tagImg = document.createElement('img');
        tagImg.setAttribute('src',item.download_url);
        ib.appendChild(tagImg);
    })
}

function uuu(){
    ib.innerHTML = '';
    ii.value = null;
}

bb.addEventListener('click',uu);
dd.addEventListener('click',uuu);
// ii.onblur
