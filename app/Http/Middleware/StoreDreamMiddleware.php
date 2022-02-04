<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\DreamController;
use App\Models\Dream;
use App\Models\Keyword;
use App\Models\Dreamkeyword;
use App\Models\Design;

class StoreDreamMiddleware
{
    private $dreamId;

    public function handle(Request $request, Closure $next)
    {
        $dream = new Dream();
        $dream->title = $request->input("title");
        $dream->dream = $request->input("dream");
        $dreamController = new DreamController();
        $this->dreamId= $dreamController->store($dream);

        $request->whenHas('keywords', function ($keywords) {

            $idKeyWord = array();
            foreach($keywords as $key => $value)
            {
                $keyword = Keyword::create([
                    "word" => $value
                ]);
                array_push($idKeyWord,$keyword->id);
            }
            
            foreach($idKeyWord as $key=> &$value)
            {
                $value = [
                    'dream_id' => $this->dreamId,
                    'keyword_id' => $value,
                ];
            }

            Dreamkeyword::insert($idKeyWord);
            

        });

        $request->whenHas('designs', function ($designs) {

            foreach($designs as $key => &$value)
            {
                $value = [
                    "design" => $value,
                    "dream_id" => $this->dreamId,
                    "created_at" => now(),
                    "updated_at" => now()
                ];
            }

            Design::insert($designs);
        });


        return $next($request);
    }
}
