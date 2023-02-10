const listItems = document.querySelectorAll('li');

listItems.forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault();
        listItems.forEach(item => {
            item.classList.remove('active');
        });
        event.currentTarget.classList.add('active');
    });
});


const toggleBtn = document.querySelector('.toggle');
const sidebar = document.querySelector('#sidebar');
const content = document.querySelector('#content');

toggleBtn.addEventListener('click', function() {
    sidebar.classList.toggle('is-hidden');
    content.classList.toggle('is-hidden');
});









// TOGGLE SIDEBAR

