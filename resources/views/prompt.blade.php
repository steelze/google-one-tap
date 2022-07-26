@php
    $config = config('google-one-tap');

    $attributes = array_merge([
        '_token' => csrf_token(),
        'login_uri' => $config['login_uri'],
        'client_id' => $config['client_id'],
        'auto_prompt' => $config['enable'],
        'cancel_on_tap_outside' => $config['cancel_on_tap_outside'],
        'context' => $config['context'],
        'itp_support' => $config['itp_support'],
    ], $config['custom']);

    $attributesText = '';

    foreach ($attributes as $key => $value) {
        if (is_bool($value)) {
            $value = ($value) ? 'true' : 'false';
        }

        $attributesText .= 'data-'.$key.'="'.$value.'" ';
    }
@endphp

<div id="g_id_onload" {!! $attributesText !!}></div>
