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

ClassicEditor
.create( document.querySelector( '#post_content' ) )
.catch( error => {
    console.error( error );
} );
