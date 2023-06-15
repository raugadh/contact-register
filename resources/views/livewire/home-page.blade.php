<div x-data="{ tab: '1' }" class="mt-5 p-5 w-full">

    <div class="flex flex-row justify-center">

        <button type="button" class="me-2 px-4 border-b-2 hover:border-teal-300"
            :class="tab == '1' ? 'border-teal-400 text-teal-400' : 'border-gray-900'"
            x-on:click.prevent="tab='1'">Listing</button>

        <button type="button" class="me-2 px-4 border-b-2 hover:border-teal-300"
            :class="tab == '2' ? 'border-teal-400 text-teal-400' : 'border-gray-900'"
            x-on:click.prevent="tab='2'">Create</button>

    </div>



    <div class="px-5">
        <div x-show="tab == '1'" x-cloak x-transition.duration.400ms>
            <p>This is the content of Tab 1</p>
        </div>

        <div x-show="tab == '2'" x-cloak x-transition.duration.400ms>
            <p>This is the content of Tab 2</p>
        </div>
    </div>
</div>
