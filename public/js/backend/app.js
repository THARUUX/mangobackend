$(document).ready(function() {
    $('.select2').select2();
});

const showScrollbars = (evt) => {

    const el = evt.currentTarget;
    clearTimeout(el._scrolling);

    el.classList.add("is-scrolling");

    el._scrolling = setTimeout(() => {
        el.classList.remove("is-scrolling");
    }, 2000);
};

document.querySelectorAll("[data-scrollbars]").forEach(el => {
    el.addEventListener("scroll", showScrollbars);
});

function highlightActiveMenu(selector) {
    let url = window.location.href;
    let path = url.split("/").pop();
    let active = document.querySelector(`.${selector}[href="/admin/${path}"]`);
    if (active) {
        document
            .querySelectorAll(`.${selector}.active`)
            .forEach((el) => el.classList.remove("active"));
        if (active) active.classList.add("active");
        else
            document
            .querySelector(`.${selector}[href="/"]`)
            .classList.add("active");
    }
}

highlightActiveMenu("side-menu__item");


// LOGIN
function login() {

    var loginBtn = document.getElementById("login");
    loginBtn.innerHTML = 'Processing...';


    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    const formData = new FormData();
    formData.append('email', email);
    formData.append('password', password);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/admin/login', true);
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                const data = JSON.parse(xhr.responseText);
                if (data.success) {
                    loginBtn.innerHTML = 'Redirecting...';

                    Toastify({
                        text: data.message,
                        duration: 30000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();

                    setTimeout(() => {
                        window.location.href = '/admin/dashboard';
                    })
                } else {
                    loginBtn.innerHTML = 'Log in';
                    Toastify({
                        text: data.message,
                        duration: 30000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        }
    }
    xhr.send(formData);

}

// SIDEBAR
if (window.innerWidth <= 768) {
    document.querySelector(".app-sidebar").classList.toggle("hide");
} else {
    document.querySelector(".app-sidebar").classList.toggle("ps-0");
}

// SIDEBAR
function hideSidebar() {
    var appSidebar = document.querySelector(".app-sidebar");
    var appHeader = document.querySelector(".app-header");
    var appContent = document.querySelector(".app-content");

    if (appHeader && appSidebar) {
        appHeader.classList.toggle("ps-0");
        appContent.classList.toggle("ms-0");
        appSidebar.classList.toggle("hide");

        if (window.innerWidth <= 768) {
            appSidebar.style.marginLeft = '0';
        }

    }
}

// TINYMCE
tinymce.init({
    selector: '#blogContent',
    plugins: 'advlist autolink lists link image charmap preview anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking save table directionality template importcss',
    toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify outdent indent | numlist bullist | forecolor backcolor removeformat | subscript superscript | link image media | table | charmap emoticons | code | tinydrive',
    automatic_uploads: true,
    file_picker_types: 'image',
    file_picker_callback: (cb, value, meta) => {
        const input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');

        input.addEventListener('change', (e) => {
            const file = e.target.files[0];

            const reader = new FileReader();
            reader.addEventListener('load', () => {
                const id = 'blobid' + (new Date()).getTime();
                const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                const base64 = reader.result.split(',')[1];
                const blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);

                cb(blobInfo.blobUri(), {
                    title: file.name
                });
            });
            reader.readAsDataURL(file);
        });

        input.click();
    },
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
});

// PROFILE SETTINGS
function previewProfile() {
    var input = document.getElementById('image');
    var preview = document.getElementById('image-preview');
    var file = input.files[0];
    var reader = new FileReader();

    reader.onloadend = function() {
        preview.src = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = "../img/admin/profile.png";
    }
}

// PROFILE
function updateImage(userId) {
    const imageActiveBtn = document.getElementById('imageActiveBtn');
    imageActiveBtn.disabled = true;
    imageActiveBtn.innerHTML = 'Activating...';

    const image = document.getElementById("image").files[0];

    const formData = new FormData();
    formData.append("userId", userId);
    formData.append("image", image);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", `/save-profile/update-image/${userId}`, true);
    xhr.setRequestHeader('X-CSRF-TOKEN', document.head.querySelector('meta[name="csrf-token"]').content);

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            imageActiveBtn.disabled = false;
            imageActiveBtn.innerHTML = 'Activate';

            const errorMessage = xhr.status !== 200 ? xhr.statusText || 'Something went wrong' : null;
            const data = errorMessage ? {} : JSON.parse(xhr.responseText);

            Toastify({
                text: errorMessage || data.message,
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
            }).showToast();

            if (!errorMessage && data.success) {
                imageActiveBtn.innerHTML = 'Activated';
                setTimeout(() => window.location.reload(), 2000);
            }
        }
    };

    xhr.send(formData);
}


