<x-guest-layout>
    <div class="flex-wrap flex flex-row">
        <div class="w-full lg:w-5/12 lg:h-screen bg-yellow-500">
        ddd
        </div>

        <div class="w-full lg:w-7/12">
            <x-jet-authentication-card>
                <x-slot name="title"></x-slot>

                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        @include('components.input',[
                            'id' => 'name',
                            'type' => 'text',
                            'name' => 'name',
                            'label' => __('common.name'),
                            'required' => true,
                            'autocomplete' => 'name',
                        ])
                    </div>

                    <div class="mt-4">
                        @include('components.input',[
                            'id' => 'email',
                            'type' => 'email',
                            'name' => 'email',
                            'label' => __('common.email'),
                            'required' => true,
                            'autocomplete' => 'email',
                            'value' => "old('email')",
                        ])
                    </div>

                    <div class="mt-4">
                        @include('components.input',[
                            'id' => 'password',
                            'type' => 'password',
                            'name' => 'password',
                            'label' => __('common.password'),
                            'required' => true,
                        ])
                    </div>

                    <div class="mt-4">
                        @include('components.input',[
                            'id' => 'password_confirmation',
                            'type' => 'password',
                            'name' => 'password_confirmation',
                            'label' => __('common.confirm_password'),
                            'required' => true,
                        ])
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @include('components.button',[
                            'label' => __('common.register_button')
                        ])
                    </div>
                </form>
            </x-jet-authentication-card>
        </div>
</x-guest-layout>

