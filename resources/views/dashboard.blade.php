<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container py-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Profil Pengguna</h5>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-3 text-center mb-3 mb-md-0">
                                    @if(Auth::user()->foto)
                                        <img src="{{ asset('storage/' . Auth::user()->foto) }}" class="img-thumbnail rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                                    @else
                                        <div class="bg-light d-flex align-items-center justify-center mx-auto rounded-circle" style="width: 150px; height: 150px; border: 2px dashed #ccc;">
                                            <span class="text-muted">No Photo</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-9">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th width="150">Nama Lengkap</th>
                                            <td>: {{ Auth::user()->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>NIM</th>
                                            <td>: {{ Auth::user()->nim }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>: {{ Auth::user()->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>TTL</th>
                                            <td>: {{ Auth::user()->tempat_lahir }}, {{ Auth::user()->tanggal_lahir }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
