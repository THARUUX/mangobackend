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
            <div class="text-7xl font-black font-pri">CONTACT</div>
            <div class="text-2xl font-black font-pri">HOME - CONTACT</div>
        </div>
        <div class="max-w-[2500px] w-full bg-white grow text-white">
            


            <div class="w-full sm:p-20 bg-white flex justify-center">
                <div class="bg-[#F9F9F9] w-[1000px] py-15 px-10 flex flex-col sm:flex-row pb-28">
                    <div class="w-full sm:w-1/2 flex flex-col gap-10">
                        <input class="bg-[#F3F3F3] p-5 border-0 text-[#535446]" type="text" placeholder="Your Name">
                        <input class="bg-[#F3F3F3] p-5 border-0 text-[#535446]" type="text" placeholder="Your Phone Number">
                        <input class="bg-[#F3F3F3] p-5 border-0 text-[#535446]" type="text" placeholder="Your Email">
                        <textarea name="" class="bg-[#F3F3F3] p-5 border-0 text-[#535446]" placeholder="Message Here" id=""></textarea>
                    </div>
                    <div class="w-full sm:w-1/2 flex flex-col gap-5 sm:gap-20 p-5 sm:p-10 text-black">
                        <div><div>8500, Negombo Road, Colombo, Sri Lanka</div></div>
                        <div><div>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div></div>
                        <div><div>0900 am - 07:00pm</div></div>
                        <div><div>MONDAY - THURSDAY  :  11AM - 5PM <br> FRIDAY - SUNDAY  :  10AM - 5PM <br> LAST POUR  :  4:30PM </div></div>
                    </div>
                </div>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.80372271723!2d79.88771612195676!3d6.8935379587504055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25990379a8a4f%3A0x4b887a5266410b49!2sSri%20Jayawardenepura%20Kotte!5e0!3m2!1sen!2slk!4v1748812805845!5m2!1sen!2slk" class="w-full h-[50vh]"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            

            
            <?php include 'components/comp1.php'; ?>


        </div>

        <!-- Footer -->
        <?php include 'components/footer.php'; ?>

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>