<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - property claims </title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub - property claims">

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

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- Header START -->
    <header class="navbar-light navbar-sticky">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="index.php">
                    <img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
                    <img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <ul class="navbar-nav navbar-nav-scroll ml-auto">
                    <!-- Nav item 1 login -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#login-modal" href="sign-in.php" aria-haspopup="true" aria-expanded="false">Login</a>
                    </li> -->
                    <!-- Nav item 5 back to homePage  -->
                    <li class="nav-item">
                        <a href="index.php" class="nav-link bg-primary bg-opacity-10 rounded-3 text-primary px-3 py-3 py-xl-0" aria-haspopup="true" aria-expanded="false"><i class="bi bi-arrow-bar-left me-2"></i><span>To
                                Menu</span></a>
                    </li>

                </ul>
                <!-- Login and Join END -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <!-- =======================
Page Banner START -->
        <section class="bg-light py-5">
            <div class="container">
                <div class="row g-4 g-md-5 position-relative">
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-0 start-0 d-none d-sm-block">
                        <svg width="22px" height="22px" viewBox="0 0 22 22">
                            <polygon class="fill-purple" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 ">
                            </polygon>
                        </svg>
                    </figure>

                    <!-- Title and Search -->
                    <div class="col-lg-10 mx-auto text-center position-relative">
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-50 end-0 translate-middle-y">
                            <svg width="27px" height="27px">
                                <path class="fill-orange" d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z">
                                </path>
                            </svg>
                        </figure>
                        <!-- Title -->
                        <h1 class="display-6">Our Property Claims</h1>
                        <p>Last update: <span id="currentMonthYear"></span>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var dateElement = document.getElementById("currentMonthYear");

                                    var months = ["January", "February", "March", "April", "May", "June", "July",
                                        "August", "September", "October", "November", "December"
                                    ];
                                    var currentDate = new Date();
                                    var currentMonth = months[currentDate.getMonth()];
                                    var currentYear = currentDate.getFullYear();

                                    dateElement.textContent = currentMonth + " " + currentYear;
                                });
                            </script>
                        </p>
                        <!-- Search bar -->
                        <div class="col-lg-8 mx-auto text-center mt-4">
                            <form class="bg-body shadow rounded p-2">
                                <div class="input-group">
                                    <input class="form-control border-0 me-1" type="text" id="searchInput" placeholder="Search for a keyword...">
                                    <button type="button" class="btn btn-blue mb-0 rounded" onclick="searchFAQ()">Search</button>

                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- =======================
Page Banner END -->

        <!-- =======================
