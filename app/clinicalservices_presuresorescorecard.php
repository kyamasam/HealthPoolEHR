<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_presuresorescorecard extends Model
{
    protected $fillable=[
        'patientname',
'ipno',
'ward',
'sex',
'dateofadmission',
'dateofdischarge',
'scorea',
'average',
'aboveaverage',
'obese',
'belowaverage',
'healthy',
'soft',
'dry',
'oedematous',
'coldandclammy',
'discoloured',
'score',
'brokenskin',
'fourteenfortyfour',
'ffsf',
'sixtyfive',
'completecatheterised',
'occasionalincontinence',
'catheterised',
'doublyincontinence',
'averageb',
'poor',
'ngtubetpn',
'nbmanorexic',
'fully',
'restlessfidgety',
'restricted',
'inerttractionpostop',
'chairbound',
'terminalillness',
'cardiacfailure',
'PeripheralVascularDisease',
'anaemia',
'smoking',
'motoesensoryparaplegia',
'diabetesmscva',
'steroidscytotoxics',
'antiinflamatorydrugs',
'totalscore'];
}