// PROFILE
function updateProfile(userId) {
    const updateProfileBtn = document.getElementById('updateProfileBtn');
    updateProfileBtn.disabled = true;
    updateProfileBtn.innerHTML = 'Updating...';

    var email = document.getElementById("email").value;

    var formData = new FormData();
    formData.append("userId", userId);
    formData.append("email", email);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", `/save-profile/update-details/${userId}`, true);
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                const data = JSON.parse(xhr.responseText);
                if (data.success) {
                    updateProfileBtn.innerHTML = 'Updated';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                } else {
                    updateProfileBtn.disabled = false;
                    updateProfileBtn.innerHTML = 'Save Changes';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        }
    };

    xhr.send(formData);
}

// CHANGE PASSWORD
function updatePassword(userId) {
    const updatePasswordBtn = document.getElementById('updatePasswordBtn');
    updatePasswordBtn.disabled = true;
    updatePasswordBtn.innerHTML = 'Updating...';


    var oldPassword = document.getElementById("oldPassword").value;
    var newPassword = document.getElementById("newPassword").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    var formData = new FormData();
    formData.append("userId", userId);
    formData.append("oldPassword", oldPassword);
    formData.append("newPassword", newPassword);
    formData.append("confirmPassword", confirmPassword);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", `/save-profile/update-password/${userId}`, true);
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                const data = JSON.parse(xhr.responseText);
                if (data.success) {
                    updatePasswordBtn.innerHTML = 'Updated';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                } else {
                    updatePasswordBtn.disabled = false;
                    updatePasswordBtn.innerHTML = 'Save Changes';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        }
    };

    xhr.send(formData);
}

// ADD CATEGORY
function createCategory() {
    var overlay = document.getElementById("overlay");
    var addCategoryModal = document.getElementById("addCategoryModal");

    overlay.classList.add("show");
    addCategoryModal.classList.add("show");
    document.body.style.overflow = 'hidden';
}

// CLOSE MODAL
function closeModal() {
    var overlay = document.getElementById("overlay");
    var addCategoryModal = document.getElementById("addCategoryModal");
    var editCategoryModal = document.getElementById("editCategoryModal");
    var sendMessageModal = document.getElementById('sendMessageModal');

    if (sendMessageModal) {
        sendMessageModal.classList.remove("show");
    }

    if (editCategoryModal) {
        editCategoryModal.classList.remove("show");
    }

    if (addCategoryModal) {
        addCategoryModal.classList.remove("show");
    }

    if (overlay) {
        overlay.classList.remove("show");
    }

    document.body.style.overflow = 'auto';

}

// OPEN EDIT CATEGORY
function openEditCategory(categoryId) {
    var editCategoryModal = document.getElementById("editCategoryModal");
    if (editCategoryModal) {
        editCategoryModal.classList.add("show");
        document.body.style.overflow = 'hidden';
    }

    editCategory(categoryId);
}

// Edit Category
function editCategory(categoryId) {

    var xhr = new XMLHttpRequest();
    xhr.open("GET", `/admin/edit-category/${categoryId}`, true);
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                const categoryResponce = JSON.parse(xhr.responseText);
                console.log(categoryResponce);
                if (categoryResponce.success) {
                    document.getElementById('categoryUpdateId').value = categoryId;
                    document.getElementById("categoryUpdateTitle").value = categoryResponce.data.name;
                    document.getElementById("categoryUpdateType").options[categoryResponce.data.category_type_id - 1].selected = true;
                    document.getElementById("categoryUpdateStatus").options[categoryResponce.data.status].selected = true;

                    var overlay = document.getElementById("overlay");
                    var editCategoryModal = document.getElementById("editCategoryModal");

                    overlay.classList.add("show");
                    editCategoryModal.classList.add("show");
                } else {
                    Toastify({
                        text: 'Please try again',
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        }
    }

    xhr.send();

}

// Add Category
function saveCategory() {
    var saveCategoryBtn = document.getElementById("categorySaveBtn");
    saveCategoryBtn.disabled = true;
    saveCategoryBtn.innerHTML = 'Processing...';

    var title = document.getElementById("title").value;
    var typeSelect = document.getElementById("type");
    var selectedType = typeSelect.options[typeSelect.selectedIndex].value;
    var statusSelect = document.getElementById("status");
    var selectedStatus = statusSelect.options[statusSelect.selectedIndex].value;

    var formData = new FormData();
    formData.append("name", title);
    formData.append("type", selectedType);
    formData.append("status", selectedStatus);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/admin/save-category", true);
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                const data = JSON.parse(xhr.responseText);
                if (data.success) {
                    saveCategoryBtn.innerHTML = 'Created';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();

                    setTimeout(() => {
                        document.getElementById("overlay").classList.remove("show");
                        document.getElementById("addCategoryModal").classList.remove("show");
                        window.location.reload();
                    })

                } else {
                    saveCategory.disabled = false;
                    saveCategoryBtn.innerHTML = 'Save Changes';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        }
    };

    xhr.send(formData);
}

