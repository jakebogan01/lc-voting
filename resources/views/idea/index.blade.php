<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="relative w-2/3">
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl placeholder-gray-900 bg-white border-none px-4 py-2 pl-8">
            <div class="hidden absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="ideas-container space-y-6 my-6">
        @foreach($ideas as $idea)
            <div
                x-data
                @click="const clicked = $event.target
                        const target = clicked.tagName.toLowerCase()
                        const ignores = ['button','svg','path','a', 'img']
                        const ideaLink = clicked.closest('.idea-container').querySelector('.idea-link')

                        !ignores.includes(target) && ideaLink.click()"
                class="idea-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
                <div class="border-r border-gray-100 px-5 py-8">
                    <div class="text-center">
                        <div class="font-semibold text-2xl">
                            12
                        </div>
                        <div class="text-gray-500">
                            Votes
                        </div>
                        <div class="mt-8">
                            <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-[0.625rem] uppercase rounded-xl px-4 py-3 transition duration-150 ease-in">
                                Vote
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-1 px-2 py-6">
                    <div class="flex-none">
                        <a href="#">
                            <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
                        </a>
                    </div>
                    <div class="w-full flex flex-col justify-between mx-4">
                        <h4 class="text-xl font-semibold">
                            <a href="{{ route('idea.show', $idea->slug) }}" class="idea-link hover:underline">
                                {{ $idea->title }}
                            </a>
                        </h4>
                        <div class="text-gray-600 mt-3 line-clamp-3">
                            {{ $idea->description }}
                        </div>

                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <div>&bull;</div>
                                <div>{{ $idea->created_at->diffForHumans() }}</div>
                                <div>&bull;</div>
                                <div>Category 1</div>
                                <div>&bull;</div>
                                <div class="text-gray-900">3 Comments</div>
                            </div>
                            <div
                                x-data="{ isOpen: false }"
                                class="flex items-center space-x-2"
                            >
                                <div class="bg-gray-200 text-[0.625rem] font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                    Open
                                </div>
                                <button
                                    @click="isOpen = !isOpen"
                                    class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 py-2 px-3 transition duration-150 ease-in">
                                    <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)" /></svg>
                                    <ul
                                        x-cloak
                                        x-show.origin.top.left="isOpen"
                                        x-transition.duration.200ms
                                        @click.away="isOpen = false"
                                        @keydown.escape.window="isOpen = false"
                                        class="absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 ml-8 z-10">
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
        @endforeach
    </div>

    <div class="my-8">
        {{ $ideas->links() }}
    </div>
</x-app-layout>
