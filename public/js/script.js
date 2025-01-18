let page_number = document.querySelectorAll(".page");
let first_number = document.querySelector("#first_page");
let second_number = document.querySelector("#second_page");
let first_page = document.querySelector(".first_page");
let second_page = document.querySelector(".second_page");

second_page.style.display = 'none';
page_number.forEach((number) => {
    number.addEventListener('click', () => {
        if(number.classList.contains('first_page')){
            console.log('primeira')
            first_page.style.display = 'block';
            second_page.style.display = 'none';
        } else if (number.classList.contains('second_page')){
            console.log("seconda")
            second_page.style.display = 'block';
            first_page.style.display = 'none';
        }
    });
})