// UPDATE CATEGORY
function updateCategory() {
    var categoryUpdateBtn = document.getElementById("categoryUpdateBtn");
    categoryUpdateBtn.disabled = true;
    categoryUpdateBtn.innerHTML = 'Updating...';

    var categoryId = document.getElementById('categoryUpdateId').value;

    var title = document.getElementById("categoryUpdateTitle").value;
    var typeSelect = document.getElementById("categoryUpdateType");
    var selectedType = typeSelect.options[typeSelect.selectedIndex].value;
    var statusSelect = document.getElementById("categoryUpdateStatus");
    var selectedStatus = statusSelect.options[statusSelect.selectedIndex].value;

    var formData = new FormData();
    formData.append("categoryId", categoryId);
    formData.append("name", title);
    formData.append("type", selectedType);
    formData.append("status", selectedStatus);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/admin/update-category", true);
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                const data = JSON.parse(xhr.responseText);
                if (data.success) {
                    categoryUpdateBtn.innerHTML = 'Updated';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();

                    setTimeout(() => {
                        document.getElementById("overlay").classList.remove("show");
                        document.getElementById("editCategoryModal").classList.remove("show");
                        window.location.reload();
                    })

                } else {
                    categoryUpdateBtn.disabled = false;
                    categoryUpdateBtn.innerHTML = 'Save Changes';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        }
    };

    xhr.send(formData);
}

// DELETE CATEGORY
function deleteCategory(categoryId) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'You won\'t be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", `/admin/delete-category/${categoryId}`, true);
            const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
            xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        const data = JSON.parse(xhr.responseText);
                        if (data.success) {
                            Toastify({
                                text: data.message,
                                duration: 2000,
                                newWindow: true,
                                close: true,
                                gravity: "top",
                                position: "right",
                                stopOnFocus: true,
                            }).showToast();
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        } else {
                            Toastify({
                                text: data.message,
                                duration: 3000,
                                newWindow: true,
                                close: true,
                                gravity: "top",
                                position: "right",
                                stopOnFocus: true,
                            }).showToast();
                        }
                    }
                }
            };

            xhr.send();
        }
    });
}

// CREATE POST
function createPost() {
    var postBlog = document.getElementById('postBlog');
    postBlog.disabled = true;
    postBlog.innerHTML = 'Processing...';

    const blogTitle = document.getElementById('blogTitle').value;
    const blogSlug = document.getElementById('blogSlug').value;
    const shortDescription = document.getElementById('shortDescription').value;
    const blogContent = tinymce.get('blogContent').getContent();

    const blogImage = document.getElementById('postCover');

    const blogCategory = document.getElementById('blogCategory').value;
    const show = document.getElementById('blogShow');
    const hide = document.getElementById('blogHide');

    var blogShow;

    if (show.checked) {
        blogShow = '1';
    } else if (hide.checked) {
        blogShow = '0';
    }

    const formData = new FormData();
    formData.append('title', blogTitle);
    formData.append('slug', blogSlug);
    formData.append('shortDescription', shortDescription);
    formData.append('content', blogContent);
    formData.append('category', blogCategory);
    formData.append('visibility', blogShow);
    formData.append('image', blogImage.files[0]);

    const xhr = new XMLHttpRequest();
    xhr.open('POST', "/admin/save-blog", true);
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                const data = JSON.parse(xhr.responseText);
                if (data.success) {
                    postBlog.innerHTML = 'Post Created';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();

                    setTimeout(() => {
                        window.location.href = '/admin/blog';
                    })
                } else {
                    postBlog.disabled = false;
                    postBlog.innerHTML = 'Create a Post';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        }
    };
    xhr.send(formData);

}

