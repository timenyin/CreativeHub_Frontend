<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sig-up to CreativeHub: Unleash Your Creativity!</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="Explore the sign-up portal of CreativeHub for innovative solutions.">
    <meta name="keywords" content="CreativeHub, login, innovative solutions, creative platform">

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
    <?php include('includes/min_header.php') ?>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

            <div class="container-fluid">
                <div class="row">
                    <!-- left -->
                    <div class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-85">
                        <div class="p-3 p-lg-5">
                            <!-- Title -->
                            <div class="text-center">
                                <h2 class="fw-bold">Discover the perfect freelance service in no time</h2>
                                <p class="mb-0 h6 fw-light">Hand your project over to a talented freelancer in minutes,
                                    get long-lasting results.</p>
                            </div>
                            <!-- SVG Image -->
                            <img src="assets/images/element/02.svg" class="mt-5" alt="">
                            <!-- Info -->
                            <div class="d-sm-flex mt-5 align-items-center justify-content-center">
                                <ul class="avatar-group mb-2 mb-sm-0">
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt="avatar"></li>
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar"></li>
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle" src="assets/images/avatar/13.jpg" alt="avatar"></li>
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle" src="assets/images/avatar/14.jpg" alt="avatar"></li>
                                </ul>
                                <!-- Content -->
                                <p class="mb-0 h6 fw-light ms-0 ms-sm-3">4k+ freelancers are waiting for you, joined us
                                    now it's your turn.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="col-12 col-lg-6 m-auto">
                        <div class="row my-2">
                            <div class="col-sm-10 col-xl-8 m-auto pt-4">
                                <!-- Title -->

                                <h2> 😊 Sign up for your account!</h2>
                                <p class="lead mb-2">Good to see you again! Kindly create an account and sign in.</p>

                                <!-- Form START -->
                                <form action="" method="post">
                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-person-bounding-box"></i></span>
                                            <input name="name" type="text" class="form-control border-0 bg-light rounded-end ps-1" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">UserName</label>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-person-heart"></i></span>
                                            <input name="u_name" type="text" class="form-control border-0 bg-light rounded-end ps-1" placeholder="UserName">

                                        </div>
                                        <small class="text-muted">Your UserName can not be changed once an account is
                                            registered</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address *</label>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
                                            <input name="email" type="email" class="form-control border-0 bg-light rounded-end ps-1" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="mb-3">
                                        <label for="inputPassword5" class="form-label">Password *</label>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
                                            <input name="pass" type="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="*********">
                                        </div>
                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="mb-3">
                                        <label for="inputPassword6" class="form-label">Confirm Password *</label>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
                                            <input name="con_pass" type="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="*********">
                                        </div>
                                    </div>
                                    <!-- Check box -->
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-1">
                                            <label class="form-check-label" for="checkbox-1">By signing up, you agree to
                                                the<a href="terms-of-service.php"> terms of
                                                    service</a></label>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="align-items-center mt-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary mb-0" type="button">Sign Up Now</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form END -->

                                <!-- Social buttons -->
                                <div class="row">
                                    <!-- Divider with text -->
                                    <div class="position-relative my-4">
                                        <hr>
                                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">
                                            Or</p>
                                    </div>
                                    <!-- Social btn -->
                                    <div class="col-xxl-6 d-grid">
                                        <a href="coming-soon.html" class="btn bg-google mb-2 mb-xxl-0"><i class="fab fa-fw fa-google text-white me-2"></i>Signup with Google</a>
                                    </div>
                                    <!-- Social btn -->
                                    <div class="col-xxl-6 d-grid">
                                        <a href="coming-soon.html" class="btn bg-facebook mb-0"><i class="fab fa-fw fa-facebook-f me-2"></i>Signup with Facebook</a>
                                    </div>
                                </div>

                                <!-- Sign up link -->
                                <div class="mt-4 text-center">
                                    <span>Already have an account?<a href="sign-in.php">
                                            Sign in here</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>