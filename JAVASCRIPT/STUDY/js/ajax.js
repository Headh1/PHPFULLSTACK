const url = "https://picsum.photos/v2/list?page=1&limit=5";
fetch(url)
.then(res => {return res.json()})
.then(data => makeList(data))
.catch(console.log);


function makeList(data){
    data.forEach(item => {
        console.log(item);
        const tagImg = document.createElement('img');
        tagImg.setAttribute('src',item.download_url);
        document.body.appendChild(tagImg)
        tagImg.style.width= 200+"px";
        tagImg.style.height= 150+"px";
    })
}

