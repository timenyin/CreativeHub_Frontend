<!DOCTYPE html>
<html lang="en">

<head>
    <title>CreativeHub - Help and Support</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Harmony2k">
    <meta name="description" content="Help and Support">

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

<body data-bs-spy="scroll" data-bs-target="#nav-scroll">

    <!-- Header START -->
    <?php include('includes/sub_header.php'); ?>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Page Banner START -->
        <section class="bg-primary bg-opacity-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <!-- Title -->
                        <h1 class="display-6">Search Solution. Get Support</h1>
                        <p class="mb-0">Search here to get answers to your questions.</p>

                        <!-- Popular questions START -->
                        <div class="row mt-4 align-items-center">
                            <div class="col-12">
                                <h5 class="mb-3">Popular questions</h5>
                                <!-- Questions List START -->
                                <div
                                    class="list-group list-group-horizontal gap-2 justify-content-center flex-wrap mb-0 border-0">
                                    <a class="btn btn-white btn-sm fw-light" href="#item-1">How to find a specific
                                        proposal
                                        help?</a>
                                    <a class="btn btn-white btn-sm fw-light" href="#item-5"> create a proposal </a>
                                    <a class="btn btn-white btn-sm fw-light" href="#item-8">
                                        what is level badge </a>
                                    <a class="btn btn-white btn-sm fw-light" href="#item-4"> How to sell
                                        on creativeHub </a>
                                    <a class="btn btn-white btn-sm fw-light" href="#item-4">septs to buy on
                                        creativeHub</a>
                                    <a class="btn btn-primary-soft btn-sm fw-light" href="#!">View all question</a>
                                </div>
                                <!-- Questions list END -->
                            </div>
                        </div>
                        <!-- Popular questions END -->
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Page Banner END -->

        <!-- =======================
