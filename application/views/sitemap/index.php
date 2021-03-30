<?php
  header('Content-type: application/xml; charset="ISO-8859-1"',true);  
?>
 
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
  <url>
    <loc><?= base_url() ?></loc>
    <lastmod>2021-03-30T17:54:58+00:00</lastmod>
    <priority>0.1</priority>
  </url>
  <url>
    <loc><?= base_url('about') ?></loc>
    <lastmod>2021-03-30T17:54:58+00:00</lastmod>
    <priority>0.80</priority>
  </url>
  <url>
    <loc><?= base_url('services') ?></loc>
    <lastmod>2021-03-30T17:54:58+00:00</lastmod>
    <priority>0.80</priority>
  </url>
  <url>
    <loc><?= base_url('contact') ?></loc>
    <lastmod>2021-03-30T17:54:58+00:00</lastmod>
    <priority>0.80</priority>
  </url>
</urlset>