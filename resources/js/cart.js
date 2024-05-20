document.addEventListener("DOMContentLoaded", function() {
    fetch('/cart-content')
        .then(response => response.text())
        .then(html => {
            document.getElementById('cart-list').innerHTML = html;

            $('#cart-close').click(function(event) {
                event.stopPropagation();
                $('#cart-list').slideUp('fast');
            });
        });
});