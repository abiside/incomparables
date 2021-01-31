<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Abiside\NewScrap\NewScraper;
use App\Models\PostSource;
use Illuminate\Support\Arr;

class NewsScraper extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scraping:news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $scraper = new NewScraper();
        $sources = PostSource::active()->get();

        $sources->each(function ($source) use ($scraper) {
            $this->info("Scraping {$source->name}");

            $sourceFeeds = $source->feeds()->pluck('feed')->toArray();

            $posts = $scraper->getLatestPosts($source->slug, $sourceFeeds);
            $this->line("{$posts->count()} posts from {$source->name} found");

            // get the posts that are not saved in the database
            $postsToSave = $posts->map(function ($post) use ($scraper) {
                $link = Arr::get($post,'link');

                if (Post::getIsMissingByLink($link)) {
                    $this->info("Looking for {$link}");

                    return $scraper->getPost($link, $post);
                }
                $this->line("Skippinng for {$link}");
            })->whereNotNull();

            $source->posts()->createMany($postsToSave);
        });

        return 0;
    }
}
