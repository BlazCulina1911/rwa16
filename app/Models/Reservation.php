<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * App\Models\Reservation
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $result
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Reservation newModelQuery()
 * @method static Builder|Reservation newQuery()
 * @method static Builder|Reservation query()
 * @method static Builder|Reservation whereCreatedAt($value)
 * @method static Builder|Reservation whereId($value)
 * @method static Builder|Reservation whereResult($value)
 * @method static Builder|Reservation whereUpdatedAt($value)
 * @method static Builder|Reservation whereUserId($value)
 * @mixin \Eloquent
 * @property string|null $qr
 * @property-read \App\Models\User|null $user
 * @method static Builder|Reservation whereQr($value)
 */
class Reservation extends Model
{

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }

    protected $fillable = [
        'user_id',
        'qr',
        'reserved_at'
    ];

//    function displayDates() {
//
//        $dateCollection = array();
//
//        $date = Carbon::now('Europe/Zagreb');
//
//        if($date->isWeekend())
//        {
//            $date->nextWeekday();
//        };
//
//        $dateCollection[0] = $date->copy();
//
//        for($i = 1; $i < 14; $i++)
//        {
//            $date->addDays(1);
//            if ($date->isWeekday()) {
//                $dateCollection[$i] = $date->copy();
//            }
//        }
//        foreach ($dateCollection as $i)
//        {
//            echo $i->format('d. m. y.') . "<br>";
//        }
//    }

    function displayDates() {

        $dateCollection = array();

        $date = Carbon::now('Europe/Zagreb');
        if($date->isWeekend())
        {
            $date->nextWeekday();
        };
        $j= 0;
        if(!empty(self::availableAt($date)))
        $dateCollection[$j++] = $date->copy();



        for($i = 1; $i < 15; $i++)
        {
            $date->addDays(1);
            if ($date->isWeekday()) {
                $dateCollection[$j++] = $date->copy();
            }
        }
        return $dateCollection;
    }

    function availableAt(Carbon $date)
    {

        $openingTime = Carbon::createFromTime(8, 0, 0, 'Europe/Zagreb');
        $closingTime = Carbon::createFromTime(17, 0, 0, 'Europe/Zagreb');
//        echo "Opening time: " . $openingTime->toDateTimeString() . "<br>";
//        echo "Closing time: " . $closingTime->toDateTimeString() . "<br><br>";
//        echo "Current time: " . $date->toDateTimeString() . "<br>";

//        $excluded = array();
//
//        foreach(Reservation::all() as $reservation)
//        {
//
//        }
        //Using $openingTime as a variable we are going to change because it's not going to be reused in this function.
        $collection = array();
        $i=0;
        if($date->isToday()) {
            $date = Carbon::now('Europe/Zagreb');
            while ($openingTime->lessThanOrEqualTo($closingTime->copy()->subMinutes(15))) {
                if($openingTime->greaterThan($date)) {
//                    echo $openingTime->toTimeString() . "<br>";
                    $collection[$i++] = $openingTime->copy();
                }
                $openingTime->addMinutes(15);
            }
        }

        else {
            while ($openingTime->lessThanOrEqualTo($closingTime->copy()->subMinutes(15))) {

//                echo $openingTime->toTimeString() . "<br>";
                $collection[$i++] = $openingTime->copy();
                $openingTime->addMinutes(15);
            }
        }

        return $collection;



//        $openingTime = $date->copy()->setHour(8)->setMinute(0)->setSecond(0);
//        $closingTime = $date->copy()->setHour(12)->setMinute(0)->setSecond(0);
//
//        if($date->copy()->isToday())
//            $date = Carbon::now('Europe/Zagreb');
//        else
//            $date->setHour(8)->setMinute(0)->setSecond(1);
//
//        echo "Current Time: " . $date . "<hr>";
//        echo "Opening Time: " .  $openingTime . "<hr>";
//        echo "Closing Time: " . $closingTime . "<hr>";
//        $copiedDate = $date->copy();
//
//        if ($copiedDate->greaterThan($openingTime) && $date->lessThan($closingTime))
//        {
//            $storedTimes = array();
//            $i = 0;
//            for($copiedDate->ceilMinutes(15); $copiedDate->lessThan($closingTime); $copiedDate->addMinutes(15))
//            {
//                $storedTimes[$i++] = $copiedDate->copy();
//
//            }
//
//            foreach($storedTimes as $i)
//            {
//                echo $i->format('d. m. Y. || h:i') . "<br>";
//            }
//            return $storedTimes;
//        }
    }

}
