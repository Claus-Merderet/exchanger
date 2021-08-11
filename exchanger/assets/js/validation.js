function validation_name() {
    var form = document.getElementById("form");
    var name = document.getElementById("name").value;
    var text_name = document.getElementById("text_name");
    var pattern_name = /^[А-ЯA-Z][а-яa-zА-ЯA-Z\-]{0,}\s[А-ЯA-Z][а-яa-zА-ЯA-Z\-]{1,}(\s[А-ЯA-Z][а-яa-zА-ЯA-Z\-]{1,})?$/;
    if (name.match(pattern_name)) {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text_name.innerHTML = "";
        text_name.style.color = "#0b00ab";
        document.getElementById("sub").disabled=false;
    }
    else {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text_name.innerHTML = "Please Enter Valid Name";
        text_name.style.color = "#000000";
        document.getElementById("sub").disabled=true;
    }
}

function validation_number() {
    var form = document.getElementById("form");
    var number = document.getElementById("number").value;
    var text_number = document.getElementById("text_number");
    var pattern_number = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/;
    if (number.match(pattern_number)) {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text_number.innerHTML = "";
        text_number.style.color = "#0b00ab";
        document.getElementById("sub").disabled=false;

    }
    else {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text_number.innerHTML = "Please Enter Valid Number";
        text_number.style.color = "#000000";
        document.getElementById("sub").disabled=true;
    }
}

function validation_email() {
    var form = document.getElementById("form");
    var email = document.getElementById("email").value;
    var text_email = document.getElementById("text_email");
    var pattern_email = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (email.match(pattern_email)) {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text_email.innerHTML = "Your Email Address in Valid.";
        text_email.style.color = "#0b00ab";
        document.getElementById("sub").disabled=false;
    }
    else {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text_email.innerHTML = "Please Enter Valid Email Address";
        text_email.style.color = "#000000";
        document.getElementById("sub").disabled=true;
    }
}
function validation_id() {
    var form = document.getElementById("form");
    var order_id = document.getElementById("order_id").value;
    var text_id = document.getElementById("text_id");
    var pattern_number = /^\d+$/;
    if (order_id.match(pattern_number)) {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text_id.innerHTML = "";
        text_id.style.color = "#0b00ab";
        document.getElementById("sub").disabled=false;

    }
    else {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text_id.innerHTML = "Please Enter Valid Order ID";
        text_id.style.color = "#000000";
        document.getElementById("sub").disabled=true;
    }
}
function validation_login() {
    var form = document.getElementById("form");
    var login = document.getElementById("login").value;
    var text_login = document.getElementById("text_login");
    var pattern_number = /^[a-z0-9_-]{3,15}$/;
    if (login.match(pattern_number)) {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text_login.innerHTML = "";
        text_login.style.color = "#0b00ab";
        document.getElementById("sub").disabled=false;

    }
    else {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text_login.innerHTML = "Please Enter Valid Login";
        text_login.style.color = "#000000";
        document.getElementById("sub").disabled=true;
    }
}
function validation_password() {
    var form = document.getElementById("form");
    var password = document.getElementById("password").value;
    var text_password = document.getElementById("text_password");
    var pattern_number = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/;
    if (password.match(pattern_number)) {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text_password.innerHTML = "";
        text_password.style.color = "#0b00ab";
        document.getElementById("sub").disabled=false;

    }
    else {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text_password.innerHTML = "Please Enter Valid Password";
        text_password.style.color = "#000000";
        document.getElementById("sub").disabled=true;
    }
}
function validation_password_confirm() {
    var form = document.getElementById("form");
    var password_confirm = document.getElementById("password_confirm").value;
    var text_password_confirm = document.getElementById("text_password_confirm");
    var pattern_number = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/;
    if (password_confirm.match(pattern_number)) {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text_password_confirm.innerHTML = "";
        text_password_confirm.style.color = "#0b00ab";
        document.getElementById("sub").disabled=false;

    }
    else {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text_password_confirm.innerHTML = "Please Enter Valid Password";
        text_password_confirm.style.color = "#000000";
        document.getElementById("sub").disabled=true;
    }
}

