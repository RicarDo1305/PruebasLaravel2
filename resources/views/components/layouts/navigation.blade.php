
 <header class="bg-white px-6 shadow">
        <div class="flex h-16 max-w-6xl mx-auto items-center justify-between">
            <button class="-ml-1 rounded p-1 text-slate-500 transition-colors hover:bg-sky-500
             hover:text-slate-100 focus:ring-2 focus:ring-slate-200"
             >
                <svg 
                xmlns="http://www.w3.org/2000/svg" 
                fill=".5m" viewBox="0 0 24 24" 
                strokeWidth={1.5} 
                stroke="currentColor"
                class="w-6 h-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>

            <div class="-mr-4 flex items-center">
              <a class="text-sky-500 hover:rotate-6 duration-200" href="{{ route('home') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>
              </a>
              <div class="space-x-8 ml-8 hidden md:flex">
                    <a class="px-3 py-2 hover:text-sky-500 {{  request()->routeIs('home') ? 'text-sky-500' : 'text-slate-600'  }}" href="{{ route('home') }}">Home</a>
                    <a class="px-3 py-2 transition-colors hover:text-sky-500 {{  request()->routeIs('about') ? 'text-sky-500' : 'text-slate-600'  }}" href="{{ route('about') }}">About</a>
                    <a class="px-3 py-2 transition-colors hover:text-sky-500 {{  request()->routeIs('posts.*') ? 'text-sky-500' : 'text-slate-600'  }}" href="{{ route('posts.index') }}">Blog</a>
                    <a class="px-3 py-2 transition-colors hover:text-sky-500 {{  request()->routeIs('contact') ? 'text-sky-500' : 'text-slate-600'  }}" href="{{ route('contact') }}">Contact</a>
              </div>
            </div>
        <div class="flex">
            <button class="rounded-full text-slate-500 transition-colors
            hover:text-sky-500 focus:ring-2 focus:ring-slate-200"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                </svg>
            </button>
            <button class="ml-4 rounded-full text-slate-500 transition-colors
            hover:text-sky-500 focus:ring-2 focus:ring-slate-200 focus:ring-offset-1">
                <img 
                class="h-6 w-6 rounded-full"
                src="https://ui-avatars.com/api?name=Ricardo+Aguirre" 
                alt="Ricardo Aguirre"
                />
            </button>
        </div>
      </div>
      <div class="space-y-1 border-t pb-3 pt-2 md:hidden">
        <a href="#" class="block rounded-md px-3 py-2 bg-sky-500 text-white">
            Home
        </a>
        <a href="#" class="block rounded-md px-3 py-2 text-slate-700 transition-colors hover:bg-sky-500 hover:text-white">
            About
        </a>
        <a href="#" class="block rounded-md px-3 py-2 text-slate-700 transition-colors hover:bg-sky-500 hover:text-white">
            Blog
        </a>
        <a href="#" class="block rounded-md px-3 py-2 text-slate-700 transition-colors hover:bg-sky-500 hover:text-white">
            Contact
        </a>
      </div>
    </header>
