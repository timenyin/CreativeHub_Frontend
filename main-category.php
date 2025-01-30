<!DOCTYPE html>
<html lang="en">

<head>
    <title>Browse CreativeHub's Comprehensive Categories: Graphics, Marketing, Writing, and More</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="keywords"
        content=" CreativeHub, categories, graphics, design, digital marketing, writing, translation, video animation, programming, tech" />
    <meta name="description"
        content="Explore a variety of categories on CreativeHub including graphics, digital marketing, writing, and more. Find the resources you need to enhance your creativity and business success">

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

    window.addEventListener('DOMContentLoaded', () => {
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
    })
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap"
        rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- Header START -->
    <?php include('includes/header.php') ?>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
About START -->
        <section class="pt-0 pt-md-5">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Left side START -->
                    <div class="col-lg-5 col-xxl-6 position-relative">
                        <!-- Svg decoration -->
                        <figure class="position-absolute bottom-0 end-0 me-6 d-none d-xl-block">
                            <svg class="fill-primary opacity-4" width="107" height="105" viewBox="0 0 107 105">
                                <path
                                    d="M51.5677 53.2487C53.0958 52.6198 54.1745 52.3203 55.1034 51.7812C58.0698 50.0442 60.9763 48.2772 63.9127 46.4504C67.1488 44.4438 70.4448 42.5271 73.561 40.3408C76.2277 38.4541 78.6248 36.2079 81.2017 34.1714C83.8984 32.075 86.715 30.0685 89.4117 27.972C90.2507 27.3132 90.9998 26.5345 91.6889 25.696C93.0073 24.0787 92.9774 24.0488 95.5243 24.3782C95.5842 25.2168 95.6441 26.1152 95.7041 27.1335C91.0897 30.4578 86.5052 33.6922 81.9508 37.0465C79.5237 38.8434 77.3064 40.9698 74.7895 42.6469C70.5646 45.492 66.1899 48.1275 61.9051 50.8828C60.4969 51.7812 59.2084 52.8294 57.6503 53.9675C58.1597 54.2071 58.4893 54.4766 58.8788 54.5665C62.0849 55.1954 65.3509 55.7345 68.5571 56.3933C72.3624 57.172 76.1378 58.1004 79.9432 58.8791C81.1118 59.1187 82.3403 59.0588 83.5388 59.2983C85.3367 59.6577 87.0746 60.2268 88.8724 60.646C90.1308 60.9455 91.4193 61.2151 92.6777 61.4247C95.4644 61.8739 98.221 62.2633 101.008 62.6526C101.817 62.7724 102.686 62.8323 103.525 62.6825C105.772 62.3232 105.952 62.3831 107 64.779C105.232 66.7556 104.783 66.6957 102.296 66.0967C98.8203 65.2282 95.2546 64.6891 91.7189 64.0302C88.363 63.4013 85.0071 62.7724 81.6511 62.1435C79.7035 61.7841 77.7559 61.3948 75.8382 60.9755C72.7819 60.3166 69.7256 59.5978 66.6693 58.9989C63.703 58.4298 60.6766 57.9806 57.6803 57.4415C56.5117 57.2319 55.3431 56.9324 53.7251 56.573C54.2045 58.4298 54.3543 60.0471 54.9835 61.4247C57.081 65.917 59.4481 70.2895 61.5755 74.7519C62.6842 77.0879 63.5232 79.5436 64.6318 81.9096C65.7704 84.3953 66.939 86.8511 68.8267 88.9475C69.8155 90.0556 70.5347 91.4333 71.3736 92.6911C71.8531 93.4099 72.4224 94.1286 71.4635 94.8774C70.7744 95.4164 69.2462 95.3266 68.7069 94.6078C67.7181 93.2901 66.8192 91.8825 65.9203 90.5049C65.291 89.5465 64.5419 88.648 64.0326 87.6298C62.6243 84.6948 61.3358 81.7 59.9875 78.735C59.7777 78.2559 59.508 77.7767 59.2683 77.2975C57.8301 74.3625 56.3319 71.4575 54.9536 68.4926C53.6651 65.7373 52.5265 62.8922 51.328 60.077C51.1782 59.7176 51.0284 59.3582 50.8186 59.0588C50.3092 58.3999 49.5302 58.3999 49.1706 59.1786C48.6313 60.2567 48.0919 61.3948 47.7923 62.5628C46.7735 66.7556 45.0057 70.6189 43.3277 74.5722C42.6685 76.0995 42.249 77.7168 41.7097 79.2741C40.5111 82.6284 39.2826 85.9826 38.114 89.3668C37.0054 92.5114 35.9267 95.686 34.878 98.8605C34.6682 99.4895 34.7282 100.238 34.6383 100.897C34.5184 101.736 34.4285 102.574 34.1589 103.353C33.7693 104.551 32.9303 105.03 31.9116 104.85C31.0426 104.701 30.2336 103.712 30.2636 102.664C30.2636 102.155 30.4434 101.616 30.6231 101.137C32.8405 95.2068 35.2076 89.3369 37.1552 83.3172C37.7245 81.5802 38.4736 79.9629 39.1328 78.2858C39.762 76.6686 40.5111 75.1112 40.7209 73.3143C40.8407 72.1463 41.44 70.9783 42.0393 69.9301C43.1779 67.9236 43.927 65.7972 44.4663 63.581C44.5263 63.3115 44.4663 63.012 44.4663 62.5328C43.9869 62.5927 43.5674 62.5628 43.2977 62.7424C39.4324 65.2881 35.5971 67.8637 31.7318 70.4692C28.6455 72.5656 25.5593 74.662 22.4431 76.7285C20.4355 78.0762 18.368 79.3639 16.4204 80.8015C15.7312 81.3106 15.3417 82.269 14.7424 82.9578C14.263 83.5268 13.8136 84.0659 12.8547 84.006C11.8659 83.9461 10.997 83.9161 10.6974 82.7781C10.3977 81.7 11.027 81.0411 11.806 80.502C16.0908 77.597 20.3756 74.692 24.6304 71.8169C29.5445 68.4926 34.4884 65.1982 39.4025 61.814C41.7696 60.1669 44.0468 58.3699 46.3241 56.6329C46.5937 56.4233 46.7735 56.0639 47.0732 55.6446C45.9345 54.6264 44.6161 54.3868 43.2977 54.0873C37.335 52.7695 31.3423 51.6315 25.4095 50.1341C19.5366 48.6666 13.6038 47.828 7.64107 46.9296C6.53242 46.7499 5.36384 46.8996 4.22522 46.8397C3.32631 46.7798 2.36748 46.7499 1.5285 46.4504C0.719478 46.1209 -0.209393 45.6118 0.0602792 44.4139C0.240061 43.6352 1.64835 42.6169 2.51729 42.6768C2.90682 42.7068 3.35627 42.6768 3.62595 42.8865C5.24398 44.0844 7.13169 43.6951 8.9295 43.9946C13.3042 44.7433 17.6489 45.5819 22.0236 46.3905C25.769 47.0793 29.5445 47.7382 33.2599 48.5168C35.5072 48.996 37.6945 49.6848 39.9119 50.194C42.1891 50.733 44.4963 51.1523 47.2529 51.6914C46.9233 50.6731 46.7735 50.0143 46.5038 49.4752C45.0956 46.7798 43.5974 44.1144 42.1891 41.419C41.5299 40.1312 40.7508 38.8434 40.4212 37.4658C39.762 34.6207 38.0841 32.3745 36.6758 29.9487C34.7282 26.5944 32.8704 23.2102 30.8329 19.8859C30.0538 18.5981 28.9751 17.52 28.0163 16.322C27.6268 15.8428 27.2073 15.3936 26.9077 14.8845C26.2485 13.7464 26.4282 12.7282 27.3871 12.0394C28.3759 11.3206 29.6943 11.4104 30.4134 12.4287C31.1026 13.417 31.582 14.555 32.0914 15.6332C32.9603 17.49 33.8293 19.3468 34.6982 21.2037C34.848 21.563 35.0578 21.8925 35.2675 22.192C36.9455 24.8274 38.7133 27.403 40.2415 30.1284C41.7097 32.7039 43.3577 35.1597 44.0169 38.1546C44.2566 39.2926 45.0656 40.3408 45.6349 41.389C46.8634 43.6053 48.0919 45.8214 49.3204 48.0377C49.5002 48.0377 49.71 48.0077 49.8897 48.0077C50.9085 45.2524 51.9572 42.4972 52.976 39.7119C53.785 37.5257 54.624 35.3394 55.3731 33.1232C55.8225 31.7456 56.1521 30.338 56.5417 28.9304C57.7102 24.7376 58.8189 20.5448 60.0474 16.3819C60.8264 13.7464 61.6954 11.1409 62.6243 8.56532C63.3134 6.58871 63.8827 4.61209 63.5831 2.51569C63.4333 1.46749 63.8228 0.569026 64.6318 0.179693C65.3809 -0.149742 66.3697 -0.119793 67.2087 0.0598985C67.4184 0.119796 67.6282 1.28779 67.4784 1.85682C66.9091 4.16286 66.2199 6.40901 65.5607 8.68511C63.7629 14.8545 61.995 20.994 60.1972 27.1634C59.8676 28.2416 59.3582 29.2598 58.9987 30.338C57.081 36.0282 55.1633 41.7185 53.3056 47.4387C52.6763 49.2057 52.2269 50.9427 51.5677 53.2487Z" />
                            </svg>
                        </figure>

                        <!-- Title -->
                        <h2 class="h1">
                            <span class="position-relative z-index-9">Unlock Your Creative Potential with CreativeHub:
                                Explore Diverse </span>
                            <span class="position-relative z-index-1">Digital Resources
                                <!-- SVG START -->
                                <span
                                    class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-sm-block">
                                    <svg class="fill-orange" width="180" height="86" viewBox="0 0 303 86">
                                        <path
                                            d="M288.197 19.3999C281.599 15.6998 273.654 13.03 265.424 10.926C256.533 8.64794 247.263 6.92124 237.946 5.4267C218.461 2.249 198.384 0.406219 178.237 0.0579769C158.609 -0.275755 138.888 0.8125 119.733 3.49686C108.17 5.10748 96.8189 7.2985 85.8466 10.0264C81.4955 11.0131 77.168 12.0723 72.9115 13.2331C56.382 17.7022 40.5146 23.4192 26.3972 30.355C12.9182 36.9861 0.716203 46.0404 0.999971 57.2131C1.14185 62.2772 4.16871 67.051 9.98595 70.693C15.4721 74.1319 22.6846 76.3809 29.9679 78.0206C38.7647 80.0085 48.0345 81.3289 57.257 82.4026C67.1179 83.5489 77.0734 84.2889 87.0762 84.6807C107.413 85.4642 127.892 84.7968 148.063 83.0266C168.399 81.2418 188.429 78.3543 208.127 74.8139C227.399 71.3459 246.436 67.2976 265.141 62.8285C278.927 59.5348 294.227 55.0802 300.446 46.2435C307.091 36.812 299.949 25.973 288.197 19.3999ZM298.862 46.7804C295.48 50.9593 289.592 54.0935 283.207 56.4876C276.633 58.9543 269.468 60.7391 262.279 62.4077C252.915 64.5843 243.503 66.6737 234.044 68.6616C215.174 72.6083 196.019 76.0762 176.534 78.7171C157.191 81.3289 137.54 83.0991 117.747 83.6505C97.9304 84.2019 77.9957 83.5634 58.4866 81.3289C49.5243 80.2987 40.5146 79.0363 31.907 77.1645C24.5764 75.5829 17.3403 73.4499 11.6649 70.1126C5.49296 66.4561 2.15869 61.5226 2.22963 56.2555C2.32422 50.7417 5.72943 45.489 10.9555 41.0489C16.1106 36.6959 22.7319 33.0974 29.6842 29.8472C36.2108 26.8145 43.0213 24.0141 50.0918 21.4748C48.4601 22.1278 46.8521 22.7953 45.2678 23.4772C37.7716 26.684 30.4409 30.1664 23.9615 34.1131C17.695 37.9438 12.1615 42.3839 9.30018 47.5785C6.55709 52.5554 6.10779 58.1853 9.77313 63.0462C13.0838 67.4427 19.303 70.7655 26.279 72.8985C34.6974 75.4813 44.2036 76.2358 53.497 76.381C63.8309 76.5406 74.2357 76.1488 84.5696 75.757C95.0454 75.3652 105.497 74.7993 115.926 74.0884C136.783 72.6664 157.545 70.6204 178.071 67.9361C187.956 66.6447 197.817 65.2227 207.583 63.6411C208.269 63.525 208.718 62.3642 208.009 62.4658C188.358 65.629 168.447 68.2118 148.394 70.2142C128.435 72.202 108.312 73.624 88.1404 74.4366C78.0666 74.8429 67.9219 75.1911 57.8008 75.2056C48.3419 75.2201 38.6465 74.7558 29.8261 72.5068C22.5427 70.6785 15.8032 67.6169 11.8777 63.3509C7.33745 58.4175 7.52663 52.4393 10.6481 47.2302C13.7695 41.9776 19.7523 37.581 26.3263 33.8084C32.7583 30.1083 39.8289 26.7855 47.1359 23.7529C59.2197 18.7034 72.2257 14.4955 85.7756 11.1292C90.7889 9.99737 95.8494 8.98167 100.981 8.08205C117.96 5.07846 135.553 3.32274 153.218 2.88744C161.754 2.66979 170.315 2.78587 178.851 3.19215C179.537 3.22117 180.128 2.06037 179.277 2.01684C167.69 1.45094 156.032 1.47996 144.468 2.06037C145.745 1.97331 146.999 1.88625 148.275 1.8137C167.879 0.6674 187.696 1.04466 207.157 2.78587C226.075 4.46904 245.111 7.25497 262.894 11.608C278.714 15.4677 294.085 21.6635 299.808 32.0092C302.456 36.812 302.574 42.1662 298.862 46.7804Z" />
                                    </svg>
                                </span>
                                <!-- SVG END -->
                            </span>
                        </h2>

                        <p class="mt-4 mb-0">Dive into our expansive collection of online resources across multiple
                            categories</p>

                        <!-- List -->
                        <ul class="list-group list-group-borderless mt-4">
                            <li class="list-group-item h6 d-flex fw-normal mb-0"><i
                                    class="bi bi-patch-check-fill text-success me-2"></i>Graphics & Design: Elevate your
                                visual branding with professional design assets</li>
                            <li class="list-group-item h6 d-flex fw-normal mb-0"><i
                                    class="bi bi-patch-check-fill text-success me-2"></i>Digital Marketing: Drive online
                                success with strategic marketing insights and tools</li>
                            <li class="list-group-item h6 d-flex fw-normal mb-0"><i
                                    class="bi bi-patch-check-fill text-success me-2"></i>Writing & Translation: Craft
                                compelling content and reach global audiences seamlessly</li>
                        </ul>

                        <!-- Buttons -->
                        <div class="d-sm-flex align-items-center mt-4">
                            <!-- Video button -->
                            <div class="d-flex align-items-center py-2 ms-0 ms-sm-4">
                                <a data-glightbox data-gallery="office-tour" href="sellingon.php"
                                    class="btn btn-round btn-danger-shadow mb-0 overflow-visible me-7">
                                    <i class="fas fa-play"></i>
                                    <h6
                                        class="mb-0 ms-3 fw-normal position-absolute start-100 top-50 translate-middle-y">
                                        How it Works</h6>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- Left side END -->

                    <!-- Right side START -->
                    <div class="col-lg-7 col-xxl-6 my-5 mt-lg-0">
                        <div class="row">

                            <div class="col-md-4">
                                <!-- Box item -->
                                <div class="bg-light p-4 p-xl-5 text-center rounded-3">
                                    <span class="h2 text-primary mb-2">26+</span>
                                    <h6>certified Protectional </h6>
                                </div>
                            </div>

                            <div class="col-md-8 position-relative mt-5 mt-md-0">
                                <!-- Svg decoration -->
                                <figure class="position-absolute top-0 end-0 mt-n5">
                                    <svg class="fill-warning" width="128" height="120" viewBox="0 0 128 120">
                                        <path
                                            d="M48.2571 3.45976C45.4114 8.86188 43.2921 10.2579 38.2666 9.40817C35.9658 9.04398 34.2098 9.46887 32.0906 10.2579C22.5845 13.8998 16.6507 21.0015 11.6252 29.4385C8.41608 34.8406 8.29498 40.5462 8.23444 46.434C8.17389 54.264 10.9591 61.4871 12.4123 69.0136C14.0471 77.39 18.1644 84.5523 22.4028 91.5933C26.0358 97.6024 31.364 102.215 37.6611 105.372C42.0812 107.557 46.6829 109.317 51.2846 111.138C52.6772 111.684 54.2515 111.806 55.7652 111.927C58.066 112.109 60.3669 111.806 62.6072 112.17C70.9629 113.445 79.2581 112.656 87.3716 110.774C99.1786 107.982 108.14 101.123 114.134 90.44C120.007 80.1214 121.279 69.0136 120.371 57.2989C119.947 52.0182 118.857 47.2837 116.072 42.8528C112.681 37.572 108.321 33.6267 102.751 30.5311C93.9714 25.6752 84.6469 26.0394 75.2619 26.3429C65.7557 26.7071 56.6734 34.5372 54.2515 43.8846C52.0112 52.5038 52.1323 61.1836 56.6734 69.135C58.9137 73.0804 61.6384 76.6616 66.3007 78.6646C68.9043 79.7572 71.4473 81.0318 74.1115 82.1244C74.6564 82.3672 75.4435 82.6707 75.8068 82.4886C78.1682 81.1532 80.2874 82.4279 82.225 83.1563C83.6781 82.1244 84.9497 81.2746 86.1606 80.4249C90.5807 77.2686 91.1862 73.1411 87.7349 68.8922C87.0689 68.0425 86.0395 67.4962 85.4946 66.5857C85.0102 65.7966 84.4653 64.4613 84.8286 63.7936C85.1919 63.1259 86.5239 62.5796 87.4927 62.5796C90.944 62.5796 97.7254 68.528 98.0887 71.9271C98.2704 73.2625 98.0887 74.7799 97.5438 75.9939C94.2136 83.3384 88.9459 88.3156 80.5296 89.2261C79.6819 89.3475 78.8342 90.1972 77.9866 90.1972C75.8674 90.2579 73.6271 90.5614 71.75 89.8938C68.0566 88.5584 64.6053 86.434 60.9118 84.9165C54.8569 82.4886 51.2846 77.9362 48.0755 72.352C43.4132 64.2185 44.4426 55.8422 45.3508 47.223C46.0168 40.9711 49.1654 35.8725 52.0112 30.5918C52.435 29.8634 53.2221 29.1957 53.9487 28.7101C56.9156 26.7678 59.8825 24.8862 62.9099 23.0045C68.2382 19.7268 74.172 19.1805 80.2269 19.484C81.014 19.5447 81.8011 19.7875 82.5277 19.6661C90.6412 18.8164 98.2098 21.6692 105.476 24.3399C113.286 27.1927 118.857 33.2625 123.156 40.607C127.394 47.9514 128.363 55.6601 127.758 63.7936C127.515 66.8892 127.515 69.9848 127.273 73.0804C126.486 82.8528 122.127 91.1077 116.617 98.8771C113.408 103.429 109.472 107.314 104.991 110.592C100.571 113.809 95.7879 115.69 90.3991 117.026C83.436 118.786 76.4728 119.636 69.4492 119.939C65.0291 120.121 60.5485 119.757 56.1285 119.332C52.6166 118.968 48.9837 118.483 45.6535 117.39C41.4757 115.994 37.3584 114.112 33.4833 111.988C29.487 109.742 25.3092 107.435 22.0395 104.279C18.5883 100.88 15.803 96.6919 13.26 92.4431C7.8106 83.3991 4.78316 73.3839 2.36121 63.1259C0.847492 56.5705 0.120907 50.0758 -0.00019051 43.3991C-0.121288 38.4218 1.21078 33.8695 3.26944 29.5599C5.0859 25.8573 6.84182 22.0334 9.20322 18.695C11.1408 16.0243 13.926 13.9605 16.4691 11.7147C18.5277 9.95445 20.8286 8.437 23.0083 6.73745C28.3972 2.60999 35.2392 2.67069 41.1729 0.121369C41.839 -0.182121 42.9894 0.121369 43.7765 0.546255C45.2297 1.33533 46.5618 2.3065 48.2571 3.45976Z" />
                                    </svg>
                                </figure>

                                <!-- Svg decoration -->
                                <figure class="position-absolute bottom-0 start-0 ms-7 mb-n4">
                                    <svg width="149" height="91" viewBox="0 0 149 91" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.3084 41.205C3.69943 47.3652 12.1599 50.2399 23.7031 50.0346C30.725 49.9319 38.8771 48.4945 47.6116 46.4069C61.621 43.053 77.1376 37.7484 91.8321 31.8962C101.937 27.8921 111.63 23.6141 120.159 19.5758C121.803 18.7886 123.413 18.07 124.92 17.2486C127.387 15.9139 129.682 14.5792 131.805 13.2445C134.956 11.2253 137.628 9.30876 140.026 7.49492C143.588 4.8255 146.123 2.6352 147.87 1.09515C148.144 0.924033 148.247 0.547575 148.075 0.273788C147.904 1.19675e-06 147.527 -0.102669 147.253 0.068448C145.095 0.821363 141.944 1.71117 137.731 3.01166C134.922 3.90147 131.805 4.8255 128.311 6.05754C125.982 6.8789 123.516 7.80293 120.947 8.82964C119.371 9.47988 117.796 10.1986 116.186 10.9515C107.691 14.7503 98.1346 18.8913 88.2355 22.9297C73.9521 28.7476 58.9836 34.3603 45.4537 38.0906C40.7953 39.3911 36.3082 40.452 32.0951 41.2734C28.9438 41.8894 25.9981 42.4028 23.1893 42.745C19.1132 43.2584 15.4482 43.4295 12.2969 43.053C8.42633 42.5739 5.34357 41.4787 3.45966 39.0831C2.87737 38.1933 1.71277 37.9537 0.822193 38.5355C-0.0341284 39.1516 -0.273899 40.3152 0.3084 41.205Z"
                                            fill="#6F42C1" />
                                        <path
                                            d="M27.3685 68.2757C26.9233 68.8917 26.1354 69.1997 25.3476 69.0286C24.32 68.7548 23.7377 67.7281 23.9775 66.7014C24.2173 65.0929 25.3476 64.5111 26.7862 64.3058C28.2249 64.0662 30.9308 65.2982 32.575 65.0929C36.103 64.7164 39.5968 64.1689 43.0906 63.5871C45.18 63.2448 47.2695 62.8684 49.3589 62.5261C52.4759 61.9786 55.5929 61.4652 58.7099 60.7808C71.0067 58.3167 83.1665 54.9628 95.0522 50.856C100.396 49.0079 105.636 46.9887 110.877 44.8669C116.083 42.745 121.187 40.3494 126.359 38.0564C127.455 37.5773 128.586 37.0982 129.682 36.6533C131.395 36.003 133.107 35.4212 134.854 34.8052C136.635 34.1892 138.314 33.5732 140.095 32.9914C142.835 32.0673 145.37 31.3144 148.11 30.3562C148.384 30.185 148.761 30.2535 148.932 30.5273C149.103 30.8011 149.035 31.1775 148.761 31.3486C146.397 33.7443 144.205 36.003 141.636 38.2275C139.136 40.4178 136.601 42.4028 133.861 44.2851C132.765 45.038 131.669 45.6882 130.504 46.3385C125.948 48.871 121.187 51.0271 116.392 53.0805C109.199 56.1606 101.834 58.7958 94.3672 61.0545C83.1665 64.4769 71.726 67.0436 60.2513 68.9601C55.6957 69.6446 51.14 70.2606 46.5159 70.466C41.8918 70.7055 37.3361 70.5344 32.712 70.2948C31.6502 70.2264 30.3143 69.7815 29.0127 69.1997C28.4989 68.9944 27.8138 68.4468 27.3685 68.2757ZM27.3343 68.2414C27.163 68.173 27.026 68.2072 27.026 68.3783C27.026 68.5837 27.163 68.4468 27.3343 68.2414Z"
                                            fill="#6F42C1" />
                                        <path
                                            d="M57.4765 89.4599C56.997 89.9733 56.2091 90.1786 55.4898 89.9391C54.291 89.7337 53.8799 89.0493 53.7087 88.8439C52.9894 87.9883 53.3661 87.167 53.9827 86.2772C54.154 86.0376 54.6678 85.7638 55.4898 85.5243C57.2367 85.0109 64.2243 84.566 66.9988 83.8131C68.6429 83.4709 70.2528 83.0602 71.9312 82.6837C74.3974 82.1361 76.8294 81.6228 79.2956 81.0068C82.0015 80.3223 84.7075 79.6036 87.3792 78.8165C94.0586 76.9 100.704 74.4701 107.28 71.8349C111.596 70.0895 115.843 68.0703 120.091 66.188C120.844 65.8458 121.564 65.572 122.351 65.2982C123.55 64.8875 124.681 64.6138 125.914 64.2715C127.181 63.9293 128.311 63.6213 129.579 63.3133C131.6 62.8341 133.278 62.5261 135.265 62.0128C135.539 61.8417 135.916 61.9101 136.121 62.1839C136.292 62.4577 136.224 62.8341 135.95 63.0395C134.682 64.7164 133.655 66.1196 132.251 67.7281C131.36 68.7548 130.469 69.6104 129.51 70.5344C128.551 71.4584 127.626 72.2798 126.565 73.1012C125.879 73.6145 125.16 74.0936 124.441 74.5043C120.193 77.0369 115.604 79.0218 110.979 80.8699C104.06 83.642 96.9015 85.798 89.7769 87.5777C85.4953 88.6044 81.1795 89.5284 76.7951 90.1444C73.8836 90.5551 70.9721 90.8289 68.0264 91.0342C66.5535 91.0685 64.0873 90.8631 61.6896 90.5209C60.251 90.2813 58.6068 89.6995 57.4765 89.4599ZM56.6544 89.3231C56.3461 89.3231 56.1749 89.3915 56.1749 89.6311C56.1749 89.9049 56.5174 89.4257 56.6544 89.3231ZM57.2367 86.5852C57.0655 86.1061 56.8257 85.7296 56.5174 86.1745C56.4832 86.243 56.6202 86.2772 56.7229 86.3456C56.9284 86.3798 57.0997 86.4825 57.2367 86.5852Z"
                                            fill="#6F42C1" />
                                    </svg>
                                </figure>

                                <!-- Image -->
                                <img src="assets/images/about/cat_picOne.png" class="rounded-3" alt="">
                                <!-- Image -->
                                <div class="col-10 position-absolute top-100 start-0 translate-middle mt-n6 ms-n3 d-none d-md-block"
                                    style="opacity: 0.9;">
                                    <img src="assets/images/about/cat_picTwo.png" class="rounded-3" alt="">
                                </div>
                            </div>

                        </div> <!-- Row END -->
                    </div>
                    <!-- Right side END -->
                </div>
            </div>
        </section>
        <!-- =======================
