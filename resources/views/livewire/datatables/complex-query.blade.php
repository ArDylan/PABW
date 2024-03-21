<div x-data="{
        rules: @if($persistKey) $persist('').as('{{ $persistKey }}') @else '' @endif,
        init() {
            Livewire.on('complexQuery', rules => this.rules = rules)
            if (this.rules && this.rules !== '') {
                $wire.set('rules', this.rules)
                $wire.runQuery()
            }
        }
    }" class=""
>
    <div class="my-4 flex justify-between text-xl uppercase tracking-wide font-medium leading-none">
        <span>Query Builder</span>
        <span>@if($errors->any())
            <div class="text-red-500">You have missing values in your rules</div>
        @endif</span>
    </div>

    @if(count($this->rules[0]['content']))
        <div class="my-4 px-4 py-2 bg-gray-500 whitespace-pre-wrap @if($errors->any())text-red-200 @else text-green-100 @endif rounded">{{ $this->rulesString }}@if($errors->any()) Invalid rules @endif</div>
    @endif

    <div>@include('datatables::complex-query-group', ['rules' => $rules, 'parentIndex' => null])</div>

    @if(count($this->rules[0]['content']))
        @unless($errors->any())
            <div class="pt-2 sm:flex w-full justify-between">
                <div>
                    {{-- <button class="bg-blue-500 px-3 py-2 rounded text-white" wire:click="runQuery">Apply Query</button> --}}
                </div>
                <div class="mt-2 sm:mt-0 sm:flex sm:space-x-2">
                    <button x-show="rules" wire:click="resetQuery" class="flex items-center space-x-2 px-3 border border-red-400 rounded-md bg-white text-red-500 text-xs leading-4 font-medium uppercase tracking-wider hover:bg-red-200 focus:outline-none">
                        <span>{{ __('Reset') }}</span>
                        <x-icons.x-circle class="m-2" />
                    </button>
                </div>
            </div>
        @endif

    @endif
    @if(count($savedQueries ?? []))
        <div>
            <div class="mt-8 my-4 text-xl uppercase tracking-wide font-medium leading-none">Saved Queries</div>
            <div class="grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-2">
                @foreach($savedQueries as $saved)
                    <div class="flex" wire:key="{{ $saved['id'] }}">
                        <button wire:click="loadRules({{ json_encode($saved['rules']) }})" wire:loading.attr="disabled" class="p-2 flex-grow flex items-center space-x-2 px-3 border border-r-0 border-blue-400 rounded-md rounded-r-none bg-white text-blue-500 text-xs leading-4 font-medium uppercase tracking-wider hover:bg-blue-200 focus:outline-none">{{ $saved['name'] }}</button>
                        <button wire:click="deleteRules({{ $saved['id'] }})" wire:loading.attr="disabled" class="p-2 flex items-center space-x-2 px-3 border border-red-400 rounded-md rounded-l-none bg-white text-red-500 text-xs leading-4 font-medium uppercase tracking-wider hover:bg-red-200 focus:outline-none">
                            <x-icons.x-circle wire:loading.remove />
                            <x-icons.cog wire:loading class="h-6 w-6 animate-spin" />
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
