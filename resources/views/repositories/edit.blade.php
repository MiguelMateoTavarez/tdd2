<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Repositorios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <form action="{{ route('repositories.update', $repository) }}" method="POST" class="max-w-mg">
                    @csrf
                    @method('PUT')

                    <label for="" class="block font-medium text-sm text-gray-700">URL *</label>
                    <input class="form-input w-full rounded-md shadow-sm" type="text" name="url" id="" value="{{ $repository->url }}">

                    <label for="" class="block font-medium text-sm text-gray-700">Descripcion *</label>
                    <input class="form-input w-full rounded-md shadow-sm" type="text" name="description" id="" value="{{ $repository->description }}">

                    <hr class="my-4">

                    <input class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md" type="submit" value="Edit">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
