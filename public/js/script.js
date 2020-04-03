window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    var navbar = document.getElementById("navscroll");

    if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200) {
        navbar.classList.add('navscroll');
        navbar.classList.remove('navbar-previous');
    } else {
        navbar.classList.add('navbar-previous');
        navbar.classList.remove('navscroll');
    }
}

$(document).ready(function() {
    $('#pagamento').modal('show');
});

//clique automatico redirecionando para o pagseguro
$(document).ready(function() {
    $("#pagseguro").trigger('click');
});

$(document).ready(function() {
    $('#phone').mask('(00) 00000-0000');
    $('#birthday').mask('00/00/0000');
    $('#number').mask('000000');
});