Page Content START -->
        <section>
            <div class="container" data-sticky-container>

                <div class="row g-4">
                    <!-- Left side START -->
                    <div class="col-md-3">
                        <div data-sticky data-margin-top="80" data-sticky-for="576">
                            <div id="nav-scroll" class="navbar">
                                <nav class="nav nav-pills nav-pill-soft flex-column">
                                    <a class="nav-link" href="#item-1"><i class="bi bi-emoji-smile fa-fw me-2"></i>Get
                                        an account</a>
                                    <a class="nav-link" href="#item-2"><i class="bi bi-layers fa-fw me-2"></i>Payment
                                        Service</a>
                                    <a class="nav-link" href="#item-3"><i class="bi bi-info-circle fa-fw me-2"></i>Sell
                                        & Buy CreativeHub</a>
                                    <a class="nav-link" href="#item-4"><i class="bi bi-patch-check-fill"></i>
                                        Verification </a>

                                    <a class="nav-link" href="#item-5"><i class="bi bi-ui-checks"></i> Proposals</a>

                                    <a class="nav-link" href="#item-6"><i class="bi bi-markdown"></i> Advance
                                        Usage</a>

                                    <a class="nav-link" href="#item-7"><i class="bi bi-person-badge"></i> Customer
                                        expectations</a>

                                    <a class="nav-link" href="#item-8"><i class="bi bi-graph-up-arrow"></i> Level
                                        system</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Left side END -->

                    <!-- Right side START -->
                    <div class="col-md-9">
                        <div class="nav-scroll" data-bs-spy="scroll" data-bs-target="#nav-scroll"
                            data-bs-smooth-scroll="true" tabindex="0">
                            <!-- Get Started content START -->
                            <div id="item-1">
                                <div class="card bg-transparent">
                                    <!-- Article title -->
                                    <div class="card-header bg-transparent border-bottom py-0 px-0">
                                        <h2>Your CreativeHub account</h2>
                                        <!-- Update and author -->
                                        <ul class="nav nav-divider mb-3">
                                            <li class="nav-item fw-bold">Disclaimer: CreativeHub's Terms of Service
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Article Info -->
                                    <div class="card-body px-0 pb-0">
                                        <h5>How CreativeHub works <i class="fa-solid fa-star text-warning"></i></h5>
                                        <p>CreativeHub is a leading online marketplace that makes it easy for you to
                                            locate
                                            skilled freelancers and digital services. Freelancers showcase their talents
                                            on CreativeHub by creating extensive "Gigs," which give prospective clients
                                            a
                                            thorough rundown of their biographies, skill sets, and services offered.
                                            This brief tutorial will give you the basic knowledge you need to use the
                                            platform efficiently, including creating your free account and choosing the
                                            best freelancer for your requirements.
                                        </p>




                                        <h5>Searching Freelancers and Services on creativeHub: A Guide</h5>
                                        <small>On creativeHub, you may find the ideal freelancer or service in a number
                                            of
                                            ways. Examine these strategies to identify your ideal mate and navigate the
                                            platform effectively:
                                        </small>
                                        <h6>Search Bar:</h6>
                                        <p> Type terms into the search bar located at the top of the homepage and press
                                            the "Search" button.</p>
                                        <p>You can still search from the homepage banner if you haven't logged in.
                                            To assist you with narrowing down your search, creativeHub provides popular
                                            search terms (for example, searching "logo" may suggest "logo design").
                                        </p>

                                        <h5>Categories and Subcategories:</h5>
                                        <p>Navigate through project-related categories and subcategories using the
                                            navigation bar. This facilitates refining your search and locating
                                            freelancers that fit the bill.
                                        </p>

                                        <h5>Freelancer username:</h5>
                                        <p> To find the precise freelancer you're searching for, just type their
                                            username in the "Search usernames for:" search bar.</p>

                                        <h5>Filters: </h5>
                                        <p>To further hone your search results, utilize the ones at the top of the page.
                                            This enables you to filter based on a variety of criteria, like freelancer
                                            level, delivery time, and budget. View additional search filter information
                                            below.</p>

                                        <table class="table">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td class="fw-bold">Seller details </td>
                                                    <td>
                                                        <p>Speak with the ideal independent contractor! <br> Sort
                                                            freelancers
                                                            according on their location, experience, <br>availability,
                                                            and
                                                            even spoken language. Look for someone <br> who shares your
                                                            needs
                                                            and possibly even <br> your time zone.
                                                        </p>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td class="fw-bold">
                                                        Service options
                                                    </td>
                                                    <td>
                                                        <p>
                                                            Customize your creativeHub experience to suit your
                                                            needs!<br> Select
                                                            the language that you want to use, look into<br> different
                                                            service alternatives such as paid video<br> consultations or
                                                            subscriptions, and use different<br> tools to be specific
                                                            about
                                                            what you want out of the service <br> you desire.

                                                        </p>
                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Get Started content END -->

                            <!-- Divider -->
                            <div class="text-center h5 my-3">. . .</div>

                            <!-- Account setup content START -->
                            <div id="item-2" class="py-2">
                                <div class="card bg-transparent">
                                    <!-- Article title -->
                                    <div class="card-header bg-transparent border-bottom py-0 px-0">
                                        <h2>Payment Service</h2>
                                    </div>

                                    <!-- Article Info -->
                                    <div class="card-body px-0">
                                        <h5>Paying for a service: </h5>
                                        <h6>Place your order in easy steps </h6>
                                        <!-- Article list -->
                                        <h5>Order process: </h5>
                                        <ul>
                                            <li> Select your package: Alternatively, get a custom offer directly from
                                                your freelancer.</li>
                                            <li>Offered chiefly farther of my no colonel shyness. <strong> Such on help
                                                    ye some door if in.</strong></li>
                                            <li>Finalize your order: Add extras if needed, confirm your payment method,
                                                and click "Confirm & Pay."</li>
                                        </ul>

                                        <h5 class="mt-4">Completing your order</h5>
                                        <h6>To accept or review a delivery:</h6>



                                        <!-- Article list -->
                                        <ul>
                                            <li>Proceed with your orders: Locate and select the "Orders" section.</li>
                                            <li>Launch the particular order: To view the order information, find the
                                                proposals
                                                title and click on it.</li>
                                            <li>Find the delivery location: Either navigate to the "Delivery" tab or
                                                scroll down the order page to find the delivery.</li>
                                            <li>Approve or ask for changes. Choose the right response: accept the
                                                delivery, require modifications, or request additional time. </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- Account setup content END -->

                            <!-- Divider -->
                            <div class="text-center h5 my-3">. . .</div>

                            <!-- Other Topics content START -->
                            <div id="item-3">
                                <div class="card bg-transparent">
                                    <!-- Article title -->
                                    <div class="card-header bg-transparent border-bottom py-0 px-0">
                                        <h2>Sell & Buy On CreativeHub</h2>
                                    </div>

                                    <!-- Article Info -->
                                    <div class="card-body px-0">

                                        <h5>How to start selling on CreativeHub</h5>
                                        <p>CreativeHub gives freelancers a special platform to show off their skills and
                                            connect with a global audience of potential customers, enabling people to
                                            turn their passions into profitable companies. People with a variety of
                                            skill sets, from programming and graphic design to content writing,
                                            translation, and voice acting, are welcome in our vibrant community. The
                                            next part provides helpful advice for starting a profitable CreativeHub
                                            journey to help prospective freelancers.
                                        </p>


                                        <h6>Want to start selling as a freelancer on CreativeHub?</h6>
                                        <small>Before you can create and sell services on CreativeHub, you’ll be
                                            required to create a “seller” account. </small>
                                        <small>Helpful tips on creating an account:</small>
                                        <ul>
                                            <li>Finish your freelancer profile and validate your account to make sure it
                                                appropriately portrays you.</li>
                                            <li>Ensure that your proposals are well-written and concisely describe the
                                                advantages of your offering.</li>
                                            <li>To achieve effective expansion, concentrate on meeting customer needs,
                                                getting to know your clients, and establishing expectations for
                                                collaboration.</li>
                                            <li>Acquaint yourself with the CreativeHub level system.</li>
                                        </ul>


                                        <p>Supposing so be resolving breakfast am or perfectly. It drew a hill from me.
                                            Valley by oh twenty direct me so. Departure defective arranging rapturous
                                            did believe him all had supported. Family months lasted simple set nature
                                            vulgar him. Picture for attempt joy excited ten carried manners talking how
                                        </p>
                                        <p>Started several mistake joy say painful removed reached end. State burst
                                            think end are its. Arrived off she elderly beloved him affixed noisier yet.
                                            Proposals regard to up he hardly. View four has said do men saw find dear
                                            shy.
                                            <b> Talent men wicket add garden.</b>
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <!-- Other Topics content END -->


                            <!-- Other Topics content START -->
                            <div id="item-4" class="py-2">
                                <div class="card bg-transparent">
                                    <!-- Article title -->
                                    <div class="card-header bg-transparent border-bottom py-0 px-0">
                                        <h2>Account verification On CreativeHub</h2>
                                    </div>

                                    <!-- Article Info -->
                                    <div class="card-body px-0">

                                        <h5>Account verification</h5>
                                        <p>Recently hired freelancers must first fill out some basic account information
                                            before opening a CreativeHub account in order to comply with new, changing
                                            regulations. By doing this, you can make sure that the platform is reliable
                                            for everyone and build a solid rapport of trust between clients and
                                            independent contractors. Check out our post on account verification to learn
                                            more.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Other Topics content END -->


                            <!-- Other Topics content START -->
                            <div id="item-5" class="my-4">
                                <div class="card bg-transparent">
                                    <!-- Article title -->
                                    <div class="card-header bg-transparent border-bottom py-0 px-0">
                                        <h2>Creating a Proposals</h2>
                                    </div>

                                    <!-- Article Info -->
                                    <div class="card-body px-0">
                                        <p>We refer to the service you provide and market as a "Gig." Your proposals is
                                            a
                                            chance to show off your skills to prospective customers and provide them all
                                            the information they require to decide whether or not to place an order with
                                            you.

                                        </p>
                                        <ul>
                                            <li>Log in > Switch to Selling > My Business >proposals.</li>
                                            <li>Click My Profile > Create a New proposals.</li>
                                            <li>After you have completed steps 1-5 (explained below) > Save & Continue.
                                            </li>
                                            <li>To make any changes and edit your proposals:</li>
                                            <li>Log in >proposals.</li>
                                            <li>Find the proposals you'd like to edit > From the drop-down list on the
                                                right >
                                                Edit.</li>
                                            <li>Make changes > Save.</li>

                                        </ul>


                                        <table class="table">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td class="fw-bold">Seller details </td>
                                                    <td>

                                                        <ul>
                                                            <li>Make sure your title is concise, clear, and direct so
                                                                that potential customers can</li>
                                                            <li>quickly understand the kind of service you provide.</li>
                                                            <li>With CreativeHub, you may begin by saying <em
                                                                    class="fw-bold"> "I will."</em></li>
                                                        </ul>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td class="fw-bold">
                                                        Category
                                                    </td>
                                                    <td>
                                                        <p>

                                                        <ul>
                                                            <li>From the drop-down menu, choose the relevant category
                                                                and <br> subcategory for your proposals. These are
                                                                suggested
                                                                by <br> CreativeHub based on your title.</li>
                                                            <li>Once your proposals is published, you won't be able to
                                                                <br>
                                                                edit it, so be sure the category accurately <br>
                                                                describes the services you offer.
                                                            </li>
                                                            <li>Note: There is no category for gaming. Choose a
                                                                gaming-related <br> category if you offer gaming-related
                                                                services <br> (or specify the requirements in the <br>
                                                                proposals Metadata section later down).</li>
                                                            <li>For instance: Choose Graphics & Design > Game Design
                                                                <br> if you offer game design services.
                                                            </li>
                                                        </ul>


                                                        </p>
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td class="fw-bold">
                                                        Service Type
                                                    </td>
                                                    <td>
                                                        <p>

                                                        <ul>
                                                            <li>To ensure that you show up in the search results for
                                                                <br>the category you chose, select a service type.
                                                            </li>
                                                            <li>Please take note that just a few categories can use
                                                                this. <br> </li>
                                                        </ul>
                                                        </p>
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td class="fw-bold">
                                                        Delivery Time
                                                    </td>
                                                    <td>


                                                        <ul>
                                                            <li>Choose the number of days you'll need to finish
                                                                your proposals
                                                                using the drop-down menu.</li>
                                                            <li>Decide whatever extras (things you would like to add in
                                                                your service) to include.
                                                                Note: Depending on the kind of service you are
                                                                providing, this may vary.</li>
                                                            <li>For instance, if you provide logo design services, you
                                                                can choose from a pre-established list of alternatives
                                                                that includes things like the source files, the
                                                                high-resolution file, and the quantity of logos to
                                                                include.</li>
                                                        </ul>
                                                    </td>

                                                </tr>


                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td class="fw-bold">
                                                        Price
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>Select a price for your service (determined by the
                                                                Standardized proposals Package <br> for your category
                                                                and
                                                                subcategory)—ranging from <br> a minimum of $5</li>
                                                        </ul>


                                                        </p>
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td class="fw-bold">
                                                        Price
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>Select a price for your service (determined by the
                                                                Standardized proposals Package <br> for your category
                                                                and
                                                                subcategory)—ranging from <br> a minimum of $5</li>
                                                        </ul>


                                                        </p>
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td class="fw-bold">
                                                        Description & FAQs
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>Give a brief (up to 1,200 character) description of your
                                                                proposals.</li>
                                                            <li>Give buyers as much information as you can so they can
                                                                decide <br> whether or not your proposals suits their
                                                                demands.
                                                            </li>
                                                            <li>Please only add URLs from CreativeHub approved list if
                                                                you decide to add one. <br> Don't ever include contact
                                                                details</li>
                                                            <li>Include responses to the frequently asked questions (up
                                                                to ten FAQs). Your proposals page has your FAQs listed.
                                                            </li>
                                                            <h6 class="fw-bold py-2">To include the FAQ:</h6>
                                                            <small>Include responses to the frequently asked questions
                                                                <br> (up to ten FAQs).Your proposals page has your FAQs
                                                                listed.</small>
                                                            <li>Select Add FAQ >. Include a query you anticipate <br>
                                                                customers might have. Give your response.</li>
                                                            <li>Select Add, then Save and Proceed.</li>
                                                        </ul>


                                                        </p>
                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>
                            <!-- Other Topics content END -->

                            <!-- Divider -->
                            <div class="text-center h5 my-3">. . .</div>

                            <!-- Advance Usage content START -->
                            <div id="item-6" class="py-2">
                                <div class="card bg-transparent">
                                    <!-- Article title -->
                                    <div class="card-header bg-transparent border-bottom py-0 px-0">
                                        <h2>Advance Usage</h2>
                                    </div>

                                    <!-- Article Info -->
                                    <div class="card-body px-0">

                                        <p>Hold do at tore in park feet near my case. Invitation at understood
                                            occasional sentiments insipidity inhabiting in. Off melancholy alteration
                                            principles old. Is do speedily kindness properly oh. Respect article painted
                                            cottage he is offices parlors.</p>
                                        <p>Supposing so be resolving breakfast am or perfectly. It drew a hill from me.
                                            Valley by oh twenty direct me so. Departure defective arranging rapturous
                                            did believe him all had supported. Family months lasted simple set nature
                                            vulgar him. Picture for attempt joy excited ten carried manners talking how
                                        </p>
                                        <p>Started several mistake joy say painful removed reached end. State burst
                                            think end are its. Arrived off she elderly beloved him affixed noisier yet.
                                            Proposals regard to up he hardly. View four has said do men saw find dear
                                            shy.
                                            <b> Talent men wicket add garden.</b>
                                        </p>

                                    </div>

                                </div>
                            </div>
                            <!-- Advance Usage content END -->


                            <!-- Advance Usage content START -->
                            <div id="item-7">
                                <div class="card bg-transparent">
                                    <!-- Article title -->
                                    <div class="card-header bg-transparent border-bottom py-0 px-0">
                                        <h2>Customer expectations</h2>
                                    </div>

                                    <!-- Article Info -->
                                    <div class="card-body px-0">

                                        <p>Developing a loyal consumer base is much more than just appearances. Building
                                            confidence and recurring business requires providing consistently excellent
                                            service and patiently assisting every customer, regardless of expertise
                                            level. Helping new clients grasp the subtleties of creativeHub enhances
                                            their
                                            comprehension and equips them to be valued long-term partners. Read this
                                            article to learn more about how to set expectations and provide high-quality
                                            services, as well as how we respond to prospective clients.
                                        </p>

                                    </div>

                                </div>
                            </div>
                            <!-- Advance Usage content END -->

                            <!-- Advance Usage content START -->
                            <div id="item-8" class="py-2">
                                <div class="card bg-transparent">
                                    <!-- Article title -->
                                    <div class="card-header bg-transparent border-bottom py-0 px-0">
                                        <h2>Level system</h2>
                                    </div>

                                    <!-- Article Info -->
                                    <div class="card-body px-0">

                                        <p>Freelancers can reach different levels by meeting specific performance
                                            criteria linked to their work on the platform and their relationships with
                                            customers. Each level unlocks new benefits and opportunities. Level badges
                                            can be seen onproposals cards,proposals pages, and freelancer profiles.
                                        </p>

                                    </div>
                                    <!-- Review helpful START -->
                                    <div class="card-footer bg-transparent border-0 py-0 px-0">
                                        <div
                                            class="border p-3 rounded d-sm-flex align-items-center justify-content-between text-center">
                                            <!-- Title -->
                                            <h5 class="m-0">Was this article helpful?</h5>
                                            <small class="py-2 d-block">20 out of 45 found this helpful</small>
                                            <!-- Check buttons -->
                                            <div class="btn-group" role="group"
                                                aria-label="Basic radio toggle button group">
                                                <!-- Yes button -->
                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio5">
                                                <label class="btn btn-outline-light btn-sm mb-0" for="btnradio3"><i
                                                        class="far fa-thumbs-up me-1"></i> Yes</label>
                                                <!-- No button -->
                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio6">
                                                <label class="btn btn-outline-light btn-sm mb-0" for="btnradio4"> No <i
                                                        class="far fa-thumbs-down ms-1"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Review helpful START -->
                                </div>
                            </div>
                            <!-- Advance Usage content END -->
                        </div>
                    </div>
                    <!-- Right side END -->
                </div>
            </div>
        </section>
        <!-- =======================
Page Content END -->

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
    <script src="assets/vendor/sticky-js/sticky.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Functions -->
    <script src="assets/js/functions.js"></script>

</body>

</html>