// UPDATE POST
function updatePost(postId) {
    var updatePost = document.getElementById('updatePost');
    updatePost.disabled = true;
    updatePost.innerHTML = 'Processing...';

    const blogTitle = document.getElementById('blogTitle').value;
    const blogSlug = document.getElementById('blogSlug').value;
    const shortDescription = document.getElementById('shortDescription').value;
    const blogContent = tinymce.get('blogContent').getContent();

    const blogImage = document.getElementById('postCover');
    const blogImageStatus = blogImage.getAttribute('data-status');

    const blogCategory = document.getElementById('blogCategory').value;
    const show = document.getElementById('blogShow');
    const hide = document.getElementById('blogHide');

    var blogShow;

    if (show.checked) {
        blogShow = '1';
    } else if (hide.checked) {
        blogShow = '0';
    }

    const formData = new FormData();
    formData.append('postId', postId);
    formData.append('title', blogTitle);
    formData.append('slug', blogSlug);
    formData.append('shortDescription', shortDescription);
    formData.append('content', blogContent);
    formData.append('category', blogCategory);
    formData.append('visibility', blogShow);
    formData.append('blogImageStatus', blogImageStatus);
    formData.append('image', blogImage.files[0]);

    const xhr = new XMLHttpRequest();
    xhr.open('POST', `/admin/update-blog/${postId}`, true);
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                const data = JSON.parse(xhr.responseText);
                if (data.success) {
                    updatePost.innerHTML = 'Post Created';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();

                    setTimeout(() => {
                        window.location.href = '/admin/blog';
                    })
                } else {
                    updatePost.disabled = false;
                    updatePost.innerHTML = 'Create a Post';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        }
    };
    xhr.send(formData);

}

// DELETE POST
function deletePost(postId) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'You won\'t be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {

            var xhr = new XMLHttpRequest();
            xhr.open("GET", `/admin/delete-blog/${postId}`, true);
            const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
            xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        const data = JSON.parse(xhr.responseText);
                        if (data.success) {
                            Toastify({
                                text: data.message,
                                duration: 3000,
                                newWindow: true,
                                close: true,
                                gravity: "top",
                                position: "right",
                                stopOnFocus: true,
                            }).showToast();
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000)
                        } else {
                            Toastify({
                                text: data.message,
                                duration: 3000,
                                newWindow: true,
                                close: true,
                                gravity: "top",
                                position: "right",
                                stopOnFocus: true,
                            }).showToast();
                        }
                    }
                }
            };
            xhr.send();
        }
    });

}

// CREATE ALBUM
function createAlbum() {
    var albumSaveBtn = document.getElementById('albumSaveBtn');
    albumSaveBtn.disabled = true;
    albumSaveBtn.innerHTML = 'Processing...';

    // const albumTitle = document.getElementById('albumTitle').value;
    // const albumSlug = document.getElementById('albumSlug').value;

    // const albumCover = document.getElementById('albumCover');

    // const albumCategory = document.getElementById('albumCategory').value;
    // const show = document.getElementById('albumShow');
    // const hide = document.getElementById('albumHide');

    // var albumShow;

    // if (show.checked) {
    //     albumShow = '1';
    // } else if (hide.checked) {
    //     albumShow = '0';
    // }

    var formData = new FormData();

    // formData.append('title', albumTitle);
    // formData.append('slug', albumSlug);
    for (let i = 0; i < imageArray.length; i++) {
        formData.append('images[]', imageArray[i].image);
    }
    // formData.append('cover', albumCover.files[0]);
    // formData.append('category', albumCategory);
    // formData.append('visibility', albumShow);

    const xhr = new XMLHttpRequest();
    xhr.open('POST', "/admin/save-gallery", true);
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                const data = JSON.parse(xhr.responseText);
                if (data.success) {
                    albumSaveBtn.innerHTML = 'Album Created';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();

                    setTimeout(() => {
                        window.location.href = '/admin/gallery';
                    })
                } else {
                    albumSaveBtn.disabled = false;
                    albumSaveBtn.innerHTML = 'Create an Album';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        }
    };
    xhr.send(formData);

}

