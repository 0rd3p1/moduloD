<section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-5">

<div class="p-2 roudend border-stone-800 border-2 bg-stone-900 m-1">
    <div class="flex">
        <div class="w-1/3"><img src="../uploads/<?= $filme->imagem; ?>.png" alt=""></div>
        <div>
            <a href="/livro.php?id=<?= $filme->id; ?>" class="font-semibold hover:underline"><?= $filme->titulo; ?></a>
            <div class="text-xs italic"><?= $filme->diretor; ?></div>
            <div>⭐⭐⭐⭐⭐</div>
        </div>
    </div>
    <div>
        <?= $filme->sinopse; ?>
    </div>
</div>

</section>