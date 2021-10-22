
    <x-slot name="header">
        COMPLETE YOUR REGISTRATION

    </x-slot>
    {{-- <x-slot name="slot"> --}}
        <div>
            @if (session()->has('m'))
                <div class="px-4 py-3 my-3 text-teal-900 bg-yellow-400 border-t-4 border-teal-500 rounded-b shadow-md bg-teal--100"
                    role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('m') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <form>
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="textname"
                                class="block mb-2 text-sm font-bold text-gray-700">
                                name:</label>
                            <input type="text"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="textname"
                                placeholder="Enter name"
                                wire:model="name">
                            @error('name') <span class="text-red-500">{{ $message }}
                            </span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="textname"
                                class="block mb-2 text-sm font-bold text-gray-700">
                                email:</label>
                            <input type="text"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="textname"
                                placeholder="Enter email"
                                wire:model="email">
                            @error('email') <span class="text-red-500">{{ $message }}
                            </span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="textname"
                                class="block mb-2 text-sm font-bold text-gray-700">
                                role:</label>
                            <input type="text"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="textname"
                                placeholder="Enter role"
                                wire:model="role">
                            @error('role') <span class="text-red-500">{{ $message }}
                            </span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="textpassword"
                                class="block mb-2 text-sm font-bold text-gray-700"
                                >password:</label>
                            <input type="text"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="textpassword"
                                wire:model="password"
                                placeholder="Enter password">
                            @error('password') <span class="text-red-500">{{ $message }}
                            </span>@enderror
                        </div>
                    </div>
                </div>

                <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button"
                        class="inline-flex items-center px-4 py-2 my-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                        Save
                    </button>
                    </span>
                </div>
            </form>
        </div>

    {{-- </x-slot> --}}

