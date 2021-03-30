<?php
  header('Content-type: application/xml; charset="ISO-8859-1"',true);  
?>
 
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc><?= base_url() ?></loc>
    <lastmod><?= date('d-m-Y H:i:s') ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.1</priority>
  </url>
  <url>
    <loc><?= base_url('about') ?></loc>
    <lastmod>30-03-2021 12:00:00</lastmod>
    <changefreq>daily</changefreq>
    <priority>0.1</priority>
  </url>
  <url>
    <loc><?= base_url('services') ?></loc>
    <lastmod>31-03-2021 12:40:00</lastmod>
    <changefreq>daily</changefreq>
    <priority>0.1</priority>
  </url>
  <url>
    <loc><?= base_url('contact') ?></loc>
    <lastmod>31-03-2021 12:42:00</lastmod>
    <changefreq>daily</changefreq>
    <priority>0.1</priority>
  </url>
</urlset>