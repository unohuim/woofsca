<x-layout>
    <section>
        <div class="h-screen relative bg-white">
            <div class="mx-auto max-w-7xl lg:grid lg:grid-cols-12 lg:gap-x-8 lg:px-8">
                <div class="px-6 pt-10 pb-24 sm:pb-32 lg:col-span-7 lg:px-0 lg:pt-48 lg:pb-56 xl:col-span-6">
                    <div class="mx-auto max-w-2xl lg:mx-0">
                        <img class="h-11" src="{{Vite::asset('resources/images/purple_dog.png')}}" alt="Your Company">
                        <div class="hidden sm:mt-32 sm:flex lg:mt-16">

                        </div>
                        <h1 class="mt-24 text-4xl font-bold tracking-tight text-gray-900 sm:mt-10 sm:text-6xl">Enrichment for your
                            canine being</h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            Dogs are sensitive to stimulation.  We focus on a balance between
                            physical, mental and excellent social dynamics.
                        </p>
                        <div class="mt-10 flex items-center gap-x-6">
                            <a href="#inquire"
                                class="rounded-md bg-purple-900 px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-900">Inquire</a>
                            <a href="#services" class="text-base font-semibold leading-7 text-gray-900">Learn more <span
                                    aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>
                <div class="relative lg:col-span-5 lg:-mr-8 xl:absolute xl:inset-0 xl:left-1/2 xl:mr-0">
                    <img class="aspect-[3/2] w-full bg-gray-50 object-cover lg:absolute lg:inset-0 lg:aspect-auto lg:h-full"
                        src="{{ Vite::asset('resources/images/dogs_fun.png') }}">
                </div>
            </div>
        </div>
    </section>  


    <section id="services">
        <div class="relative bg-gray-50 px-6 pt-16 pb-20 lg:px-8 lg:pt-24 lg:pb-28">
            <div class="absolute inset-0">
                <div class="h-1/3 bg-white sm:h-2/3"></div>
            </div>
            <div class="relative mx-auto max-w-7xl">
                <div class="text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our Services</h2>

                </div>
                <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover"
                            src="{{ Vite::asset('resources/images/dogwalking.png') }}">
                        </div>
                        <div class="flex flex-1 flex-col justify-between bg-white p-6">
                            <div class="flex-1">

                                <a href="#" class="mt-2 block">
                                    <p class="text-xl font-semibold text-gray-900">Dog Walking</p>
                                    <p class="mt-3 text-base text-gray-500">
                                        We are full time professional dog handlers.  Our dog walkers have made a long term commitment to canine handling as a career utilizing positive force-free techniques and canine enrichment.
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        We focus on groups, not individual walks, though we do go on leash walks on trails as well as off-leash dog parks.
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">

                                    </p>

                                </a>
                            </div>

                        </div>
                    </div>


                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover"
                                src="{{ Vite::asset('resources/images/daycare.png') }}">
                        </div>
                        <div class="flex flex-1 flex-col justify-between bg-white p-6">
                            <div class="flex-1">

                                <a href="#" class="mt-2 block">
                                    <p class="text-xl font-semibold text-gray-900">Daycare</p>
                                    <p class="mt-3 text-base text-gray-500">
                                        Our daycare is located at 63 Mack Ave, with over 3000 sq ft inside and a 2000 sq ft outdoor park.
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        Because the dogs have access to outside any time, we try to limit outside duration to 15 min increments and encourage 30-50 min rest times twice daily.
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        Over stimulation is a real problem with daycares, and we're sensitive to that reality.  Inserting resting periods is a major asset.
                                    </p>

                                </a>
                            </div>

                        </div>
                    </div>




                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover"
                            src="{{ Vite::asset('resources/images/boarding.png') }}">
                        </div>
                        <div class="flex flex-1 flex-col justify-between bg-white p-6">
                            <div class="flex-1">

                                <a href="#" class="mt-2 block">
                                    <p class="text-xl font-semibold text-gray-900">Boarding</p>
                                    <p class="mt-3 text-base text-gray-500">
                                        Strictly for existing clients. We offer home-style boarding where your pup lives with us.  We often have multiple clients staying at a time, and they're likely friends already.  We only use crates upon request, or if your doggo decides to eat stuff at night.
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        If your pup is staying with us during the week, then they will come to daycare during the day.  Otherwise, full regular walks on the weekend.
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        Administering meds and facilitating complex diets is easy for us.
                                    </p>


                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="testimonials" class="bg-purple-900">
        <div class="mx-auto max-w-7xl md:grid md:grid-cols-2 md:px-6 lg:px-8">
            <div class="py-12 px-6 md:flex md:flex-col md:border-r md:border-indigo-900 md:py-16 md:pl-0 md:pr-10 lg:pr-16">

                <blockquote class="mt-6 md:flex md:flex-grow md:flex-col">
                    <div class="relative text-lg font-medium text-white md:flex-grow">
                        <svg class="absolute top-0 left-0 h-8 w-8 -translate-x-3 -translate-y-2 transform text-purple-900"
                            fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                            <path
                                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                        </svg>
                        <p class="relative">
                            Can I tell you that Haroula is magic? She has charmed Murray and they have forged a bond I haven’t seen him have with anyone outside of my family. She has a special call for him when she comes in and he runs to the door–runs(!) to greet her. He can’t wait to go out with her. He left yesterday petrified of the thunder, and Haroula just held him and calmed him. Clearly he got over it and had a great time in the park. Thank you for hiring such wonderful people.
                        </p>
                    </div>
                    <footer class="mt-8">
                        <div class="flex items-start">

                            <div class="ml-4">
                                <div class="text-base font-medium text-white">Carolyn</div>
                                <div class="text-base font-medium text-indigo-200">Murphy's owner</div>
                            </div>
                        </div>
                    </footer>
                </blockquote>
            </div>
            <div class="border-t-2 border-indigo-900 py-12 px-6 md:border-t-0 md:border-l md:py-16 md:pr-0 md:pl-10 lg:pl-16">

                <blockquote class="mt-6 md:flex md:flex-grow md:flex-col">
                    <div class="relative text-lg font-medium text-white md:flex-grow">
                        <svg class="absolute top-0 left-0 h-8 w-8 -translate-x-3 -translate-y-2 transform text-purple-900"
                            fill="currentColor" viewBox="0 0 32 32">
                            <path
                                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                        </svg>
                        <p class="relative">
                            Rob and crew have been amazing with our dog Lucy. She waits excitedly for their arrival in the morning, perking up at each promising sound outside, and she comes home happy and completely exhausted. This is a very professional operation- from the intake, to the amazing regular communication (daily notes, email updates, accounting messages), to the way they handle unexpected challenges. I have been impressed every step of the way. And a big bonus is how much they clearly love our dog- it warms my heart to see the interaction between Lucy and her walker, Haroula. Knowing they will keep her safe, exercise her, AND love her is way more than I expected from a dog walking service. I have recommended this company to several others, and wouldn’t hesitate to do so again.
                        </p>
                    </div>
                    <footer class="mt-8">
                        <div class="flex items-start">

                            <div class="ml-4">
                                <div class="text-base font-medium text-white">Rachel</div>
                                <div class="text-base font-medium text-indigo-200">Lucy's Owner</div>
                            </div>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </div>

    </section>


    <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <section id="inquire">


        <form action="https://caninex.com/leads/5/store?signature=3f071b83a1e0814db1c71e27630579f3c5050a3b47439bd8fdfa2a5566cc92e3" method="post">
            <fieldset>
                <div class="overflow-hidden bg-white py-16 px-6 lg:px-8 lg:py-24">
                    <div class="relative mx-auto max-w-xl">
                        <svg class="absolute left-full translate-x-1/2 transform" width="404" height="404" fill="none"
                            viewBox="0 0 404 404" aria-hidden="true">
                            <defs>
                                <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                                    patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
                        </svg>
                        <svg class="absolute right-full bottom-0 -translate-x-1/2 transform" width="404" height="404" fill="none"
                            viewBox="0 0 404 404" aria-hidden="true">
                            <defs>
                                <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                                    patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
                        </svg>
                        <div class="text-center">
                            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Inquire</h2>
                            <p class="mt-4 text-lg leading-6 text-gray-500">Please tell us about your pup</p>
                        </div>
                        <div class="mt-12">
                            <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                                <div>
                                    <label for="pet_name" class="block text-sm font-medium text-gray-700">Your Pet's Name</label>
                                    <div class="mt-1">
                                        <input type="text" name="pet_name" id="pet_name"
                                            class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    </div>
                                </div>
                                <div>
                                    <label for="client_name" class="block text-sm font-medium text-gray-700">Your Name</label>
                                    <div class="mt-1">
                                        <input type="text" name="client_name" id="client_name"
                                            class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    </div>
                                </div>
                                <div>
                                    <label for="major_intersection" class="block text-sm font-medium text-gray-700">Closest Intersection</label>
                                    <div class="mt-1">
                                        <input type="text" name="major_intersection" id="major_intersection"
                                            class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="client_email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <div class="mt-1">
                                        <input id="client_email" name="client_email" type="email" autocomplete="email"
                                            class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="client_phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <input type="text" name="client_phone" id="client_phone"
                                            class="block w-full rounded-md border-gray-300 py-3 px-4 pl-20 focus:border-indigo-500 focus:ring-indigo-500"
                                            placeholder="+1 (647) 987-6543">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="client_message" class="block text-sm font-medium text-gray-700">Message</label>
                                    <div class="mt-1">
                                        <textarea id="client_message" name="client_message" rows="4"
                                            class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <label for="client_source" class="block text-sm font-medium text-gray-700">How did you find out about us? </label>
                                    <div class="mt-1">
                                        <input type="text" name="client_source" id="client_source"
                                            class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <button type="submit"
                                        class="inline-flex w-full items-center justify-center rounded-md border border-transparent bg-purple-900 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Let's
                                        talk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>


    <footer class="bg-white">

        <div class="mx-auto max-w-7xl py-12 px-6 md:flex md:items-center md:justify-between lg:px-8">
            <div class="flex justify-center space-x-6 md:order-2">
                <a href="https://fb.com/woofsuponawalk" target="_blank" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd" />
                    </svg>
                </a>

                <a href="https://www.instagram.com/woofsuponawalk/" target="_blank" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd" />
                    </svg>
                </a>


            </div>
            <div class="mt-8 md:order-1 md:mt-0">
                <div>
                    <img src="{{ Vite::asset('resources/images/logo.png') }}">
                </div>
                <p class="text-center text-xs leading-5 text-gray-500">&copy; 2023 Woofs Upon A Walk, Inc. All rights reserved.</p>
            </div>
        </div>
      </footer>




</x-layout>
