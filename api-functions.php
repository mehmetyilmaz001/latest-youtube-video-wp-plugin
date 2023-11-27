<php
function lyvf_get_latest_video_url() {
    $api_key = get_option('lyvf_api_key');
    $channel_id = get_option('lyvf_channel_id');

    $response = wp_remote_get("https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId={$channel_id}&maxResults=1&key={$api_key}");

    if (is_wp_error($response)) {
        return 'Error fetching video';
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body);
    if (isset($data->items[0]->id->videoId)) {
        return 'https://www.youtube.com/watch?v=' . $data->items[0]->id->videoId;
    }

    return 'No video found';
}

