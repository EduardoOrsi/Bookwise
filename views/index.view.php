<form class="w-full flex space-x-2 mt-6">
    <input name="search" placeholder="Pesquisar..." type="text" class=" px-2 py-1 border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none" />
    <button type="submit">🔎</button>
</form>

<section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ">
    <?php  foreach ($books as $book):  ?>
        <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
            <div class="flex">
                <div class="w-1/3">imagem</div>
                <div>
                    <a href="/book?id=<?=$book['id']?>" class="font-semibold hover:underline"><?= $book['title'] ?></a>
                    <div class="font-xs italic"><?= $book['author'] ?></div>
                    <div class="text-xs italic">⭐⭐⭐⭐⭐(5 Avaliações)</div>
                </div>
            </div>
            <div class="text-sm"><?= $book['description'] ?></div>
        </div>
    <?php endforeach; ?>
</section>
