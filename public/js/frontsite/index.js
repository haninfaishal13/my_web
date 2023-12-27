document.querySelector('#login').addEventListener('click', () => {
    document.querySelector('#login').classList.add('active')
    document.querySelector('#register').classList.remove('active')
    document.querySelector('#login-page').classList.remove('d-none')
    document.querySelector('#register-page').classList.add('d-none')
})

const auth_modal = new bootstrap.Modal(document.getElementById('auth-modal'))
document.querySelector('#register').addEventListener('click', () => {
    document.querySelector('#login').classList.remove('active')
    document.querySelector('#register').classList.add('active')
    document.querySelector('#login-page').classList.add('d-none')
    document.querySelector('#register-page').classList.remove('d-none')
})

document.querySelector('#login-form').addEventListener('submit', (event) => {
    event.preventDefault()
    const form = document.getElementById('login-form')
    const formData = new FormData(form)
    // const token = document.getElementsByName("csrf_token")[0].getAttribute('content')
    const url = base_url + '/auth/login'

    fetch(url, {
        headers: {
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        body: formData
    })
    .then((response) => response.json)
    .then((data) => {

    })
    .catch((error) => {
        swal.fire()
    })
})

document.querySelector('#register-form').addEventListener('submit', (event) => {
    event.preventDefault()
    const form = document.getElementById('register-form')
    const formData = new FormData(form);
    // const token = document.getElementsByName("csrf_token")[0].getAttribute('content')
    const url = base_url + '/auth/register'

    fetch(url, {
        headers: {
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        body: formData
    })
    .then((response) => {
        if(response.ok) {
            return response.json();
        }
        return response.text().then(text => {throw new Error(text)})
    })
    .then((data) => {
        location.reload()
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
