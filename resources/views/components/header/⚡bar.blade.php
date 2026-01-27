<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div class="fixed top-0 z-50 flex w-full items-center justify-between rounded-b-2xl bg-white p-4">
    <div>
        <div class="flex items-center gap-1">
            <i class="bxf bx-carrot text-2xl text-red-500"></i>
            <h1 class="font-display text-2xl font-extrabold">Rapidito</h1>
        </div>
        <div class="flex items-center gap-1 text-gray-500">
            <p class="flex items-center gap-0.5 text-sm">
                <i class="bxf bx-location"></i>
                Casa - Calle 10 #20 Tijuana
            </p>
            <i class="bxf bx-chevron-down"></i>
        </div>
    </div>

    <div class="relative flex items-center justify-center rounded-2xl bg-red-50 p-3 text-2xl text-red-400 hover:text-red-300 hover:bg-red-50/80 hover:scale-90 transition-all">
        <i class="bxf bx-shopping-bag-alt"></i>
        <div class="absolute -right-0.5 -top-0.5 flex size-4 items-center justify-center rounded-full bg-red-500">
            <span class="text-[10px] font-bold text-white">4</span>
        </div>
    </div>
</div>
