const paginationNumbers = document.getElementById("pagination-numbers");
let list = document.getElementsByClassName("todo_container")[0];

const nextButton = document.getElementById("next-button");
const prevButton = document.getElementById("prev-button");

let paginationLimit = 4;
let pageCount = Math.ceil(todo.length / paginationLimit);
let currentPage;
let prevRange;
let currRange;
let pageNumber;

const appendPageNumber = (index) => {
  const pageNumber = document.createElement("button");
  pageNumber.className = "pagination-number";
  pageNumber.innerHTML = index;
  pageNumber.setAttribute("page-index", index);
  pageNumber.setAttribute("aria-label", "Page " + index);
  paginationNumbers.appendChild(pageNumber);
};
const getPaginationNumbers = () => {
  document.getElementById('pagination-numbers').innerHTML = '';
  for (let i = 1; i <= pageCount; i++) {
    appendPageNumber(i);
  }
};


const setCurrentPage = (pageNum) => {
  currentPage = pageNum;
  
  handlePageButtonsStatus();
  handleActivePageNumber();
  const prevRange = (pageNum - 1) * paginationLimit;
  const currRange = pageNum * paginationLimit;
  displaydata(prevRange, currRange);
};

window.addEventListener("load", () => {
  getPaginationNumbers();
  setCurrentPage(1);

  prevButton.addEventListener("click", () => {
    setCurrentPage(currentPage - 1);
  });
  nextButton.addEventListener("click", () => {
    setCurrentPage(currentPage + 1);
  });

  document.querySelectorAll(".pagination-number").forEach((button) => {
    const pageIndex = Number(button.getAttribute("page-index"));
    if (pageIndex) {
      button.addEventListener("click", () => {
        setCurrentPage(pageIndex);
      });
    }
  });
});

const handleActivePageNumber = () => {
  document.querySelectorAll(".pagination-number").forEach((button) => {
    button.classList.remove("active");
    
    const pageIndex = Number(button.getAttribute("page-index"));
    if (pageIndex == currentPage) {
      button.classList.add("active");
    }
  });
};

// enabling and disabling previous and next buttons

const disableButton = (button) => {
  button.classList.add("disabled");
  button.setAttribute("disabled", true);
};
const enableButton = (button) => {
  button.classList.remove("disabled");
  button.removeAttribute("disabled");
};


const handlePageButtonsStatus = () => {

  if (currentPage === 1) {
    disableButton(prevButton);
  } else {
    enableButton(prevButton);
  }
  if (pageCount === currentPage) {
    disableButton(nextButton);
  } else {
    enableButton(nextButton);
  }
};
