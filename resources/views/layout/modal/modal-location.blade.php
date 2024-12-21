<div id="locationBox"
    class="fixed inset-0 z-50 flex items-center justify-center invisible bg-black opacity-30 bg-opacity-70 box-review-wrapper font-aesthetnova">
    <!-- Review Box Container -->
    <div
        class="review-box relative w-[90%] 3xl:w-[45%] md:w-[55%] h-fit md:h-fit bg-secondary-accent-color p-4 md:p-8 rounded-lg flex flex-col gap-3 items-center">
        <!-- Review Box Title -->
        <p class="text-lg font-semibold text-center uppercase md:text-start md:text-xl">
            Add New Location
        </p>
        <form action="{{ route('profile.location.add', Auth::user()->customer_ID) }}" method="POST">
            @csrf
            <div class="flex flex-col w-full gap-4 max-h-[30rem] p-4 overflow-y-auto">
                <!-- Location Label -->
                <div class="flex flex-col w-full gap-3 contet-wrap">
                    <p class="text-lg text-center md:text-start md:text-xl">Locations Place</p>
                    <div class="flex flex-wrap gap-3 wrap">
                        <input required type="text" id="locationInput" name="location_label"
                            class="w-full h-10 col-span-4 px-4 rounded-lg outline-none md:col-span-2 md:h-14"
                            placeholder="Required" />
                        <button type="button" onclick="setLocation('House')"
                            class="w-full px-6 py-1.5 border border-white rounded-lg md:py-3 md:w-fit md:px-16">
                            House
                        </button>
                        <button type="button" onclick="setLocation('Apartment')"
                            class="w-full px-6 py-1.5 border border-white rounded-lg md:py-3 md:w-fit md:px-16">
                            Apartment
                        </button>
                        <button type="button" onclick="setLocation('Campus')"
                            class="w-full px-6 py-1.5 border border-white rounded-lg md:py-3 md:w-fit md:px-16">
                            Campus
                        </button>
                        <button type="button" onclick="setLocation('Hotel')"
                            class="w-full px-6 py-1.5 border border-white rounded-lg md:py-3 md:w-fit md:px-16">
                            Hotel
                        </button>
                        <button type="button" onclick="setLocation('Office')"
                            class="w-full px-6 py-1.5 border border-white rounded-lg md:py-3 md:w-fit md:px-16">
                            Office
                        </button>
                        <button type="button" onclick="setLocation('Other')"
                            class="w-full px-6 py-1.5 border border-white rounded-lg md:py-3 md:w-fit md:px-16">
                            Other
                        </button>
                    </div>
                </div>
                <!-- Receiver Address -->
                <div class="flex flex-col w-full gap-3 contet-wrap">
                    <p class="text-lg text-center md:text-start md:text-xl">Locations Details</p>
                    <textarea required name="reciver_address" class="w-full col-span-4 px-4 py-2 rounded-lg outline-none" rows="3"
                        placeholder="Required"></textarea>
                </div>
                <!-- Receiver Name -->
                <div class="flex flex-col w-full gap-3 contet-wrap">
                    <p class="text-lg text-center md:text-start md:text-xl">Reciver Name</p>
                    <input required type="text" name="reciver_name"
                        class="w-full h-10 col-span-4 px-4 rounded-lg outline-none md:col-span-2 md:h-14"
                        placeholder="Required" />
                </div>
                <!-- Phone Number -->
                <div class="flex flex-col w-full gap-3 contet-wrap">
                    <p class="text-lg text-center md:text-start md:text-xl">Phone Number</p>
                    <input required type="text" name="reciver_number"
                        class="w-full h-10 col-span-4 px-4 rounded-lg outline-none md:col-span-2 md:h-14"
                        placeholder="Required" />
                </div>
            </div>
            <input type="submit" id="buttonLocation" class="hidden">
        </form>

        <p class="text-highlight-content">! Your location data is secure with us. We prioritize your privacy,
            protect it
            from unauthorized access, and
            never share it without your consent</p>
        <label for="buttonLocation" type="button"
            class="w-full px-6 py-1.5 cursor-pointer text-white text-center  bg-green-500 rounded-lg md:py-3  md:px-16">
            Add Location
        </label>
        <!-- Close Button (X Icon) -->
        <svg id="closelocation" xmlns="http://www.w3.org/2000/svg" class="absolute cursor-pointer top-6 right-6"
            width="20" height="20" viewBox="0 0 12 12" fill="none">
            <path
                d="M0.29289 0.29289C0.68342 -0.09763 1.31658 -0.09763 1.70711 0.29289L6 4.58579L10.2929 0.29289C10.6834 -0.09763 11.3166 -0.09763 11.7071 0.29289C12.0976 0.68342 12.0976 1.31658 11.7071 1.70711L7.4142 6L11.7071 10.2929C12.0976 10.6834 12.0976 11.3166 11.7071 11.7071C11.3166 12.0976 10.6834 12.0976 10.2929 11.7071L6 7.4142L1.70711 11.7071C1.31658 12.0976 0.68342 12.0976 0.29289 11.7071C-0.09763 11.3166 -0.09763 10.6834 0.29289 10.2929L4.58579 6L0.29289 1.70711C-0.09763 1.31658 -0.09763 0.68342 0.29289 0.29289Z"
                fill="#F8C055" />
        </svg>
    </div>
</div>
<script>
    function setLocation(value) {
        document.getElementById('locationInput').value = value;
    }
</script>