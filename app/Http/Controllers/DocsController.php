<?php

namespace App\Http\Controllers;

use App\Markdown\GithubFlavoredMarkdownConverter;
use App\Support\Documentation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;use League\CommonMark\Extension\FrontMatter\FrontMatterExtension;
use League\CommonMark\Extension\FrontMatter\Output\RenderedContentWithFrontMatter;
use League\CommonMark\MarkdownConverter;

class DocsController extends Controller
{
    protected const DEFAULT_PAGE = 'introduction';
    protected const EXCLUDED = ['readme', 'license'];

    /**
     * Handle the incoming request.
     *
     * @param Documentation $docs
     * @param string|null $page
     * @return Application|Factory|View|RedirectResponse
     */
    public function __invoke(Documentation $docs, string $page = null)
    {
        $defaultVersion = config('site.defaultVersion');

        if ($page === null) {
            return redirect()->route('docs', [self::DEFAULT_PAGE]);
        }

        if (! $docs->exists($defaultVersion, $page) || in_array($page, self::EXCLUDED)) {
            abort(404);
        }

        // Instantiate the index of Doc Page
        $markdown = $docs->get($defaultVersion, $page);

        // Instantiate the index of Documentation
        $index = $docs->getIndex($defaultVersion);

        $content = (new GithubFlavoredMarkdownConverter())->convert($markdown);

        // Grab the front matter
        $matter = '';
        if ($content instanceof RenderedContentWithFrontMatter) {
            $matter = $content->getFrontMatter();
        }

        // Grab the content
        $body = $content->getContent();

        return view('docs', compact('body', 'matter', 'page', 'index'));
    }
}
