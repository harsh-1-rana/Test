let Articleslist = new Array();



function post(){
    let name = document.getElementById("name").value;
    let title = document.getElementById("title").value;
    let body = document.getElementById("body").value;
    let articles = {
        'name': name,
        'title': title,
        'body': body
    }
    Articleslist.push(articles);
    
    document.getElementById("posts").innerHTML +=
    // `<div class="flex_box_child"> <p>  ${name} , <span>  ${title} , </span> <span> ${body} , </span></p></div>
    `<div class="flex_box_child"><div> ${name} </div> <div>  ${title}  </div> <div> ${body}  </div></div>

    <span class="options">
      <i onClick="" class="fas fa-edit" id="edit"></zi>
      <i onClick="" class="fas fa-trash-alt" id="delete"></i>
    </span>
  </div>`;

    return false;
}
