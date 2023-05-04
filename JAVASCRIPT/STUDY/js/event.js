const b = document.querySelector('#b1');
b.onclick = function(){
    // location.href = "http://www.google.com";
    if(confirm("이동?")) document.location = 'http://www.google.com';
}

// if(!alert("갈래?")) document.location = 'http://www.google.com';

// alert('이동?');
// b.onclick = function(){
// }