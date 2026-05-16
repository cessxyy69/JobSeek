<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>
<?= loadPartial('top-banner') ?>

<section>
    <div class="container mx-auto p-4 mt-4">
        <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3"><?= $status ?></div>
        <p class="text-center h2-style marg-bot">
            <?= $message ?>
        </p>
        <div class="flex justify-center" style="margin-top: 1rem;">
            <a href="/listings" class="block text-center hover:underline" style="color: var(--color-heading);">Go Back To Listings</a>
        </div>
    </div>
</section>
