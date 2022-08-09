let state = {
    balance: 0,
    earning: 0,
    expense: 0,
    transactions: [
        // { name: 'SALARY', amount: 5000, type: 'income' },
        // { name: 'BUY BOOKS', amount: 400, type: 'expense' },
        // { name: 'BUY VEGETABLES', amount: 100, type: 'expense' }
    ]
}

let balanceAmt = document.querySelector('#balance');
let earningAmt = document.querySelector('#earning');
let expenseAmt = document.querySelector('#expense');
let tarnsactionsAmt = document.querySelector('#transaction');
let incomeBtn = document.querySelector('#incomeBtn');
let expenseBtn = document.querySelector('#expenseBtn');
let textinputEl = document.querySelector('#name');
let amountinputEl = document.querySelector('#amount')


function init() {
    let localstate = JSON.parse(localStorage.getItem('expensetrackerstate'));

    if (localstate !== null) {
        state = localstate;
    }

    updatestate();
    btnlisteners();
}

function btnlisteners() {
    incomeBtn.addEventListener('click', OnAddIncomeClick);
    expenseBtn.addEventListener('click', OnAddExpenseClick);
}

function OnAddIncomeClick() {
    if (textinputEl.value !== '' && amountinputEl.value !== '') {
        var transn = {
            name: textinputEl.value,
            amount: parseInt(amountinputEl.value),
            type: 'income'

        };
        state.transactions.push(transn);

        updatestate();

    } else {
        alert('please enter valid data');
    }

    textinputEl.value = '';
    amountinputEl.value = '';

}

function OnAddExpenseClick() {
    if (textinputEl.value !== '' && amountinputEl.value !== '') {
        var transn = {
            name: textinputEl.value,
            amount: parseInt(amountinputEl.value),
            type: 'expense'

        };
        state.transactions.push(transn);

        updatestate();

    } else {
        alert('please enter valid data');
    }
    textinputEl.value = '';
    amountinputEl.value = '';

}

function updatestate() {
    let balance = 0,
        earning = 0,
        expense = 0;

    for (let j = 0; j < state.transactions.length; j++) {
        if (state.transactions[j].type === 'income') {
            earning += state.transactions[j].amount;
        } else if (state.transactions[j].type === 'expense') {
            expense += state.transactions[j].amount;
        }
    }

    balance = earning - expense;
    // console.log(balance, earning, expense);

    state.balance = balance;
    state.earning = earning;
    state.expense = expense;

    localStorage.setItem('expensetrackerstate', JSON.stringify(state));

    render()


}

function render() {
    balanceAmt.innerHTML = `$${state.balance}`;
    earningAmt.innerHTML = `$${state.earning}`;
    expenseAmt.innerHTML = `$${state.expense}`;

    let transactionAmt, containerEl, amountEl;

    tarnsactionsAmt.innerHTML = '';

    for (let i = 0; i < state.transactions.length; i++) {
        transactionAmt = document.createElement('li');
        transactionAmt.append(state.transactions[i].name);
        tarnsactionsAmt.appendChild(transactionAmt);

        containerEl = document.createElement('div');
        amountEl = document.createElement('span')
        if (state.transactions[i].type == 'income') {
            amountEl.classList.add('income-amount')
        } else if (state.transactions[i].type == 'expense') {
            amountEl.classList.add('expense-amount')
        }
        amountEl.innerHTML = `$${state.transactions[i].amount}`;

        containerEl.appendChild(amountEl);
        transactionAmt.appendChild(containerEl);
    }
}
init();