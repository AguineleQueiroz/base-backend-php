/* all scripts to handle menu */

const btnMenu = document.querySelector('.btn-menu');
const headerPrincipal = document.querySelector('.header-container');
const bodyDocument = document.querySelector("body")

btnMenu?.addEventListener('click', function () {
    headerPrincipal.classList.toggle('active');
    bodyDocument.classList.toggle('divide');
})