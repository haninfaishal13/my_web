const page_nav = document.querySelectorAll('.nav-segment > .page-nav');
for(let i=0 ; i < page_nav.length ; i++) {
    page_nav[i].addEventListener('click', () => {
        document.querySelectorAll('.nav-segment > .page-nav.active')[0].classList.remove('active')
        page_nav[i].classList.add('active')

        const page = page_nav[i].getAttribute('data-page')
        const page_all = document.getElementsByClassName('page')
        for(let j=0 ; j<page_all.length ; j++) {
            page_all[j].classList.remove('active')
        }
        document.getElementById('view-' + page).classList.add('active')
    })
}

// Contact
element_add('btn-repo-add', 'repo', ['repo-url'])

// Socmed
element_add('btn-socmed-add', 'socmed', ['socmed-url'])

// Skill
element_add('btn-language-add', 'language', ['language-name'])
element_add('btn-hardskill-add', 'hardskill', ['hardskill-name'])
element_add('btn-softskill-add', 'softskill', ['softskill-name'])
element_add('btn-education-add', 'education', ['education-place', 'education-major', 'education-title', 'education-start-date', 'education-finish-date'])
const skill_nav = document.querySelectorAll('.nav-segment > .skill-nav')
for(let i=0 ; i<skill_nav.length ; i++) {
    skill_nav[i].addEventListener('click', function() {
        document.querySelectorAll('.nav-segment > .skill-nav.active')[0].classList.remove('active')
        skill_nav[i].classList.add('active');

        const page = skill_nav[i].getAttribute('data-page');
        const page_all = document.getElementsByClassName('skill-page');
        for(let j=0 ; j<page_all.length ; j++) {
            page_all[j].classList.add('d-none');
        }
        document.getElementById(page).classList.remove('d-none')
    })
}
// Portofolio
element_add('btn-portofolio-add', 'portofolio', ['portofolio-name','portofolio-description', 'portofolio-media'])

function element_add(buttonClass, cardClass, inputClass) {
    const btn_repo_add = document.querySelector('#' + buttonClass);
    btn_repo_add.addEventListener('click', () => {
        const get_node = document.getElementsByClassName(cardClass)
        const last_node = get_node[get_node.length - 1]
        const clone = get_node[0].cloneNode(true)
        last_node.after(clone)
        element_remove('btn-'+ cardClass +'-remove')
        if(inputClass.length > 0) {
            for(let iter=0 ; iter<inputClass.length ; iter++) {
                const element_input = document.querySelectorAll('.' + inputClass[iter])
                element_input[element_input.length-1].value = ''
            }
        }
    })
    element_remove('btn-'+ cardClass +'-remove')
}

function element_remove(className) {
    const btn_remove = document.querySelectorAll('.' + className)
    for(let i=0 ; i<btn_remove.length ; i++) {
        btn_remove[i].addEventListener('click', () => {
            const btn_remove_length = document.getElementsByClassName(className).length
            if(btn_remove_length > 1) {
                const parent = btn_remove[i].parentElement.parentElement.parentElement.parentElement
                parent.remove()
            }
        })
    }
}
