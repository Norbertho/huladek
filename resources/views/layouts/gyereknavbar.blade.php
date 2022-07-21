<!-- ====== Navbar Section Start -->
<header
x-data="
  {
    navbarOpen: false
  }
"
class="bg-basegreen w-full flex items-center"
>
<div class="container">
  <div class="flex -mx-4 items-center justify-between relative">
    <div class="px-4 w-60 max-w-full">
      <a href="/" class="w-full block py-3">
        <img
          src="{{asset('images/logow3.png')}}"
          alt="logo"
          class="w-full"
        />
      </a>
    </div>
    <div class="flex px-4 justify-between items-center w-full">
      <div>
        <button
          @click="navbarOpen = !navbarOpen"
          :class="navbarOpen && 'navbarTogglerActive' "
          id="navbarToggler"
          class="
            block
            absolute
            right-4
            top-1/2
            -translate-y-1/2
            2xl:hidden
            focus:ring-2
            ring-gray-700
            px-3
            py-[6px]
            rounded-lg
          "
        >
          <span
            class="relative w-[30px] h-[2px] my-[6px] block bg-white"
          ></span>
          <span
            class="relative w-[30px] h-[2px] my-[6px] block bg-white"
          ></span>
          <span
            class="relative w-[30px] h-[2px] my-[6px] block bg-white"
          ></span>
        </button>
        <nav
          :class="!navbarOpen && 'hidden' "
          id="navbarCollapse"
          class="
            absolute
            py-5
            px-6
            bg-white
            2xl:bg-transparent
            shadow
            rounded-lg
            max-w-[250px]
            w-full
            2xl:max-w-full 2xl:w-full
            right-4
            top-full
            2xl:block 2xl:static 2xl:shadow-none
            z-20
          "
        >
          <ul class="blcok 2xl:flex"
          x-data="{
            open: false,
            toggle() {
                if (this.open) {
                    return this.close()
                }
 
                this.$refs.button.focus()
 
                this.open = true
            },
            close(focusAfter) {
                if (! this.open) return
 
                this.open = false
 
                focusAfter && focusAfter.focus()
            }
        }"
        x-on:keydown.escape.prevent.stop="close($refs.button)"
        x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
        x-id="['dropdown-button']"
          >
            <li>
              <a
                href="javascript:void(0)"
                class="text-base font-bold uppercase text-dark 2xl:text-white hover:text-darkblue py-2 2xl:inline-flex flex 2xl:ml-8">
                Tudtad-e?
              </a>
            </li>
            <li class="relative hover:text-darkblue group">
              <a
              x-ref="button"
              x-on:click="toggle()"
              
              :aria-expanded="open"
              :aria-controls="$id('dropdown-button')"
              type="button"

                href="javascript:void(0)"
                class=" text-base font-bold uppercase text-dark 2xl:text-white hover:text-darkblue py-2 2xl:inline-flex flex 2xl:ml-8">
                <div class="flex hover:text-darkblue"> <span>Játékok</span>              <svg class="text-white group-hover:text-darkblue ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg></div>  
              </a>
              <div
      x-ref="panel"
      x-show="open"
      x-transition.origin.top.left
      x-on:click.outside="close($refs.button)"
      :id="$id('dropdown-button')"
      style="display: none;"
      class="absolute left-0 mt-6  bg-white rounded shadow-md overflow-hidden z-50 2xl:ml-8"
  >
      <div class="bg-basegreen block">
          <a href="/puzzle/index.html" class="block w-full px-4 py-2 text-left text-sm font-bold uppercase text-dark 2xl:text-white hover:text-darkblue" >
             Puzzle
          </a>

          <a href="/parosito/index.html" class="block w-full px-4 py-2 text-left text-sm font-bold uppercase text-dark 2xl:text-white hover:text-darkblue" >
            Párosító játék
          </a>
          <a href="/kviz-kerdesek/index.html" class="block w-full px-4 py-2 text-left text-sm font-bold uppercase text-dark 2xl:text-white hover:text-darkblue" >
            Kvíz kérdések
         </a>

  

      </div>

  </div>
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="text-base font-bold uppercase text-dark 2xl:text-white hover:text-darkblue py-2 2xl:inline-flex flex 2xl:ml-8">
               Gyakaran ismételt kérdések
              </a>
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="text-base font-bold uppercase text-dark 2xl:text-white hover:text-darkblue py-2 2xl:inline-flex flex 2xl:ml-8">
                Learning apps
              </a>
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="text-base font-bold uppercase text-dark 2xl:text-white hover:text-darkblue py-2 2xl:inline-flex flex 2xl:ml-8">
                Hasznos linkek
              </a>
            </li>

          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
</header>
<!-- ====== Navbar Section End -->