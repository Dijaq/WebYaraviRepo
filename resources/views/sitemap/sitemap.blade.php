<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
            <loc>https://www.radioyaravi.org.pe</loc>
            <lastmod>2019-01-01</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>
    @foreach($news as $new)
        <url>
            <loc>{{$urlServidor.'noticia/'.str_slug($new->label->name).'/'.$new->titleUrl}}</loc>
            <lastmod>{{$new->fechaPublicacion}}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach    
</urlset>