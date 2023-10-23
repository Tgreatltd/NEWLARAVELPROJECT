<div>
    <div>
        <div class="container mx-auto p-5">
            <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                   <div class="flex justify-between h-16">
                      <div class="flex ">
                       <div class="shrink-0 flex items-center text-green-600 text-3xl m-2 ">
                           {{-- <a >
                               <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                           </a> --}}
                           <a href="">TEEGREAT'S BLOG</a>
                       </div>
                       <div class="hidden space-x-12 sm:-my-px sm:ml-20 sm:flex">
                           <x-nav-link :href="route('musicadmin')" :active="request()->routeIs('musicadmin')" wire:navigate>
                               {{ __('MUSIC') }}
                           </x-nav-link>
           
                           <x-nav-link>
                               {{ __('STORIES') }}
                           </x-nav-link>
           
                           <x-nav-link>
                               {{ __('NEWS') }}
                           </x-nav-link>
           
                           <x-nav-link>
                               {{ __('SPORT') }}
                           </x-nav-link> 
                        
                            <x-nav-link>
                                {{ __('Contact Us') }}
                            </x-nav-link>
                           
                       </div>
                      </div>
                      
                       <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
    
            </div>
        </div>   
                   
            <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link>
                    {{ __('MUSIC') }}
                </x-responsive-nav-link>
            </div>
                
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link>
                    {{ __('STORIES') }}
                </x-responsive-nav-link>
            </div>
    
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link>
                    {{ __('NEWS') }}
                </x-responsive-nav-link>
            </div>
    
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link>
                    {{ __('SPORT') }}
                </x-responsive-nav-link>
            </div>
    
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link>
                    {{ __('Contact Us') }}
                </x-responsive-nav-link>
            </div>
    
        </div>
     </nav>
    
    </div>
    
</div>
