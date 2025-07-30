<?= $book->title; ?>
<div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
    <div class="flex">
        <div class="w-1/3">imagem</div>
            <div class="space-y-1">
                <div class="font-xs italic"><?= $book->author ?></div>
                <div class="text-xs italic">⭐⭐⭐⭐⭐(5 Avaliações)</div>
            </div>
        </div>
    <div class="text-sm"><?= $book->description ?></div>
</div>



