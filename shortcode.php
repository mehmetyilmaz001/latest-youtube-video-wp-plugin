<php
add_shortcode('latest_youtube_video', 'lyvf_display_latest_video');

function lyvf_display_latest_video() {
    $video_url = lyvf_get_latest_video_url();
    if ($video_url && strpos($video_url, 'http') === 0) {
        return '<div class="lyvf-responsive-container"><iframe src="' . esc_url($video_url) . '" frameborder="0" allowfullscreen></iframe></div>';
    }
    return 'No latest video found.';
}
