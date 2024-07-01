function lightMode() {
    const lightModeCheckbox = document.querySelector('input[name="terms"]');
    const html = document.querySelector('#html');

    if (lightModeCheckbox.checked) {
        html.setAttribute("data-theme", "light");
    } else {
        html.setAttribute("data-theme", "dark");
    }
}
