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
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Content box -->
            <div class="bg-white rounded-lg shadow-lg p-8">
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

            <!-- Photo -->
            <div class="flex justify-center lg:justify-start">
                <img
                    src="<?php echo esc_url(content_url('uploads/2026/03/Dr_Alipour_Home_Modalities.jpg')); ?>"
                    alt="<?php esc_attr_e('Treatment Modalities', 'dr-alipour'); ?>"
                    class="rounded-lg shadow-xl max-h-[480px] w-auto object-cover"
                >
            </div>

        </div>
    </div>
</section>
