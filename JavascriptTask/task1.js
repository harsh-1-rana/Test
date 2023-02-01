todo = JSON.parse(localStorage.getItem('mytodolist')) || [];
let todoform = document.querySelector('#todo_form');
let deleteBTN = document.getElementById('edit');
let editBTN = document.getElementById('delete');

let todo_content = document.getElementById('list_value').value;
let todo_category = document.querySelector('input[name="category"]:checked');
message = document.getElementsByClassName('message')[0]

let edit = false;
let editID;

todoform.addEventListener('submit', e => {
  e.preventDefault();
  if (document.getElementById('list_value').value.length == 0 || document.querySelector('input[name="category"]:checked') == null) {
    showresult("Please enter valid values", "red");
    return;
  }
  else {
    if (edit) {
      todo[editID].list_value = document.getElementById('list_value').value;
      todo[editID].category = document.querySelector('input[name="category"]:checked');
      document.getElementById('add_todo').value = "Add ToDo";
      document.getElementById('create_todo').innerText = "Create A To Do";
      edit = false;
      showresult("Item has been updated", "green");
    }
    else {
      let todoitem = {
        list_value: e.target.elements.list_value.value,
        category: e.target.elements.category.value,
      }
      todo.push(todoitem);
      showresult("New Item Added Successfully", "green")
    }
    localStorage.setItem('mytodolist', JSON.stringify(todo));
    displaydata(prevRange, currRange);
    pageCount = Math.ceil(todo.length / paginationLimit);
    getPaginationNumbers();
    setCurrentPage(pageCount);
    e.target.reset();
  }
})

function displaydata(prevRange, currRange) {
  let todolist = document.querySelector('#list');

  todolist.innerHTML = " ";
  if (todo.length > 0) {
    // for (let i = 0; i < todo.length; i++) {
    // console.log(todo[i].category);
    todo.forEach((item, index) => {
      if (index >= prevRange && index < currRange) {
        document.getElementsByClassName('list')[0].innerHTML += `
    <div class = "todo_container">
    <label>
            <input type="checkbox" id="${item.category}" class="${item.category}"/>
            <span id="${item.category}"  class="${item.category} bubble"></span>
    </label>

    <div class="list_content">
            <input type="text" value="${item.list_value}" readonly />
            <button class="edit" id="edit" onclick="edititem(${index})">Edit</button>
            <button class="delete" id="delete" onclick="deleteitem(${index})">Delete</button>
    </div>
    </div>`
      }
    });
    // }
  }
  else {
    document.getElementsByClassName('list')[0].innerHTML += "<h1>No Data Present</h1>"
  }

}

function deleteitem(id) {
  let cnfrmdelete = confirm('Are you sure you want to delete the item?');
  if (cnfrmdelete) {
    todo.splice(id, 1);
    localStorage.setItem("mytodolist", JSON.stringify(todo));
    displaydata(prevRange, currRange);
    getPaginationNumbers();
    setCurrentPage(pageCount);
    showresult("Item Deleted", "red");
  }

}

// edit functionality
function edititem(id) {
  edit = true;
  editID = id;
  // console.log(editID);
  document.getElementById('add_todo').value = "Edit ToDo";
  document.getElementById('create_todo').innerText = "Edit ToDo";
  document.getElementById('list_value').value = todo[id].list_value;
  // console.log(document.getElementById(todo[id]).category.checked);
  document.getElementById(todo[id].category).checked = true;
  // console.log(document.getElementById(todo[id].category));
}

// function to show results 

function showresult(msg, color) {
  message.innerHTML = `<p>${msg}<p>`;
  message.style.backgroundColor = color;
  message.style.color = "black";
  setTimeout(removeresult, 3000);
}

function removeresult() {
  document.getElementsByClassName('message')[0].innerHTML = '';
}

