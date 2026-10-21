<?php /** Real ANew office photos. */ ?>
    <!-- ============ STEP INSIDE (real ANew office) ============ -->
    <section class="mx-auto max-w-site px-5 pt-14 sm:px-8 lg:pt-20" aria-labelledby="inside-title">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-2xl">
                <p class="eyebrow text-leaf-deep reveal">Step inside</p>
                <h2 id="inside-title" class="reveal mt-5 font-serif text-4xl font-light leading-[1.1] tracking-tight sm:text-5xl">Less like a clinic. <em class="italic text-clay">More like home.</em></h2>
            </div>
            <p class="reveal max-w-md text-[17px] leading-relaxed text-ink-soft">Soft chairs, natural light and a friendly face at the front desk. Here’s a look inside our office on East Central before you ever walk through the door.</p>
        </div>
        <div class="mt-10 grid grid-cols-2 gap-3 sm:gap-4 lg:grid-cols-[2fr_1fr_1fr]">
            <?php foreach ([
                ['office/waiting-room.jpg', 'Our waiting room, with soft armchairs and a leather sofa', 'Waiting room', 'col-span-2 aspect-[4/3] lg:col-span-1 lg:aspect-auto lg:h-[460px]'],
                ['office/therapy-room.jpg', 'A bright ANew therapy room with a sofa and armchair', 'Therapy room', 'aspect-[4/5] lg:aspect-auto lg:h-[460px]'],
                ['office/hallway.jpg', 'The ANew hallway with a coffee station beneath the logo', 'Coffee’s on', 'aspect-[4/5] lg:aspect-auto lg:h-[460px]'],
            ] as $i => [$src, $alt, $label, $cls]): ?>
                <figure class="reveal group relative overflow-hidden rounded-3xl <?= $cls ?>" style="--d: <?= $i * 70 ?>ms">
                    <img src="/assets/images/<?= e($src) ?>" alt="<?= e($alt) ?>" class="h-full w-full object-cover transition duration-700 group-hover:scale-[1.04]" loading="lazy">
                    <figcaption class="absolute bottom-3 left-3 rounded-full bg-white/90 px-3 py-1.5 text-xs font-semibold text-ink backdrop-blur"><?= e($label) ?></figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </section>