// UPDATE ALBUM
function updateAlbum(albumId) {
    var albumUpdateBtn = document.getElementById("albumUpdateBtn");
    albumUpdateBtn.disabled = true;
    albumUpdateBtn.innerHTML = 'Updating...';

    const albumTitle = document.getElementById('albumTitle').value;
    const albumSlug = document.getElementById('albumSlug').value;

    const albumCover = document.getElementById('albumCover');
    const albumImageStatus = albumCover.getAttribute('data-status');

    const albumCategory = document.getElementById('albumCategory').value;
    const show = document.getElementById('albumShow');
    const hide = document.getElementById('albumHide');

    var albumShow;

    if (show.checked) {
        albumShow = '1';
    } else if (hide.checked) {
        albumShow = '0';
    }

    var formData = new FormData();

    formData.append('id', albumId);
    formData.append('title', albumTitle);
    formData.append('slug', albumSlug);

    for (var i = 0; i < imageArray.length; i++) {
        formData.append('image' + i, imageArray[i].image);
        formData.append('status' + i, imageArray[i].status);
    }

    formData.append('length', imageArray.length);

    formData.append('cover', albumCover.files[0]);
    formData.append('albumImageStatus', albumImageStatus);
    formData.append('category', albumCategory);
    formData.append('visibility', albumShow);

    const xhr = new XMLHttpRequest();
    xhr.open('POST', `/admin/update-gallery/${albumId}`, true);
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                const data = JSON.parse(xhr.responseText);
                if (data.success) {
                    albumUpdateBtn.innerHTML = 'Album Updated';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();

                    setTimeout(() => {
                        window.location.href = '/admin/gallery';
                    })
                } else {
                    albumUpdateBtn.disabled = false;
                    albumUpdateBtn.innerHTML = 'Update an Album';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        }
    };
    xhr.send(formData);
}

// DELETE ALBUM
function deleteAlbum(albumId) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'You won\'t be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {

            var xhr = new XMLHttpRequest();
            xhr.open("GET", `/admin/delete-gallery/${albumId}`, true);
            const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
            xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        const data = JSON.parse(xhr.responseText);
                        if (data.success) {
                            Toastify({
                                text: data.message,
                                duration: 3000,
                                newWindow: true,
                                close: true,
                                gravity: "top",
                                position: "right",
                                stopOnFocus: true,
                            }).showToast();
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000)
                        } else {
                            Toastify({
                                text: data.message,
                                duration: 3000,
                                newWindow: true,
                                close: true,
                                gravity: "top",
                                position: "right",
                                stopOnFocus: true,
                            }).showToast();
                        }
                    }
                }
            };
            xhr.send();
        }
    });
}

// CREATE VIDEO
function createVideo() {
    var videoSaveBtn = document.getElementById('videoSaveBtn');
    videoSaveBtn.disabled = true;
    videoSaveBtn.innerHTML = 'Processing...';

    const videoTitle = document.getElementById('videoTitle').value;
    const videoSource = document.getElementById('videoSource');
    const coverImage = document.getElementById('postCover');

    const videoCategory = document.getElementById('videoCategory').value;
    const show = document.getElementById('videoShow');
    const hide = document.getElementById('videoHide');

    var albumShow = show.checked ? '1' : '0';

    var formData = new FormData();
    formData.append('title', videoTitle);
    formData.append('source', videoSource.files[0]);
    formData.append('cover', coverImage.files[0]);
    formData.append('category', videoCategory);
    formData.append('visibility', albumShow);

    NProgress.start();

    const xhr = new XMLHttpRequest();
    xhr.open('POST', "/admin/save-video", true);

    xhr.upload.onprogress = function(event) {
        if (event.lengthComputable) {
            var percentComplete = (event.loaded / event.total) * 100;
            videoSaveBtn.innerHTML = 'Uploading... ' + Math.round(percentComplete) + '%';

            NProgress.set(percentComplete / 100);
        }
    };

    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                const data = JSON.parse(xhr.responseText);
                Toastify({
                    text: data.message,
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "top",
                    position: "right",
                    stopOnFocus: true,
                }).showToast();

                if (data.success) {
                    videoSaveBtn.innerHTML = 'Album Created';
                    setTimeout(() => {
                        window.location.href = '/admin/video';
                    });
                } else {
                    videoSaveBtn.disabled = false;
                    videoSaveBtn.innerHTML = 'Create an Album';
                }
            }
        }
    };

    xhr.send(formData);
}

// UPDATE VIDEO
function updateVideo() {
    window.location.href = '/admin/create-video';
}

