show();
let list = document.getElementById('name');
let addbtn = document.getElementById('addbtn');
addbtn.addEventListener('click', function() {
    value = list.value;
    if (value.trim() != 0) {
        let task1 = localStorage.getItem('localtask');
        if (task1 == null) {
            object = [];
        } else {
            object = JSON.parse(task1);
        }
        object.push(value);
        localStorage.setItem("localtask", JSON.stringify(object));
    }
    list.value = "";
    show();
})

function show() {
    let task1 = localStorage.getItem('localtask');
    if (task1 == null) {
        object = [];
    } else {
        object = JSON.parse(task1);
    }
    let html = '';
    let tasklist = document.getElementById('tasklist');
    object.forEach((value, index) => {
        html += `
    <ul class="list">
     <li> ${value}
     <span type="button"  id="editbutton" onclick="edittask(${index})"> <i class="fa-solid fa-pen-to-square"></i> </span>
     <span type="button" id="dltbutton" onclick="deleteitem(${index})"> X </span>
    </li>
    </ul>
    `;
    });
    tasklist.innerHTML = html;
}

function edittask(index) {
    let save_index = document.getElementById('saveindex');
    let add_task_btn = document.getElementById('addbtn');
    let save_task_btn = document.getElementById('savebtn');
    save_index.value = index;
    let task1 = localStorage.getItem('localtask');
    let object = JSON.parse(task1);
    list.value = object[index];
    add_task_btn.style.display = 'none';
    save_task_btn.style.display = 'block';
}
let save_task_btn = document.getElementById('savebtn');
save_task_btn.addEventListener('click', function() {
    let add_task_btn = document.getElementById('addbtn');
    let task1 = localStorage.getItem('localtask');
    let object = JSON.parse(task1);
    let saveindex = document.getElementById('saveindex').value;
    object[saveindex] = list.value;
    save_task_btn.style.display = "none";
    add_task_btn.style.display = "block";
    localStorage.setItem("localtask", JSON.stringify(object));
    list.value = '';
    show();
})

function deleteitem(index) {
    let task1 = localStorage.getItem('localtask');
    let object = JSON.parse(task1);
    object.splice(index, 1);
    localStorage.setItem("localtask", JSON.stringify(object));
    show();
}