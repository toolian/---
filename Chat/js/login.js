const form = document.querySelector("#login-form"); // Измените на идентификатор формы
const errorText = form.querySelector(".error-txt");

form.onsubmit = (e) => {
    e.preventDefault();

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.responseText;
                if (data === "Успешно") {
                    window.location.href = "users.php";
                } else {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            } else {
                console.error("Ошибка: " + xhr.status);
            }
        }
    }

    let formData = new FormData(form);
    xhr.send(formData);
}
