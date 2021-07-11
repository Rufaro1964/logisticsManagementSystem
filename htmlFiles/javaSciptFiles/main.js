document.addEventListener("DOMContentLoaded",() => {
    const loginForm = document.querySelector("#login");
    const creatAccountForm = document.querySelector("#createAccount");

    document.querySelector("#linkCreateAccount").addEventListener("click",e => {
        e.preventDefault();
        loginForm.classList.add("form--hidden");
        creatAccountForm.classList.remove("form--hidden");
    });

    document.querySelector("#linkLogin").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.remove("form--hidden");
        creatAccountForm.classList.add("form--hidden");
    });
}); 