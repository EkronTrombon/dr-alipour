<?php
/**
 * Homepage Partial: Treatment Modalities
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}
?>

<section class="py-16 sm:py-24 bg-gray-50">
    <div class="container-page">

        <!-- Single unified card -->
        <div class="flex flex-col lg:flex-row overflow-hidden rounded-lg shadow-xl">

            <!-- Text content -->
            <div class="flex-1 bg-white p-8 lg:p-10">
                <h2 class="text-xl font-bold text-gray-900 mb-4">
                    <?php esc_html_e('Here are some of the treatment modalities that I use:', 'dr-alipour'); ?>
                </h2>
                <p class="text-body mb-5">
                    <?php esc_html_e('If after a few sessions you feel that you and your provider are not "clicking," that\'s okay. After all, this is a personal relationship, and sometimes people just don\'t connect, through no fault of either one.', 'dr-alipour'); ?>
                </p>
                <ul class="space-y-2 text-body">
                    <li class="flex items-start gap-2">
                        <span class="text-primary mt-1 flex-shrink-0">&#9679;</span>
                        <?php esc_html_e('I am a certified hypnotherapist (is not offered via Telehealth)', 'dr-alipour'); ?>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-primary mt-1 flex-shrink-0">&#9679;</span>
                        <?php esc_html_e('Mindfulness Meditation techniques', 'dr-alipour'); ?>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-primary mt-1 flex-shrink-0">&#9679;</span>
                        <?php esc_html_e('Addiction consulting, with extensive knowledge and background in assessment, treatment implementation of solution-oriented counseling', 'dr-alipour'); ?>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-primary mt-1 flex-shrink-0">&#9679;</span>
                        <?php esc_html_e('Cognitive Behavioral Therapy (CBT)', 'dr-alipour'); ?>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-primary mt-1 flex-shrink-0">&#9679;</span>
                        <?php esc_html_e('Dialectical Behavioral Therapy (DBT)', 'dr-alipour'); ?>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-primary mt-1 flex-shrink-0">&#9679;</span>
                        <?php esc_html_e('Psychodynamic and couple therapy', 'dr-alipour'); ?>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-primary mt-1 flex-shrink-0">&#9679;</span>
                        <?php esc_html_e('Emotional Freedom Technique', 'dr-alipour'); ?>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-primary mt-1 flex-shrink-0">&#9679;</span>
                        <?php esc_html_e('Motivational Interviews', 'dr-alipour'); ?>
                    </li>
                </ul>
            </div>

            <!-- Photo panel with diagonal left edge -->
            <div class="relative w-full lg:w-2/5 min-h-64 lg:min-h-0">
                <img
                    src="<?php echo esc_url(content_url('uploads/2026/03/Dr_Alipour_Home_Modalities.jpg')); ?>"
                    alt="<?php esc_attr_e('Treatment Modalities', 'dr-alipour'); ?>"
                    class="absolute inset-0 w-full h-full object-cover"

                >
            </div>

        </div>
    </div>
</section>
