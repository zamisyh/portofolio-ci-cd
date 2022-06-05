<div>
    <div class="flex navbar bg-base-100">
        <div class="flex-1">
          <a class="text-xl normal-case btn btn-ghost">
            <img src="{{ asset('logo.webp') }}" class="w-10 h-10 rounded-full" />
          </a>
          <ul class="hidden p-0 menu menu-horizontal lg:inline-flex">
            <li>
                <a href="{{ route('client.home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('client.about') }}">About</a>
            </li>
            <li>
                <a>Projects</a>
            </li>
          </ul>
        </div>
        <div class="flex-none">
            <select class="select" id="themeSelect">
                <option value="light">light</option>
                <option value="dark">dark</option>
                <option value="cupcake">cupcake</option>
                <option value="bumblebee">bumblebee</option>
                <option value="emerald">emerald</option>
                <option value="synthwave">synthwave</option>
                <option value="retro">retro</option>
                <option value="cyberpunk">cyberpunk</option>
                <option value="valentine">valentine</option>
                <option value="garden">garden</option>
                <option value="forest">forest</option>
                <option value="aqua">aqua</option>
                <option value="lofi">lofi</option>
                <option value="pastel">pastel</option>
                <option value="fantasy">fantasy</option>
                <option value="wireframe">wireframe</option>
                <option value="black">black</option>
                <option value="luxury">luxury</option>
                <option value="dracula">dracula</option>
                <option value="cmyk">cmyk</option>
                <option value="autumn">autumn</option>
                <option value="business">business</option>
                <option value="acid">acid</option>
                <option value="lemonade">lemonade</option>
                <option value="night">night</option>
                <option value="coffee">coffee</option>
                <option value="winter">winter</option>
            </select>
            <div class="inline lg:hidden" x-data="{ show: false }">
                <label @click='show' for="my-modal-6" class="btn btn-ghost btn-circle modal-button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
                </label>
                <div
                    x-show="show = !show"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90">
                    <input type="checkbox" id="my-modal-6" class="modal-toggle" />
                    <div class="modal modal-bottom sm:modal-middle">
                        <div class="modal-box">
                            <ul class="flex items-center w-full p-0 menu menu-vertical">
                                <li>
                                    <a href="{{ route('client.home') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('client.about') }}">About</a>
                                </li>
                                <li>
                                    <a href="https://dev.to/zamisyh">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Projects</a>
                                </li>
                              </ul>
                            <div class="modal-action">
                                <label for="my-modal-6" >Close</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