Page content START -->
        <section class="pt-5 pb-0 pb-lg-5">
            <div class="container">

                <div class="row g-4 g-md-5">
                    <!-- Main content START -->
                    <div class="col-lg-12">
                        <!-- Title -->
                        <h3 class="mb-4" id="pageTitle">Frequently Asked Questions</h3>

                        <!-- FAQ START -->
                        <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-1">
                                    <button class="accordion-button fw-bold rounded d-inline-block collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        Reporting Allegations of Copyright Violations
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        <p id="pageContent">creativeHub does not verify that user-generated or uploaded
                                            content complies
                                            with
                                            copyright or other legal requirements. Nonetheless, you should take the
                                            action listed below if you think any of the uploaded material infringes
                                            against your copyright or a related exclusive right. creativeHub
                                            investigates
                                            reported infractions and disables or removes any content that appears to be
                                            infringing on the rights of third parties.
                                        </p>
                                        <p>To enable us to examine your report as soon as possible and efficiently, the
                                            following information should be included in a copyright infringement notice
                                            ("Notice"):
                                        </p>
                                        <ul>
                                            <li>Identify the portion of your work that is protected by a copyright and
                                                the copyright(s) you are referring to.</li>
                                            <li>Your copyright designation(s) and/or certificate(s), together with the
                                                type (registered or unregistered).</li>
                                            <li>Evidence of ownership of your copyright, like your registration number
                                                or a copy of your registration certificate.</li>
                                            <li>A brief explanation of the claimed copyright infringement(s) by our
                                                user(s).</li>
                                            <li>You can send your Notice to our designated Copyright Claims Agent at
                                                email:
                                                <em class="text-info"> creativehubmessage@gmail.com</em>
                                            </li>
                                            <li>Alternatively you can submit the Notice electronically to </li>

                                        </ul>


                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-2">
                                    <button class="accordion-button fw-bold rounded d-inline-block collapsed d-block pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                        Counter-Notification Procedures
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        <p>If you think that content you uploaded to the website was accidentally
                                            removed or that access to it was blocked due to misidentification, you can
                                            file a counter-notice (also known as a "Counter-Notice") with us by sending
                                            a formal communication to our Copyright Claims agent (whose contact
                                            information is provided above). The following must be essentially included
                                            in the Counter-Notice in accordance with the Copyright:
                                        </p>
                                        <ul>
                                            <li>Your signature, digital or tangible.</li>
                                            <li>The content that has been deleted or to which access has been
                                                restricted, together with the place where it was previously available,
                                                should be identified.</li>
                                            <li>sufficient details (such as your name, postal address, phone number,
                                                and, if available, email address) to allow us to get in touch with you.
                                            </li>
                                            <li>A declaration made by you, under penalty of perjury, stating that you
                                                sincerely believe the material mentioned above was removed or disabled
                                                due to an error or misidentification of the content that needed to be
                                                removed or disabled.</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-3">
                                    <button class="accordion-button fw-bold collapsed rounded d-block pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                        Trademark Infringement
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        Where relevant under applicable laws, all processing of your personal
                                        information will be justified by a "lawful ground" for processing. In the
                                        majority of cases, processing will be justified on the legal basis that:
                                        <ul>
                                            <li>you have provided your consent for us to use your personal information
                                                for a specific purpose;</li>
                                            <li>our use of your personal information is necessary to perform a contract
                                                or take steps to enter into a contract with you (e.g. to provide you
                                                with services which you have purchased);</li>
                                            <li>the processing is necessary to comply with a relevant legal obligation
                                                or regulatory obligation that we have (e.g. fraud prevention); or</li>
                                            <li>the processing is necessary to support our legitimate interests as a
                                                business (e.g. to improve our services to you), subject to your
                                                overriding interests and fundamental rights and provided it is conducted
                                                at all times in a way that is proportionate.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-4">
                                    <button class="accordion-button fw-bold collapsed rounded d-block pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        How Do We Use The Information Collected?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        <p>CreativeHub does not verify that user-generated or uploaded content complies
                                            with
                                            trademark or other legal requirements. Nonetheless, you should take the
                                            action listed below if you think any of the uploaded material infringes on
                                            your trademark. CreativeHub investigates reported infractions and disables
                                            or
                                            removes anything that appears to be infringing on the intellectual property
                                            rights of other parties.
                                        </p>
                                        <p>To facilitate a timely and efficient examination of your report, a trademark
                                            infringement notice (hence, "TM Notice") ought to have the following:</p>
                                        <ul>
                                            <li>Identifying your brand and the products or services that you want to
                                                protect your trademark rights for.</li>
                                            <li>A printout from the relevant nation's trademark office records
                                                indicating the registration's current status and title, as well as your
                                                certificate of trademark registration. As an alternative, a declaration
                                                that your mark is unregistered accompanied by a court decision upholding
                                                your rights.</li>
                                            <li>A brief explanation of the alleged trademark infringement that our
                                                user(s) has caused you.</li>
                                            <li>A clear mention of the content you claim is infringing against your
                                                rights and that you are asking to be taken down, such as the
                                                CreativeHubRight® url or a link to the deliverable sent to the user,
                                                etc.</li>
                                            <li>Your full name, address, phone number, and email address.</li>
                                            <li>A declaration that you firmly believe the trademark owner, its agent, or
                                                the law do not permit use of the content in the way that has been
                                                complained about.</li>
                                        </ul>


                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-5">
                                    <button class="accordion-button fw-bold collapsed rounded d-block pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                        Repeat Infringers
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        <p>Repeat infringers' accounts may be disabled or terminated under our policy in
                                            appropriate circumstances.</p>
                                        <small class="fw-bold">The original language of this Intellectual Property
                                            Claims Policy is English. CreativeHub makes translations available for
                                            convenience only. In case of conflicts between the original English version
                                            and any translation, the English version shall prevail.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ END -->
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    <?php include('includes/footer.php'); ?>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>
    <script>

    </script>

</body>


</html>