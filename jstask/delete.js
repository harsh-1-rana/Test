function deletearticle(id){
    //  alert(id);
     var result = confirm("Are You Sure You Want to delete this Article?");
    //  console.log(Articleslist);
    if(result){
     Articleslist.splice(id, 1);
    }
    //  console.log(Articleslist);
     post();
}