<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">{{ __("You're logged in!") }}</p>

                    <hr class="my-4">

                    @php
                        $myPost = (object) ['user_id' => Auth::id(), 'title' => 'Postingan Milik Sendiri'];
                        $otherPost = (object) ['user_id' => 999, 'title' => 'Postingan Orang Lain'];
                    @endphp

                    <h3 class="font-bold text-lg mb-2">Pengujian Gate (Acara 24):</h3>

                    <div class="mb-3 p-3 bg-gray-100 rounded">
                        <p><strong>Status Post 1:</strong> User ID cocok</p>
                        @can('edit-post', $myPost)
                            <button class="px-4 py-2 bg-blue-600 text-white rounded mt-2">
                                Edit Post Saya (Gate Izin)
                            </button>
                        @endcan
                    </div>

                    <div class="p-3 bg-gray-100 rounded">
                        <p><strong>Status Post 2:</strong> User ID tidak cocok</p>
                        @can('edit-post', $otherPost)
                            <button class="px-4 py-2 bg-red-600 text-white rounded mt-2">
                                Edit Post Orang Lain
                            </button>
                        @else
                            <p class="text-red-500 text-sm mt-1">
                                Tombol Edit disembunyikan oleh Gate (Tidak ada izin).
                            </p>
                        @endcan
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>