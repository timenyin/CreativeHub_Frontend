<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Empower Your Projects with Global Freelance Network</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="keywords" content="Harmony, H2k, HK, CreativeHub Creative Hub,  Freelance services, Online marketplace, Remote work, Digital services, Creative professionals, Freelance gigs, Outsourcing services, Affordable freelancers, Creative talent, Gig economy" />
    <meta name="description" content="Freelance services at your fingertips! creativeHub's mission is to revolutionize collaboration worldwide. creativeHub connects businesses with skilled freelancers offering a diverse range of digital services in 500+ categories. Find expert talents to bring your projects to life">



    <!-- Dark mode -->
    <script>
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
        }

        const setTheme = function(theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if (el != 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })
    </script>

    <!-- Mansory JS -->
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" async>
    </script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="assets/js/jquery.min.js"></script> -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custome.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7N7LGGGWT1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7N7LGGGWT1');
    </script>

</head>

<body>

    <!-- Header START -->
    <?php include('includes/user_header.php'); ?>
    <!-- Header END -->

    <!-- Home START -->
    <?php include('home.php'); ?>
    <!-- Home END -->

    <!-- =======================
Footer START -->
    <?php include('includes/footer.php'); ?>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.js"></script>
    <script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>


    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>
    <script>
        // ----------------Image changing in home  style------------
        document.addEventListener('DOMContentLoaded', function() {
            var imgAbout = document.getElementById('img_homeSlider');
            var ArrayImages = [
                'assets/images/element/32.png', 'assets/images/element/35.png', 'assets/images/element/33.png',
                'assets/images/element/34.png'
            ];
            var imageTime = 0;

            function changeImage() {
                imgAbout.classList.add('fade-out');
                setTimeout(function() {
                    imgAbout.src = ArrayImages[imageTime];
                    imgAbout.classList.remove('fade-out');
                    imageTime = (imageTime + 1) % ArrayImages.length;
                }, 500); // Adjust the delay time as needed
            }

            setInterval(changeImage, 9000);
        });
    </script>



</body>

</html>