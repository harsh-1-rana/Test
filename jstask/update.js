let edit = false;
let update_id;
function editarticle(ids){
  edit=true;
   update_id=ids;
   console.log(ids);
   console.log(Articleslist[ids]);
   document.getElementById('namee').value = Articleslist[ids].namee;
   document.getElementById('title').value = Articleslist[ids].title;
   document.getElementById('body').value = Articleslist[ids].body;
  //  validate();
}