// DELETE VIDEO
function deleteVideo(videoId) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'You won\'t be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {

            var xhr = new XMLHttpRequest();
            xhr.open("GET", `/admin/delete-video/${videoId}`, true);
            const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
            xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        const data = JSON.parse(xhr.responseText);
                        if (data.success) {
                            Toastify({
                                text: data.message,
                                duration: 3000,
                                newWindow: true,
                                close: true,
                                gravity: "top",
                                position: "right",
                                stopOnFocus: true,
                            }).showToast();
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000)
                        } else {
                            Toastify({
                                text: data.message,
                                duration: 3000,
                                newWindow: true,
                                close: true,
                                gravity: "top",
                                position: "right",
                                stopOnFocus: true,
                            }).showToast();
                        }
                    }
                }
            };
            xhr.send();
        }
    });
}


function createAdmin() {

    const adminSaveBtn = document.getElementById('adminSaveBtn');
    adminSaveBtn.disabled = true;
    adminSaveBtn.innerHTML = 'Creating...';

    const name = document.getElementById('name').value;
    const email = document.getElementById('emailAddress').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const selectRole = document.getElementById('role');
    const selectedRole = selectRole.options[selectRole.selectedIndex].value;
    const selectStatus = document.getElementById('status');
    const selectedStatus = selectStatus.options[selectStatus.selectedIndex].value;

    const formData = new FormData();

    formData.append('name', name);
    formData.append('email', email);
    formData.append('password', password);
    formData.append('confirmPassword', confirmPassword);
    formData.append('role', selectedRole);
    formData.append('status', selectedStatus);

    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/admin/save-admin', true);
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                const data = JSON.parse(xhr.responseText);
                if (data.success) {
                    adminSaveBtn.innerHTML = 'Created';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                    setTimeout(() => {
                        window.location.href = '/admin/admin';
                    }, 2000);
                } else {
                    adminSaveBtn.disabled = false;
                    adminSaveBtn.innerHTML = 'Save Changes';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        }
    }

    xhr.send(formData);

}

function updateAdmin(userId) {

    const adminUpdateBtn = document.getElementById('adminUpdateBtn');
    adminUpdateBtn.disabled = true;
    adminUpdateBtn.innerHTML = 'Updating...';

    const name = document.getElementById('name').value;
    const email = document.getElementById('emailAddress').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const selectRole = document.getElementById('role');
    const selectedRole = selectRole.options[selectRole.selectedIndex].value;
    const selectStatus = document.getElementById('status');
    const selectedStatus = selectStatus.options[selectStatus.selectedIndex].value;

    const formData = new FormData();
    formData.append('id', userId);
    formData.append('name', name);
    formData.append('email', email);
    formData.append('password', password);
    formData.append('confirmPassword', confirmPassword);
    formData.append('role', selectedRole);
    formData.append('status', selectedStatus);

    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/admin/update-admin', true);
    const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                const data = JSON.parse(xhr.responseText);
                if (data.success) {
                    adminUpdateBtn.innerHTML = 'Updated';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                    setTimeout(() => {
                        window.location.href = "/admin/admin";
                    }, 2000);
                } else {
                    adminUpdateBtn.disabled = false;
                    adminUpdateBtn.innerHTML = 'Save Changes';
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                    }).showToast();
                }
            }
        }
    }

    xhr.send(formData);

}

function deleteAdmin(userId) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'You won\'t be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            const formData = new FormData();
            formData.append('id', userId);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/admin/delete-admin', true);
            const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
            xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        const data = JSON.parse(xhr.responseText);
                        if (data.success) {
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        }
                        Toastify({
                            text: data.message,
                            duration: 3000,
                            newWindow: true,
                            close: true,
                            gravity: "top",
                            position: "right",
                            stopOnFocus: true,
                        }).showToast();
                    }
                }
            }

            xhr.send(formData);
        }

    })

}



// FILTER SEARCH
function updateFilters(page) {

    var url = `/admin/` + page + `?`;

    const filterSearch = document.getElementById('filterSearch');

    if (filterSearch) {
        url += `status=${selectedFilterStatus.value}&`;
    }

    const selectedFilterStatus = document.getElementById('filterStatus');

    if (selectedFilterStatus) {
        url += `search=${filterSearch.value}&`;
    }

    const selectedSessionMaxRows = document.getElementById('sessionMaxRows').value;

    url += `rows=${selectedSessionMaxRows}`;
    window.location.href = url;
}