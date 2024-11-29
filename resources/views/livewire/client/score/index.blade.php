<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Score Baord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="flex flex-wrap gap-4 p-6 bg-gray-100 rounded-lg shadow-lg justify-center">
                        <!-- Bronze Badge -->

                        <div class="relative flex flex-col items-center justify-center w-40 h-40 p-4 bg-black rounded-lg shadow-md">
                            <!-- Badge Image and Text -->
                            <img src="/images/badges/Bronze.jpeg" alt="Bronze Badge" class="w-16 h-16 rounded-full">
                            <span class="mt-2 text-lg font-semibold text-[#ff9ca1] text-center">Fundamental Force</span>
                        
                            <!-- Locked Mask Layer -->
                            {{-- <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col items-center justify-center rounded-lg">
                                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor"><circle cx="128" cy="128" r="128"></circle><circle stroke="#fff" stroke-width="18" cx="128" cy="128" r="101"></circle><path fill="#fff" d="M128 55c-9.118 0-17.148 1.724-23.621 6.203-6.473 4.479-10.598 11.358-12.98 19.092-3.278 10.638-4.112 23.58-4.323 39.705H76v68h104v-68h-11.078c-.214-16.037-1.051-28.954-4.318-39.588-2.38-7.746-6.49-14.642-12.958-19.15C145.18 56.754 137.132 55 128 55zm0 18c6.868 0 10.821 1.264 13.354 3.03 2.532 1.764 4.423 4.395 6.042 9.667 2.212 7.2 3.07 18.826 3.4 34.303h-45.595c.33-15.57 1.188-27.224 3.4-34.404 1.618-5.248 3.493-7.842 6.02-9.59C117.148 74.257 121.118 73 128 73zm0 60.191c6.503 0 11.775 5.273 11.775 11.776a11.775 11.775 0 0 1-6.025 10.262l6.025 19.58h-23.55l6.023-19.573a11.776 11.776 0 0 1-6.023-10.27c0-6.502 5.272-11.774 11.775-11.775z"></path></svg>
                                <span class="mt-1 text-sm text-white font-semibold">Locked</span>
                            </div> --}}
                        </div>
                        

                    
                        <!-- Silver Badge -->
                        <div class="relative flex flex-col items-center justify-center w-40 h-40 p-4 bg-black rounded-lg shadow-md">
                            <img src="/images/badges/Silver.jpeg" alt="Silver Badge" class="w-16 h-16 rounded-full">
                            <span class="mt-2 text-lg font-semibold text-gray-300 text-center">Equation Keeper</span>

                            <!-- Locked Mask Layer -->
                            {{-- <div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center rounded-lg">
                                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor"><circle cx="128" cy="128" r="128"></circle><circle stroke="#fff" stroke-width="18" cx="128" cy="128" r="101"></circle><path fill="#fff" d="M128 55c-9.118 0-17.148 1.724-23.621 6.203-6.473 4.479-10.598 11.358-12.98 19.092-3.278 10.638-4.112 23.58-4.323 39.705H76v68h104v-68h-11.078c-.214-16.037-1.051-28.954-4.318-39.588-2.38-7.746-6.49-14.642-12.958-19.15C145.18 56.754 137.132 55 128 55zm0 18c6.868 0 10.821 1.264 13.354 3.03 2.532 1.764 4.423 4.395 6.042 9.667 2.212 7.2 3.07 18.826 3.4 34.303h-45.595c.33-15.57 1.188-27.224 3.4-34.404 1.618-5.248 3.493-7.842 6.02-9.59C117.148 74.257 121.118 73 128 73zm0 60.191c6.503 0 11.775 5.273 11.775 11.776a11.775 11.775 0 0 1-6.025 10.262l6.025 19.58h-23.55l6.023-19.573a11.776 11.776 0 0 1-6.023-10.27c0-6.502 5.272-11.774 11.775-11.775z"></path></svg>
                                <span class="mt-1 text-sm text-white font-semibold">Locked</span>
                            </div> --}}

                        </div>
                    
                        <!-- Gold Badge -->
                        <div class="relative flex flex-col items-center justify-center w-40 h-40 p-4 bg-black rounded-lg shadow-md">
                            <img src="/images/badges/Gold.jpeg" alt="Gold Badge" class="w-16 h-16 rounded-full">
                            <span class="mt-2 text-lg font-semibold text-orange-500 text-center">Phenomenon Connoisseur</span>
                        
                            <!-- Locked Mask Layer -->
                            {{-- <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col items-center justify-center rounded-lg">
                                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor"><circle cx="128" cy="128" r="128"></circle><circle stroke="#fff" stroke-width="18" cx="128" cy="128" r="101"></circle><path fill="#fff" d="M128 55c-9.118 0-17.148 1.724-23.621 6.203-6.473 4.479-10.598 11.358-12.98 19.092-3.278 10.638-4.112 23.58-4.323 39.705H76v68h104v-68h-11.078c-.214-16.037-1.051-28.954-4.318-39.588-2.38-7.746-6.49-14.642-12.958-19.15C145.18 56.754 137.132 55 128 55zm0 18c6.868 0 10.821 1.264 13.354 3.03 2.532 1.764 4.423 4.395 6.042 9.667 2.212 7.2 3.07 18.826 3.4 34.303h-45.595c.33-15.57 1.188-27.224 3.4-34.404 1.618-5.248 3.493-7.842 6.02-9.59C117.148 74.257 121.118 73 128 73zm0 60.191c6.503 0 11.775 5.273 11.775 11.776a11.775 11.775 0 0 1-6.025 10.262l6.025 19.58h-23.55l6.023-19.573a11.776 11.776 0 0 1-6.023-10.27c0-6.502 5.272-11.774 11.775-11.775z"></path></svg>
                                <span class="mt-1 text-sm text-white font-semibold">Locked</span>
                            </div> --}}

                        </div>
                    
                        <!-- Platinum Badge -->
                        <div class="relative flex flex-col items-center justify-center w-40 h-40 p-4 bg-black rounded-lg shadow-md">
                            <img src="/images/badges/Platinum.jpeg" alt="Platinum Badge" class="w-16 h-16 rounded-full">
                            <span class="mt-2 text-lg font-semibold text-[#36e7b2] text-center">Nature’s Navigator</span>
                        
                            <!-- Locked Mask Layer -->
                            {{-- <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col items-center justify-center rounded-lg">
                                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor"><circle cx="128" cy="128" r="128"></circle><circle stroke="#fff" stroke-width="18" cx="128" cy="128" r="101"></circle><path fill="#fff" d="M128 55c-9.118 0-17.148 1.724-23.621 6.203-6.473 4.479-10.598 11.358-12.98 19.092-3.278 10.638-4.112 23.58-4.323 39.705H76v68h104v-68h-11.078c-.214-16.037-1.051-28.954-4.318-39.588-2.38-7.746-6.49-14.642-12.958-19.15C145.18 56.754 137.132 55 128 55zm0 18c6.868 0 10.821 1.264 13.354 3.03 2.532 1.764 4.423 4.395 6.042 9.667 2.212 7.2 3.07 18.826 3.4 34.303h-45.595c.33-15.57 1.188-27.224 3.4-34.404 1.618-5.248 3.493-7.842 6.02-9.59C117.148 74.257 121.118 73 128 73zm0 60.191c6.503 0 11.775 5.273 11.775 11.776a11.775 11.775 0 0 1-6.025 10.262l6.025 19.58h-23.55l6.023-19.573a11.776 11.776 0 0 1-6.023-10.27c0-6.502 5.272-11.774 11.775-11.775z"></path></svg>
                                <span class="mt-1 text-sm text-white font-semibold">Locked</span>
                            </div> --}}

                        </div>
                    
                        <!-- Diamond Badge -->
                        <div class="relative flex flex-col items-center justify-center w-40 h-40 p-4 bg-black rounded-lg shadow-md">
                            <img src="/images/badges/d.jpeg" alt="Diamond Badge" class="w-16 h-16 rounded-full">
                            <span class="mt-2 text-lg font-semibold text-[#ff63cd] text-center">Physics Luminary</span>
                        
                            <!-- Locked Mask Layer -->
                            {{-- <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col items-center justify-center rounded-lg">
                                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor"><circle cx="128" cy="128" r="128"></circle><circle stroke="#fff" stroke-width="18" cx="128" cy="128" r="101"></circle><path fill="#fff" d="M128 55c-9.118 0-17.148 1.724-23.621 6.203-6.473 4.479-10.598 11.358-12.98 19.092-3.278 10.638-4.112 23.58-4.323 39.705H76v68h104v-68h-11.078c-.214-16.037-1.051-28.954-4.318-39.588-2.38-7.746-6.49-14.642-12.958-19.15C145.18 56.754 137.132 55 128 55zm0 18c6.868 0 10.821 1.264 13.354 3.03 2.532 1.764 4.423 4.395 6.042 9.667 2.212 7.2 3.07 18.826 3.4 34.303h-45.595c.33-15.57 1.188-27.224 3.4-34.404 1.618-5.248 3.493-7.842 6.02-9.59C117.148 74.257 121.118 73 128 73zm0 60.191c6.503 0 11.775 5.273 11.775 11.776a11.775 11.775 0 0 1-6.025 10.262l6.025 19.58h-23.55l6.023-19.573a11.776 11.776 0 0 1-6.023-10.27c0-6.502 5.272-11.774 11.775-11.775z"></path></svg>
                                <span class="mt-1 text-sm text-white font-semibold">Locked</span>
                            </div> --}}

                        </div>
                    
                        <!-- Champion Badge -->
                        <div class="relative flex flex-col items-center justify-center w-40 h-40 p-4 bg-black rounded-lg shadow-md">
                            <img src="/images/badges/Champ.jpeg" alt="Champion Badge" class="w-16 h-16 rounded-full">
                            <span class="mt-2 text-lg font-semibold text-[#36bbe7] text-center">Universal Genius</span>
                        
                            <!-- Locked Mask Layer -->
                            {{-- <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col items-center justify-center rounded-lg">
                                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor"><circle cx="128" cy="128" r="128"></circle><circle stroke="#fff" stroke-width="18" cx="128" cy="128" r="101"></circle><path fill="#fff" d="M128 55c-9.118 0-17.148 1.724-23.621 6.203-6.473 4.479-10.598 11.358-12.98 19.092-3.278 10.638-4.112 23.58-4.323 39.705H76v68h104v-68h-11.078c-.214-16.037-1.051-28.954-4.318-39.588-2.38-7.746-6.49-14.642-12.958-19.15C145.18 56.754 137.132 55 128 55zm0 18c6.868 0 10.821 1.264 13.354 3.03 2.532 1.764 4.423 4.395 6.042 9.667 2.212 7.2 3.07 18.826 3.4 34.303h-45.595c.33-15.57 1.188-27.224 3.4-34.404 1.618-5.248 3.493-7.842 6.02-9.59C117.148 74.257 121.118 73 128 73zm0 60.191c6.503 0 11.775 5.273 11.775 11.776a11.775 11.775 0 0 1-6.025 10.262l6.025 19.58h-23.55l6.023-19.573a11.776 11.776 0 0 1-6.023-10.27c0-6.502 5.272-11.774 11.775-11.775z"></path></svg>
                                <span class="mt-1 text-sm text-white font-semibold">Locked</span>
                            </div> --}}

                        </div>
                    </div>

                    <div class="w-full bg-gray-300 rounded-lg overflow-hidden h-6 shadow-md">
                        <div class="bg-gradient-to-r from-[#65effb] to-[#073545] h-full flex items-center justify-center text-white font-bold animate-pulse" style="width: 50%;">
                            50%
                        </div>
                    </div>
                    
                    
                    

                    
                    <section class="bg-gray-100 py-10">
                        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                            <!-- Section Title -->
                            <div class="text-center mb-8">
                                <h2 class="text-3xl font-bold text-gray-800">Player Achievements</h2>
                                <p class="text-gray-600 mt-2">A showcase of the milestones and accomplishments throughout their journey.</p>
                            </div>
                    
                            <!-- Achievements Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                <!-- Achievement Card -->
                                <div class="bg-white shadow-md rounded-lg p-6">
                                    <div class="flex items-center justify-center bg-indigo-500 text-white h-12 w-12 rounded-full mb-4">
                                        🏆
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-800">A pass</h3>
                                    <p class="text-gray-600 mt-2">Won the Most Valuable Player award in 2023 for outstanding performance.</p>
                                </div>
                    
                                <!-- Achievement Card -->
                                <div class="bg-white shadow-md rounded-lg p-6">
                                    <div class="flex items-center justify-center bg-green-500 text-white h-12 w-12 rounded-full mb-4">
                                        🥇
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-800">B pass</h3>
                                    <p class="text-gray-600 mt-2">Secured the gold medal in the National Championship, 2022.</p>
                                </div>
                    
                                <!-- Achievement Card -->
                                <div class="bg-white shadow-md rounded-lg p-6">
                                    <div class="flex items-center justify-center bg-yellow-500 text-white h-12 w-12 rounded-full mb-4">
                                        🎖️
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-800">C pass</h3>
                                    <p class="text-gray-600 mt-2">Achieved the top scorer award in the Premier League, 2021.</p>
                                </div>
                    
                                <!-- Add more cards as needed -->
                            </div>
                        </div>
                    </section>
                    

                    <!-- Section Title -->
                    <div class="text-center m-8">
                        <h2 class="text-3xl font-bold text-gray-800">Player Activities</h2>
                        <p class="text-gray-600 mt-2">A showcase of the milestones and accomplishments throughout their journey.</p>
                    </div>

                    <livewire:client-activity-details-table />


                </div>
            </div>
        </div>
    </div>
</div>
