document.addEventListener("DOMContentLoaded", function () {
    var icon = document.querySelectorAll('.items__title label svg');
    var element = document.querySelectorAll('.bar__menuChild');
    icon.forEach((items,index ) => {
        items.onclick = function(){
            element[index].classList.toggle('bar__menuChild-active');
            icon[index].classList.toggle('icon__active');
        }
    })
}, false)