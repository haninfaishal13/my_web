const token = document.getElementsByName("csrf_token")[0].getAttribute('content')

const sidebar = document.querySelectorAll('.sidebar > ul > li');
for(let i=0 ; i < sidebar.length ; i++) {
    sidebar[i].addEventListener("click", () => {
        document.querySelectorAll('.sidebar > ul > li.active')[0].classList.remove('active')
        sidebar[i].classList.add('active');
    })
}

const btn_sidebar = document.querySelector('#btn-sidebar-toggle')
btn_sidebar.addEventListener("click", () => {
    const side_nav = document.querySelector('#side-nav')
    const main_content = document.querySelectorAll('.main-content');
    if(window.innerWidth > 767) {
        side_nav.classList.toggle('nonactive')
        for(let j=0; j<main_content.length ; j++) {
            main_content[j].classList.toggle('full')
        }
    } else {
        side_nav.classList.toggle('active')
    }
})

const btn_sidebar_close = document.querySelector('#close-btn')
btn_sidebar_close.addEventListener("click", () => {
    const side_nav = document.querySelector('#side-nav')
    side_nav.classList.remove('active')
})

const btn_logout = document.querySelector('#btn-logout')
btn_logout.addEventListener("click", () => {
    const url = base_url + '/backsite/auth/logout';
    fetch(url, {
        headers: {
            "X-CSRF-TOKEN": token
        },
        method: 'post',
    })
    .then((response) => {
        if(response.ok) {
            return response.json();
        }
        return response.text().then(text => {throw new Error(text)})
    })
    .then((data) => {
        window.location = base_url + '/backsite/auth'
    })
    .catch((error) => {
        resp = JSON.parse(error.message)
        let messages = ``
        resp.message.forEach(element => {
            console.log(element)
            messages += `${element}<br>`
        });
        swal.fire('Error', messages, 'error')
    })
})
