<template>
    <div class="h-screen md:flex">
        <div
            class="relative overflow-hidden md:flex md:flex-col w-1/2 justify-around items-center hidden bg-[#ebebeb] info-card"
        >
            <div>
                <main-heading class="font-stylish text-faculty"
                    >Keep Yourself in A Loop</main-heading
                >
            </div>

            <div class="external-links flex flex-col gap-2 items-center px-10">
                <div class="flex justify-around items-center gap-2">
                    <info-card
                        title="Undergraduate Admission"
                        subtitle="Explore the site of the undergraduate admission"
                        mode="start-positioned-card bus-colored-card w-1/2 h-60"
                        class="text-white"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            strokeWidth="{1.5}"
                            stroke="currentColor"
                            class="icon w-10 h-10 rounded-full bg-[#ebebeb] text-bus p-2"
                        >
                            <path
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"
                            />
                        </svg>
                    </info-card>

                    <info-card
                        title="CSE Club"
                        subtitle="Get the information about cse club and alumni"
                        mode="start-positioned-card faculty-colored-card w-1/2 h-60"
                        class="text-white"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="icon w-10 h-10 rounded-full bg-[#ebebeb] text-faculty p-2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"
                            />
                        </svg>
                    </info-card>
                </div>

                <info-card
                    title="Campus Site"
                    subtitle="View the main website of Patuakhali Science and Technology University"
                    mode="center-positioned-card text-white w-full mx-10"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="icon w-10 h-10 rounded-full bg-[#ebebeb] text-black p-2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"
                        />
                    </svg>
                </info-card>
            </div>
        </div>

        <div class="md:w-1/2 flex justify-around align-center bg-white p-20">
            <div
                class="flex justify-center items center shadow-lg bg-white p-10"
            >
                <form class="bg-white relative">
                    <h1 class="text-gray-800 font-bold text-2xl mb-1">
                        Hey, Welcome Back
                    </h1>
                    <p class="text-sm font-normal text-gray-600 mb-7">
                        Log into Your Account
                    </p>
                    <div
                        class="flex items-center border-2 border-bus py-2 px-3 shadow-md bg-bus-5 focus:bg-white mb-4"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                            />
                        </svg>
                        <label for="" class="relative border-0 focus:border-0">
                            <input
                                type="text"
                                class="h-10 w-96 px-6 rounded-lg outline-none focus:text-black transition duration-200 styli-input border-0 focus:border-0"
                            />
                            <span
                                class="text-black absolute left-0 top-1.5 mx-6 transition duration-200 input-text border-0 focus:border-0"
                                >Email</span
                            >
                        </label>
                    </div>

                    <div
                        class="flex items-center border-2 border-bus py-2 px-3 shadow-md bg-bus-5 focus:bg-white"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <label for="" class="relative border-0 focus:border-0">
                            <input
                                type="text"
                                class="h-10 w-96 px-6   rounded-lg outline-none focus:text-black transition duration-200 styli-input border-0 focus:outline-0 focus:outline-none"
                            />
                            <span
                                class="text-black absolute left-0 top-1.5 mx-6 transition duration-200 input-text border-0 focus:border-0 outline-none outline-0"
                                >Password</span
                            >
                        </label>
                    </div>

                    <a
                        href="#_"
                        class="relative inline-flex items-center justify-end py-3 pl-4 pr-12 overflow-hidden font-semibold shadow text-faculty transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-white group my-3 ml-80"
                    >
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-bus group-hover:h-full"
                        ></span>
                        <span
                            class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12"
                        >
                            <svg
                                class="w-5 h-5 text-faculty"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"
                                ></path>
                            </svg>
                        </span>
                        <span
                            class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200"
                        >
                            <svg
                                class="w-5 h-5 text-white"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"
                                ></path>
                            </svg>
                        </span>
                        <span
                            class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white"
                            >Login</span
                        >
                    </a>

                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center mb-4">
                                <input
                                    id="default-checkbox"
                                    type="checkbox"
                                    value=""
                                    class="w-4 h-4 text-bus bg-gray-100 border-gray-300 rounded focus:ring-bus"
                                />
                                <label
                                    for="default-checkbox"
                                    class="ml-2 text-sm font-medium text-bus"
                                    >Remember Me</label
                                >
                            </div>
                        </div>
                        <a
                            href="#"
                            class="text-sm font-medium text-bus hover:underline"
                            >Forgot password?</a
                        >
                    </div>

                    <horizontal-border title="Any problem? Contact Admin"></horizontal-border>

                    <!-- <button
                        class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm hover:scale-105 duration-300 text-[#002D74]"
                    >
                        <svg
                            class="mr-3"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 48 48"
                            width="25px"
                        >
                            <path
                                fill="#FFC107"
                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"
                            />
                            <path
                                fill="#FF3D00"
                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"
                            />
                            <path
                                fill="#4CAF50"
                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"
                            />
                            <path
                                fill="#1976D2"
                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"
                            />
                        </svg>
                        Login with Google
                    </button> -->
                </form>
            </div>
        </div>
    </div>
</template>

<script></script>

<style scoped>
.info-card{
    background-image:
    linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),
     url("@/../assets/images/shohid-minar.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>
