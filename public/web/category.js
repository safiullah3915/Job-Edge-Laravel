class JobCategoryManager {
    constructor(modalId) {
        this.modal = document.getElementById(modalId);
        this.initEventListeners();
        this.fetchAndDisplayCategories();
    }

    initEventListeners() {
        const btnOpenModal = document.querySelector('.tab[data-category="browse"]');
        btnOpenModal.onclick = () => this.showModal();

        const spanCloseModal = this.modal.querySelector('.close');
        spanCloseModal.onclick = () => this.hideModal();

        window.onclick = (event) => {
            if (event.target === this.modal) {
                this.hideModal();
            }
        };

        const form = document.getElementById('add-category-form');
        form.addEventListener('submit', (event) => this.handleSubmit(event));

        const tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', (event) => this.fetchAndDisplayCategory(event.target.getAttribute('data-category')));
        });
    }

    showModal() {
        this.modal.style.display = "block";
    }

    hideModal() {
        this.modal.style.display = "none";
    }

    handleSubmit(event) {
        event.preventDefault();
        const formData = new FormData(event.target);


        formData.append('username', sessionStorage.getItem('username'));
        formData.append('password', sessionStorage.getItem('password'));

        fetch('browse_job.php', {
            method: 'POST',
            body: formData,
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('You are not authorized to perform this action.');
                }
                return response.text();
            })
            .then(data => {
                alert(data);
                this.hideModal();
                this.fetchAndDisplayCategories();
            })
            .catch(error => {
                console.error('Error:', error.message);
                alert('Error submitting form: ' + error.message);
            });
    }

    fetchAndDisplayCategories() {

    }

    fetchAndDisplayCategory(category) {

    }
}

document.addEventListener('DOMContentLoaded', () => {
    new JobCategoryManager('myModal');
});

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("submit-btn").addEventListener("click", function () {
        var industry = document.getElementById("industry-input").value;
        var city = document.getElementById("city-input").value;
        var company = document.getElementById("company-input").value;
        var position = document.getElementById("position-input").value;

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "browse_job.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    alert(xhr.responseText);
                } else {
                    alert("Error: " + xhr.status);
                }
            }
        };
        xhr.send("industry=" + encodeURIComponent(industry) +
            "&city=" + encodeURIComponent(city) +
            "&company=" + encodeURIComponent(company) +
            "&position=" + encodeURIComponent(position));
    });
});
