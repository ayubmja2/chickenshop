<?php

    use Illuminate\Support\Facades\Vite;

?>

<x-head/>
<body class="bg-amber-500 text-white font-Baumans">
    <x-nav/>
    <div class="px-10">
        <div class="container mx-auto border border-white/60 max-w-full py-4 mt-5">
            {{--                <h1 class="text-center text-4xl underline mb-8">The goods stuff that kids go for</h1>--}}
            <div class="grid grid-cols-3 text-center gap-4 px-2">
                <div class="border border-white/40">
                    <img src="{{Vite::asset('assets/images/chickenshop1.png')}}" alt="Chicken Shop poster one">
                    <h1 class="mt-2 text-xl">Eat one of our to die for birds, you wont ragrets it fam trust.</h1>
                </div>

                <div class="border border-white/40">
                    <img src="{{Vite::asset('assets/images/chickenshop2.png')}}" alt="Chicken Shop poster one">
                    <h1 class="text-2xl">If you are man enough try this.</h1>
                </div>

                <div class="border border-white/40 text-center">
                    <img src="{{Vite::asset('assets/images/ChickenShoplogo.png')}}" class="mx-auto"
                         alt="Chicken Shop poster one">
                    <h1 class="text-xl">We defeated bird flu for you so you can enjoy some good chicken,
                        did we mention we sell only chicken no fries and no drink.
                        This is a <span
                            class="font-bold uppercase font-2xl text-red-500 underline">Chicken Shop</span>. Our
                        bread winner and our last hope for
                        humanity.
                    </h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
