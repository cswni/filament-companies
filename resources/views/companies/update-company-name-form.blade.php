<x-filament-companies::grid-section>
    <x-slot name="title">
        {{ __('filament-companies::default.grid_section_titles.company_name') }}
    </x-slot>

    <x-slot name="description">
        {{ __('filament-companies::default.grid_section_descriptions.company_name') }}
    </x-slot>

    <form wire:submit.prevent="updateCompanyName" class="col-span-2 sm:col-span-1 mt-5 md:mt-0">
        <x-filament::card>
            <!-- Company Owner Information -->
            <x-filament-companies::label value="{{ __('filament-companies::default.labels.company_owner') }}" />

            <div class="flex items-center text-sm">
                <div class="flex-shrink-0">
                    <img class="h-12 w-12 rounded-full object-cover" src="{{ $company->owner->profile_photo_url }}" alt="{{ $company->owner->name }}">
                </div>
                <div class="ml-4">
                    <div class="font-medium text-gray-900 dark:text-gray-200">{{ $company->owner->name }}</div>
                    <div class="text-gray-600 dark:text-gray-400">{{ $company->owner->email }}</div>
                </div>
            </div>

            <!-- Company Name -->
            <x-forms::field-wrapper id="name" statePath="name" required label="{{ __('filament-companies::default.labels.company_name') }}">
                <x-filament-companies::input id="name" type="text" maxlength="255" wire:model.defer="state.name" :disabled="!Gate::check('update', $company)" />
            </x-forms::field-wrapper>

            <x-forms::field-wrapper id="address" statePath="address" required label="{{ __('filament-companies::default.labels.company_address') }}">
                <x-filament-companies::input id="address" type="text" maxlength="255" wire:model.defer="state.address" :disabled="!Gate::check('update', $company)" />

            </x-forms::field-wrapper>

            <x-forms::field-wrapper id="phone" statePath="phone" required label="{{ __('filament-companies::default.labels.company_phone') }}">
                <x-filament-companies::input id="phone" type="text" maxlength="255" wire:model.defer="state.phone" :disabled="!Gate::check('update', $company)" />

            </x-forms::field-wrapper>

            <x-forms::field-wrapper id="owner_name" statePath="owner_name" required label="{{ __('filament-companies::default.labels.company_owner') }}">
                <x-filament-companies::input id="owner_name" type="text" maxlength="255" wire:model.defer="state.owner_name" :disabled="!Gate::check('update', $company)" />
            </x-forms::field-wrapper>

            @if (Gate::check('update', $company))
                <x-slot name="footer">
                    <div class="text-left">
                        <x-filament::button type="submit">
                            {{ __('filament-companies::default.buttons.save') }}
                        </x-filament::button>
                    </div>
                </x-slot>
            @endif
        </x-filament::card>
    </form>
</x-filament-companies::grid-section>
