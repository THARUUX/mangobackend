// Add left nav bar
function closeNav() {
    document.getElementById("modal--content").classList.remove("modal--show");
    document.getElementById("modal--content").classList.add("modal--hide");
    setTimeout(function () {
        document.getElementById("modal").style.display = "none";
    }, 700);
}

function openNav() {
    document.getElementById("modal--content").classList.remove("modal--hide");
    document.getElementById("modal--content").classList.add("modal--show");
    document.getElementById("modal").style.display = "block";
}

function showToast(message) {
    Toastify({
        text: message,
        duration: 3000,
        gravity: "top",
        close: true,
    }).showToast();
}

function highlightActiveMenu(selector) {
    let url = window.location.href;
    let path = new URL(url).pathname;
    let elements = document.querySelectorAll(`${selector}[href="${path}"]`);

    if (elements.length > 0) {
        elements.forEach((element) => {
            element.classList.add("active");
        });
    } else {
        document.querySelector(`.${selector}[href="/"]`).classList.add("active");
    }
}


highlightActiveMenu("ul li a");


$('.reviews-carousel').owlCarousel({
    autoplay: true,
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    items: 1,
},
    $('.reviews-section .next-btn').click(function () {
        $('.reviews-carousel').trigger('next.owl.carousel');
    }),
    $('.reviews-section .prev-btn').click(function () {
        $('.reviews-carousel').trigger('prev.owl.carousel');
    })
)

$('.clients-carousel').owlCarousel({
    autoplay: true,
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    items: 4,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
},
    $('.clients-section .next-btn').click(function () {
        $('.clients-carousel').trigger('next.owl.carousel');
    }),
    $('.clients-section .prev-btn').click(function () {
        $('.clients-carousel').trigger('prev.owl.carousel');
    })
)

$('.team-carousel').owlCarousel({
    autoplay: true,
    autoplayTimeout: 15000,
    loop: true,
    margin: 20,
    nav: false,
    dots: false,
    items: 1,
},
    $('.team-section .next-btn').click(function () {
        $('.team-carousel').trigger('next.owl.carousel');
    }),
    $('.team-section .prev-btn').click(function () {
        $('.team-carousel').trigger('prev.owl.carousel');
    })
)

let count = 10;

function loadMorePosts() {

    const urlParams = new URLSearchParams(window.location.search);
    const typeValue = urlParams.get('type') || '';

    var formData = new FormData();
    formData.append("count", count);
    formData.append("type", typeValue);

    fetch("/blog/loadMore", {
        method: "POST",
        headers: {
            Accept: "application/json",
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: formData,
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                document.getElementById('blogContainer').innerHTML = data.html;
                count = count + 10;
            } else {
                alert(data.message);
            }
        })
        .catch((error) => {
            console.log("Error:", error);
            alert("An error occurred, please try again.");
        });
}


function loadMoreImages() {

    var formData = new FormData();
    formData.append("count", count);

    fetch("/gallery/loadMore", {
        method: "POST",
        headers: {
            Accept: "application/json",
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: formData,
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                document.getElementById('imageContainer').innerHTML = data.html;
                count = count + 10;
            } else {
                alert(data.message);
            }
        })
        .catch((error) => {
            console.log("Error:", error);
            alert("An error occurred, please try again.");
        });
}
