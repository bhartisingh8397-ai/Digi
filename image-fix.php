<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * Image Fixer Script v2
 * This script copies the generated images from the brain folder to the theme assets.
 */
$source_dir = 'C:/Users/bharti/.gemini/antigravity/brain/d6c54478-aa84-4989-9aab-5973eb636d07/';
$target_dir = __DIR__ . '/assets/images/';

if (!is_dir($target_dir)) {
    if (mkdir($target_dir, 0777, true)) {
        echo "✅ Created directory: $target_dir<br>";
    } else {
        echo "❌ Failed to create directory: $target_dir<br>";
    }
}

$files = [
    'hero_dashboard_png_1774719946226.png' => 'hero-dashboard.png',
    'case_ecommerce_png_1774720165551.png' => 'case-ecommerce.png',
    'case_saas_png_1774720240847.png' => 'case-saas.png',
    'blog_1_png_1774720330791.png' => 'blog-1.png',
    'blog_2_png_1774720391487.png' => 'blog-2.png',
    'blog_3_png_1774720431722.png' => 'blog-3.png',
    'about_hero_png_1774720508544.png' => 'about-hero.png'
];

echo "<h2>Migrating Images...</h2>";
foreach ($files as $src => $dest) {
    echo "Processing $dest ... ";
    if (file_exists($source_dir . $src)) {
        if (copy($source_dir . $src, $target_dir . $dest)) {
            echo "✅ Copied!<br>";
        } else {
            echo "❌ Copy failed.<br>";
        }
    } else {
        echo "⚠️ Source missing ($src)<br>";
    }
}
echo "<h3>Migration Attempt Complete.</h3>";
echo "Please check the 'assets/images' folder now.";