About END -->

        <!-- =======================
Page Banner START -->
        <section class="py-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-light p-4 rounded-3 position-relative overflow-hidden">

                            <!-- Svg decoration -->
                            <figure class="position-absolute top-0 end-0 mt-5">
                                <svg width="566.3px" height="353.7px" viewBox="0 0 566.3 353.7">
                                    <path stroke="#17a2b8" fill="none"
                                        d="M525.1,4c8.1,0.7,14.9,7.2,17.9,14.8c3,7.6,3,16,2.1,24.1c-4.7,44.3-32.1,84.7-69.4,108.9 c-37.4,24.2-83.7,32.8-127.9,27.6c-32.3-3.8-63.5-14.5-95.9-16.6c-21.6-1.4-45.6,2.1-60.1,18.3c-7.7,8.5-11.8,19.6-14.8,30.7 c-7.9,29.5-9,60.8-19.7,89.5c-5.5,14.8-14,29.1-27.1,38c-15.6,10.5-35.6,12-54.2,9.5c-18.6-2.5-36.5-8.6-55-12.1" />
                                    <path stroke="#F99D2B" fill="none"
                                        d="M560.7,0.2c10,18.3,3.7,41.1-5,60.1c-11.8,25.9-28,50.3-50.2,68.2c-29,23.3-66.3,34-103.2,38.6 c-36.9,4.6-74.3,3.8-111.3,7.2c-22.3,2-45.3,5.9-63.5,19c-26.8,19.2-39,55.3-68.3,70.4c-38.2,19.6-89.7-4.9-125.6,18.8 c-22.6,15-30.7,44.2-33.3,71.2" />
                                </svg>
                            </figure>

                            <div class="row position-relative align-items-center">

                                <!-- Content -->
                                <div class="col-md-6 px-md-5">
                                    <!-- Title -->
                                    <h3 class="mb-3">Elevate Your Online Presence: Discover Tailored Solutions on
                                        CreativeHub</h3>
                                    <p class="mb-3">Find Your Path to Digital Success with Our Specialized Categories
                                    </p>
                                </div>

                                <!-- Image -->
                                <div class="col-md-6 text-center">
                                    <img src="assets/images/book/categories_main.svg" alt="">
                                </div>
                            </div> <!-- Row END -->
                        </div>
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page Banner END -->

        <!-- =======================
