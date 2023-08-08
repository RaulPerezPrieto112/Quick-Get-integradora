const heartImg = document.querySelector(".btn-like");

document.addEventListener('DOMContentLoaded', () => {
    heartImg.addEventListener('click', changeState);
});

function changeState() {
    console.log('Like!');
}