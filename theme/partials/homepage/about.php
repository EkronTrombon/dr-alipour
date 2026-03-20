<?php
/**
 * Homepage Partial: About Dr. Alipour
 *
 * @package dr-alipour
 */

if (! defined('ABSPATH')) {
    exit;
}
?>

<section class="py-16 sm:py-24 bg-white">
    <div class="container-page">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Text -->
            <div>
                <h2 class="heading-2 mb-6">
                    <?php esc_html_e('About Dr. Zari Alipour, Ph.D. (PSY #17628)', 'dr-alipour'); ?>
                </h2>
                <div class="space-y-4 text-body">
                    <p><?php esc_html_e('I have a Ph.D. in clinical psychology and have been licensed in California for over two decades. I have worked in corporate America, school and State as well as private settings. I am passionate about my work and a kind and compassionate person.', 'dr-alipour'); ?></p>
                    <p><?php esc_html_e('I enjoy helping people to integrate their wholeness (mind and body connection) to advance their experience in life and honor their own potential which is very difficult when you have physical or emotional challenges.', 'dr-alipour'); ?></p>
                    <p class="italic text-gray-600">&ldquo;<?php esc_html_e('We are all responsible for our own destiny as we make our own lives based on our own experiences and unfortunately faulty experiences create faulty results.', 'dr-alipour'); ?>&rdquo;</p>
                    <p><?php esc_html_e('You may be struggling with fear, anxiety, simple life stressors, or grief of losing a loved one. Work and family life challenges can be resolved — don\'t allow them to take over your life and your existence.', 'dr-alipour'); ?></p>
                    <p><?php esc_html_e('Allow me to guide you to develop a positive experience of life and maximize your potential.', 'dr-alipour'); ?></p>
                </div>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-primary mt-8">
                    <?php esc_html_e('Read More', 'dr-alipour'); ?>
                </a>
            </div>

            <!-- Photo -->
            <div class="flex justify-center lg:justify-end">
                <img
                    src="<?php echo esc_url(content_url('uploads/2026/03/Dr_Alipour_Home_About.jpg')); ?>"
                    alt="<?php esc_attr_e('Dr. Zari Alipour', 'dr-alipour'); ?>"
                    class="rounded-lg shadow-xl max-h-[560px] w-auto object-cover"
                >
            </div>

        </div>
    </div>
</section>