Page content START -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <!-- Main content START -->
                    <div class="col-12">

                        <!-- Search option START -->
                        <div class="row mb-4 align-items-center">

                            <!-- Title -->
                            <div class="col-md-4">
                                <h2 class="mb-0">Explore Our Category</h2>
                            </div>
                        </div>
                        <!-- Search option END -->

                        <!-- Book Grid START -->
                        <div class="row g-4">

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-80">
                                    <div class="position-relative">
                                        <!-- Image -->
                                        <img src="assets/images/book/ai_services.jpg" class="card-img-top"
                                            alt="book image">
                                        <!-- Overlay -->
                                        <div class="card-img-overlay d-flex z-index-0 p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <!-- Card format icon -->
                                                <div class="icon-md bg-dark rounded-circle fs-5">
                                                    <a href="#" class="text-white"><i class="bi bi-book"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body px-3">
                                        <!-- Title -->
                                        <h5 class="card-title mb-0">
                                            <a href="category.php" class="stretched-link text-uppercase">ai
                                                services</a>
                                        </h5>
                                        <span class="h6 fw-light mb-0">Angular 4 Tutorial
                                            in audio (Compact Disk)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-80">
                                    <div class="position-relative">
                                        <!-- Image -->
                                        <img src="assets/images/book/Business.jpg" class="card-img-top"
                                            alt="book image">
                                        <!-- Overlay -->
                                        <div class="card-img-overlay d-flex z-index-0 p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <!-- Card format icon -->
                                                <div class="icon-md bg-dark rounded-circle fs-5">
                                                    <a href="#" class="text-white"><i class="bi bi-book"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body px-3">
                                        <!-- Title -->
                                        <h5 class="card-title mb-0">
                                            <a href="category.php" class="stretched-link text-uppercase">Business</a>
                                        </h5>
                                        <span class="h6 fw-light mb-0">Angular 4 Tutorial
                                            in audio (Compact Disk)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-80">
                                    <div class="position-relative">
                                        <!-- Image -->
                                        <img src="assets/images/book/Consulting.jpg" class="card-img-top"
                                            alt="book image">
                                        <!-- Overlay -->
                                        <div class="card-img-overlay d-flex z-index-0 p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <!-- Card format icon -->
                                                <div class="icon-md bg-dark rounded-circle fs-5">
                                                    <a href="#" class="text-white"><i class="bi bi-book"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body px-3">
                                        <!-- Title -->
                                        <h5 class="card-title mb-0">
                                            <a href="category.php" class="stretched-link text-uppercase">Consulting</a>
                                        </h5>
                                        <span class="h6 fw-light mb-0">Angular 4 Tutorial
                                            in audio (Compact Disk)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-80">
                                    <div class="position-relative">
                                        <!-- Image -->
                                        <img src="assets/images/book/data.jpg" class="card-img-top" alt="book image">
                                        <!-- Overlay -->
                                        <div class="card-img-overlay d-flex z-index-0 p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <!-- Card format icon -->
                                                <div class="icon-md bg-dark rounded-circle fs-5">
                                                    <a href="#" class="text-white"><i class="bi bi-book"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body px-3">
                                        <!-- Title -->
                                        <h5 class="card-title mb-0">
                                            <a href="category.php" class="stretched-link text-uppercase">data</a>
                                        </h5>
                                        <span class="h6 fw-light mb-0">Angular 4 Tutorial
                                            in audio (Compact Disk)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-80">
                                    <div class="position-relative">
                                        <!-- Image -->
                                        <img src="assets/images/book/Graphics_Design.jpg" class="card-img-top"
                                            alt="book image">
                                        <!-- Overlay -->
                                        <div class="card-img-overlay d-flex z-index-0 p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <!-- Card format icon -->
                                                <div class="icon-md bg-dark rounded-circle fs-5">
                                                    <a href="#" class="text-white"><i class="bi bi-book"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body px-3">
                                        <!-- Title -->
                                        <h5 class="card-title mb-0">
                                            <a href="category.php" class="stretched-link text-uppercase">Graphics &
                                                Design</a>
                                        </h5>
                                        <span class="h6 fw-light mb-0">Angular 4 Tutorial
                                            in audio (Compact Disk)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-80">
                                    <div class="position-relative">
                                        <!-- Image -->
                                        <img src="assets/images/book/Digital_Marketing.jpg" class="card-img-top"
                                            alt="book image">
                                        <!-- Overlay -->
                                        <div class="card-img-overlay d-flex z-index-0 p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <!-- Card format icon -->
                                                <div class="icon-md bg-dark rounded-circle fs-5">
                                                    <a href="#" class="text-white"><i class="bi bi-book"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body px-3">
                                        <!-- Title -->
                                        <h5 class="card-title mb-0">
                                            <a href="category.php" class="stretched-link text-uppercase">Digital &
                                                Marketing</a>
                                        </h5>
                                        <span class="h6 fw-light mb-0">Angular 4 Tutorial
                                            in audio (Compact Disk)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-80">
                                    <div class="position-relative">
                                        <!-- Image -->
                                        <img src="assets/images/book/music_audio.jpg" class="card-img-top"
                                            alt="book image">
                                        <!-- Overlay -->
                                        <div class="card-img-overlay d-flex z-index-0 p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <!-- Card format icon -->
                                                <div class="icon-md bg-dark rounded-circle fs-5">
                                                    <a href="#" class="text-white"><i class="bi bi-book"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body px-3">
                                        <!-- Title -->
                                        <h5 class="card-title mb-0">
                                            <a href="category.php" class="stretched-link text-uppercase">music &
                                                audio</a>
                                        </h5>
                                        <span class="h6 fw-light mb-0">Angular 4 Tutorial
                                            in audio (Compact Disk)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-80">
                                    <div class="position-relative">
                                        <!-- Image -->
                                        <img src="assets/images/book/Programming_Tech.jpg" class="card-img-top"
                                            alt="book image">
                                        <!-- Overlay -->
                                        <div class="card-img-overlay d-flex z-index-0 p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <!-- Card format icon -->
                                                <div class="icon-md bg-dark rounded-circle fs-5">
                                                    <a href="#" class="text-white"><i class="bi bi-book"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body px-3">
                                        <!-- Title -->
                                        <h5 class="card-title mb-0">
                                            <a href="category.php" class="stretched-link text-uppercase">Programming &
                                                Tech</a>
                                        </h5>
                                        <span class="h6 fw-light mb-0">Angular 4 Tutorial
                                            in audio (Compact Disk)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-80">
                                    <div class="position-relative">
                                        <!-- Image -->
                                        <img src="assets/images/book/Video_Animation.jpg" class="card-img-top"
                                            alt="book image">
                                        <!-- Overlay -->
                                        <div class="card-img-overlay d-flex z-index-0 p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <!-- Card format icon -->
                                                <div class="icon-md bg-dark rounded-circle fs-5">
                                                    <a href="#" class="text-white"><i class="bi bi-book"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body px-3">
                                        <!-- Title -->
                                        <h5 class="card-title mb-0">
                                            <a href="category.php" class="stretched-link text-uppercase">Video &
                                                Animation</a>
                                        </h5>
                                        <span class="h6 fw-light mb-0">Angular 4 Tutorial
                                            in audio (Compact Disk)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                        </div>
                        <!-- Book Grid END -->
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page content END -->

        <!-- =======================
