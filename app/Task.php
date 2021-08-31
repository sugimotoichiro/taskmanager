<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Task extends Model
{
    protected $fillable =
    [
        "title",
        "body",
        "timelimit",
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    public function timelimit()
    {
        //$sevendays = Carbon::today()->subday(7);
        $sevendays=$this->whereDate("timelimit","<=",Carbon::today()->addday(7));
        return $sevendays->whereDate("timelimit",">=",Carbon::today())->paginate(5);
    }
}
