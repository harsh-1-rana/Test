function validate(e){
    // console.log("validate");
    let checked = true;
    let namee = document.getElementById('namee').value;
    let title = document.getElementById('title').value;
    let body = document.getElementById('body').value;

    if(namee === ""){
        document.getElementById('nameerr').style.display = "block";
        checked=false;
    }else{
        document.getElementById('nameerr').style.display = "none";
    }
    if(title === ""){
        document.getElementById('titleerr').style.display = "block";
        checked=false;
    }else{
        document.getElementById('titleerr').style.display = "none";
    }
    if(body === ""){
        document.getElementById('bodyerr').style.display = "block";
        checked=false;
    }else{
        document.getElementById('bodyerr').style.display = "none";
    } 
    
    if(edit && checked){
      update();
      post();
    }
    else if(checked){
        post();
    }

    e.preventDefault();
}
function update() {
  Articleslist[update_id].namee=namee.value;
  Articleslist[update_id].title=title.value;
  Articleslist[update_id].body=body.value;
  console.log(Articleslist[update_id]);
}
 
const form = document.getElementById('create_form');
form.addEventListener('submit', validate);