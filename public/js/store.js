var modal_container = document.getElementById('modal_container');

var btn = document.getElementById('modal_button')

btn.onclick = () => {
    modal_container.style.display = "flex"
}

window.onclick = (e) => {
    if (e.target == modal_container) {
        modal_container.style.display = "none"
    }
}