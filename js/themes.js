var container = document.getElementById('themeSelect')
var selectOption = container.options[container.selectedIndex];
var lastSelected = localStorage.getItem('themes');

if (lastSelected) {
    container.value = lastSelected
}


container.addEventListener('change', function() {
    const result = container.value;
    localStorage.setItem('themes', result)
    document.documentElement.setAttribute('data-theme', localStorage.getItem('themes'))
})

document.documentElement.setAttribute('data-theme', localStorage.getItem('themes'))










