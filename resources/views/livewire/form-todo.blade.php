<div>

    <div class="w-full">
        <div class="sm:mx-auto lg:mx-auto md:mx-auto xl:mx-auto 2xl:mx-auto  w-[769px] mt-20">
            <div class="font-inter text-center ">
                <h4 class="uppercase font-bold text-3xl">todo app</h4>
                <p class="text-seccondary opacity-75 -mt-1 ">Apa rencana mu hari ini</p>
            </div>

            <form action="" class="flex flex-col mt-6 ">
                <div class="flex mx-auto gap-3">
                    <div class="">
                        <input type="text" name="" id="" wire:model.live="input"
                            class="border w-[500px] shadow-input rounded-sm py-2 px-3 active:outline-none focus:outline-none"
                            placeholder="Tulis plan kamu disini">
                            <h3 class="">{{ $input }}</h3>
                        @if (session()->has('todo-gagal-ditambahkan'))
                            <div class="border">
                                <span
                                    class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                    Maaf inputan tidak boleh kosong
                                </span>
                            </div>
                        @endif

                    </div>
                    <div class="flex gap-3">
                        <button wire:click="addTodo" type="button"
                            class="bg-btn-simpan px-4 rounded-sm shadow-[5px_5px_0px_0px_#393131] h-10 active:shadow-none transition-all duration-300">Simpan</button>
                    </div>

                </div>
            </form>

            <section class="">
                @foreach ($todo as $item)
                    <div class="shadow-todo border w-[600px] mt-5 mx-auto border-black px-3 py-2">
                        <div class="flex">
                            @if ($idEditTodo === $item->id)
                                <div class="flex flex-col">
                                    <textarea name="" id="" rows="5"
                                        class="me-3 w-[480px] outline-none focus:ring focus:ring-purple-200" wire:model.live="updateTodo">{{ $item->todo }}</textarea>

                                    @error('updateTodo')
                                        <h3 class="text-red-500 block">Tidak boleh kosong</h3>
                                    @enderror
                                </div>
                                <button class="bg-btn-simpan  py-2 px-3  h-10 flex justify-center items-center"
                                    type="button" wire:click="update({{ $idEditTodo }})">
                                    Simpan
                                </button>
                            @else
                                <div class="flex">
                                    <div class="overflow-hidden w-[480px] text-ellipsis me-3 ">
                                        {{ $item->todo }}</div>
                                    <div class="flex gap-2">
                                        <button class="bg-btn-edit w-10 h-10 flex justify-center items-center"
                                            type="button" wire:click="todoEdit({{ $item->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                                viewBox="0 0 30 30" fill="none">
                                                <path
                                                    d="M23.735 2.51501L27.485 6.26501L24.6263 9.12501L20.8763 5.37501L23.735 2.51501ZM10 20H13.75L22.8588 10.8913L19.1087 7.14126L10 16.25V20Z"
                                                    fill="black" />
                                                <path
                                                    d="M23.75 23.75H10.1975C10.165 23.75 10.1313 23.7625 10.0988 23.7625C10.0575 23.7625 10.0163 23.7512 9.97375 23.75H6.25V6.25H14.8088L17.3088 3.75H6.25C4.87125 3.75 3.75 4.87 3.75 6.25V23.75C3.75 25.13 4.87125 26.25 6.25 26.25H23.75C24.413 26.25 25.0489 25.9866 25.5178 25.5178C25.9866 25.0489 26.25 24.413 26.25 23.75V12.915L23.75 15.415V23.75Z"
                                                    fill="black" />
                                            </svg>
                                        </button>
                                        <button class="bg-btn-hapus w-10 h-10 flex justify-center items-center"
                                            type="button" wire:click="deleteTodo({{ $item->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                                viewBox="0 0 30 30" fill="none">
                                                <path
                                                    d="M8.75 26.25C8.0625 26.25 7.47375 26.005 6.98375 25.515C6.49375 25.025 6.24917 24.4367 6.25 23.75V7.5H5V5H11.25V3.75H18.75V5H25V7.5H23.75V23.75C23.75 24.4375 23.505 25.0263 23.015 25.5163C22.525 26.0063 21.9367 26.2508 21.25 26.25H8.75ZM21.25 7.5H8.75V23.75H21.25V7.5ZM11.25 21.25H13.75V10H11.25V21.25ZM16.25 21.25H18.75V10H16.25V21.25Z"
                                                    fill="black" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            @endif



                        </div>
                    </div>
                @endforeach
            </section>



        </div>
