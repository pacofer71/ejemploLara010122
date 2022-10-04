@extends('layouts.uno')
@section('titulo')
    Crear Post
@endsection
@section('cabecera')
    Nuevo Post
@endsection
@section('contenido')
    <form name="vender" class="px-4 py-6 border rounded-3xl shadow-2xl bg-slate-300" method="POST"
        action="{{ route('posts.store') }}">
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-1">
            <div>
                <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Título</label>
                <input type="text" id="titulo" name="titulo"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
             focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700
              dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Título">
                    @error('titulo')
                        <p class="text-sm text-red-800">*** {{$message}}</p>
                    @enderror
            </div>

            <div>
                <label for="contenido"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contenido</label>
                <textarea name="body" id="contenido"
                    class="bg-gray-50 border border-gray-300 text-gray-900
             text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
              dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    @error('body')
                    <p class="text-sm text-red-800">*** {{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Image
                    URL</label>
                <input name="imagen" type="url" id="website"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Url Imagen">
                    @error('imagen')
                    <p class="text-sm text-red-800">*** {{$message}}</p>
                @enderror
            </div>


            <div class="flex justify-end mb-6">
                <button type="reset" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><i
                        class="fas fa-trash"></i> Reset</button>
                <button type="submit" class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><i
                        class="fas fa-save"></i> Enviar</button>

            </div>
        </div>

    </form>
@endsection
