
<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[ SoujournPlanet ]]></title>
        <link><![CDATA[ https://localhost/feed/europe ]]></link>
        <description><![CDATA[ Blog ]]></description>
        <language>en</language>
        <pubDate>{{ now()->toDayDateTimeString('Europe/Madrid') }}</pubDate>

        @foreach($posts as $post)
            <item>
                <title><![CDATA[{{ $post->title }}]]></title>
                <link>https://localhost/post/{{ $post->slug }}</link>

                <pubDate>{{ $post->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>
