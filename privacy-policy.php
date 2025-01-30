<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Privacy & Policy </title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="CreativeHub - Privacy & Policy">

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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

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
        <!-- =======================
Page Banner START -->
        <section class="bg-light py-5">
            <div class="container">
                <div class="row g-4 g-md-5 position-relative">
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-0 start-0 d-none d-sm-block">
                        <svg width="22px" height="22px" viewBox="0 0 22 22">
                            <polygon class="fill-purple"
                                points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 ">
                            </polygon>
                        </svg>
                    </figure>

                    <!-- Title and Search -->
                    <div class="col-lg-10 mx-auto text-center position-relative">
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-50 end-0 translate-middle-y">
                            <svg width="27px" height="27px">
                                <path class="fill-orange"
                                    d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z">
                                </path>
                            </svg>
                        </figure>
                        <!-- Title -->
                        <h1 class="display-6">Privacy Policy</h1>
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
                                    <input class="form-control border-0 me-1" type="text" id="searchInput"
                                        placeholder="Search for a keyword...">
                                    <button type="button" class="btn btn-blue mb-0 rounded"
                                        onclick="searchFAQ()">Search</button>

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
                        <h3 class="mb-4">Policy Services </h3>

                        <!-- FAQ START -->
                        <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-1">
                                    <button class="accordion-button fw-bold rounded d-inline-block collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1"
                                        aria-expanded="true" aria-controls="collapse-1">
                                        The short version
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-1" class="accordion-collapse collapse show"
                                    aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        <p><em class="fw-bold">Information We Gather:</em> The majority of the
                                            information we gather is directly
                                            provided by you, whether you register on the site, use it, fill out forms,
                                            or sign up for one of our programs. We also gather data on your interactions
                                            with CreativeHub, any postings you make on our blogs or forums, and your
                                            interactions with other CreativeHub users. Furthermore, we automatically get
                                            data
                                            when you visit, browse, view, or utilize the Site in any other way. We also
                                            get data from third-party vendors and other accessible sources.
                                        </p>
                                        <p><em class="fw-bold">Our Utilization of Your Personal:</em> Data Is Authorized
                                            by Law Where appropriate under applicable legislation, the "lawful ground"
                                            listed below shall be used to support any processing of your personal data.
                                        </p>
                                        <p><em class="fw-bold">How Will the Data Gathered Be Used?:</em> We use your
                                            personal information to run the Site, fulfill our legal obligations to you,
                                            develop, enhance, and personalize our services; to prevent fraud; to
                                            maintain the integrity and security of the marketplace; to get in touch with
                                            you and send you direct marketing messages; to promote and advertise the
                                            Site, our services, and the CreativeHub marketplace; to comply with
                                            legitimate
                                            requests from law enforcement; and to ensure compliance with applicable laws
                                            and regulations.
                                        </p>
                                        <p><em class="fw-bold">How Long Do We Keep Personal Information?:</em> We will
                                            only retain personal information for as long as it is necessary to fulfill
                                            the reason it was first obtained. We may, however, occasionally save
                                            personal data for extended periods of time.
                                        </p>
                                        <p><em class="fw-bold">Children: </em>Users who are at least eighteen years old
                                            and of legal age to enter into binding contracts are invited to use this
                                            site. Only through an account maintained by a parent or legal guardian with
                                            their consent can minors under the age of eighteen (18) use the Site. The
                                            Site and CreativeHub services are not available to minors under the age of
                                            thirteen. We do not intentionally gather personal data from minors younger
                                            than thirteen.
                                        </p>
                                        <p><em class="fw-bold">Sharing Personal Information with Third Parties:</em>In
                                            order to run the Site, give you our services, comply with legal
                                            requirements, stop fraud, infringements, and unlawful activity, among other
                                            things, we must share personal information with third parties.
                                        </p>
                                        <p><em class="fw-bold">Cookies:</em> We employ cookies, along with related
                                            technologies (web beacons, pixels, tags, and scripts), to enhance and
                                            customize your online experience, offer our services, monitor website
                                            traffic, and conduct marketing campaigns.
                                        </p>
                                        <p><em class="fw-bold">External Links:</em> This website has links to other
                                            websites. If you link to a third party website from this website,
                                            CreativeHub has
                                            no control over the data you provide to that website or the way the third
                                            party uses it. This policy does not apply to either scenario.</p>

                                        <p><em class="fw-bold">Security:</em>Using industry-standard technology and
                                            internal protocols, we put organizational and technical safeguards in place
                                            to protect the integrity of the Site and your personal information and to
                                            keep it safe from unauthorized access, loss, misuse, alteration,
                                            destruction, or damage.</p>


                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-2">
                                    <button
                                        class="accordion-button fw-bold rounded d-inline-block collapsed d-block pe-5"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2"
                                        aria-expanded="false" aria-controls="collapse-2">
                                        Information We Collect
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        <p><em class="fw-bold">Details You Offer:</em> We request or otherwise collect
                                            personal information from you when you register for an account on the site,
                                            use it, fill out forms, take part in surveys or skills tests, sign up for
                                            events or newsletters, use the site as a collaborator, and/or register for
                                            our affiliate, influencer, or similar program. This information includes a
                                            working email address, login credentials, name and username, profile details
                                            (including photo, education, profession, and expertise), physical address or
                                            billing information, phone number or other contact information, date of
                                            birth, transactional information, payment information, details about other
                                            social network-linked accounts, information about your listed gigs, and
                                            information included in user-generated content and files.
                                        </p>
                                        <p><em class="fw-bold">Data That We Automatically Gather:</em> We gather data
                                            when you visit, browse, view, or utilize the site in any other way. This
                                            data includes information about your searches, the pages you visit, browse,
                                            and scroll through, as well as clicks and other actions you do there.
                                            Additionally, we gather, utilize, and process data related to this usage,
                                            such as geolocation data, IP addresses, device and connection details,
                                            operating systems, session lengths, language, currency, and keyboard
                                            settings, browser data, web log data, and the URLs of the websites you
                                            visited or interacted with both before and after using the Site. As
                                            explained below, we also gather and use information on the usage of cookies
                                            and related technologies.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-3">
                                    <button class="accordion-button fw-bold collapsed rounded d-block pe-5"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3"
                                        aria-expanded="false" aria-controls="collapse-3">
                                        Our Legal Basis for Using Your Personal Information
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                    data-bs-parent="#accordionExample2">
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
                                    <button class="accordion-button fw-bold collapsed rounded d-block pe-5"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4"
                                        aria-expanded="false" aria-controls="collapse-4">
                                        How Do We Use The Information Collected?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        <p>To run the Site, fulfill our duties to you, give you high-quality service and
                                            security, and to continuously expand, enhance, and customize our offerings.
                                            For instance, we confirm your identity using personal information.
                                            Additionally, we use your data to create and configure your account, confirm
                                            or resend your password, keep track of your activities, allow you to
                                            communicate with other users, offer customer service, and occasionally get
                                            in touch with you. By providing ideas for gigs, rating search results, and
                                            other personalized services, the information assists us in creating and
                                            refining our offerings, understanding and analyzing our performance in
                                            addition to your preferences and performance, and customizing and
                                            personalizing our service to better your overall experience.

                                        </p>
                                        <p>To maintain a safe and secure marketplace and services, guard against fraud,
                                            and guarantee marketplace integrity. For instance, we use personal data to
                                            conduct security investigations and risk assessments, monitor, track, and
                                            prevent illegal, fraudulent, and inappropriate activities; maintain content
                                            integrity; verify or authenticate information you provide; look into user
                                            complaints and reports; enforce our terms of service; and abide by
                                            applicable laws.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item mb-3">
                                <h6 class="accordion-header font-base" id="heading-5">
                                    <button class="accordion-button fw-bold collapsed rounded d-block pe-5"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5"
                                        aria-expanded="false" aria-controls="collapse-5">
                                        How Long Do We Keep Personal Information?
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">

                                        <p>We generally follow the guideline that personal data should only be retained
                                            for as long as necessary to fulfill the purposes for which it was obtained.
                                            We may, however, keep your personal information on file for longer periods
                                            of time in specific situations. Personal data will be kept on file for the
                                            following reasons:</p>
                                        <p>As long as it is pertinent and essential to our business operations, such as
                                            to ensure that we have a correct record of your interactions with us in the
                                            event that there are any complaints or disputes;</p>
                                        <p>regarding personal data from closed accounts in order to abide by relevant
                                            laws, stop fraud, gather outstanding fees, settle disputes, troubleshoot
                                            issues, support investigations, enforce our site's rules, and take other
                                            legal steps;</p>
                                        <p>to fulfill any legal requirements or other commitments that CreativeHub has;
                                            and</p>
                                        <p>We require it, if and when required, to preserve evidence within the statute
                                            of limitations.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h6 class="accordion-header font-base" id="heading-6">
                                    <button class="accordion-button fw-bold collapsed rounded d-block pe-5"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6"
                                        aria-expanded="false" aria-controls="collapse-6">
                                        Children
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        Users who are of legal capacity to create a binding contract and who are at
                                        least eighteen years of age are eligible to use this site. Only through an
                                        account maintained by a parent or legal guardian with their consent can minors
                                        under the age of eighteen (18) use the Site. The Site and CreativeHub services
                                        are
                                        not available to minors under the age of thirteen. We do not intentionally
                                        gather personal data from minors younger than thirteen. It is important for
                                        parents and guardians to constantly keep an eye on their kids' actions. We shall
                                        destroy any personal information we may have obtained or obtained from a kid
                                        under the age of thirteen.

                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h6 class="accordion-header font-base" id="heading-7">
                                    <button class="accordion-button fw-bold collapsed rounded d-block pe-5"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7"
                                        aria-expanded="false" aria-controls="collapse-6">
                                        Sharing Personal Information with Third Parties
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="heading-7"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        <p>with visitors to the site and other users. Upon registering, all Site users
                                            can see your username, country, and other publicly available information
                                            about your activities. This data consists of any images you post, your
                                            publicly accessible portfolio, gig details, reviews and ratings, and any
                                            other details you decide to add to your profile. We also give you the option
                                            to engage and publish openly on blogs, forums, and other comparable
                                            platforms.
                                        </p>
                                        <p>Please be advised that when you use these tools, some information, including
                                            your user name, profile, and any content you contribute, will be visible to
                                            the public. Certain EU buyers may view certain information required by
                                            applicable laws if you were verified as a business seller (trader) on
                                            CreativeHub. This information includes your name, address, phone number,
                                            email
                                            address, and business registration number in addition to your
                                            self-certification that you will abide by CreativeHub's policies and any
                                            applicable EU regulations.
                                        </p>
                                        <p> It is your obligation to make sure that other users will adhere to your
                                            criteria, and Fiverr cannot guarantee that all users will make this happen;
                                        </p>

                                        <p><em class="fw-bold">For the purpose of payments</em> and fraud detection. In
                                            order to facilitate payments made through the Site, secure the Site and
                                            guard against fraud, unlawful transactions (including money laundering),
                                            claims, or other liabilities, we exchange personal information with payment
                                            processors, fraud detection agencies, and similar third parties;</p>
                                        <p><em class="fw-bold"></em>with associates on social media. Certain social
                                            media services, such as single sign-on capabilities, are available on our
                                            website. To promote our services and the Fiverr marketplace, we also share
                                            limited personal information with marketing partners and social networking
                                            sites like Facebook and Google. In order for certain features and
                                            third-party services to work, they may establish a cookie and collect
                                            certain information about you. The features of these third parties are
                                            subject to their policies;</p>
                                    </div>
                                </div>
                            </div>


                            <!-- Item -->
                            <div class="accordion-item">
                                <h6 class="accordion-header font-base" id="heading-8">
                                    <button class="accordion-button fw-bold collapsed rounded d-block pe-5"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8"
                                        aria-expanded="false" aria-controls="collapse-6">
                                        Cookies
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="heading-8"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        Cookies and related technologies (web beacons, pixels, tags, and scripts) are
                                        used by us to enhance and customize your experience, deliver our services,
                                        monitor website performance, and conduct marketing campaigns. This Policy is
                                        applicable for using cookies on our site and processing personal data about you.
                                        The terms "essential cookies," "analytics cookies," and "marketing cookies"
                                        refer to the different kinds of cookies that we and our partners employ in
                                        connection with the Site and our services.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h6 class="accordion-header font-base" id="heading-9">
                                    <button class="accordion-button fw-bold collapsed rounded d-block pe-5"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9"
                                        aria-expanded="false" aria-controls="collapse-6">
                                        Security
                                    </button>
                                </h6>
                                <!-- Body -->
                                <div id="collapse-9" class="accordion-collapse collapse" aria-labelledby="heading98"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body mt-3">
                                        <p>Through industry standard technology and internal procedures, we use
                                            organizational and technical safeguards to preserve the security of the
                                            Site, our services, and your personal information. We also work to prevent
                                            unauthorized access, loss, misuse, alteration, destruction, or damage to
                                            your information. Among other things, we fulfill the necessary requirements
                                            to keep our PCI DSS (Payment Card Industry Data Security Standards)
                                            accreditation current (in relation to credit card payments). Furthermore, we
                                            guarantee in writing that any third party processing your personal data does
                                            so in a manner that similarly protects the confidentiality and integrity of
                                            your data.
                                        </p>
                                        <p>Though we will make every effort to safeguard your personal information, we
                                            are unable to guarantee the security of any data you communicate to the Site
                                            due to the inherent insecurity of data transfer over the internet. After
                                            receiving your data, we will attempt to prevent unwanted access by using
                                            stringent procedures and security features.</p>
                                        <p>By registering on the site, users undertake to maintain the strict
                                            confidentiality of their passwords and not share them with any outside
                                            parties.</p>
                                        <p>On request, we can give more details regarding our data security procedures.
                                        </p>

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