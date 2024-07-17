document.addEventListener("DOMContentLoaded", function() {
    const join = document.querySelector('.join');
    const reset = document.querySelector('#reset');
    const join_submit = document.querySelector('.join_submit');
    const join_form = document.querySelector('.join_form');
    const login_form = document.querySelector('.login_form');
    const login = document.querySelector('.login');
    const login_reset = document.querySelector('.login_reset');

    join.addEventListener('click', () =>{
        join_form.style.display = 'block'
        login_form.style.display = 'none'
    })

    reset.addEventListener('click', () =>{
        join_form.style.display = 'none'
    })

    login.addEventListener('click', () =>{
        login_form.style.display = 'block'
        join_form.style.display = 'none'
    })

    login_reset.addEventListener('click', () =>{
        login_form.style.display = 'none'
    })

    join_submit.addEventListener('click', (event) => {
        const id = document.querySelector('#input_id');
        const name = document.querySelector('.input_name');
        const pw = document.querySelector('.input_pw');
        const pw_ck = document.querySelector('.input_pw_ck');

        if (!id.value) {
            alert('아이디를 입력해주세요.');
            id.focus();
            event.preventDefault();
            return;
        }

        if (id.value.length < 4 || id.value.length > 12) {
            alert('아이디를 4자 이상 12자 이하로 입력해주세요.');
            id.focus();
            event.preventDefault();
            return;
        }

        if (!name.value) {
            alert('이름을 입력해주세요.');
            name.focus();
            event.preventDefault();
            return;
        }

        if (name.value.length < 4 || name.value.length > 12) {
            alert('이름을 4자 이상 12자 이하로 입력해주세요.');
            name.focus();
            event.preventDefault();
            return;
        }

        if (!pw.value) {
            alert('비밀번호를 입력해주세요.');
            pw.focus();
            event.preventDefault();
            return;
        }

        if (pw.value !== pw_ck.value) {
            alert('비밀번호가 다릅니다. 다시 입력해주세요.');
            pw.focus();
            event.preventDefault();
            return;
        }

        if (pw.value.length < 4 || pw.value.length > 16) {
            alert('비밀번호를 4자 이상 16자 이하로 입력해주세요.');
            pw.focus();
            event.preventDefault();
            return;
        }
    });
})