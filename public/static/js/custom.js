$(document).ready(function () {

    // search

    const myModal = document.getElementById('staticBackdrop');
    myModal.addEventListener('shown.bs.modal', () => {
        document.getElementById('searchInput').focus();
    });

    document.getElementById('searchInput').addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            const query = this.value;
            window.location.href = `search.html?query=${encodeURIComponent(query)}`;
        }
    });

    document.getElementById('searchButton').addEventListener('click', function (event) {
        event.preventDefault();
        const query = document.getElementById('searchInput').value;
        window.location.href = `search.html?query=${encodeURIComponent(query)}`;
    });

    // update

    document.getElementById('subscribeForm').addEventListener('submit', function (event) {
        event.preventDefault();

        var emailInput = document.getElementById('email').value;
        var thanksMessage = document.getElementById('thanksMessage');

        if (emailInput) {
            thanksMessage.style.display = 'block';
            document.getElementById('email').value = '';
        } else {
            thanksMessage.style.display = 'none';
        }
    });

});
