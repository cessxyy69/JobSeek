<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>
<?= loadPartial('top-banner') ?>

<section>
    <div class="container mx-auto p-4 mt-4">
        <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3"><?= $status ?></div>
        <p class="text-center h2-style marg-bot">
            <?= $message ?>
        </p>
        <div class="flex justify-center" style="margin-top: 3rem;">
            <a href="/listings" class="bg-yellow-500 hover-return font-bold transition-all duration-300 hover:shadow-lg" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 1rem 2rem; border-radius: 9999px; color: #ffffff; text-decoration: none;">
                <i class="fa fa-arrow-left"></i> Go Back To Listings
            </a>
        </div>
    </div>
</section>
