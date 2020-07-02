<meta property="og:url" content="{{$post->link()}}"/>
<meta property="og:type" content="article"/>
<meta property="og:title" content="{{ $post->title }}"/>
<meta property="og:description" content="{{ strip_tags($post->summary) }}"/>
<meta property="og:image" content="{{ asset('') . $post->previewImage }}"/>

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@christophrumpel" />
<meta name="twitter:title" content="{{ $post->title }}" />
<meta name="twitter:description" content="{{ strip_tags($post->summary) }}" />
<meta name="twitter:image" content="{{ asset('') . $post->previewImageTwitter ?? $post->previewImage }}" />
