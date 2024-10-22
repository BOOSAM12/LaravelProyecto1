@extends('layouts.home')
@section('name', 'Primer Proyecto')
@section('contain')
    <section class="w-full h-[150px] text-center items-center flex justify-center ">
        <h1 class="text-center text-2xl">Poryecto numero 1 de laravel</h1>
    </section>
@endsection

@section('carrusel') 
    {{-- @for ($i = 0; $i < 3; $i++) --}}
        @component('components.carrusel')
            @slot('img')
                        https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbe9UKgdXD4tgLi1ldU4-cFBkZk0cxwx83-Q&s
            @endslot
            @slot('alt')
                    Imagen de laravel
            @endslot
        @endcomponent
    {{-- @endfor --}}
@endsection


@section('footer')
    @component('components.footer')
        @slot('info1')
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet officia minus voluptatum ipsam at id recusandae odit pariatur ullam tempora hic quaerat natus reiciendis ut illum asperiores aut voluptatibus magnam, aspernatur explicabo.

        @endslot
        @slot('info2')
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet officia minus voluptatum ipsam at id recusandae odit pariatur ullam tempora hic quaerat natus reiciendis ut illum asperiores aut voluptatibus magnam, aspernatur explicabo.
        @endslot

    @endcomponent
@endsection









