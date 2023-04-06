@props(['message'])

<div x-data="data()" x-init="init" x-show="show" x-transition:enter="transition-all ease-out duration-500" x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transition-all ease-in duration-400" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="translate-x-full opacity-0" class="fixed top-0 right-0 w-full md:top-8 md:right-12 md:w-auto z-[1000]">
    <div class="bg-orange-500/90 text-ash-50 text-sm p-3 md:rounded shadow-lg flex justify-between">
        <div>
            {{$message}}
        </div>
        <button @click="close" class="text-ash-100 hover:text-ash-200 ml-5" style="outline: currentcolor none medium;">
            <span class="sr-only">Close</span>
            <svg class="w-4 h-4 flex-shrink-0 fill-current" viewBox="0 0 16 16">
                <path d="M12.72 3.293a1 1 0 00-1.415 0L8.012 6.586 4.72 3.293a1 1 0 00-1.414 1.414L6.598 8l-3.293 3.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L9.426 8l3.293-3.293a1 1 0 000-1.414z"></path>
            </svg>
        </button>
    </div>
</div>

<script>
    function data() {
        return {
            show: true,
            close() {
                this.show = false
            },
            init(){
                setTimeout(() => {
                    this.show = false
                }, 3000);
            }
        }
    }
</script>