Action box START -->
        <section class="pt-0">
            <div class="container">
                <div class="row g-4">

                    <!-- Action box item START -->
                    <div class="col-lg-6">
                        <div class="bg-purple bg-opacity-10 rounded-3 p-5 h-100">

                            <!-- Content -->
                            <div class="row g-3 align-items-center">
                                <!-- Image -->
                                <div class="col-sm-5 col-lg-12 col-xl-5">
                                    <img src="assets/images/about/09.jpg" class="rounded" alt="">
                                </div>

                                <!-- Content -->
                                <div class="col-sm-7 col-lg-12 col-xl-7">
                                    <!-- Title -->
                                    <h3 class="mb-2">See Business Solutions </h3>
                                    <!-- Title and price -->
                                    <h6 class="lead mb-2">Solutions designed to help companies locate and Manage
                                        outstanding independent contractors.
                                    </h6>
                                    <!-- Button -->
                                    <a href="our-business-solutions.php" class="btn btn-sm btn-purple mb-0">Get
                                        Started</a>
                                </div>
                            </div> <!-- Row END -->
                        </div>
                    </div>
                    <!-- Action box item END -->

                    <!-- Action box item START -->
                    <div class="col-lg-6">
                        <div class="bg-warning rounded-3 bg-opacity-15 p-5 h-100">

                            <!-- Content -->
                            <div class="row g-3 align-items-center my-auto">
                                <!-- Content -->
                                <div class="col-sm-7 col-lg-12 col-xl-7">
                                    <h2 class="mb-1 fs-1">10%OFF</h2>
                                    <p class="mb-3 h5 fw-light lead text-capitalize ">Invite a Friend maximum of $100
                                        per qualifying purchase. </p>
                                    <a href="invent_friend.php" class="btn btn-dark mb-0">How it Works</a>
                                </div>

                                <!-- Image -->
                                <div class="col-sm-5 col-lg-12 col-xl-5">
                                    <img src="assets/images/about/search _ people.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Action box item END -->
                </div>
            </div>
        </section>
        <!-- =======================
Action box END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    <?php include('includes/footer.php') ?>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/vendor/choices/js/choices.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>