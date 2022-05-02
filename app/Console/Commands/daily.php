<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\Http;
use App\Models\Data;
use Illuminate\Console\Command;

class daily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will stores the json response of https://api2.binance.com/api/v3/ticker/24hr in a database on a daily basis.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $response = Http::get('https://api2.binance.com/api/v3/ticker/24hr');

        $data = json_decode($response, TRUE);
        foreach ($data as $info) {
            $data = new Data;
            $data->symbol = $info['symbol'];
            $data->priceChange = $info['priceChange'];
            $data->priceChangePercent = $info['priceChangePercent'];
            $data->weightedAvgPrice = $info['weightedAvgPrice'];
            $data->prevClosePrice = $info['prevClosePrice'];
            $data->lastPrice = $info['lastPrice'];
            $data->lastQty = $info['lastQty'];
            $data->bidPrice = $info['bidPrice'];
            $data->bidQty = $info['bidQty'];
            $data->askPrice = $info['askPrice'];
            $data->askQty = $info['askQty'];
            $data->openPrice = $info['openPrice'];
            $data->highPrice = $info['highPrice'];
            $data->lowPrice = $info['lowPrice'];
            $data->volume = $info['volume'];
            $data->quoteVolume = $info['quoteVolume'];
            $data->openTime = $info['openTime'];
            $data->closeTime = $info['closeTime'];
            $data->firstId = $info['firstId'];
            $data->lastId = $info['lastId'];
            $data->count = $info['count'];
            $data->created_at = $today = date("Y-m-d H:i:s");
            $data->save();
        }
        echo 'Operation Done!';
    }
}
