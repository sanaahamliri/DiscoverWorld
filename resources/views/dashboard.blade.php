<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2> -->
    </x-slot>
    <section class="bg-white py-20">
        <a href="/recit">
            <button type="button" class="inline-flex items-center px-4 py-2 ml-28 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path xmlns="http://www.w3.org/2000/svg" d="M7 12L12 12M12 12L17 12M12 12V7M12 12L12 17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Add Adventure
            </button>
        </a>
        <select class="inline-flex items-center px-4 py-2 ml-40 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            <option value="">Filter according to your next adventure</option>
            <option value="">ytrytryt</option>
            <option value="">ytrytryt</option>
            <option value="">ytrytryt</option>

        </select>

        <b id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 ml-36 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
            <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
            </svg>
            Filter Adventure by date
        </b>

        <div class="flex flex-col justify-center  items-center">
            <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl mt-5 lg:text-4xl dark:text-white">Lorem ipsum dolor sit amet.</h1>
            <p class="w-3/4 m-auto text-center mb-6 text-lg font-normal text-gray-500 lg:text-lg sm:px-16 xl:px-48">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem sint mollitia libero aperiam rem, repellat distinctio sed obcaecati quaerat et!</p>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-4/5 m-auto my-5">

            <a href="/recit">
                <div class="rounded-lg h-60		 bg-gray-300 max-w-full  bg-[url('../uploads/')] ">
                    <div class="rounded-lg bg-black opacity-80	 w-full h-full flex justify-center  items-center">
                        <div class='rounded-lg border-neutral-50 border-solid border-2 w-3/4 h-2/4 hover:border-none flex justify-center  items-center font-black text-xl hover:text-3xl ease-in duration-300	'>
                            <h1 class="text-white">
                                Italie
                            </h1>

                        </div>
                    </div>
                </div>
            </a>

            <a href="/recit">
                <div class="rounded-lg h-60		 bg-gray-300 max-w-full  bg-[url('../uploads/')] ">
                    <div class="rounded-lg bg-black opacity-80	 w-full h-full flex justify-center  items-center">
                        <div class='rounded-lg border-neutral-50 border-solid border-2 w-3/4 h-2/4 hover:border-none flex justify-center  items-center font-black text-xl hover:text-3xl ease-in duration-300	'>
                            <h1 class="text-white">
                                France
                            </h1>

                        </div>
                    </div>
                </div>
            </a>

            <a href="/recit">
                <div class="rounded-lg h-60		 bg-gray-300 max-w-full  bg-[url('../uploads/')] ">
                    <div class="rounded-lg bg-black opacity-80	 w-full h-full flex justify-center  items-center">
                        <div class='rounded-lg border-neutral-50 border-solid border-2 w-3/4 h-2/4 hover:border-none flex justify-center  items-center font-black text-xl hover:text-3xl ease-in duration-300	'>
                            <h1 class="text-white">
                                Espagne
                            </h1>

                        </div>
                    </div>
                </div>
            </a>

        </div>



        </div>
    </section>
    </div>

</x-app-layout>