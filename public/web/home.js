
window.addEventListener('DOMContentLoaded', () => {
    const userInfo = document.getElementById('user-info');

    const checkSignInStatus = () => {
        fetch('get_username.php')
            .then(response => response.text())
            .then(data => {
                if (data.trim() === 'signed_in') {
                    userInfo.innerHTML = `<button id="signout-button" class="signin-button">
                        <i class="fas fa-sign-out-alt"></i> Sign Out
                    </button>`;
                } else {
                    userInfo.innerHTML = `<a href="sign-in.html"><button class="signin-button">
                        <i class="fas fa-user"></i> Sign in <i class="fas fa-chevron-down"></i>
                    </button></a>`;
                }
            });
    };

    checkSignInStatus();

    userInfo.addEventListener('click', (event) => {
        if (event.target.id === 'signout-button') {
            fetch('sign_out.php')
                .then(response => response.text())
                .then(data => {
                    if (data.trim() === 'success') {
                        window.location.reload();
                    }
                });
        }
    });
});

