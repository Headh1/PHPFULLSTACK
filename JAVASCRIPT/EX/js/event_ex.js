const b = document.querySelector('#b');
const d = document.querySelector('.d');

let cc = 0;
let neww = null;


function location_rand(){
    var str1 = Math.floor((Math.random()*500 ))+'px';
    var str2 = Math.floor((Math.random()*500)) +'px';
    d.style.top = str1;
    d.style.left = str2;
}
function color_rand(){
    let co = ["red","blue","green","beige","salmon","gray","orange","skyblue"];
    var coo = Math.floor(Math.random()*co.length);
    d.style.backgroundColor = co[coo];
};

// function color_rand(){
//     let co = ["c.png","h.png","i.png","j.png","m.png","u.png"];
//     var coo = Math.floor(Math.random()*co.length);
//     d.style.backgroundImage = "url('../img/"+co[coo]+"')";
// };

b.addEventListener('mousedown',function(){ 
    alert('안녕하세요 \n나를 찾아라!');
    location_rand();
    color_rand();
} );

d.addEventListener('mouseover',function() { if( cc === true) {
    alert('두근두근')} });

d.addEventListener('click', function () {
    if (cc === 0) {
        alert('들켰다!');
        color_rand();
        cc = 1;
    } else {
        alert('안녕!');
        d.style.backgroundColor = "black";
        // d.style.backgroundImage = "url('../img/j.png')";
        location_rand();
        cc = 0;
    }
});


// function ev(c){
//     if(c === true){
//         d.addEventListener('click',function (){
//             alert('들켰다!');
//             d.style.backgroundColor = "green";
//         });
//         return false;
//     }
//     else{
//         d.addEventListener('click',function (){
//             alert('안녕!')
//             d.style.backgroundColor = "red";
//         });
//         return true;
//     }
// };

// d.addEventListener('click', ev(cc));

// d.addEventListener('click', ev(cc));

