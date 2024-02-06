<?php

namespace App\Console\Commands;

use App\Components\ImportDataClient;
use App\Models\Sergl;
use Illuminate\Console\Command;

class ImportJsonPlaceholderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:jsonplaceholder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get data from jsonplaceholder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $import = new ImportDataClient();
        $response = $import->client->request('GET', 'posts');
        $data = json_decode($response->getBody()->getContents());
        foreach ($data as $item) {
            Sergl::firstOrCreate([
                'name' => $item->title
            ],[
                'name' => $item->title,
                'message' => $item->body,
                'category_id' => 3
            ]);
        }
        dd("finish");
    }
}
