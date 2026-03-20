<?php
/**
 * Homepage Partial: Approach to Therapy
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}
?>

<section
    class="relative py-16 sm:py-24 bg-cover bg-center"
    style="background-image: url('<?php echo esc_url(content_url('uploads/2026/03/Dr_Alipour_Home_Blog_Background.png')); ?>');"
>
    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-navy/85"></div>

    <div class="relative z-10 container-page">

        <!-- Section header -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
            <h2 class="heading-2 text-white">
                <?php esc_html_e('Approach To Therapy:', 'dr-alipour'); ?>
            </h2>
            <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-outline-white self-start sm:self-auto">
                <?php esc_html_e('View All', 'dr-alipour'); ?>
            </a>
        </div>

        <div class="text-gray-300 mb-10 max-w-3xl space-y-3">
            <p><?php esc_html_e('I use evidence-based psychotherapy modalities such as psychodynamic therapy, Cognitive-Behavioral Therapy (CBT), Dialectical Behavioral Therapy (DBT), Hypnotherapy, Emotional Freedom Technique (EFT), Motivational Interview, and Mindfulness Meditation in all results-oriented modalities.', 'dr-alipour'); ?></p>
            <p><?php esc_html_e('The first ingredient to successful treatment outcome is client therapist match.', 'dr-alipour'); ?></p>
            <p><?php esc_html_e('Let me hold your hand and guide you through your difficulties.', 'dr-alipour'); ?></p>
        </div>

        <!-- Service Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="card overflow-hidden">
                <div class="h-40 bg-gradient-to-br from-blue-400 to-blue-700"></div>
                <div class="card-body">
                    <h3 class="font-semibold text-gray-900 mb-4">
                        <?php esc_html_e('Chronic Health Conditions: Cancer', 'dr-alipour'); ?>
                    </h3>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-primary text-sm px-4 py-2">
                        <?php esc_html_e('Read More', 'dr-alipour'); ?>
                    </a>
                </div>
            </div>

            <div class="card overflow-hidden">
                <div class="h-40 bg-gradient-to-br from-teal-400 to-teal-700"></div>
                <div class="card-body">
                    <h3 class="font-semibold text-gray-900 mb-4">
                        <?php esc_html_e('Adjustment Disorder Treatment', 'dr-alipour'); ?>
                    </h3>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-primary text-sm px-4 py-2">
                        <?php esc_html_e('Read More', 'dr-alipour'); ?>
                    </a>
                </div>
            </div>

            <div class="card overflow-hidden">
                <div class="h-40 bg-gradient-to-br from-purple-400 to-purple-700"></div>
                <div class="card-body">
                    <h3 class="font-semibold text-gray-900 mb-4">
                        <?php esc_html_e('Obsessive Compulsive Behavior', 'dr-alipour'); ?>
                    </h3>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-primary text-sm px-4 py-2">
                        <?php esc_html_e('Read More', 'dr-alipour'); ?>
                    </a>
                </div>
            </div>

            <div class="card overflow-hidden">
                <div class="h-40 bg-gradient-to-br from-orange-400 to-orange-700"></div>
                <div class="card-body">
                    <h3 class="font-semibold text-gray-900 mb-4">
                        <?php esc_html_e('Corporate & Individual Performance Coaching', 'dr-alipour'); ?>
                    </h3>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-primary text-sm px-4 py-2">
                        <?php esc_html_e('Read More', 'dr-alipour'); ?>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
