<?php

namespace App\Support;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Cache\Repository as Cache;
use App\Markdown\GithubFlavoredMarkdownConverter;

class Documentation
{
    /**
     * The filesystem implementation.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $filesystem;

    /**
     * The cache implementation.
     *
     * @var \Illuminate\Contracts\Cache\Repository
     */
    protected $cache;

    /**
     * Create a new documentation instance.
     *
     * @param  \Illuminate\Filesystem\Filesystem  $filesystem
     * @param  \Illuminate\Contracts\Cache\Repository  $cache
     * @return void
     */
    public function __construct(Filesystem $filesystem, Cache $cache)
    {
        $this->filesystem = $filesystem;
        $this->cache = $cache;
    }

    /**
     * Determine if a file or directory exists.
     *
     * @param  string  $version
     * @param  string  $page
     * @return bool
     */
    public function exists(string $version, string $page): bool
    {
        return $this->filesystem->exists($this->path($version, "{$page}.md"));
    }

    /**
     * Get the documentation index page.
     *
     * @param  string  $version
     * @return string|null
     */
    public function getIndex(string $version): ?string
    {
        return $this->cache->remember("docs.{$version}.index", 5, function () use ($version) {
            $path = $this->path($version, 'documentation.md');

            if ($this->filesystem->exists($path)) {
                return (new GithubFlavoredMarkdownConverter())->convert($this->filesystem->get($path));
            }

            return null;
        });
    }

    /**
     * Get the given documentation page.
     *
     * @param  string  $version
     * @param  string  $page
     * @return string|null
     */
    public function get(string $version, string $page): string
    {
        return $this->cache->remember('docs.'.$version.'.'.$page, 5, function () use ($version, $page) {
            $path = $this->path($version, "{$page}.md");

            if ($this->filesystem->exists($path)) {
                return $this->filesystem->get($path);
            }

            return null;
        });
    }

    /**
     * Get the path to the resources folder.
     *
     * @param  string  $path
     * @return string
     */
    protected function path(string $version, string $file): string
    {
        return resource_path("docs/{$version}/{$file}");
    }
}
