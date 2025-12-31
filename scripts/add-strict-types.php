#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Add declare(strict_types=1) to all PHP files
 *
 * This script adds strict type declarations to PHP files that don't already have them.
 */
$directories = [
    __DIR__.'/../app',
    __DIR__.'/../bootstrap',
    __DIR__.'/../database/factories',
    __DIR__.'/../database/seeders',
    __DIR__.'/../routes',
    __DIR__.'/../tests',
];

$filesProcessed = 0;
$filesUpdated = 0;
$filesSkipped = 0;

foreach ($directories as $directory) {
    if (! is_dir($directory)) {
        echo "⚠️  Directory not found: {$directory}\n";
        continue;
    }

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS)
    );

    foreach ($iterator as $file) {
        if ($file->getExtension() !== 'php') {
            continue;
        }

        $filesProcessed++;
        $filePath = $file->getPathname();
        $content = file_get_contents($filePath);

        // Skip if already has strict types
        if (strpos($content, 'declare(strict_types=1)') !== false) {
            $filesSkipped++;
            continue;
        }

        // Add strict types after opening PHP tag
        $pattern = '/^<\?php\n/';
        $replacement = "<?php\n\ndeclare(strict_types=1);\n";

        $newContent = preg_replace($pattern, $replacement, $content, 1);

        if ($newContent !== $content) {
            file_put_contents($filePath, $newContent);
            $filesUpdated++;
            echo "✅ Updated: {$filePath}\n";
        }
    }
}

echo "\n";
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
echo "📊 Summary:\n";
echo "   Total files processed: {$filesProcessed}\n";
echo "   Files updated: {$filesUpdated}\n";
echo "   Files skipped (already strict): {$filesSkipped}\n";
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
