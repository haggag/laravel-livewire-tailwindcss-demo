<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" wire:poll>
    <div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">
        <div class="border-b px-6">
            <div class="flex justify-between -mb-px">

                <div class="flex">
                    <h3 class="appearance-none uppercase py-4 text-grey-dark border-b border-transparent hover:border-grey-dark mr-3">
                        Blockchain Statistics</h3>
                </div>
                <div class="hidden lg:flex">
                    <span class="appearance-none text-sm py-4 text-grey-dark border-b border-transparent hover:border-grey-dark mr-3">
                        Last updated: {{ $this->timestamp }}
                    </span>

                </div>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full lg:w-1/3 text-center py-8">
                <div class="lg:border-r">
                    <div class="text-grey-darker mb-2">
                        <span class="text-5xl">{{ $this->environment }}</span>
                    </div>
                    <div class="text-sm uppercase text-grey tracking-wide">
                        Network
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/3 text-center py-8">
                <div class="lg:border-r">
                    <div class="text-grey-darker mb-2">

                        <span class="text-5xl">{{ $this->height }}</span>

                    </div>
                    <div class="text-sm uppercase text-grey tracking-wide">
                        Height
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/3 text-center py-8">
                <div>
                    <div class="text-grey-darker mb-2">

                  <span class="text-5xl">{{ $this->supply }}</span>
                        <span class="text-3xl align-top">Ѧ</span>
                    </div>
                    <div class="text-sm uppercase text-grey tracking-wide">
                        Supply
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
