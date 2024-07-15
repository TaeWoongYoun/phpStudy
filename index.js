const join = document.querySelector('.join');
const reset = document.querySelector('#reset');
const join_form = document.querySelector('.join_form');

join.addEventListener('click', () =>{
    join_form.style.display = 'block'
})

reset.addEventListener('click', () =>{
    join_form.style.display = 'none'
})