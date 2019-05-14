<?php

namespace App\Models;

use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Cache;

class RankModel extends Model
{
    public $professionalRankiing=[
        "None"=>"wemd-black-text"
    ];

    public $professionalRankiingPer=[
        "None"=>1
    ];

    public $casualRanking=[
        "Legendary Grandmaster"=>"cm-colorful-text",
        "International Grandmaster"=>"wemd-pink-text",
        "Grandmaster"=>"wemd-red-text",
        "International Master"=>"wemd-amber-text",
        "Master"=>"wemd-orange-text",
        "Candidate Master"=>"wemd-purple-text",
        "Expert"=>"wemd-blue-text",
        "Specialist"=>"wemd-cyan-text",
        "Pupil"=>"wemd-green-text",
        "Newbie"=>"wemd-gray-text",
    ];

    public $casualRankingPer=[
        "Legendary Grandmaster"=>1,
        "International Grandmaster"=>5,
        "Grandmaster"=>10,
        "International Master"=>10,
        "Master"=>50,
        "Candidate Master"=>100,
        "Expert"=>300,
        "Specialist"=>700,
        "Pupil"=>1000,
        "Newbie"=>400,
    ];

    public function list()
    {
        return [];
    }

    public function rankList()
    {
        Cache::tags(['rank'])->flush();
        $rankList=DB::select("SELECT * FROM (SELECT uid,count(DISTINCT pcode) as solvedCount from submission inner join problem on problem.pid=submission.pid and verdict=\"Accepted\" group by uid) as temp ORDER BY solvedCount desc");
        $rankIter=1;
        $rankValue=1;
        $rankSolved=-1;
        $this->procRankingPer();
        foreach ($rankList as $rankItem) {
            if ($rankSolved!=$rankItem["solvedCount"]) {
                $rankValue=$rankIter;
                $rankSolved=$rankItem["solvedCount"];
            }
            Cache::tags(['rank'])->put($rankItem["uid"], $rankValue, 86400);
            Cache::tags(['rank'])->put($rankItem["uid"]."_title", $this->getRankTitle($rankValue), 86400);
            $rankIter++;
        }
    }

    private function procRankingPer()
    {
        $totUsers=DB::table("users")->count();
        $tot=0;
        $cur=0;
        foreach($this->casualRankingPer as $c){
            $tot+=$c;
        }
        foreach($this->casualRankingPer as &$c){
            $c=round($c*$totUsers/$tot);
            $cur+=$c;
            $c=$cur;
        }
        unset($c);
    }

    private function getRankTitle($rankVal)
    {
        foreach($this->casualRankingPer as $title=>$c){
            if($rankVal<=$c) return $title;
        }
        end($this->casualRankingPer);
        return key($this->casualRankingPer);
    }
}