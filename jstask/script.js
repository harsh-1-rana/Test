let Articleslist = new Array();
// Articleslist = data;
console.log(Articleslist);
function post() {
    let articles = {
        'namee': namee.value,
        'title': title.value,
        'body': body.value,
    }
    if (namee.value != '' && edit== false) {
        Articleslist.push(articles);
    }
    if(edit==true){
        edit=false;
    }
    console.log(Articleslist);
    document.getElementById("posts").innerHTML = "";
    for (let i = 0; i < Articleslist.length; i++) {
        document.getElementById("posts").innerHTML +=
        `<div class="article_container">
          <div class="flex_box_child">
           <div class="author_name">${Articleslist[i].namee}</div> 
           <div class="article_title">${Articleslist[i].title}</div> 
           <div class="article_body">${Articleslist[i].body}</div>
           <span class="options">
           <i onclick="editarticle(${i})" class="fas fa-edit" id="edit"></i>
           <i onclick="deletearticle(${i})" class="fas fa-trash-alt" id="delete"></i>
           </span>
          </div>
          <div class="article_image"><img src="https://washington.org/themes/custom/washington/images/pic-3.png" alt="">
          </div>
        </div>`;
    }
    namee.value = "";
    title.value = "";
    body.value = "";
    // return false;
}
