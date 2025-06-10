const loginForm = document.getElementById('login-form');
if (loginForm) {
    loginForm.addEventListener('submit', (e) => {
        e.preventDefault();
        login();
    });
}

function login() {
    var formData = new FormData(loginForm);

    fetch('/admin/login', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.status == true) {
                showToast('success', data.message);
                setTimeout(() => {
                    window.location.href = '/admin';
                }, 2000);
            } else {
                showToast('error', data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

function showToast(type, message) {
    const notyf = new Notyf({
        duration: 1000,
        position: {
            x: 'right',
            y: 'top',
        },
        types: [{
            type: 'warning',
            background: 'orange',
            icon: {
                className: 'material-icons',
                tagName: 'i',
                text: 'warning'
            }
        },
        {
            type: 'error',
            background: 'indianred',
            duration: 2000,
            dismissible: true
        },
        {
            type: 'success',
            background: 'green',
            duration: 2000,
            dismissible: true
        }
        ]
    });

    if (type === 'success') {
        notyf.success(message);
    } else if (type === 'error') {
        notyf.error(message);
    } else {
        notyf.warning(message);
    }
}
