<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


</head>
<body class="bg-white">

    <div class="w-screen min-h-screen flex justify-center items-center flex-col text-white">
        <!-- Header -->
        <?php include 'components/header.php'; ?>

        <div class="w-full py-20 flex flex-col justify-center items-center gap-5 bg-[#000000aa]">
            <div class="text-7xl font-black font-pri">About</div>
            <div class="text-2xl font-black font-pri">HOME - ABOUT US</div>
        </div>
        <div class="max-w-[2500px] w-full bg-slate-300 grow text-white">
            

            <div class="w-full flex flex-col sm:flex-row bg-white text-black">
                <div class="sm:w-1/2 h-auto p-10 sm:p-20 flex flex-col justify-center gap-5">
                    <div class="text-4xl sm:text-7xl font-pri font-black sm:w-1/2">We Make Your Travel Adventures</div>
                    <div>At Happy Mango Tours, we believe travel is more than just visiting places — it’s about creating unforgettable memories. Based in Sri Lanka, we specialize in tailor-made and round tours that showcase the island’s best. With local expertise, personalized service, and a passion for adventure, we craft journeys that are unique, seamless, and full of authentic experiences.</div>
                    <div class="text-black mt-10">we are more than travel planners — we are storytellers who help you write your own Sri Lankan adventure. Our experienced local guides, handpicked accommodations, and thoughtfully curated activities guarantee that your time with us will be meaningful, authentic, and full of special moments.</div>
                    <div class="w-full py-5">
                        <button class="bg-[#ff9933] py-2 rounded-full px-8 cursor-pointer hover:bg-[#ffab57] text-white text-sm">Start your trip</button>
                    </div>
                </div>
                <div class="p-10 sm:p-0 sm:w-1/2 h-auto">
                    <div class="sm:pt-20 sm:py-16">Join us and discover the real Sri Lanka — its vibrant culture, its breathtaking landscapes, its warm-hearted people — with a travel experience made just for you. Your journey begins here, with Happy Mango Tours, where every trip is a happy memory in the making.</div>
                    <div class=" mt-5 sm:mt-20">
                        <img src="Assets/img(17).png" class="w-full h-auto" alt="">
                    </div>
                </div>
            </div>

            <?php include 'components/testimonials.php'; ?>
            <?php include 'components/faq.php'; ?>
            <?php include 'components/comp1.php'; ?>


        </div>

        <!-- Footer -->
        <?php include 'components/footer.php'; ?>

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>