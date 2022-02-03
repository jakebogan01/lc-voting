<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">All ideas</span>
        </a>
    </div>

    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">
                        A random title can go here
                    </a>
                </h4>
                <div class="text-gray-600 mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequatur cupiditate deserunt dolore doloremque, est, expedita iure nobis porro possimus repudiandae voluptas voluptatibus! Accusamus ad atque corporis cumque et eveniet expedita facere impedit incidunt ipsum labore maiores odit optio perspiciatis quae qui quisquam, repellat rerum saepe sed sequi sunt totam unde, ut vel! Animi commodi consequuntur delectus dicta dignissimos dolore doloremque ducimus eligendi, ex facere illum iste laborum maxime natus necessitatibus neque nihil non numquam obcaecati officia officiis provident, quae, quidem repellendus tempora velit voluptatibus! Aliquam error est eveniet explicabo laborum, nobis odio, perspiciatis quibusdam sapiente sint tempora vel voluptatibus!
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-[0.625rem] font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 py-2 px-3 transition duration-150 ease-in">
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)" /></svg>
                            <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 ml-8">
                                <li>
                                    <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                                        Mark as Spam
                                    </a>
                                    <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                                        Delete Post
                                    </a>
                                </li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <button type="button"
                    class="flex items-center justify-center h-10 w-32 text-white text-xs bg-[#328af1] font-semibold rounded-xl border border-[#328af1] hover:bg-[#2879bd] transition duration-150 ease-in px-6 py-3">
                <span class="ml-0.5">Reply</span>
            </button>
            <button type="button"
                    class="flex items-center justify-center w-36 h-10 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                <span>Set Status</span>
                <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>

        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-sm leading-none">Votes</div>
            </div>

            <button type="button"
                    class="w-32 h-10 text-xs bg-gray-200 font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                <span>Vote</span>
            </button>
        </div>
    </div>

    <div class="comments-container relative space-y-6 ml-[5.5rem] my-8 mt-1 pt-4">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequatur cupiditate deserunt dolore doloremque, est, expedita iure nobis porro possimus repudiandae voluptas voluptatibus! Accusamus ad atque corporis cumque et eveniet expedita facere impedit incidunt ipsum labore maiores odit optio perspiciatis quae qui quisquam, repellat rerum saepe sed sequi sunt totam unde, ut vel! Animi commodi consequuntur delectus dicta dignissimos dolore doloremque ducimus eligendi, ex facere illum iste laborum maxime natus necessitatibus neque nihil non numquam obcaecati officia officiis provident, quae, quidem repellendus tempora velit voluptatibus! Aliquam error est eveniet explicabo laborum, nobis odio, perspiciatis quibusdam sapiente sint tempora vel voluptatibus!
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 py-2 px-3 transition duration-150 ease-in">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)" /></svg>
                                <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 ml-8">
                                    <li>
                                        <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                                            Mark as Spam
                                        </a>
                                        <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                                            Delete Post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="comment-container is-admin relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center text-[#328af1] uppercase text-[0.625rem] font-bold mt-1">
                        Admin
                    </div>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">
                            Status Changed to "Under Construction"
                        </a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequatur cupiditate deserunt dolore doloremque, est, expedita iure nobis porro possimus repudiandae voluptas voluptatibus! Accusamus ad atque corporis cumque et eveniet expedita facere impedit incidunt ipsum labore maiores odit optio perspiciatis quae qui quisquam, repellat rerum saepe sed sequi sunt totam unde, ut vel! Animi commodi consequuntur delectus dicta dignissimos dolore doloremque ducimus eligendi, ex facere illum iste laborum maxime natus necessitatibus neque nihil non numquam obcaecati officia officiis provident, quae, quidem repellendus tempora velit voluptatibus! Aliquam error est eveniet explicabo laborum, nobis odio, perspiciatis quibusdam sapiente sint tempora vel voluptatibus!
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-[#328af1]">Andrea</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 py-2 px-3 transition duration-150 ease-in">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)" /></svg>
                                <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 ml-8">
                                    <li>
                                        <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                                            Mark as Spam
                                        </a>
                                        <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                                            Delete Post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequatur cupiditate deserunt dolore doloremque, est, expedita iure nobis porro possimus repudiandae voluptas voluptatibus! Accusamus ad atque corporis cumque et eveniet expedita facere impedit incidunt ipsum labore maiores odit optio perspiciatis quae qui quisquam, repellat rerum saepe sed sequi sunt totam unde, ut vel! Animi commodi consequuntur delectus dicta dignissimos dolore doloremque ducimus eligendi, ex facere illum iste laborum maxime natus necessitatibus neque nihil non numquam obcaecati officia officiis provident, quae, quidem repellendus tempora velit voluptatibus! Aliquam error est eveniet explicabo laborum, nobis odio, perspiciatis quibusdam sapiente sint tempora vel voluptatibus!
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 py-2 px-3 transition duration-150 ease-in">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)" /></svg>
                                <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 ml-8">
                                    <li>
                                        <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                                            Mark as Spam
                                        </a>
                                        <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                                            Delete Post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
