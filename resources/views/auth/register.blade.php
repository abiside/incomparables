<x-guest-layout>
    <div class="flex-wrap flex flex-row">
        <div class="w-full lg:w-5/12 lg:h-screen bg-yellow-500">
        ddd
        </div>

        <div class="w-full lg:w-7/12">
            <x-jet-authentication-card>

                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <x-jet-input id="name" type="text"
                            name="name" :value="old('name')" required autofocus autocomplete="name"
                            label="{{ __('common.name') }}"/>
                    </div>

                    <div class="mt-4">
                        <x-jet-input id="email" type="text"
                            name="email" :value="old('email')" required autocomplete="email"
                            label="{{ __('common.email') }}"/>
                    </div>

                    <div class="mt-4">
                        <x-jet-input id="password" type="password" name="password" required
                            label="{{ __('common.password') }}"/>
                    </div>

                    <div class="mt-4">
                        <x-jet-input id="password_confirmation" type="password" name="password_confirmation" required
                            label="{{ __('common.confirm_password') }}"/>
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

