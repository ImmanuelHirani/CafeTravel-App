<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../public/output.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" /> -->
</head>

<body>
    <header class="fixed inset-x-0 top-0 z-50 md:top-12">
        <nav class="container relative w-full py-5 transition-all duration-300 ease-linear md:bg-transparent md:py-0">
            <div id="main-nav" class="relative flex items-center justify-between w-full md:pl-4 md:pr-5 group">
                <div class="left-nav">
                    <a class="flex items-center gap-1">
                        <img src="../asset/SVG/Pizza_logo-navbar.svg" class="md:w-[30%] w-[23%]" alt="" />
                        <p class="mt-1.5 text-2xl lg:text-3xl font-magilo">Cafe Travel</p>
                    </a>
                </div>
                <div class="box"></div>
                <div class="hidden translate-x-1/2 lg:absolute right-1/2 middle-nav font-magilo lg:block">
                    <div class="flex items-center justify-center gap-16 2xl:gap-20 link-wrapper">
                        <a href="index.html" class="text-xl 3xl:text-2xl">Home</a>
                        <a class="text-xl opacity-80 3xl:text-2xl" href="menu.html">
                            Menu
                        </a>
                        <a class="text-xl opacity-80 3xl:text-2xl" href="custom-pizza.html">
                            Custom Pizza
                        </a>
                        <a class="text-xl opacity-80 3xl:text-2xl" href="contact-us.html">
                            Contact
                        </a>
                    </div>
                </div>
                <div class="right-nav">
                    <div class="flex items-center gap-3.5 md:gap-3 icon-wrap">
                        <button id="cartTrigger">
                            <img src="../asset/SVG/Cart_add-navbar.svg" class="w-10 md:w-14" alt="" />
                        </button>
                        <button id="loginRegisterTrigger">
                            <img src="../asset/SVG/User_login_navbar.svg" class="w-8 md:w-10" alt="" />
                        </button>
                        <button id="navTrigger" class="flex items-center p-2 rounded-full xl:hidden bg-secondary-color">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 6l16 0" />
                                <path d="M4 12l16 0" />
                                <path d="M4 18l16 0" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div id="mobilenavExpand" class="h-0 px-3 overflow-hidden">
                <div class="flex flex-col gap-4 mt-5 link-wrapper">
                    <a href="index.html" class="text-2xl">Home</a>
                    <a class="text-2xl opacity-80" href="menu.html"> Menu </a>
                    <a class="text-2xl opacity-80" href="custom-pizza.html">
                        Custom Pizza
                    </a>
                    <a class="text-2xl opacity-80" href="contact-us.html"> Contact </a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="mt-14 md:mt-20 cart">
            <div class="container">
                <div class="flex flex-col grid-cols-12 gap-4 md:grid">
                    <div
                        class="flex flex-col col-span-6 gap-4 text-base transition-all duration-300 ease-in-out box-cart font-aesthetnova lg:text-xl">
                        <div
                            class="flex flex-col p-4 rounded-lg md:p-8 gap-y-6 content-body bg-secondary-accent-color outline outline-1 outline-highlight-content">
                            <div id="order_notice" class="flex flex-col gap-3">
                                <span class="flex items-center justify-between">
                                    <p>Order Detail</p>
                                    <p
                                        class="py-1.5 px-4 font-semibold rounded-full lg:text-lg text-sm bg-highlight-content text-secondary-accent-color">
                                        On Process
                                    </p>
                                </span>
                                <span class="flex items-center justify-between">
                                    <p>Invoice No.</p>
                                    <p>INVCT/2024/01/04/1234567</p>
                                </span>
                                <span class="flex items-center justify-between">
                                    <p>Order Date</p>
                                    <p>2 Agustus 2024, 14:00</p>
                                </span>
                            </div>
                            <hr />
                            <div id="location" class="flex flex-col">
                                <p class="text-highlight-content">Delivery Information</p>
                                <p>
                                    Immanuel Christian Hirani | (0813-1480-1945) Kampus Kijang
                                    Jl. Kemanggisan Ilir III No. 45, Kemanggisan / Palmerah
                                    Jakarta Barat 11480, Indonesia
                                </p>
                            </div>
                            <hr />
                            <div class="space-y-4 Payment_informations">
                                <p class="text-highlight-content">Payment Information</p>
                                <span class="flex items-center justify-between">
                                    <p>Payment Method</p>
                                    <p>Mid Trans</p>
                                </span>
                                <span class="flex items-center justify-between">
                                    <p>Total (2 Items)</p>
                                    <p>Rp250.000</p>
                                </span>
                                <span class="flex items-center justify-between">
                                    <p>Delivery Fee</p>
                                    <p>Rp20.000</p>
                                </span>
                                <span class="flex items-center justify-between">
                                    <p>Service Fee</p>
                                    <p>Rp3.000</p>
                                </span>
                            </div>
                            <hr class="border-[1px] border-gray-500" />
                            <div class="flex justify-between gap-3 wrap">
                                <p class="text-highlight-content">Total</p>
                                <p>Rp 1.520.000</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-col p-4 rounded-lg md:p-8 lg:gap-y-6 gap-y-5 content-body bg-secondary-accent-color outline outline-1 outline-highlight-content">
                            <p class="text-2xl text-highlight-content lg:text-3xl">
                                Order Summary
                            </p>
                            <div x-data="{ cardItemOrder: 3 }"
                                :class="cardItemOrder === 1 ? 'h-fit' : 'lg:h-[20rem] h-[24rem] overflow-y-auto'"
                                class="flex flex-col gap-6 wrap">
                                <!-- Repeated Content -->
                                <template x-for="item in cardItemOrder" :key="item">
                                    <div class="flex flex-col items-center p-0 gap-x-8 gap-y-3 md:flex-row md:gap-y-0">
                                        <img src="../asset/Coffe menu/capuccino Coffe.jpg" alt="Capuccino Coffee"
                                            class="object-cover w-full rounded-lg h-52 3xl:w-80 3xl:h-60 md:w-64 md:h-44" />
                                        <div class="flex flex-col w-full gap-1.5 text-wrap md:w-fit">
                                            <p class="font-semibold line-clamp-1">
                                                Capuccino Coffee
                                            </p>
                                            <p class="text-highlight-content">Extra</p>
                                            <div class="flex">
                                                <p>Rp 1.500.000</p>
                                            </div>
                                        </div>
                                        <div
                                            class="w-full px-4 py-2 rounded-full md:w-fit quantity-area bg-secondary-color">
                                            <p class="text-center md:text-base ms-auto">
                                                Qty : X 1
                                            </p>
                                        </div>
                                    </div>
                                </template>
                                <!-- Repeated Content End -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 row-auto gap-4 text-base md:text-lg">
                        <div
                            class="sticky flex flex-col w-full gap-4 rounded-lg h-fit top-36 box-Location font-aesthetnova bg-secondary-accent-color outline outline-1 outline-highlight-content">
                            <div class="px-4 py-4 md:py-8 body md:px-8">
                                <div class="space-y-2 wrap">
                                    <p class="text-2xl text-highlight-content">
                                        Processing Order
                                    </p>
                                    <p class="text-lg">Estimated in the kitchen 14.10</p>
                                </div>
                                <div class="flex items-center justify-between gap-2.5 mt-6 lg:gap-4 progress-bar">
                                    <img src="../asset/CafeTravel.png" class="rounded-full w-7 lg:w-9"
                                        alt="" />
                                    <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                                        <div class="bg-highlight-content h-1.5 rounded-full"></div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-32" viewBox="0 0 23 21"
                                        fill="none">
                                        <path
                                            d="M22.1196 6.65569L20.8672 1.63991C20.7136 1.02367 20.1601 0.591614 19.525 0.591614H2.61671C1.98156 0.591614 1.42805 1.02367 1.27307 1.63991L0.0207565 6.65569C0.00691885 6.7097 0 6.76647 0 6.82325C0 8.73152 1.47371 10.2853 3.28645 10.2853C4.3395 10.2853 5.27908 9.76043 5.88102 8.94616C6.48296 9.76043 7.42254 10.2853 8.47559 10.2853C9.52864 10.2853 10.4682 9.76043 11.0702 8.94616C11.6721 9.76043 12.6103 10.2853 13.6647 10.2853C14.7192 10.2853 15.6574 9.76043 16.2593 8.94616C16.8612 9.76043 17.7994 10.2853 18.8539 10.2853C20.6666 10.2853 22.1403 8.73152 22.1403 6.82325C22.1403 6.76647 22.1334 6.7097 22.1196 6.65569Z"
                                            fill="#F8C055" />
                                        <path
                                            d="M18.8539 12.0995C17.9115 12.0995 17.0162 11.8115 16.2593 11.2853C14.7455 12.3391 12.584 12.3391 11.0702 11.2853C9.55633 12.3391 7.39489 12.3391 5.88104 11.2853C5.12412 11.8115 4.22882 12.0995 3.28647 12.0995C2.60704 12.0995 1.96636 11.9403 1.38379 11.6689V19.0236C1.38379 19.788 2.00372 20.4084 2.76756 20.4084H8.30264V14.8692H13.8377V20.4084H19.3728C20.1366 20.4084 20.7566 19.788 20.7566 19.0236V11.6689C20.174 11.9403 19.5333 12.0995 18.8539 12.0995Z"
                                            fill="#F8C055" />
                                    </svg>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                                        <div class="bg-highlight-content h-1.5 rounded-full"></div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-32" viewBox="0 0 23 23"
                                        fill="none">
                                        <g clip-path="url(#clip0_1562_735)">
                                            <path
                                                d="M4.42661 20.9249C6.18234 20.9024 7.58825 19.3965 7.5668 17.5612C7.54535 15.7259 6.10467 14.2563 4.34894 14.2787C2.59322 14.3012 1.18731 15.8071 1.20876 17.6424C1.23021 19.4777 2.67089 20.9473 4.42661 20.9249Z"
                                                fill="#F8C055" />
                                            <path
                                                d="M18.9344 20.9256C20.6902 20.9032 22.0961 19.3972 22.0746 17.5619C22.0532 15.7266 20.6125 14.257 18.8568 14.2795C17.101 14.3019 15.6951 15.8079 15.7166 17.6431C15.738 19.4784 17.1787 20.948 18.9344 20.9256Z"
                                                fill="#F8C055" />
                                            <path
                                                d="M12.4849 4.74601C12.6732 4.94142 12.9272 5.05203 13.1926 5.05417L14.9169 11.5449C15.228 12.7151 14.9496 13.9815 14.1508 14.8638C14.1508 14.8638 13.1247 16.0196 11.5886 16.0214C11.1039 16.0178 10.6403 15.814 10.2989 15.4544C9.9575 15.0948 9.76602 14.6086 9.76626 14.1019C9.76616 13.4006 9.84111 12.7014 9.9897 12.0175C10.1813 11.2327 10.3064 10.9767 10.5363 10.4843C11.2865 10.377 11.5761 9.22292 11.0214 8.28316C10.4396 7.29488 9.16427 7.18167 7.62685 7.74409C6.08942 8.30652 4.65298 8.00329 2.66782 7.64841C0.671924 7.29173 0.359541 10.4933 1.80114 10.4933H2.67255C1.64228 11.1347 0.805319 12.066 0.257275 13.181C0.194521 13.3073 0.15619 13.4453 0.144471 13.587C0.132752 13.7288 0.147876 13.8716 0.188979 14.0073C0.230081 14.143 0.296356 14.2688 0.384015 14.3777C0.471674 14.4866 0.578998 14.5764 0.699853 14.6418C0.815206 14.7025 0.945752 14.724 1.07335 14.7035C1.20095 14.6829 1.31926 14.6214 1.41185 14.5273C1.89131 14.0177 2.48378 13.6397 3.13661 13.4272C3.54349 13.2999 3.96534 13.2325 4.39001 13.2268C5.49944 13.2281 6.56308 13.6895 7.34752 14.5097C8.13197 15.3299 8.57317 16.4419 8.57431 17.6017C8.57431 17.6916 8.57173 17.7822 8.56657 17.8735C8.56469 17.9042 8.56885 17.935 8.5788 17.9639C8.58875 17.9928 8.60428 18.0193 8.62442 18.0417C8.64456 18.0641 8.66889 18.082 8.69589 18.0941C8.7229 18.1063 8.75201 18.1126 8.78142 18.1125H13.6369C13.9127 18.1044 14.1766 17.9927 14.3802 17.798C14.5838 17.6033 14.7136 17.3384 14.7459 17.0519C14.8468 16.2212 15.1735 15.4381 15.6873 14.7957C16.2011 14.1533 16.8804 13.6785 17.6446 13.4276C18.0515 13.3003 18.4733 13.2329 18.898 13.2273C19.8644 13.2264 20.8011 13.5769 21.5474 14.2187C21.8517 14.4797 22.2835 14.1127 22.0966 13.7506L22.0914 13.7412C21.4706 12.5901 20.5278 11.6652 19.3895 11.0908C19.2267 11.0081 19.0617 10.934 18.8958 10.8662C18.84 7.86179 15.5043 5.05552 15.5043 5.05552C16.4002 5.11032 16.4316 4.17775 16.4316 4.17775C16.4866 3.04706 15.7544 2.14099 14.7442 2.079C14.4897 2.0652 14.2375 2.13443 14.0223 2.2771L13.4379 2.66073C13.2423 2.79248 13.0358 2.90568 12.8209 2.999C12.673 3.06154 12.5412 3.15947 12.4361 3.28492C12.3309 3.41037 12.2554 3.55984 12.2155 3.72134C12.2155 3.72134 11.9461 3.80489 11.8472 3.90103C11.7773 3.96347 11.7262 4.04572 11.7 4.13786C11.6738 4.22999 11.6737 4.32808 11.6996 4.4203C11.7256 4.51252 11.7765 4.59492 11.8462 4.65757C11.9159 4.72023 12.0015 4.76046 12.0926 4.77341C12.0926 4.77341 12.2301 4.79767 12.4849 4.74601Z"
                                                fill="#F8C055" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1562_735">
                                                <rect width="22" height="23" fill="white"
                                                    transform="translate(0.140625)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                                        <div class="bg-highlight-content h-1.5 rounded-full w-0"></div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-32" viewBox="0 0 23 23"
                                        fill="none">
                                        <g clip-path="url(#clip0_1562_742)">
                                            <path
                                                d="M21.5475 10.0039C21.547 10.0034 21.5465 10.0028 21.546 10.0023L12.5717 0.620483C12.1892 0.220398 11.6806 0 11.1396 0C10.5987 0 10.0901 0.220222 9.7074 0.620308L0.737846 9.9974C0.734825 10.0006 0.731804 10.0039 0.728782 10.007C-0.0567401 10.833 -0.0553973 12.1731 0.732643 12.997C1.09267 13.3736 1.56818 13.5917 2.07659 13.6145C2.09724 13.6166 2.11805 13.6176 2.13903 13.6176H2.49671V20.5221C2.49671 21.8884 3.56002 23 4.86721 23H8.37823C8.73406 23 9.02276 22.6984 9.02276 22.3262V16.9131C9.02276 16.2896 9.50783 15.7825 10.1042 15.7825H12.1751C12.7714 15.7825 13.2565 16.2896 13.2565 16.9131V22.3262C13.2565 22.6984 13.545 23 13.9011 23H17.4121C18.7193 23 19.7826 21.8884 19.7826 20.5221V13.6176H20.1142C20.655 13.6176 21.1636 13.3974 21.5465 12.9973C22.3353 12.1721 22.3357 10.8297 21.5475 10.0039Z"
                                                fill="#D0D0D0" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1562_742">
                                                <rect width="22" height="23" fill="white"
                                                    transform="translate(0.140625)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <!-- Clean Code -->
                                <div class="relative flex flex-col justify-center gap-6 mt-12 wrap-location-order">
                                    <div class="space-y-1.5 wrap">
                                        <!-- Cafe Travel Location -->
                                        <div class="flex items-center gap-6 cafe">
                                            <img src="../asset/CafeTravel.png" class="w-12 rounded-full"
                                                alt="Cafe Travel" />
                                            <div class="desc">
                                                <p class="text-base lg:text-lg">
                                                    Cafe Travel - Perumnas 1
                                                </p>
                                                <p class="text-sm text-gray-400 lg:text-base">
                                                    Jl. Kakap Raya no 155, Karawaci, Karawaci Baru
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Divider Line -->
                                        <img src="../asset/line-location-order.png" class="w-0.5 ml-6"
                                            alt="Divider Line" />
                                        <!-- University Location -->
                                        <div class="flex items-center gap-6 cafe">
                                            <img src="../asset/Pin-Location.png" class="w-12 rounded-full"
                                                alt="Location Pin" />
                                            <div class="desc">
                                                <p class="text-base lg:text-lg">
                                                    Universitas Pelita Harapan
                                                </p>
                                                <p class="text-sm text-gray-400 lg:text-base">
                                                    Jalan Benton Junction Deket Lippo
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Distance Indicator -->
                                    <p class="top-0 right-0 text-base lg:absolute lg:text-sm text-highlight-content">
                                        0.16km
                                    </p>
                                    <!-- Input Field -->
                                    <div class="w-full wrap">
                                        <input type="text"
                                            class="w-full px-4 py-3 text-base rounded-lg outline-none"
                                            placeholder="Titip Di lobby" />
                                    </div>
                                </div>
                                <div class="mt-8 driver-location">
                                    <div class="flex items-center gap-6 cafe">
                                        <!-- Driver Info -->
                                        <img src="../asset/driver.png" class="w-12 rounded-full" alt="Driver" />
                                        <div class="desc">
                                            <p class="text-lg">Irfan Dwi Yulianto</p>
                                            <span class="flex items-center gap-3">
                                                <p class="text-highlight-content">B 5671 TOH</p>
                                                <p class="text-base text-highlight-content">5.0</p>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Location Image -->
                                    <img src="../asset/Location.png" class="w-full mt-8" alt="Location" />
                                </div>
                                <!-- Clean Code End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SideBar  -->
        <div id="sidebarCart"
            class="fixed inset-0 z-50 flex items-center justify-end transition-all duration-[400ms] ease-linear translate-x-full font-aesthetnova">
            <div class="flex w-full h-full max-w-3xl">
                <!-- Others Also Bought Section -->
                <div class="md:w-[38%] md:block hidden bg-[#090E1A] bg-opacity-85">
                    <h6 class="mt-8 mb-4 font-semibold text-center">
                        OTHERS ALSO BOUGHT
                    </h6>
                    <div class="swiper">
                        <div
                            class="px-4 pb-8 3xl:max-h-[52.5rem] 2xl:max-h-[39rem] xl:max-h-[43em] other-item-content">
                            <div class="swiper-wrapper">
                                <!-- Repeat this block for each item -->
                                <div class="swiper-slide">
                                    <div
                                        class="flex flex-col items-center w-full rounded-lg shadow-xl bg-secondary-accent-color max-h-fit outline outline-1 outline-highlight-content">
                                        <img src="../asset/Booba Menu/Choco bobba.jpg" alt="Sicilian Pizza"
                                            class="rounded-t-lg h-[180px] w-full object-cover" />
                                        <div class="flex items-center justify-between w-full p-4 wrap">
                                            <div class="flex flex-col">
                                                <p class="text-xl">Sicilian Pizza</p>
                                                <p class="text-lg text-gray-3 00">Rp 500.000</p>
                                            </div>
                                            <button class="w-10 h-10 text-red-500 bg-white rounded-full">
                                                <img src="../asset/SVG/Cart_Plus-Sidebar.svg" alt=""
                                                    class="w-5 mx-auto" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                        class="flex flex-col items-center w-full rounded-lg shadow-xl bg-secondary-accent-color max-h-fit outline outline-1 outline-highlight-content">
                                        <img src="../asset/Booba Menu/Brown Sugar Syrup and Milk Tea bobba.jpg"
                                            alt="Sicilian Pizza" class="rounded-t-lg h-[180px] w-full object-cover" />
                                        <div class="flex items-center justify-between w-full p-4 wrap">
                                            <div class="flex flex-col">
                                                <p class="text-xl">Sicilian Pizza</p>
                                                <p class="text-xl">Rp 500.000</p>
                                            </div>
                                            <button class="w-10 h-10 text-red-500 bg-white rounded-full">
                                                <img src="../asset/SVG/Cart_Plus-Sidebar.svg" alt=""
                                                    class="w-5 mx-auto" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                        class="flex flex-col items-center w-full rounded-lg shadow-xl bg-secondary-accent-color max-h-fit outline outline-1 outline-highlight-content">
                                        <img src="../asset/Booba Menu/Oreo Bobba.jpg" alt="Sicilian Pizza"
                                            class="rounded-t-lg h-[180px] w-full object-cover" />
                                        <div class="flex items-center justify-between w-full p-4 wrap">
                                            <div class="flex flex-col">
                                                <p class="text-xl">Sicilian Pizza</p>
                                                <p class="text-xl">Rp 500.000</p>
                                            </div>
                                            <button class="w-10 h-10 text-red-500 bg-white rounded-full">
                                                <img src="../asset/SVG/Cart_Plus-Sidebar.svg" alt=""
                                                    class="w-5 mx-auto" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                        class="flex flex-col items-center w-full rounded-lg shadow-xl bg-secondary-accent-color max-h-fit outline outline-1 outline-highlight-content">
                                        <img src="../asset/Booba Menu/Milk bobba.jpg" alt="Sicilian Pizza"
                                            class="rounded-t-lg h-[180px] w-full object-cover" />
                                        <div class="flex items-center justify-between w-full p-4 wrap">
                                            <div class="flex flex-col">
                                                <p class="text-xl">Sicilian Pizza</p>
                                                <p class="text-xl">Rp 500.000</p>
                                            </div>
                                            <button class="w-10 h-10 text-red-500 bg-white rounded-full">
                                                <img src="../asset/SVG/Cart_Plus-Sidebar.svg" alt=""
                                                    class="w-5 mx-auto" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of item block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- My Cart Section -->
                <div class="relative md:w-[62%] w-full flex flex-col gap-3 p-6 bg-secondary-accent-color shadow-lg">
                    <div class="flex items-center justify-between wrap">
                        <p class="text-2xl md:my-3">MY CART</p>
                        <button id="closeCart" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <hr />
                    <div class="w-full swiper">
                        <div
                            class="my-2 3xl:max-h-[630px] 2xl:max-h-[410px] xl:max-h-[31em] max-h-[24em] sm:max-h-[38em] w-full cart-added-content overflow-hidden">
                            <!-- Repeat this block for each cart item -->
                            <div class="h-fit swiper-wrapper">
                                <div class="swiper-slide">
                                    <div
                                        class="flex flex-col items-center md:p-0 p-0.5 md:flex-row gap-x-6 md:gap-y-0 gap-y-3">
                                        <img src="../asset/Coffe menu/capuccino Coffe.jpg" alt="Sicilian Pizza"
                                            class="object-cover w-full rounded h-44 md:w-44 md:h-44" />
                                        <div class="flex flex-col w-full gap-2 md:gap-3 text-wrap">
                                            <p class="text-xl font-semibold md:text-lg line-clamp-1">
                                                Capuccino Coffee
                                            </p>
                                            <p class="text-xl md:text-lg text-highlight-content">
                                                Extra
                                            </p>
                                            <div class="items-center hidden gap-3 md:flex wrap">
                                                <div
                                                    class="flex items-center justify-center gap-8 px-4 py-1.5 rounded-full w-fit outline outline-1 outline-white">
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="16px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H94.6C77.7,224,64,238.3,64,256c0,17.7,13.7,32,30.6,32h322.8c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                    <span class="text-base md:text-lg text-accent-color">1</span>
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="16px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H288V94.6c0-16.9-14.3-30.6-32-30.6c-17.7,0-32,13.7-32,30.6V224H94.6C77.7,224,64,238.3,64,256  c0,17.7,13.7,32,30.6,32H224v129.4c0,16.9,14.3,30.6,32,30.6c17.7,0,32-13.7,32-30.6V288h129.4c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <button
                                                    class="flex items-center justify-center p-1.5 rounded-full bg-secondary-color">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                        fill="none" viewBox="0 0 26 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="flex items-center justify-between wrap">
                                                <p class="text-xl md:text-lg">Rp 1.500.000</p>
                                                <div
                                                    class="flex items-center justify-center gap-8 px-5 py-1.5 rounded-full md:hidden w-fit outline outline-1 outline-white">
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="24px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H94.6C77.7,224,64,238.3,64,256c0,17.7,13.7,32,30.6,32h322.8c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                    <span class="text-xl md:text-lg text-accent-color">2</span>
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="24px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H288V94.6c0-16.9-14.3-30.6-32-30.6c-17.7,0-32,13.7-32,30.6V224H94.6C77.7,224,64,238.3,64,256  c0,17.7,13.7,32,30.6,32H224v129.4c0,16.9,14.3,30.6,32,30.6c17.7,0,32-13.7,32-30.6V288h129.4c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <button
                                            class="absolute top-2 right-0 md:hidden flex items-center justify-center p-1.5 rounded-l-full bg-secondary-color">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 26 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                        class="flex flex-col items-center md:p-0 p-0.5 md:flex-row gap-x-6 md:gap-y-0 gap-y-3">
                                        <img src="../asset/Coffe menu/capuccino Coffe.jpg" alt="Sicilian Pizza"
                                            class="object-cover w-full rounded h-44 md:w-44 md:h-44" />
                                        <div class="flex flex-col w-full gap-2 md:gap-3 text-wrap">
                                            <p class="text-xl font-semibold md:text-lg line-clamp-1">
                                                Capuccino Coffee
                                            </p>
                                            <p class="text-xl md:text-lg text-highlight-content">
                                                Extra
                                            </p>
                                            <div class="items-center hidden gap-3 md:flex wrap">
                                                <div
                                                    class="flex items-center justify-center gap-8 px-4 py-1.5 rounded-full w-fit outline outline-1 outline-white">
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="16px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H94.6C77.7,224,64,238.3,64,256c0,17.7,13.7,32,30.6,32h322.8c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                    <span class="text-base md:text-lg text-accent-color">1</span>
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="16px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H288V94.6c0-16.9-14.3-30.6-32-30.6c-17.7,0-32,13.7-32,30.6V224H94.6C77.7,224,64,238.3,64,256  c0,17.7,13.7,32,30.6,32H224v129.4c0,16.9,14.3,30.6,32,30.6c17.7,0,32-13.7,32-30.6V288h129.4c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <button
                                                    class="flex items-center justify-center p-1.5 rounded-full bg-secondary-color">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                        fill="none" viewBox="0 0 26 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="flex items-center justify-between wrap">
                                                <p class="text-xl md:text-lg">Rp 500.000</p>
                                                <div
                                                    class="flex items-center justify-center gap-8 px-5 py-1.5 rounded-full md:hidden w-fit outline outline-1 outline-white">
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="24px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H94.6C77.7,224,64,238.3,64,256c0,17.7,13.7,32,30.6,32h322.8c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                    <span class="text-xl md:text-lg text-accent-color">1</span>
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="24px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H288V94.6c0-16.9-14.3-30.6-32-30.6c-17.7,0-32,13.7-32,30.6V224H94.6C77.7,224,64,238.3,64,256  c0,17.7,13.7,32,30.6,32H224v129.4c0,16.9,14.3,30.6,32,30.6c17.7,0,32-13.7,32-30.6V288h129.4c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <button
                                            class="absolute top-2 right-0 md:hidden flex items-center justify-center p-1.5 rounded-l-full bg-secondary-color">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 26 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                        class="flex flex-col items-center md:p-0 p-0.5 md:flex-row gap-x-6 md:gap-y-0 gap-y-3">
                                        <img src="../asset/Coffe menu/capuccino Coffe.jpg" alt="Sicilian Pizza"
                                            class="object-cover w-full rounded h-44 md:w-44 md:h-44" />
                                        <div class="flex flex-col w-full gap-2 md:gap-3 text-wrap">
                                            <p class="text-xl font-semibold md:text-lg line-clamp-1">
                                                Capuccino Coffee
                                            </p>
                                            <p class="text-xl md:text-lg text-highlight-content">
                                                Extra
                                            </p>
                                            <div class="items-center hidden gap-3 md:flex wrap">
                                                <div
                                                    class="flex items-center justify-center gap-8 px-4 py-1.5 rounded-full w-fit outline outline-1 outline-white">
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="16px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H94.6C77.7,224,64,238.3,64,256c0,17.7,13.7,32,30.6,32h322.8c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                    <span class="text-base md:text-lg text-accent-color">1</span>
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="16px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H288V94.6c0-16.9-14.3-30.6-32-30.6c-17.7,0-32,13.7-32,30.6V224H94.6C77.7,224,64,238.3,64,256  c0,17.7,13.7,32,30.6,32H224v129.4c0,16.9,14.3,30.6,32,30.6c17.7,0,32-13.7,32-30.6V288h129.4c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <button
                                                    class="flex items-center justify-center p-1.5 rounded-full bg-secondary-color">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                        fill="none" viewBox="0 0 26 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="flex items-center justify-between wrap">
                                                <p class="text-xl md:text-lg">Rp 1.500.000</p>
                                                <div
                                                    class="flex items-center justify-center gap-8 px-5 py-1.5 rounded-full md:hidden w-fit outline outline-1 outline-white">
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="24px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H94.6C77.7,224,64,238.3,64,256c0,17.7,13.7,32,30.6,32h322.8c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                    <span class="text-xl md:text-lg text-accent-color">2</span>
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="24px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H288V94.6c0-16.9-14.3-30.6-32-30.6c-17.7,0-32,13.7-32,30.6V224H94.6C77.7,224,64,238.3,64,256  c0,17.7,13.7,32,30.6,32H224v129.4c0,16.9,14.3,30.6,32,30.6c17.7,0,32-13.7,32-30.6V288h129.4c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <button
                                            class="absolute top-2 right-0 md:hidden flex items-center justify-center p-1.5 rounded-l-full bg-secondary-color">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 26 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                        class="flex flex-col items-center md:p-0 p-0.5 md:flex-row gap-x-6 md:gap-y-0 gap-y-3">
                                        <img src="../asset/Coffe menu/capuccino Coffe.jpg" alt="Sicilian Pizza"
                                            class="object-cover w-full rounded h-44 md:w-44 md:h-44" />
                                        <div class="flex flex-col w-full gap-2 md:gap-3 text-wrap">
                                            <p class="text-xl font-semibold md:text-lg line-clamp-1">
                                                Capuccino Coffee
                                            </p>
                                            <p class="text-xl md:text-lg text-highlight-content">
                                                Extra
                                            </p>
                                            <div class="items-center hidden gap-3 md:flex wrap">
                                                <div
                                                    class="flex items-center justify-center gap-8 px-4 py-1.5 rounded-full w-fit outline outline-1 outline-white">
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="16px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H94.6C77.7,224,64,238.3,64,256c0,17.7,13.7,32,30.6,32h322.8c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                    <span class="text-base md:text-lg text-accent-color">1</span>
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="16px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H288V94.6c0-16.9-14.3-30.6-32-30.6c-17.7,0-32,13.7-32,30.6V224H94.6C77.7,224,64,238.3,64,256  c0,17.7,13.7,32,30.6,32H224v129.4c0,16.9,14.3,30.6,32,30.6c17.7,0,32-13.7,32-30.6V288h129.4c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <button
                                                    class="flex items-center justify-center p-1.5 rounded-full bg-secondary-color">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                        fill="none" viewBox="0 0 26 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="flex items-center justify-between wrap">
                                                <p class="text-xl md:text-lg">Rp 500.000</p>
                                                <div
                                                    class="flex items-center justify-center gap-8 px-5 py-1.5 rounded-full md:hidden w-fit outline outline-1 outline-white">
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="24px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H94.6C77.7,224,64,238.3,64,256c0,17.7,13.7,32,30.6,32h322.8c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                    <span class="text-xl md:text-lg text-accent-color">1</span>
                                                    <button class="">
                                                        <svg height="24px" id="Layer_1" fill="white"
                                                            style="enable-background: new 0 0 512 512" version="1.1"
                                                            viewBox="0 0 512 512" width="24px" xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <path
                                                                d="M417.4,224H288V94.6c0-16.9-14.3-30.6-32-30.6c-17.7,0-32,13.7-32,30.6V224H94.6C77.7,224,64,238.3,64,256  c0,17.7,13.7,32,30.6,32H224v129.4c0,16.9,14.3,30.6,32,30.6c17.7,0,32-13.7,32-30.6V288h129.4c16.9,0,30.6-14.3,30.6-32  C448,238.3,434.3,224,417.4,224z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <button
                                            class="absolute top-2 right-0 md:hidden flex items-center justify-center p-1.5 rounded-l-full bg-secondary-color">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 26 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End of cart item block -->
                        </div>
                    </div>
                    <hr class="" />
                    <div class="mt-auto">
                        <p class="text-sm">Shipping and taxes calculated at checkout.</p>
                        <a href="cart.html">
                            <button class="w-full py-3 mt-4 font-semibold bg-red-500 hover:bg-red-600">
                                VIEW CART
                            </button>
                        </a>
                        <a href="menu.html">
                            <button class="w-full mt-4 text-center">
                                Buy Other Product
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="flex flex-col bg-secondary-accent-color font-aesthetnova">
        <div class="container flex flex-col gap-12 py-12 md:py-20">
            <div class="flex flex-wrap w-full grid-cols-3 gap-20 md:grid wrapper-address">
                <div class="flex flex-col items-center justify-center gap-4 mx-auto Wrap">
                    <h5>ADDRESS</h5>
                    <p class="3xl:w-1/2 w-[70%] md:text-xl text-lg text-center">
                        Cafe Travel Jalan Kakap Raya no 155 , Tanggerang , Karwaci
                    </p>
                </div>
                <div class="flex flex-col items-center justify-center gap-4 mx-auto Wrap">
                    <h5>RESERVATION</h5>
                    <p class="3xl:w-1/2 w-[70%] md:text-xl text-lg text-center">
                        0813 - 1480 - 1945 /CafeTravel@gmail.com
                    </p>
                </div>
                <div class="flex flex-col items-center justify-center gap-4 mx-auto Wrap">
                    <h5>OPEN HOURS</h5>
                    <p class="3xl:w-1/2 w-[70%] text-center md:text-xl text-lg">
                        Monday - Friday : 10 AM - 11 PM Saturday - Sunday : 9 AM - 1 PM
                    </p>
                </div>
            </div>
            <div class="flex flex-col items-center gap-6 sosial-media">
                <div class="flex items-center justify-center gap-6 box-sosial wrap">
                    <div class="flex items-center justify-center w-12 h-12 border-2 border-white rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M16.1801 1.90354C17.5685 1.90354 18.8999 2.45506 19.8816 3.43676C20.8633 4.41847 21.4149 5.74995 21.4149 7.13829V16.1801C21.4149 17.5685 20.8633 18.8999 19.8816 19.8816C18.8999 20.8633 17.5685 21.4149 16.1801 21.4149H7.13829C5.74995 21.4149 4.41847 20.8633 3.43676 19.8816C2.45506 18.8999 1.90354 17.5685 1.90354 16.1801V7.13829C1.90354 5.74995 2.45506 4.41847 3.43676 3.43676C4.41847 2.45506 5.74995 1.90354 7.13829 1.90354H16.1801ZM16.1801 0H7.13829C5.24683 0.00564898 3.43446 0.75953 2.097 2.097C0.75953 3.43446 0.00564898 5.24683 0 7.13829V16.1801C0.00564898 18.0716 0.75953 19.8839 2.097 21.2214C3.43446 22.5589 5.24683 23.3128 7.13829 23.3184H16.1801C18.0716 23.3128 19.8839 22.5589 21.2214 21.2214C22.5589 19.8839 23.3128 18.0716 23.3184 16.1801V7.13829C23.3128 5.24683 22.5589 3.43446 21.2214 2.097C19.8839 0.75953 18.0716 0.00564898 16.1801 0Z"
                                fill="white" />
                            <path
                                d="M17.8792 4.04492C17.6095 4.04492 17.3459 4.12488 17.1217 4.2747C16.8975 4.42451 16.7227 4.63745 16.6195 4.88658C16.5163 5.13571 16.4893 5.40985 16.5419 5.67432C16.5946 5.9388 16.7244 6.18174 16.9151 6.37241C17.1058 6.56309 17.3487 6.69294 17.6132 6.74555C17.8776 6.79816 18.1518 6.77116 18.4009 6.66796C18.65 6.56477 18.863 6.39002 19.0128 6.16581C19.1626 5.94159 19.2426 5.67799 19.2426 5.40833C19.2426 5.22929 19.2073 5.052 19.1388 4.88658C19.0703 4.72116 18.9698 4.57086 18.8432 4.44426C18.7166 4.31765 18.5663 4.21722 18.4009 4.14871C18.2355 4.08019 18.0582 4.04492 17.8792 4.04492Z"
                                fill="white" />
                            <path
                                d="M11.7235 7.48778C12.5557 7.48731 13.3694 7.7337 14.0616 8.19577C14.7537 8.65784 15.2933 9.31483 15.612 10.0836C15.9307 10.8524 16.0142 11.6985 15.852 12.5147C15.6897 13.331 15.289 14.0808 14.7005 14.6693C14.1121 15.2578 13.3623 15.6585 12.546 15.8207C11.7297 15.983 10.8837 15.8995 10.1149 15.5808C9.34608 15.2621 8.68909 14.7225 8.22701 14.0303C7.76494 13.3381 7.51856 12.5245 7.51903 11.6922C7.52091 10.5777 7.96449 9.5094 8.75257 8.72132C9.54065 7.93324 10.609 7.48967 11.7235 7.48778ZM11.7235 5.58424C10.5154 5.58659 9.33507 5.94702 8.33174 6.61997C7.32841 7.29292 6.54708 8.24819 6.08649 9.36506C5.62591 10.4819 5.50674 11.7103 5.74404 12.8948C5.98135 14.0794 6.56448 15.1671 7.41974 16.0203C8.275 16.8736 9.364 17.4542 10.5491 17.6887C11.7343 17.9233 12.9623 17.8012 14.0781 17.338C15.1939 16.8748 16.1473 16.0913 16.8179 15.0864C17.4885 14.0815 17.8462 12.9003 17.8457 11.6922C17.8454 10.889 17.6868 10.0937 17.3788 9.35187C17.0708 8.61003 16.6196 7.93618 16.051 7.36887C15.4824 6.80157 14.8075 6.35194 14.0649 6.04572C13.3224 5.73949 12.5267 5.58268 11.7235 5.58424Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div class="flex items-center justify-center w-12 h-12 border-2 border-white rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 12 25"
                            fill="none">
                            <path
                                d="M11.278 7.85913H7.43711V5.34007C7.43711 4.39404 8.06411 4.17348 8.50572 4.17348C8.94633 4.17348 11.2162 4.17348 11.2162 4.17348V0.0145697L7.48333 0C3.33949 0 2.39647 3.10185 2.39647 5.08685V7.85913H0V12.1446H2.39647C2.39647 17.6445 2.39647 24.2712 2.39647 24.2712H7.43711C7.43711 24.2712 7.43711 17.5792 7.43711 12.1446H10.8384L11.278 7.85913Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div class="flex items-center justify-center w-12 h-12 border-2 border-white rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 26 26"
                            fill="none">
                            <path
                                d="M12.5755 1.33989e-06C10.4088 -0.00100024 8.27878 0.559528 6.39321 1.62693C4.50765 2.69432 2.93088 4.23215 1.81668 6.09044C0.702485 7.94874 0.0888854 10.0641 0.0357223 12.2301C-0.0174408 14.3962 0.491648 16.5391 1.51334 18.4498L0.0377433 23.8603C-0.0110401 24.0295 -0.0125623 24.2089 0.0333417 24.3789C0.0792457 24.5489 0.170824 24.7031 0.298143 24.8248C0.39291 24.9113 0.503995 24.9781 0.624888 25.0211C0.745782 25.0642 0.874053 25.0827 1.00219 25.0755C1.08842 25.0896 1.17635 25.0896 1.26259 25.0755L6.96245 23.4842C7.20928 23.4164 7.41908 23.2534 7.54569 23.0309C7.67229 22.8084 7.70534 22.5448 7.63756 22.2979C7.56977 22.0511 7.40671 21.8413 7.18424 21.7147C6.96178 21.5881 6.69812 21.555 6.45129 21.6228L2.3717 22.7223L3.48081 18.5752C3.51373 18.4527 3.52215 18.3249 3.5056 18.1991C3.48906 18.0733 3.44785 17.952 3.38436 17.8422C2.21675 15.8198 1.74903 13.4687 2.05374 11.1535C2.35845 8.83821 3.41856 6.68818 5.06968 5.03679C6.72079 3.3854 8.87064 2.32493 11.1858 2.01982C13.5011 1.71472 15.8522 2.18204 17.8748 3.34931C19.8974 4.51658 21.4783 6.31858 22.3724 8.47585C23.2665 10.6331 23.4238 13.0251 22.82 15.2809C22.2162 17.5367 20.8849 19.5303 19.0327 20.9524C17.1804 22.3746 14.9107 23.1459 12.5755 23.1466C11.981 23.1472 11.3875 23.0988 10.8009 23.002C10.549 22.9601 10.2908 23.0199 10.0829 23.1681C9.87497 23.3164 9.73433 23.541 9.69182 23.7928C9.64995 24.0447 9.7097 24.303 9.85795 24.5109C10.0062 24.7188 10.2309 24.8594 10.4827 24.9019C12.1925 25.1894 13.9434 25.1192 15.6247 24.6957C17.306 24.2721 18.8811 23.5044 20.2506 22.4411C21.6202 21.3779 22.7543 20.0421 23.5813 18.5182C24.4083 16.9943 24.9103 15.3155 25.0555 13.5878C25.2007 11.86 24.986 10.121 24.4249 8.48043C23.8638 6.8399 22.9686 5.33357 21.7957 4.05662C20.6229 2.77967 19.198 1.75986 17.6109 1.06162C16.0239 0.363384 14.3093 0.00189747 12.5755 1.33989e-06Z"
                                fill="white" />
                            <path
                                d="M11.6111 7.91823L10.4923 6.37512C10.3237 6.14387 10.1072 5.95175 9.85752 5.81193C9.60784 5.67211 9.33089 5.58787 9.04564 5.56499C8.75896 5.54387 8.47109 5.58461 8.20152 5.68445C7.93196 5.78429 7.687 5.94089 7.48324 6.14366L6.32591 7.30099C6.0673 7.56508 5.86545 7.87927 5.73276 8.22425C5.60008 8.56924 5.53936 8.93772 5.55435 9.30703C5.55435 11.0141 6.866 13.1648 9.41213 15.6724C12.3923 18.5657 14.4562 19.5301 15.8643 19.5301C16.2222 19.5395 16.5782 19.475 16.9101 19.3406C17.242 19.2062 17.5426 19.0048 17.7931 18.7489L18.9505 17.5916C19.161 17.3941 19.3246 17.1518 19.429 16.8826C19.5335 16.6134 19.5762 16.3243 19.554 16.0364C19.5318 15.7485 19.4452 15.4693 19.3007 15.2193C19.1562 14.9694 18.9574 14.7551 18.719 14.5922L17.2048 13.5024C16.9527 13.3216 16.6623 13.2014 16.3562 13.1512C16.0501 13.101 15.7365 13.1222 15.4399 13.213L14.0029 13.6663C13.9131 13.66 13.8266 13.63 13.7521 13.5795C12.8963 12.9651 12.133 12.2311 11.4857 11.3999C11.4794 11.3648 11.4794 11.3289 11.4857 11.2938C11.6111 10.8694 11.8232 10.1847 11.9679 9.7121C12.0615 9.40691 12.0779 9.08327 12.0156 8.77018C11.9533 8.4571 11.8143 8.16437 11.6111 7.91823ZM12.8552 15.2769C13.3709 15.5596 13.9768 15.6288 14.543 15.4698L16.0282 15.0262L17.581 16.2317L16.4333 17.3601C15.9703 17.8134 14.2633 17.6784 10.7816 14.2643C7.88831 11.4577 7.49288 9.92428 7.49288 9.26845C7.50013 9.04601 7.59349 8.83507 7.75328 8.68014L8.98777 7.53246L10.1258 9.12379C9.9715 9.59637 9.74968 10.3004 9.63395 10.7151C9.49656 11.1577 9.51356 11.6337 9.68217 12.0653C10.5139 13.3506 11.6085 14.4452 12.8938 15.2769H12.8552Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="copyright">
                    <p class="text-xl">@CafeTravelRight 2024</p>
                </div>
            </div>
        </div>
        <div class="w-full overflow-x-hidden">
            <div class="img-showcase-food">
                <div class="grid grid-cols-6 swiper-wrapper">
                    <div class="img-wrap swiper-slide">
                        <img src="../asset/Logo/Pizza Menu/Meat Lovers.jpg" class="w-full h-[243px] object-cover"
                            alt="" />
                    </div>
                    <div class="img-wrap swiper-slide">
                        <img src="../asset/Logo/Pizza Menu/Blackpaper.jpg" class="w-full h-[243px] object-cover"
                            alt="" />
                    </div>
                    <div class="img-wrap swiper-slide">
                        <img src="../asset/Coffe menu/Caramel Hazelnut Iced Coffee.jpg"
                            class="w-full h-[243px] object-cover" alt="" />
                    </div>
                    <div class="img-wrap swiper-slide">
                        <img src="../asset/Coffe menu/capuccino Coffe.jpg" class="w-full h-[243px] object-cover"
                            alt="" />
                    </div>
                    <div class="img-wrap swiper-slide">
                        <img src="../asset/Coffe menu/Dalgona Coffee.jpg" class="w-full h-[243px] object-cover"
                            alt="" />
                    </div>
                    <div class="img-wrap swiper-slide">
                        <img src="../asset/Booba Menu/Milk bobba.jpg" class="w-full h-[243px] object-cover"
                            alt="" />
                    </div>
                    <!-- Left -->
                    <div class="img-wrap swiper-slide">
                        <img src="../asset/Logo/Pizza Menu/Chicken.jpg" class="w-full h-[243px] object-cover"
                            alt="" />
                    </div>
                    <div class="img-wrap swiper-slide">
                        <img src="../asset/Coffe menu/Dalgona Coffee.jpg" class="w-full h-[243px] object-cover"
                            alt="" />
                    </div>
                    <div class="img-wrap swiper-slide">
                        <img src="../asset/Logo/Pizza Menu/Peperoni.jpg" class="w-full h-[243px] object-cover"
                            alt="" />
                    </div>
                    <div class="img-wrap swiper-slide">
                        <img src="../asset/Coffe menu/Caramel Machiato.jpg" class="w-full h-[243px] object-cover"
                            alt="" />
                    </div>
                    <div class="img-wrap swiper-slide">
                        <img src="../asset/Booba Menu/Matcha.jpg" class="w-full h-[243px] object-cover"
                            alt="" />
                    </div>
                    <div class="img-wrap swiper-slide">
                        <img src="../asset/Booba Menu/Oreo Bobba.jpg" class="w-full h-[243px] object-cover"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
      AOS.init();
  </script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="../js/swiper.js"></script>
<script src="../js/GSAP.js"></script>
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<script src="../js/sidebar.js"></script>
<script src="../js/boxLogin.js"></script>

</html>
